<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // protected $table = 'pelanggan'; (jika nama tabel berbeda dengan nama model)

    //jika sama langsung deklarasikan fieldnya saja
    protected $fillable = ['code', 'name', 'phone', 'address'];

    /*
    * 1 nasabah punya banyak simpanan (hasMany)
    * 1 simpanan milik 1 nasabah (belongsTo)
    */

    public function mandatorySavings() {
        return $this->hasMany(MandatorySaving::class, 'customer_id');
    }
}
