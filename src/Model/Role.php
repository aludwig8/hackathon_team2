<?php


namespace Src\Model;
use Model;
/**
 * @property int $id
 * @property string $name
 */
class Role extends Model
{
    public static $_table = 'roles';

    public function users()
    {
        return $this->has_many(User::class,'role_id','id');
    }


}