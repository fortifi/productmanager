<?php
namespace Fortifi\ProductManager\Response;

class AvailabilityReserveResponse extends Response
{
  /**
   * @var bool
   */
  public $reserved;

  public function __construct()
  {
    $this->type = ResponseType::AVAILABILITY_RESERVE();
  }
}
