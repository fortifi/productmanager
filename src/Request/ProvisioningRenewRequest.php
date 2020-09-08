<?php
namespace Fortifi\ProductManager\Request;

class ProvisioningRenewRequest extends ProvisioningRequest
{
  public function __construct()
  {
    $this->type = RequestType::PROVISION_RENEW();
  }
}
