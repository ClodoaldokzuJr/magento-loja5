<?php
namespace Vendor\StorePickup\Model;

use Magento\Quote\Api\Data\ShippingMethodInterface;

class PickupMethod implements ShippingMethodInterface
{
    const CODE = 'storepickup_pickup';

    public function getCode()
    {
        return self::CODE;
    }

    public function getCarrierCode()
    {
        return 'storepickup';
    }
}