<?php
namespace Fortifi\ProductManager;

use Packaged\Helpers\Objects;

abstract class BaseData
{
  /**
   * Time the request/response was made (microseconds)
   */
  public $timestamp;

  /**
   * Key used for this request, specified by the request, synced to the response
   */
  public $transportKey;

  /**
   * @var TransportProperty[]
   */
  public $properties = [];

  public function hydrate($from)
  {
    Objects::hydrate($this, $from);
    if(!empty($this->properties))
    {
      $newProps = [];
      foreach($this->properties as $prop)
      {
        $newProp = new TransportProperty();
        Objects::hydrate($newProp, $prop);
        $newProps[] = $newProp;
      }
      $this->properties = $newProps;
    }
    return $this;
  }
}
