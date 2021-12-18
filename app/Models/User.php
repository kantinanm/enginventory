<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use LdapRecord\Laravel\Auth\HasLdapUser;
use LdapRecord\Laravel\Auth\LdapAuthenticatable;

class User extends Authenticatable implements LdapAuthenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasLdapUser;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'firstname',
        'lastname',
        'active',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getLdapDomainColumn()
    {
        // TODO: Implement getLdapDomainColumn() method.
    }

    public function getLdapDomain()
    {
        // TODO: Implement getLdapDomain() method.
    }

    public function setLdapDomain($domain)
    {
        // TODO: Implement setLdapDomain() method.
    }

    public function getLdapGuidColumn()
    {
        // TODO: Implement getLdapGuidColumn() method.
    }

    public function getLdapGuid()
    {
        // TODO: Implement getLdapGuid() method.
    }

    public function setLdapGuid($guid)
    {
        // TODO: Implement setLdapGuid() method.
    }
}
