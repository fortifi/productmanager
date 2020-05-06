<?php
namespace Fortifi\ProductManager\Request;

class ProvisioningSuspendRequest extends ProvisioningRequest
{
  /** @var string Reason to display to the customer for the suspension */
  public $message;

  public function __construct()
  {
    $this->type = RequestType::PROVISION_SUSPEND();
  }
}
