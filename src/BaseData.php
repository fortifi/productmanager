<?php
namespace Fortifi\ProductManager;

use Fortifi\ProductManager\DataType\TransportProperty;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

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
   * @var string Hash to verify your request
   */
  public $verifyHash;

  /**
   * @param $productManagerKey - Configured
   *
   * @return bool
   */
  public function isVerified($productManagerKey)
  {
    return $this->verifyHash == md5($this->transportKey . $productManagerKey);
  }

  public function setVerificationData($productManagerKey, $transportKey = null)
  {
    if($transportKey !== null)
    {
      $this->transportKey = $transportKey;
    }
    else if($transportKey === null && $this->transportKey === null)
    {
      $this->transportKey = Strings::randomString();
    }
    $this->verifyHash = md5($this->transportKey . $productManagerKey);
    return $this;
  }

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
