<?php
namespace Fortifi\ProductManager\Request;

class AvailabilityReserveRequest extends AvailabilityRequest
{
  public $reserveTtl;

  public function __construct()
  {
    $this->type = RequestType::AVAILABILITY_RESERVE();
  }
}
