<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\Console;
use App\Models\Microwave;
use App\Models\RemoteController;
use App\Models\Television;
use App\Models\WiredController;

class CartRepository implements CartRepositoryContract
{
    public function getSortedItemsByPrice(string $sortType = 'ASC') : Cart
    {
        /*
         * Example's Scenario: Cart with items
         *
         * 1 console, 2 televisions with different prices and 1 microwave
         * The console and televisions have extras; those extras are controllers.
         * The console has 2 remote controllers and 2 wired controllers. The TV #1 has 2 remote controllers and
         * the TV #2 has 1 remote controller.
         *
         * PS.: Normally, this info would come from a DB which it's not being used here. We would use a PDO connection
         * or framework's ORM system
         */
        $console = (new Console())
            ->costing(299.99)
            ->withDescription('PS5 from Kijiji')
            ->addExtra(
                new RemoteController(),
                (new RemoteController())->costing(89.99),
                (new WiredController())->costing(39.99),
                (new WiredController())->costing(39.99)
            );

        $goodTv = (new Television())
            ->costing(1999.99)
            ->withDescription('TV #1')
            ->addExtra(
                new RemoteController(),
                (new RemoteController())->costing(49.99)
            );

        $notSoGreatTv = (new Television())
            ->costing(699.99)
            ->withDescription('TV #2')
            ->addExtra(new RemoteController());

        $microwave = (new Microwave())
            ->costing(499.99)
            ->withDescription('Good microwave');

        return (new Cart())
            ->add($console, $goodTv, $notSoGreatTv, $microwave)
            ->sortItemsByPrice($sortType);
    }
}
