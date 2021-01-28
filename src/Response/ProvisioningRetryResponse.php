<?php
namespace Fortifi\ProductManager\Response;

class ProvisioningRetryResponse extends ProvisioningResponse
{
  public function __construct()
  {
    $this->type = ResponseType::PROVISION_RETRY();
  }
}
