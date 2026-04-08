<?php
require __DIR__ . "../../../source/autoload.php";

use source\Models\Payment\CreditCardPayment;
use source\Models\Payment\PixPayment;
use source\Models\Payment\BoletoPayment;

$creditCard1 = new CreditCardPayment(1, 2500, null, "sei lá", null, 1234, 3, 2.5);

$pix1 = new PixPayment(1, 1000, null, "definitivamente um dos pix's já feitos", null, "pix@gmail.com", "aleatório");


$boleto = new BoletoPayment(1, 1200, null, "sla", null, 1234324, '2026-09-11 10:00', 3.5);


$payments = [$creditCard1, $pix1, $boleto];

foreach($payments as $payment)
    {
        echo $payment->process() . "<br>" . "<br>";
        echo $payment->show() . "<br>" . "<br>";    
    }

