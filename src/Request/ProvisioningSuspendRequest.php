<?php
namespace Fortifi\ProductManager\Request;

class ProvisioningSuspendRequest extends ProvisioningRequest
{
  public function __construct()
  {
    $this->type = RequestType::PROVISION_SUSPEND();
  }
}
