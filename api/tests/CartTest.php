<?php

use App\Models\Cart;
use App\Models\Microwave;
use App\Models\Television;

class CartTest extends TestCase
{
    public function test_items_can_be_added_to_a_cart()
    {
        $cart = new Cart();

        $cart->add(new Microwave(), new Television());

        $this->assertCount(2, $cart->getItems());
    }

    public function test_sorting_items_inside_a_cart_by_their_price()
    {
        $cart = new Cart();

        $middlePriceTv = (new Television())->costing(599.99);
        $cart->add($middlePriceTv);

        $mostExpensiveTv = (new Television())->costing(1599.99);
        $cart->add($mostExpensiveTv);

        $cheapestTv = (new Television())->costing(199.99);
        $cart->add($cheapestTv);

        // Checks if items keep same order as they were added
        $this->assertEquals($middlePriceTv, $cart->getItems()->first());

        $cart->sortItemsByPrice();

        // Checks if items were sorted based on their price
        $this->assertEquals($cheapestTv, $cart->getItems()->first());
        $this->assertEquals($mostExpensiveTv, $cart->getItems()->last());
    }
}
