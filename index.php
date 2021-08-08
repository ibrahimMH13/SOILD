<?php
/*** SRP ***/
$data =[];
$logger = new Logger();
$user = new User($logger);
$user->create($data);


/*** OCP  ***/
$paypal = new Paypal();
$stripe = new Stripe();
$managePayment = new ManagementPayment($paypal);
$managePaymentStripe = new ManagementPayment($stripe);
$managePayment->process();
$managePayment->process();

/*** LSP ***/
//should still work when change class
$car = new Car();
$kia = new Kia();
$bm  = new Bm();

$driver = new Driver($car);
$driver1 = new Driver($kia);
$driver2 = new Driver($bm);

$driver->go();

/*** ISP ***/
//implement interface whe we are usd only
$parrot = new Parrot();
$pigeon = new Pigeon();
$peng   = new Penguin();
$parrot->fly();
$pigeon->fly();

/*** DIP ***/
//should not impalement High level model direct with low level model
$logger2 = new Logger();
$handel  = new ErrorHandler($logger2);
$handel->error(501,'22','fff',222);
