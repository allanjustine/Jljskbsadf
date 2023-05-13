<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use App\Models\Feedback;
use App\Models\MusicBar;
use Livewire\Component;

class Home extends Component
{

    public $booking, $bookingId, $musicBarId, $musicBar;
    public $musicGenre, $musicTitle, $musicLocation, $rating, $content;
    public $eventName, $eventLocation, $eventStart, $eventDate, $eventEnd, $eventDetails;

    public function count()
    {
        $totalBookings = Booking::count();
        $applicationReceived = Booking::where('booking_status', 'Complete')->count();
        $activeBookings = Booking::where('booking_status', 'Pending')->count();
        $cancelledBookings = Booking::where('booking_status', 'Cancelled')->count();

        return compact('totalBookings', 'applicationReceived', 'activeBookings', 'cancelledBookings');
    }


    public function dispalyBookings()
    {
        $bookings = Booking::get();

        return compact('bookings');
    }

    public function cancel($bookingId)
    {
        $this->booking = Booking::find($bookingId);
        $this->musicTitle = $this->booking->musicbar->title;
        $this->musicGenre = $this->booking->musicbar->genre;
        $this->musicLocation = $this->booking->musicbar->location;
        $this->eventName = $this->booking->event_name;
        $this->eventLocation = $this->booking->event_location;
        $this->eventDate = $this->booking->event_date;
        $this->eventStart = $this->booking->event_time_start;
        $this->eventEnd = $this->booking->event_time_end;
        $this->eventDetails = $this->booking->event_details;
    }

    public function view($bookingId)
    {
        $this->booking = Booking::find($bookingId);

        $this->musicTitle = $this->booking->musicbar->title;
        $this->musicGenre = $this->booking->musicbar->genre;
        $this->musicLocation = $this->booking->musicbar->location;
        $this->eventName = $this->booking->event_name;
        $this->eventLocation = $this->booking->event_location;
        $this->eventDate = $this->booking->event_date;
        $this->eventStart = $this->booking->event_time_start;
        $this->eventEnd = $this->booking->event_time_end;
        $this->eventDetails = $this->booking->event_details;
    }

    public function finish($bookingId)
    {
        $this->booking = Booking::find($bookingId);
        $this->musicTitle = $this->booking->musicbar->title;
        $this->musicGenre = $this->booking->musicbar->genre;
        $this->musicLocation = $this->booking->musicbar->location;
    }

    public function submit()
    {

        $this->validate([
            'content'  =>   'required|string|max:255',
            'rating'  =>   'required|integer|max:5|min:1'
        ]);

        $musicBar = $this->booking->musicbar;
        $musicBar->rating = (($musicBar->rating * $musicBar->total_transactions) + $this->rating) / ($musicBar->total_transactions + 1);
        $musicBar->total_transactions++;
        $musicBar->save();


        $feedback = new Feedback;
        $feedback->content = $this->content;
        $feedback->booking_id = $this->booking->id;
        $feedback->music_bar_id = $this->booking->musicbar->id;
        $feedback->user_id = auth()->user()->id;
        $feedback->save();

        $this->booking->save();

        $this->booking->booking_status = 'Complete';
        $this->booking->save();



        return redirect('/home');
    }

    public function cancelBooking()
    {
        $this->booking->booking_status = 'Cancelled';
        $this->booking->save();

        return redirect('/home');
    }



    public function render()
    {
        return view('livewire.home', $this->count(), $this->dispalyBookings());
    }
}
