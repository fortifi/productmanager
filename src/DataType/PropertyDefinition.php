<?php
namespace Fortifi\ProductManager\DataType;

class PropertyDefinition
{
  const TYPE_FLAG = 'flag';
  const TYPE_COUNTER = 'counter';
  const TYPE_STRING = 'string';
  const TYPE_OPTIONS = 'options';

  public $key;
  public $name;
  public $description;
  public $defaultValue;
  public $options = [];
  public $validationRegex;
  public $propertyType;

  /**
   * @var PropertyRequiredCondition[]
   */
  public $requiredConditions = [];
}
