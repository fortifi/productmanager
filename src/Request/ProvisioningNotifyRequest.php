<?php
namespace Fortifi\ProductManager\Request;

class ProvisioningNotifyRequest extends ProvisioningRequest
{
  const REASON_UNKNOWN = '';
  const REASON_CHILD_ADDED = 'child.added';
  const REASON_CHILD_REMOVED = 'child.removed';

  public $reason;

  public function __construct()
  {
    $this->type = RequestType::PROVISION_NOTIFY();
  }
}
