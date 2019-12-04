<?php
namespace Fortifi\ProductManager\Request;

class ProvisioningTerminateRequest extends ProvisioningRequest
{
  public function __construct()
  {
    $this->type = RequestType::PROVISION_TERMINATE();
  }
}
