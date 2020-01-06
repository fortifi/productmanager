<?php
namespace Fortifi\ProductManager\Request;

class ProvisioningModifyRequest extends ProvisioningRequest
{
  public function __construct()
  {
    $this->type = RequestType::PROVISION_MODIFY();
  }
}
