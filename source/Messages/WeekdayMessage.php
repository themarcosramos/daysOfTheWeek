<?php

declare(strict_types=1);

namespace Source\Messages;

class WeekdayMessage implements MessageStrategy
{
    public function getMessage()
    {
        $dayOfWeek = date('w'); // Obtém o dia da semana (0 = domingo, 1 = segunda-feira, ..., 6 = sábado)
        $weekdays = [
            'Domingo',
            'Segunda-feira',
            'Terça-feira',
            'Quarta-feira',
            'Quinta-feira',
            'Sexta-feira',
            'Sábado'
        ];

        return "Hoje é " . $weekdays[$dayOfWeek] . ".";
    }
}
