<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    //One Customer can have many Invoices 
    //therefore it's a one to many relationship . 
    public function invoices()
    {
        //this is to say that the customer model is going is allowed to have many invoices .
        return $this->hasMany(Invoice::class);
    }
}
