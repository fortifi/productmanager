<?php
namespace Fortifi\ProductManager\Request;

class ProvisioningCancelRequest extends ProvisioningRequest
{
  public function __construct()
  {
    $this->type = RequestType::PROVISION_CANCEL();
  }
}
