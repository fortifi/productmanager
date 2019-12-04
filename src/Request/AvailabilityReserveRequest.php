<?php
namespace Fortifi\ProductManager\Request;

class AvailabilityReserveRequest extends AvailabilityRequest
{
  public function __construct()
  {
    $this->type = RequestType::AVAILABILITY_RESERVE();
  }
}
