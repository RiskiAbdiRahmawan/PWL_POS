<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class m_user extends Model
{
    use HasFactory;

    protected $table = 'm_users'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    public $timestamps = false;
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan

    // @var array

    protected $fillable = ['user_id', 'level_id', 'username', 'nama', 'password'];

    // public function level(): HasOne
    // {
    //     return $this->hasOne(m_level::class);
    // }

    public function level(): BelongsTo
    {
        return $this->belongsTo(m_level::class, 'level_id', 'level_id');
    }
}
