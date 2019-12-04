<?php
namespace Fortifi\ProductManager\Request;

class ProvisioningReactivateRequest extends ProvisioningRequest
{
  public function __construct()
  {
    $this->type = RequestType::PROVISION_REACTIVATE();
  }
}
