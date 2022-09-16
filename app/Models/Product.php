<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $PrimaryKey = 'id';
    protected $fillable = ['nama_produk', 'deskripsi_produk', 'gambar_produk'];
}
