<?php
namespace Fortifi\ProductManager\Response;

class ProvisioningSuccessResponse extends ProvisioningResponse
{
  public function __construct()
  {
    $this->type = ResponseType::PROVISION_SUCCESS();
  }
}
