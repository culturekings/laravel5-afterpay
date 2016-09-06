<?php
namespace tests\Provider;

use CultureKings\Afterpay\Factory\Api;
use CultureKings\Afterpay\Model\Authorization;
use CultureKings\LaravelAfterpay\Provider\AfterpayProvider;
use tests\AbstractTestCase;

class AfterpayProviderTest extends AbstractTestCase
{
    public function testProvides()
    {
        $provider = new AfterpayProvider($this->app);
        $this->assertCount(5, $provider->provides());
        $this->assertContains(Authorization::class, $provider->provides());
        $this->assertContains(Api::class, $provider->provides());
    }

    public function testConfig()
    {
        $config = \Config::get('afterpay');
        $this->assertEquals(Authorization::SANDBOX_URI, $config['url']);
        $this->assertEquals('ABC123', $config['merchantId']);
        $this->assertEquals('123ABC', $config['secretKey']);
    }
}
