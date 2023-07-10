<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table ='orders';
    protected $fillable = [
        'id_ticket',
        'total_price',
        'date_order',
        'name',
        'sdt',
        'email',
        'quantity',
    ];

    public function id_tickets(){
        return $this->belongsTo(Ticket::class,'id_ticket','id');
     }
}
