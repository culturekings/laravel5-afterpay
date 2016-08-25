<?php
namespace tests\Provider;

use CultureKings\Afterpay\Factory\Api;
use CultureKings\Afterpay\Model\Authorization;
use CultureKings\LaravelAfterpay\Provider\AfterPayProvider;
use tests\TestCase;

class AfterpayProviderTest extends TestCase
{
    public function testProvides()
    {
        $provider = new AfterPayProvider($this->app);
        $this->assertCount(2, $provider->provides());
        $this->assertContains(Authorization::class, $provider->provides());
        $this->assertContains(Api::class, $provider->provides());
    }

    public function testConfig()
    {
        dump($this->app->make('config'));
    }
}
