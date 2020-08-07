<?php
namespace Fortifi\ProductManager\DataType;

class PropertyRequiredCondition
{
  const MATCH_EQUAL = 'eq';
  const MATCH_NOT_EQUAL = 'neq';
  const MATCH_IN = 'in';
  const MATCH_NOT_IN = 'nin';
  const MATCH_SET = 'set';

  public $key;
  public $match;
  public $against;
}
