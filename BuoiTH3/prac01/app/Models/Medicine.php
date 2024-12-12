<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $table = 'medicines'; // Tên bảng
    protected $primaryKey = 'medicine_id'; // Khóa chính
    public $timestamps = true; // Sử dụng timestamps

    protected $fillable = [
        'name',
        'brand',
        'dosage',
        'form',
        'price',
        'stock',
    ];
}

