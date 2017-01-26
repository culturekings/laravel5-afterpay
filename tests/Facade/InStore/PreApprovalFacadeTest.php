<?php
namespace tests\Facade\InStore;

use CultureKings\LaravelAfterpay\Facade\InStore\PreApprovalFacade;
use tests\AbstractTestCase;

/**
 * Class PreApprovalFacadeTest
 * @package tests\Facade\InStore
 */
class PreApprovalFacadeTest extends AbstractTestCase
{
    public function testCanInitialise()
    {
        /** @var PreApprovalFacade $facade */
        $facade = $this->app->make('afterpay_instore_preapproval');
        $facade::shouldReceive();
        $this->assertInstanceOf(PreApprovalFacade::class, $facade);
    }
}
