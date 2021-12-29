<?php

namespace App\Repositories;

use App\Models\Cart;

interface CartRepositoryContract
{
    public function getSortedItemsByPrice(string $sortType = 'ASC') : Cart;
}
