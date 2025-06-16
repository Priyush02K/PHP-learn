<?
class PaymentGateway {
    public function processPayment($amount, $cardType) {
        // Simulate payment processing logic
        if ($amount > 0 && in_array($cardType, ['visa',
                                              'mastercard'])) {
            return true;
        } else {
            return false;
        }
    }
}