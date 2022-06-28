<?php

namespace App\Models;

use App\Notifications\GeneralNotifi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;

class Message extends Model
{
    use HasFactory;

    protected $table = 'message';
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::created(function($model){
            $message = Message::first();

        });
    }
}
