<?php

namespace App\Feature\Infrastructure;

use App\Feature\Infrastructure\Item;
use Illuminate\Database\Eloquent\Collection;

class Repository
{
    public function all(): Collection
    {
        return Item::all();
    }
}