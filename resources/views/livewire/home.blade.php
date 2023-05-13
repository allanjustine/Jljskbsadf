<div>
    @include('livewire.bookings.cancel')
    @include('livewire.bookings.view')
    @include('livewire.bookings.finish')
    <br>
    <br>
    <section>
        <div class="mt-1 offset-1">
            <h4 class="text-4xl">Dashboard</h4>
            <h5 class="text-muted">Requests</h5>
        </div>

        <div class="content offset-1">
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h1>{{ $totalBookings }}</h1>
                            <h6>Total Bookings</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h1 class="text-danger">{{ $applicationReceived }}</h1>
                            <h6>Application Received</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h1 class="text-success">{{ $activeBookings }}</h1>
                            <h6>Active Bookings</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h1 class="text-danger">{{ $cancelledBookings }}</h1>
                            <h6>Cancelled Bookings</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="content offset-1">
            <h3>My Bookings</h3>
            <div class="row">
                @foreach ($bookings as $booking)
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <span data-toggle="modal" style="cursor: pointer;" data-target="#viewBookingModal"
                                wire:click="view({{ $booking->id }})">
                                <div class="card-body">
                                    <span class="text-primary float-right"><i class="fas fa-comments"></i></span>
                                    <h5 class="card-title text-center">{{ $booking->musicBar->title }}</h5>
                                    <hr>
                                    <h6 class="card-subtitle mb-2 text-muted">Event Date: {{ $booking->event_date }}
                                    </h6>
                                    <p class="card-text">Event Location: {{ $booking->event_location }}</p>
                                    <span class="card-text d-flex justify-content-between"><span>Start</span>
                                        <span>Finish</span></span>
                                    <span
                                        class="card-text d-flex justify-content-between"><span>{{ $booking->event_time_start }}</span>
                                        <span>{{ $booking->event_time_end }}</span></span>
                                    <p class="card-text">Status: @if ($booking->booking_status === 'Pending')
                                            <span
                                                class="text-danger"><strong>{{ $booking->booking_status }}</strong></span>
                                        @elseif($booking->booking_status === 'Complete')
                                            <span
                                                class="text-primary"><strong>{{ $booking->booking_status }}</strong></span>
                                        @else
                                            <span
                                                class="text-danger"><strong>{{ $booking->booking_status }}</strong></span>
                                        @endif
                                    </p>
                                </div>
                            </span>
                            <div class="card-footer bg-transparent" style="border-top: none;">

                                <div class="text-right">
                                    @if ($booking->booking_status === 'Pending')
                                        <a style="text-decoration: none;" href="#" class="text-primary"
                                            data-toggle="modal" data-target="#finishBookingModal"
                                            wire:click="finish({{ $booking->id }})">Finish</a>&nbsp;
                                        <a style="text-decoration: none;" href="#" class="text-danger"
                                            data-toggle="modal" data-target="#cancelBookingModal"
                                            wire:click="cancel({{ $booking->id }})">Cancel</a>
                                    @else
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
</div>




<style>
    .hero {
        background-image: url('images/bj.jpg');
        margin-top: 3px;
        background-size: 100% 100%;

    }

    h2 {
        font-size: 30vh;
        color: rgb(7, 3, 120);
        text-shadow: rgb(rgb(255, 191, 0), rgb(0, 75, 128), rgb(255, 0, 123));
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    .card1 {
        background-color: rgb(23, 199, 211);

    }

    .card-title {
        color: blue;
    }

    .index {
        margin-top: 20px;
    }

    p {
        text-align: justify;
    }
</style>

<!-- <div class="home"></div>
    <h1>Welcome to my Homepage :-) </h1>
</template> -->
