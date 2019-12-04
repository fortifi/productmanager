<?php
namespace Fortifi\ProductManager\Response;

class ProvisioningFailedResponse extends ProvisioningResponse
{
  public function __construct()
  {
    $this->type = ResponseType::PROVISION_FAILED();
  }
}
