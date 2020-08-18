<?php

namespace Fortifi\ProductManager\Response;

use Fortifi\ProductManager\DataType\ProductDefinition;
use Fortifi\ProductManager\DataType\PropertyDefinition;

class ConfigurationResponse extends Response
{
  /**
   * @var ProductDefinition[]
   */
  public $products = [];

  public $authTokenName = '';
  /**
   * @var PropertyDefinition[]
   */
  public $authData = [];

  public function __construct()
  {
    $this->type = ResponseType::CONFIGURATION();
  }
}
