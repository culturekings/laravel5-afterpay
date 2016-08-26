<?php
namespace tests\Facade;

use CultureKings\LaravelAfterpay\Facade\ConfigurationFacade;
use tests\AbstractTestCase;

/**
 * Class ConfigurationFacadeTest
 * @package tests\Facade
 */
class ConfigurationFacadeTest extends AbstractTestCase
{
    public function testCanInitialise()
    {
        /** @var ConfigurationFacade $facade */
        $facade = $this->app->make('afterpay_configuration');
        $this->assertInstanceOf(ConfigurationFacade::class, $facade);
    }
}
