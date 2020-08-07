<?php
namespace Fortifi\ProductManager\Request;

class ConfigurationRequest extends Request
{
  public function __construct()
  {
    $this->type = RequestType::CONFIGURATION();
  }
}
