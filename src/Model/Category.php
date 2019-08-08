<?php


namespace Src\Model;

use Model;

/**
 * @property int $id
 * @property string $name
 */
class Category extends Model
{
    public static $_table = 'roles';

    public function products()
    {
        return $this->has_many(Product::class,'category_id','id');
    }
}