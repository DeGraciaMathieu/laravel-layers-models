<?php

namespace App\Feature\Application;

use App\Feature\Domain\ItemRepository;

class Action
{
    public function __construct(
        private readonly ItemRepository $repository,
    ) {}

    public function execute()
    {
        $item = $this->repository->first();

        dd($item->name());
    }
}
