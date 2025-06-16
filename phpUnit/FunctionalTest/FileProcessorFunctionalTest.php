<?php
require_once 'FileProcessor.php'; 

use PHPUnit\Framework\TestCase;

class FileProcessorFunctionalTest extends TestCase {
    public function testFileProcessing() {
        $processor = new FileProcessor();
        $processed = $processor->processFile('test.txt');
        $this->assertTrue($processed);
    }
}