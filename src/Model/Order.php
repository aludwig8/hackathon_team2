<?php


namespace Src\Model;

use Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 */
class Order extends Model
{
    public static $_table = 'orders';

    public function user()
    {
        return $this->belongs_to(User::class, 'user_id', 'id');
    }

    public function product()
    {
        return $this->belongs_to(Product::class, 'product_id', 'id');
    }
}