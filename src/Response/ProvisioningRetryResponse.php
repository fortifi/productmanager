<?php
namespace Fortifi\ProductManager\Response;

class ProvisioningRetryResponse extends ProvisioningResponse
{
  /**
   * @var int
   */
  public $minimumDelay;

  public function __construct()
  {
    $this->type = ResponseType::PROVISION_RETRY();
  }
}
