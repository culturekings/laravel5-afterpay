<?php
namespace tests\Provider;

use CultureKings\Afterpay\Factory\MerchantApi;
use CultureKings\Afterpay\Model;
use CultureKings\LaravelAfterpay\Provider\AfterpayProvider;
use tests\AbstractTestCase;

class AfterpayProviderTest extends AbstractTestCase
{
    public function testProvides()
    {
        $provider = new AfterpayProvider($this->app);
        $this->assertCount(12, $provider->provides());
        $this->assertContains(Model\Merchant\Authorization::class, $provider->provides());
        $this->assertContains(MerchantApi::class, $provider->provides());
    }

    public function testMerchantConfig()
    {
        $config = \Config::get('afterpay');
        $this->assertEquals(Model\Merchant\Authorization::SANDBOX_URI, $config['merchant']['url']);
        $this->assertEquals('ABC123', $config['merchant']['merchantId']);
        $this->assertEquals('123ABC', $config['merchant']['secretKey']);
    }

    public function testInStoreConfig()
    {
        $config = \Config::get('afterpay');
        $this->assertEquals(Model\InStore\Authorization::SANDBOX_URI, $config['instore']['url']);
    }
}
