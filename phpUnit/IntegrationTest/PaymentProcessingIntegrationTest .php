<?php
require_once 'PaymentGateway.php';
require_once 'PaymentProcessor.php'; 

use PHPUnit\Framework\TestCase;

class PaymentProcessingIntegrationTest extends TestCase {
    public function testPaymentProcessingSuccess() {
        $mockGateway = $this->createMock
                      (PaymentGateway::class);
        $mockGateway->method('processPayment')
            ->willReturn(true);

        $processor = new PaymentProcessor($mockGateway);
        $processed = $processor->processPayment(100.00,
                                                'visa');
        $this->assertTrue($processed);
    }

    public function testPaymentProcessingFailure() {
        $mockGateway = $this->createMock 
                      (PaymentGateway::class);
        $mockGateway->method('processPayment')
            ->willReturn(false);

        $processor = new PaymentProcessor($mockGateway);
        $processed = $processor->processPayment(50.00, 'amex');
        $this->assertFalse($processed); 
    }
}