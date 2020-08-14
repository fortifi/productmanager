<?php
namespace Fortifi\ProductManager\Request;

use Fortifi\ProductManager\DataType\TransportProperty;
use Packaged\Helpers\Objects;

abstract class AvailabilityRequest extends Request
{
  /** @var TransportProperty[] */
  public $properties = [];

  public function hydrate($from)
  {
    Objects::hydrate($this, $from);
    if(!empty($this->properties))
    {
      $newProps = [];
      foreach($this->properties as $prop)
      {
        $newProps[] = Objects::hydrate(new TransportProperty(), $prop);
      }
      $this->properties = $newProps;
    }
    return $this;
  }

  public $reserveKey;
}
