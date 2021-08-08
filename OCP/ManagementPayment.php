<?php


class ManagementPayment
{
    /**
     * @var Paypal
     */
    private $paypal;
    /**
     * @var PaymentGatewayInterlace
     */
    private $paymentGateway;

    /**
    public function __construct(Paypal $paypal)
    {
here was used concrete class ,so when change the payment method should be modify this class
   $this->paypal = $paypal;
    }
**/
    public function __construct(PaymentGatewayInterlace $paymentGateway)
    {
        /**
        here will accept any class implement this interface
         */
        $this->paymentGateway = $paymentGateway;
    }
    public function process(){
     $this->paymentGateway->ProcessPayment();
    }
}
