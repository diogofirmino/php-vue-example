<?php

namespace App\Models;

use App\Enum\ElectronicType;

abstract class Controller extends ElectronicItem
{
    private bool $wired;
    private int $maxExtras = 0;
    private bool $isAttachable = true;

    public function __construct(bool $wired)
    {
        parent::__construct(ElectronicType::CONTROLLER);

        $this->wired = $wired;
    }

    public function isWired() : bool
    {
        return $this->wired;
    }

    public function maxExtras() : int
    {
        return $this->maxExtras;
    }

    public function isAttachable() : bool
    {
        return $this->isAttachable;
    }

    public function toArray() : array
    {
        return array_merge(parent::toArray(), [
            'is_wired' => $this->isWired(),
        ]);
    }
}
