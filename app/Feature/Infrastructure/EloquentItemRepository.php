<?php

namespace App\Feature\Infrastructure;

use App\Feature\Domain\Item;
use App\Feature\Domain\ItemAggregate;
use App\Feature\Domain\ItemRepository;
use App\Feature\Infrastructure\EloquentItem;
use App\Feature\Infrastructure\EloquentItemCollection;

class EloquentItemRepository implements ItemRepository
{
    public function first(): Item
    {
        return EloquentItem::first();
    }

    public function all(): ItemAggregate
    {
        /** @var EloquentItemCollection */
        $items = EloquentItem::all();

        return $items;
    }
}
