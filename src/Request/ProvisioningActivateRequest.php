<?php
namespace Fortifi\ProductManager\Request;

class ProvisioningActivateRequest extends ProvisioningRequest
{
  public function __construct()
  {
    $this->type = RequestType::PROVISION_ACTIVATE();
  }
}
