<?php
namespace tests\Facade\InStore;

use CultureKings\LaravelAfterpay\Facade\InStore\DeviceFacade;
use tests\AbstractTestCase;

/**
 * Class DeviceFacadeTest
 * @package tests\Facade\InStore
 */
class DeviceFacadeTest extends AbstractTestCase
{
    public function testCanInitialise()
    {
        /** @var DeviceFacade $facade */
        $facade = $this->app->make('afterpay_instore_device');
        $facade::shouldReceive();
        $this->assertInstanceOf(DeviceFacade::class, $facade);
    }
}
