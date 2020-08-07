<?php
namespace Fortifi\ProductManager\DataType;

class ProductDefinition
{
  public $productType;
  public $name;
  public $description;
  /**
   * @var PropertyDefinition[]
   */
  public $properties = [];
  public $parentType;

  /**
   * @var ProductSkuDefinition[]
   */
  public $skus = [];
}
