<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicBar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, $terms)
    {
        collect(explode(" ", $terms))->filter()->each(function ($term) use ($query) {

            $term = '%' . $term . '%';

            $query->where('title', 'like', $term)
                ->orWhere('author', 'like', $term)
                ->orWhere('location', 'like', $term)
                ->orWhere('price', 'like', $term)
                ->orWhere('genre', 'like', $term)
                ->orWhere('rating', 'like', $term);
        });
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}



//  public function scopeSearch($query, $terms){
//     collect(explode(" " , $terms))->filter()->each(function($term) use($query){
//         $term = '%'. $term . '%';

//         $query->where('band', 'like', $term)
//             ->orWhere('rate', 'like', $term)
//             ->orWhere('genre', 'like', $term)
//             ->orWhere('contact', 'like', $term)
//             ->orWhere('location', 'like', $term);
//     });
// }
// }
