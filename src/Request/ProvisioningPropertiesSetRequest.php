<?php
namespace Fortifi\ProductManager\Request;

class ProvisioningPropertiesSetRequest extends ProvisioningRequest
{
  public function __construct()
  {
    $this->type = RequestType::PROVISION_PROPERTIES_SET();
  }
}
