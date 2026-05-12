<?php
/**
 * Tests for ApacheHTTP
 */

use PHPUnit\Framework\TestCase;
use Apachehttp\Apachehttp;

class ApachehttpTest extends TestCase {
    private Apachehttp $instance;

    protected function setUp(): void {
        $this->instance = new Apachehttp(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apachehttp::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
