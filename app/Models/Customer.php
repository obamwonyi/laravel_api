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
        return $this->hasMany(Invoice::class);
    }
}
