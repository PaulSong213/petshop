<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Order_Detail;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';

    protected $fillable = ['product_name', 'price',
                         'alert_stock', 'quantity', 
                          'brand', 'description', 'barcode', 'qrcode', 'product_image','product_code'];

    public function orderdetail(){
            return $this->hasMany('App\Models\Order_Detail');
    } 
    public function cart(){
        return $this->belongsTo('App\Models\Cart');
}                     
}
