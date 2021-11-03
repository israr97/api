<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $table='reviews';

    protected $fillable = ['product_id','customer','review','star'];


    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function ScopeFindByProductId($query, $id)
    {
        return $query->where('product_id', $id);
    }
}
