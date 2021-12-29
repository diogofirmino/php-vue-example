<?php

namespace App\Models;

use App\Enum\ElectronicType;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

/**
 * The models here are intentionally not inheriting from Eloquent's built-in Model
 * since we don't need to interact DB or other models for this use-case
 */
abstract class ElectronicItem implements Arrayable
{
    private string $uuid;
    private float $price = 0.00;
    private string $type;
    private Collection $extras;
    private string $description = '';

    public function __construct(string $type)
    {
        $this->type = $type;
        $this->extras = collect([]);
        $this->uuid = Str::uuid();
    }

    abstract function maxExtras() : int;
    abstract function isAttachable() : bool;

    /**
     * Return individual price
     */
    public function getPrice() : float
    {
        return round($this->price, 2);
    }

    public function getType() : string
    {
        return $this->type;
    }

    public function getExtraItems()
    {
        return $this->extras;
    }

    /*
     * Return price with attached items included
     */
    public function getTotalPrice() : float
    {
        return round(
            $this->price + $this->extras->sum(fn (ElectronicItem $item) => $item->getPrice()),
        2
        );
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function getUuid() : string
    {
        return $this->uuid;
    }

    public function costing(float $price) : self
    {
        $this->price = $price;

        return $this;
    }

    public function withDescription(string $description) : self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @throws \Exception
     */
    public function addExtra(ElectronicItem ...$items) : self
    {
        if (! $this->canHaveItemsAdded()) {
            throw new \Exception("This item can only have {$this->maxExtras()} extra items attached");
        }

        foreach ($items as $item) {
            if ($item->isAttachable()) {
                $this->extras->add($item);
            }
        }

        return $this;
    }

    public static function isValidType(string $type) : bool
    {
        return in_array($type, ElectronicType::toArray());
    }

    public function canHaveItemsAdded() : bool
    {
        if ($this->maxExtras() === -1) {
            return true;
        }

        return (bool) ($this->maxExtras() - $this->extras->count());
    }

    public function toArray() : array
    {
        return [
            'attached'      => $this->extras->map(fn (ElectronicItem $item) => $item->toArray()),
            'description'   => $this->getDescription(),
            'is_attachable' => $this->isAttachable(),
            'price'         => $this->getPrice(),
            'total_price'   => $this->getTotalPrice(),
            'type'          => $this->getType(),
            'uuid'          => $this->getUuid(),
        ];
    }
}
