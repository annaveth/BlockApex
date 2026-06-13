<?php
/**
 * Tests for BlockApex
 */

use PHPUnit\Framework\TestCase;
use Blockapex\Blockapex;

class BlockapexTest extends TestCase {
    private Blockapex $instance;

    protected function setUp(): void {
        $this->instance = new Blockapex(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockapex::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
