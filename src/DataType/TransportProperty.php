<?php
namespace Fortifi\ProductManager\DataType;

class TransportProperty
{
  const TYPE_STRING = 'string';
  const TYPE_FLAG = 'flag';
  const TYPE_COUNT = 'count';
  const RETURN_TYPE_INC_COUNT = 'inc.count';
  const RETURN_TYPE_DEC_COUNT = 'dec.count';

  /**
   * @var string
   */
  public $key = '';
  /**
   * Property Type
   *
   * @var string
   */
  public $type = self::TYPE_STRING;
  /**
   * @var string
   */
  public $stringValue = '';
  /**
   * @var bool
   */
  public $flagValue = false;
  /**
   * count = the current count
   * inc.count = the amount to increase the counter by
   * dec.count = the amount to decrease the counter by
   *
   * @var int
   */
  public $countValue = 0;

  public static function stringValue($key, string $value)
  {
    $prop = new static();
    $prop->key = $key;
    $prop->stringValue = $value;
    return $prop;
  }

  public static function flagValue($key, bool $value)
  {
    $prop = new static();
    $prop->key = $key;
    $prop->type = self::TYPE_FLAG;
    $prop->flagValue = $value;
    return $prop;
  }

  public static function countValue($key, int $value)
  {
    $prop = new static();
    $prop->key = $key;
    $prop->type = self::TYPE_COUNT;
    $prop->countValue = $value;
    return $prop;
  }

  public static function increment($key, int $value)
  {
    $prop = new static();
    $prop->key = $key;
    $prop->type = self::RETURN_TYPE_INC_COUNT;
    $prop->countValue = $value;
    return $prop;
  }

  public static function decrement($key, int $value)
  {
    $prop = new static();
    $prop->key = $key;
    $prop->type = self::RETURN_TYPE_DEC_COUNT;
    $prop->countValue = $value;
    return $prop;
  }

  public function getValue()
  {
    switch($this->type)
    {
      case self::TYPE_STRING:
        return $this->stringValue;
      case self::TYPE_FLAG:
        return $this->flagValue;
      case self::TYPE_COUNT:
      case self::RETURN_TYPE_INC_COUNT:
      case self::RETURN_TYPE_DEC_COUNT:
        return $this->countValue;
    }
    return null;
  }
}
