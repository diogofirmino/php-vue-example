<?php

namespace App\Models;

use App\Enum\ElectronicType;

class Television extends ElectronicItem
{
    private int $maxExtras = -1;
    private bool $isAttachable = false;

    public function __construct()
    {
        parent::__construct(ElectronicType::TELEVISION);
    }

    function maxExtras() : int
    {
        return $this->maxExtras;
    }

    function isAttachable() : bool
    {
        return $this->isAttachable;
    }
}
