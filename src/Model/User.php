<?php


namespace Src\Model;

use Model;

/**
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string $password
 * @property int $role_id
 */
class User extends Model
{
    public static $_table = 'users';

    public function role()
    {
        return $this->belongs_to(Role::class,'role_id','id');
    }
}