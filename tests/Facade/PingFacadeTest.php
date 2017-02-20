<?php
namespace tests\Facade;

use CultureKings\Afterpay\Model\InStore\Authorization;
use CultureKings\LaravelAfterpay\Facade\PingFacade;
use tests\AbstractTestCase;

/**
 * Class PingFacadeTest
 * @package tests\Facade
 */
class PingFacadeTest extends AbstractTestCase
{
    public function testCanInitialise()
    {
        /** @var PingFacade $facade */
        $facade = $this->app->make('afterpay_ping', [Authorization::PRODUCTION_BASE_URI]);
        $facade::shouldReceive();
        $this->assertInstanceOf(PingFacade::class, $facade);
    }
}
