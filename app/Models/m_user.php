<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_user extends Model
{
    use HasFactory;

    protected $table = 'm_users'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan

    // @var array

    protected $fillable = ['level_id', 'username', 'nama','password'];
}
