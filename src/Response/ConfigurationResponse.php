<?php

namespace Fortifi\ProductManager\Response;

use Fortifi\ProductManager\DataType\ProductDefinition;

class ConfigurationResponse extends Response
{
  /**
   * @var ProductDefinition[]
   */
  public $products = [];

  public function __construct()
  {
    $this->type = ResponseType::CONFIGURATION();
  }
}
