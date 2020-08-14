<?php
namespace Fortifi\ProductManager\Log;

use JsonSerializable;
use Packaged\Enum\AbstractEnum;

/**
 * @method static Message DEBUG($message = null, $timestamp = null)
 * @method static Message INFO($message = null, $timestamp = null)
 * @method static Message WARNING($message = null, $timestamp = null)
 * @method static Message SUCCESS($message = null, $timestamp = null)
 * @method static Message ERROR($message = null, $timestamp = null)
 */
class Message extends AbstractEnum implements JsonSerializable
{
  const DEBUG = 'debug';
  const INFO = 'info';
  const WARNING = 'warning';
  const ERROR = 'error';
  const SUCCESS = 'success';

  protected $_timestamp;
  protected $_message;

  public function __construct($value, $message = null, $timestamp = null)
  {
    parent::__construct($value);
    if($message != null)
    {
      $this->_message = $message;
    }
    $this->_timestamp = $timestamp ?: microtime(true);
  }

  /**
   * @return int
   */
  public function getTimestamp()
  {
    return $this->_timestamp;
  }

  /**
   * @param int $timestamp
   *
   * @return Message
   */
  public function setTimestamp($timestamp)
  {
    $this->_timestamp = (int)$timestamp;
    return $this;
  }

  /**
   * @return string
   */
  public function getMessage()
  {
    return $this->_message;
  }

  /**
   * @param string $message
   *
   * @return Message
   */
  public function setMessage($message)
  {
    $this->_message = (string)$message;
    return $this;
  }

  public function hydrate($raw)
  {
    if(isset($raw->type))
    {
      $this->_setValue($raw->type);
    }
    $this->_message = $raw->message ?? $this->_message;
    $this->_timestamp = $raw->timestamp ?? $this->_timestamp;
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      'type'      => $this->getValue(),
      'message'   => $this->_message,
      'timestamp' => $this->_timestamp,
    ];
  }

}
