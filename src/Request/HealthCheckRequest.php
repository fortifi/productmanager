<?php
namespace Fortifi\ProductManager\Request;

class HealthCheckRequest extends AvailabilityRequest
{
  public function __construct()
  {
    $this->type = RequestType::HEALTH_CHECK();
  }
}
