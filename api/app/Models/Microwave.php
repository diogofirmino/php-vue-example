<?php

namespace App\Models;

use App\Enum\ElectronicType;

class Microwave extends ElectronicItem
{
    private int $maxExtras = 0;
    private bool $isAttachable = false;

    public function __construct()
    {
        parent::__construct(ElectronicType::MICROWAVE);
    }

    public function maxExtras() : int
    {
        return $this->maxExtras;
    }

    function isAttachable(): bool
    {
        return $this->isAttachable;
    }
}
