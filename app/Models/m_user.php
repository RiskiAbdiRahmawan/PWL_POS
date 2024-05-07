<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Casts\Attribute as CastsAttribute;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class m_user extends Authenticatable implements JWTSubject
{
    use AuthenticableTrait;
    use HasFactory;

    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    }
    protected $table = 'm_users'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    // public $timestamps = false;
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan

    // @var array

    protected $fillable = ['level_id', 'username', 'nama', 'password','image'];

    // public function level(): HasOne
    // {
    //     return $this->hasOne(m_level::class);
    // }

    public function level(): BelongsTo
    {
        return $this->belongsTo(m_level::class, 'level_id', 'level_id');
    }
    protected function image(): CastsAttribute{
        return CastsAttribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
}
