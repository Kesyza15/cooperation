<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // protected $table = 'pelanggan'; (jika nama tabel berbeda dengan nama model)

    //jika sama langsung deklarasikan fieldnya saja
    protected $fillable = [
        'code',
        'name',
        'phone',
        'address'
    ];
}
