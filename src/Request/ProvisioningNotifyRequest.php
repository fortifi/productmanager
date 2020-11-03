<?php
namespace Fortifi\ProductManager\Request;

use Fortifi\ProductManager\DataType\PurchasedProduct;

class ProvisioningNotifyRequest extends ProvisioningRequest
{
  const REASON_UNKNOWN = '';
  const REASON_CHILD_ADDED = 'child.added';
  const REASON_CHILD_REMOVED = 'child.removed';

  /** @var string */
  public $reason;
  /** @var PurchasedProduct */
  public $modifiedChild;

  public function __construct()
  {
    $this->type = RequestType::PROVISION_NOTIFY();
  }
}
