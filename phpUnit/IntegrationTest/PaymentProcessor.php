<?
class PaymentProcessor {
    protected $gateway;

    public function __construct(PaymentGateway $gateway) {
        $this->gateway = $gateway;
    }

    public function processPayment($amount, $cardType) {
        return $this->gateway->processPayment($amount, $cardType);
    }
}