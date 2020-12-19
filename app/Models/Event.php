<?php
 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 
class Event extends Model
{
    protected $fillable = [
        'id','event_name', 'start_date', 'end_date'
    ];
}