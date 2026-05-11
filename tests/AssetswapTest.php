<?php
/**
 * Tests for AssetSwap
 */

use PHPUnit\Framework\TestCase;
use Assetswap\Assetswap;

class AssetswapTest extends TestCase {
    private Assetswap $instance;

    protected function setUp(): void {
        $this->instance = new Assetswap(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Assetswap::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
