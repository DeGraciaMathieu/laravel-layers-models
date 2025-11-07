<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Feature\Domain\Item;
use App\Feature\Domain\ItemAggregate;
use PHPUnit\Framework\Attributes\Test;
use App\Feature\Domain\ItemRepository;

class ItemTest extends TestCase
{
    #[Test]
    public function it_can_get_the_first_item(): void
    {
        $item = app(ItemRepository::class)->first();

        $this->assertInstanceOf(Item::class, $item);
    }

    #[Test]
    public function it_can_get_all_items(): void
    {
        $items = app(ItemRepository::class)->all();

        $this->assertInstanceOf(ItemAggregate::class, $items);
    }
}
