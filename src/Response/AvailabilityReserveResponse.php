<?php
namespace Fortifi\ProductManager\Response;

class AvailabilityReserveResponse extends Response
{
  public function __construct()
  {
    $this->type = ResponseType::AVAILABILITY_RESERVE();
  }
}
