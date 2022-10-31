<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    //an invoice belongs to one customer . 
    public function customer() 
    {
        //an invoice can only have one customer 
        return $this->belongsTo(Customer::class);
    }
}
