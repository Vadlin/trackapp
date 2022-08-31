<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function trackers()
    {
        return $this->hasMany(BarangTracker::class, 'barang_id', 'id');
    }
}
