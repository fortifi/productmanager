<?php
namespace Fortifi\ProductManager\Request;

class AvailabilityCheckRequest extends AvailabilityRequest
{
  public function __construct()
  {
    $this->type = RequestType::AVAILABILITY_CHECK();
  }
}
