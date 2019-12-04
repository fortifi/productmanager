<?php
namespace Fortifi\ProductManager\Response;

use Fortifi\ProductManager\Log\Message;

class ProvisioningResponse extends Response
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
}
