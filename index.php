<?php

require 'vendor/autoload.php';

use Source\MessageContext;
use Source\Messages\SpecialDateMessage;
use Source\Messages\WeekdayMessage;

$weekdayMessage = new WeekdayMessage();
$messageContext = new MessageContext($weekdayMessage);

echo $messageContext->showMessage();

$specialDate = '2023-10-09'; // Altere a data conforme necessário
$specialMessage = 'Hoje é uma data especial!';
$specialDateMessage = new SpecialDateMessage($specialDate, $specialMessage);
$messageContext = new MessageContext($specialDateMessage);

echo $messageContext->showMessage();

?>
