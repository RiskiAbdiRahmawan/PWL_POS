<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class m_level extends Model
{
    use HasFactory;
    protected $table = "m_levels";
    protected $primarykey = "level_id";

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(m_user::class);
    // }

    protected $fillable = ['level_id', 'level_kode', 'level_nama'];
    public function users(): HasMany
    {
        return $this->hasMany(m_user::class, 'level_id', 'level_id');
    }
}
