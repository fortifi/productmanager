<?php
namespace Fortifi\ProductManager\Request;

class ProvisioningSetupRequest extends ProvisioningRequest
{
  public function __construct()
  {
    $this->type = RequestType::PROVISION_SETUP();
  }
}
