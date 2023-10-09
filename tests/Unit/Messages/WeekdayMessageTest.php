<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Source\Messages\WeekdayMessage;

class WeekdayMessageTest extends TestCase
{
    public function testGetMessage()
    {
        $weekdayMessage = new WeekdayMessage();

        $result = $weekdayMessage->getMessage();

        $dayOfWeek = date('w');
        $weekdays = [
            'Domingo',
            'Segunda-feira',
            'Terça-feira',
            'Quarta-feira',
            'Quinta-feira',
            'Sexta-feira',
            'Sábado'
        ];
        $expectedMessage = "Hoje é " . $weekdays[$dayOfWeek] . ".";

        $this->assertEquals($expectedMessage, $result);
    }
}
