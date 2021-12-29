<?php

use App\Models\Console;
use App\Models\Microwave;
use App\Models\RemoteController;
use App\Models\Television;
use App\Models\WiredController;

class ElectronicItemTest extends TestCase
{
    public function test_we_can_attach_attachable_items()
    {
        $controller1 = new RemoteController();
        $controller2 = new RemoteController();

        $console = (new Console())->addExtra($controller1, $controller2);

        $this->assertCount(2, $console->getExtraItems());
    }

    public function test_we_cannot_attach_an_extra_which_is_not_attachable()
    {
        $tv1 = new Television();

        $tv2 = (new Television())->addExtra($tv1);

        $this->assertCount(0, $tv2->getExtraItems());

    }

    public function test_total_price_equals_total_price_if_no_attached_items()
    {
        $tv = (new Television())->costing(99.99);

        $this->assertEquals($tv->getPrice(), $tv->getTotalPrice());
    }

    public function test_items_with_infinite_amount_of_extras()
    {
        $tv = new Television();

        for ($i = 0; $i < 100; $i++) {
            $tv->addExtra(new RemoteController());
        }

        $this->assertCount(100, $tv->getExtraItems());
    }

    public function test_certain_items_cannot_have_more_extras_than_allowed()
    {
        $microwave = new Microwave();

        $controller = new WiredController();

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('This item can only have 0 extra items attached');

        $microwave->addExtra($controller);
    }
}
