<?php
namespace Fortifi\ProductManager;

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
}
