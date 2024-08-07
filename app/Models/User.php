<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use OwenIt\Auditing\Auditable;

class User extends Authenticatable implements AuditableContract
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name', 'email', 'password', 'cpf'
    ];
    use Auditable;
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function perfil()
    {
        return $this->hasOne(Perfil::class);
    }

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class);
    }

    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }

    public function curriculos()
    {
        return $this->hasMany(Curriculo::class);
    }
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}