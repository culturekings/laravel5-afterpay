<?php
namespace CultureKings\LaravelAfterpay\Facade\InStore;

use CultureKings\Afterpay\Service\InStore\PreApproval;
use Illuminate\Support\Facades\Facade;

/**
 * Class PreApprovalFacade
 * @package CultureKings\LaravelAfterpay\Facade\InStore
 * @method get()
 */
class PreApprovalFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return PreApproval::class;
    }
}
