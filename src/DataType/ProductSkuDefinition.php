<?php
namespace Fortifi\ProductManager\DataType;

class ProductSkuDefinition
{
  public $sku;
  public $name;
  public $description;
  /**
   * @var PropertyDefinition[]
   */
  public $properties = [];
}
