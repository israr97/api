<?php

namespace App\Exceptions;

use Exception;
use PhpParser\Node\Stmt\Return_;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
        return ['error' => 'Product Not Belongs To User'];
    }
}
