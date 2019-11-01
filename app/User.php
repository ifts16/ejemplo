<?php
/**
 * Clase User que representa un usuario del sistema.
 * php version 7
 * 
 * @category Class
 * @package  App
 * @author   Fernando Neubaum <fernando@neubaum.com.ar>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/ifts16/ejemplo
 */
namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Clase User que representa un usuario del sistema.
 * php version 7
 * 
 * @category Class
 * @package  App
 * @author   Fernando Neubaum <fernando@neubaum.com.ar>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/ifts16/ejemplo
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * Atributos asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * Atributos ocultos..
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Atributos que tienen que ser conocidos a tipos nativos de PHP.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
