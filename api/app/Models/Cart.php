<?php

namespace App\Models;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;

class Cart implements Arrayable
{
    private Collection $items;

    const SORTING_METHOD_MAP = [
        'ASC'  => 'sortBy',
        'DESC' => 'sortByDesc',
    ];

    public function __construct()
    {
        $this->items = collect([]);
    }

    public function getItems() : Collection
    {
        return $this->items;
    }

    /**
     * Returns the items depending on the sorting type requested
     */
    public function sortItemsByPrice(string $type = 'ASC') : self
    {
        $sortingMethod = self::SORTING_METHOD_MAP[$type] ?? 'sortBy';

        $sorted = $this->items->{$sortingMethod}(fn (ElectronicItem $item) => $item->getTotalPrice());

        $this->items = $sorted->values();

        return $this;
    }

    public function add(ElectronicItem ...$items) : self
    {
        foreach ($items as $item) {
            $this->items->add($item);
        }

        return $this;
    }

    public function toArray() : array
    {
        return $this->items
            ->map(fn (ElectronicItem $item) => $item->toArray())
            ->toArray();
    }
}
