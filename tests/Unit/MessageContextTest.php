<?php

declare(strict_types=1);

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use Source\Messages\MessageStrategy;
use Source\MessageContext;

class MessageContextTest extends TestCase
{
    public function testShowMessage()
    {
        $messageStrategy = $this->createMock(MessageStrategy::class);

        $messageStrategy->method('getMessage')
            ->willReturn('Mensagem de teste');

        $messageContext = new MessageContext($messageStrategy);

        $result = $messageContext->showMessage();

        $this->assertEquals('Mensagem de teste', $result);
    }
}
