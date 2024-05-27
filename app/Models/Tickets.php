<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\controller\TicketsController;

class Tickets extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $primaryKey = 'id';
    protected $fillable = ['train_name', 'departure_station', 'arrival_station', 'departure_time', 'arrival_time', 'price'];
}
