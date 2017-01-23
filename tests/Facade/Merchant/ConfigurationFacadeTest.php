<?php
namespace tests\Facade\Merchant;

use CultureKings\LaravelAfterpay\Facade\Merchant\ConfigurationFacade;
use tests\AbstractTestCase;

/**
 * Class ConfigurationFacadeTest
 * @package tests\Facade\Merchant
 */
class ConfigurationFacadeTest extends AbstractTestCase
{
    public function testCanInitialise()
    {
        /** @var ConfigurationFacade $facade */
        $facade = $this->app->make('afterpay_configuration');
        $facade::shouldReceive();
        $this->assertInstanceOf(ConfigurationFacade::class, $facade);
    }
}
