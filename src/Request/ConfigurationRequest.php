<?php
namespace Fortifi\ProductManager\Request;

class ConfigurationRequest extends AvailabilityRequest
{
  public function __construct()
  {
    $this->type = RequestType::CONFIGURATION();
  }
}
