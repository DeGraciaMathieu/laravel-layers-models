<?php

namespace App\Feature\Domain;

use App\Feature\Domain\Item;
use App\Feature\Domain\ItemAggregate;

interface ItemRepository
{
    public function first(): Item;
    public function all(): ItemAggregate;
}
