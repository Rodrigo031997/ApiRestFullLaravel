<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
use SoftDeletes;
   const PRODUCTO_DISPONIBLE = 'disponible';
   const PRODUCTO_NO_DISPONIBLE = 'no disponible';

   protected $fillable = [
       'name',
       'description',
       'quantity',
       'status',
       'image',
       'seller_id'
   ];
    

   protected $hidden =[
    'pivot'
   ];
   
   public function estaDisponible(){

    return $this->status == Product::PRODUCTO_DISPONIBLE;
    
   }

   public function seller()
   {
       return $this->belongsTo('App\Seller', 'seller_id', 'id');
   }

   public function transactions()
   {
       return $this->hasMany('App\Transaction', 'product_id', 'id');
   }

   public function categories()
   {
       return $this->belongsToMany('App\Category', 'category_product', 'category_id', 'product_id');
   }
}
