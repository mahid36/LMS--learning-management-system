<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public function rel_to_order_product(){
        return $this->hasMany(OrderProduct::class,'order_id')->with('rel_to_course');
    }
    public function getPaymentMethodNameAttribute(){
    return match($this->payment_method){
        1 => 'SSLCommerz',
        2 => 'Stripe',
        default => 'Unknown'
    };
}
    protected $guarded = ['id'];

}
