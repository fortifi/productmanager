<?php
namespace Fortifi\ProductManager\Response;

use Fortifi\ProductManager\DataType\TransportProperty;
use Fortifi\ProductManager\Log\Message;
use Packaged\Helpers\Objects;

abstract class ProvisioningResponse extends Response
{
  /**
   * Status Message
   *
   * @var string
   */
  public $message;

  /**
   * @var Message[]
   */
  public $log;

  /** @var TransportProperty[] */
  public $properties = [];

  /**
   * Identity to set on the subscription.  This should be left blank for no change
   *
   * @var string
   */
  public $identity;

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

}
