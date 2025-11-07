<?php

namespace App\Feature\Infrastructure;

use App\Feature\Domain\Item;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\EloquentItemFactory;
use App\Feature\Infrastructure\EloquentItemCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\CollectedBy;

#[CollectedBy(EloquentItemCollection::class)]
class EloquentItem extends Model implements Item
{
    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'name',
    ];

    public function name(): string
    {
        return $this->name;
    }

    protected static function newFactory(): EloquentItemFactory
    {
        return EloquentItemFactory::new();
    }
}
