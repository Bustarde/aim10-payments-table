<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_method',
        'payment_date',
        'total_amount'
    ];

    public function theOrder(){
        return $this->hasMany(App\Model\Order::class,'id','order_id');
    }
    
    public function theCustomer(){
        return $this->hasMany(App\Model\Customer::class,'id','customer_id');
    }

    public function getId(){
        return $this->id;
    }

    public function getOrderId(){
        return $this->order_id;
    }

    public function getCustomerId(){
        return $this->customer_id;
    }

    public function getPaymentMethod(){
        return $this->payment_method;
    }

    public function setPaymentMethod($value){
        $this->payment_method = $value;
        return $this->save();
    }

    public function getPaymentDate(){
        return $this->payment_date;
    }

    public function setPaymentDate($value){
        $this->payment_date = $value;
        return $this->save();
    }

    public function getTotalAmount(){
        return $this->total_amount;
    }

    public function setTotalAmount($value){
        $this->total_amount = $value;
        return $this->save();
    }


}
