<?php

namespace App\Models;

use App\Enum\ElectronicType;

class Console extends ElectronicItem
{
    private int $maxExtras = 4;
    private bool $isAttachable = false;

    public function __construct()
    {
        parent::__construct(ElectronicType::CONSOLE);
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
