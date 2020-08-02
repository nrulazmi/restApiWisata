<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pemesanan extends Model
{
    //
    use Notifiable;

    protected $fillable = [
        'name','address','telp','order_date','tourist_destination', 'tour_packages'
    ];
}
