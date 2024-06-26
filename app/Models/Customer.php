<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps=false;
    protected $fillable = ['customer_name','customer_email','customer_password','customer_phhone'];
    protected $primaryKey = 'customer_id';
    protected $table = 'tbl_customer';

    public function payments()
    {
        return $this->hasMany(Payment::class, 'customer_id', 'customer_id');
    }
}
