<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class m_kategori extends Model
{
    use HasFactory;

    public function barang(): HasMany
    {
        return $this->hasMany(m_barang::class, 'barang_id', 'barang_id');
    }
}
