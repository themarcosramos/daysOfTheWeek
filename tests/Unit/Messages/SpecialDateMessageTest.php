<?php

declare(strict_types=1);

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use Source\Messages\SpecialDateMessage;

class SpecialDateMessageTest extends TestCase
{
    public function testGetMessageOnSpecialDate()
    {

        $specialDate = date('Y-m-d');
        $specialMessage = 'Hoje é uma data especial!';


        $specialDateMessage = new SpecialDateMessage($specialDate, $specialMessage);
        $result = $specialDateMessage->getMessage();

        $this->assertEquals($specialMessage, $result);
    }

    public function testGetMessageOnNonSpecialDate()
    {

        $specialDate = '2023-10-10'; 
        $specialMessage = 'Hoje é uma data especial!';

        $specialDateMessage = new SpecialDateMessage($specialDate, $specialMessage);

        $result = $specialDateMessage->getMessage();
        $this->assertEquals('Nenhuma mensagem especial para hoje.', $result);
    }
}
