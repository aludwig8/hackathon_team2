<?php


namespace Src\Model;

use Model;

/**
 * @property int $id
 * @property int $creator_id
 * @property int $category_id
 * @property string $name
 * @property string $description
 * @property int $stock
 * @property boolean $status
 * @property double $price
 */
class Product extends Model
{
    public static $_table = 'products';

    public function category()
    {
        return $this->belongs_to(Category::class,'category_id','id');
    }

    public function user()
    {
        return $this->belongs_to(User::class,'creator_id','id');
    }

    public function orders()
    {
        return $this->has_many(Order::class,'product_id','id');
    }

}