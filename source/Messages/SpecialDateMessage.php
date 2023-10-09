<?php

declare(strict_types=1);

namespace Source\Messages;

class SpecialDateMessage implements MessageStrategy
{
    private $date;
    private $message;

    public function __construct($date, $message)
    {
        $this->date = $date;
        $this->message = $message;
    }

    public function getMessage()
    {
        $today = date('Y-m-d');
        if ($today === $this->date) {
            return $this->message;
        }
        return "Nenhuma mensagem especial para hoje.";
    }
}
