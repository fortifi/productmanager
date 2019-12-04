<?php
namespace Fortifi\ProductManager;

use Packaged\Enum\AbstractEnum;

abstract class Enum extends AbstractEnum implements \JsonSerializable
{
  public function jsonSerialize()
  {
    return $this->getValue() ?: 'unknown';
  }

  public function __toString()
  {
    return $this->jsonSerialize();
  }
}
