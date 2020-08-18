<?php
namespace Fortifi\ProductManager\Request;

class ConfigurationRequest extends Request
{
  /**
   * @var bool
   */
  public $includeSkuData;

  public function __construct()
  {
    $this->type = RequestType::CONFIGURATION();
  }
}
