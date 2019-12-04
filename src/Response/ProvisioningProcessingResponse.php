<?php
namespace Fortifi\ProductManager\Response;

class ProvisioningProcessingResponse extends ProvisioningResponse
{
  public function __construct()
  {
    $this->type = ResponseType::PROVISION_PROCESSING();
  }
}
