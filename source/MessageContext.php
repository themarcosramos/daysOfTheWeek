<?php

declare(strict_types=1);

namespace Source;
use Source\Messages\MessageStrategy;

class MessageContext  
{
    private $strategy;

    public function __construct(MessageStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function showMessage() {
        return $this->strategy->getMessage();
    }
}
