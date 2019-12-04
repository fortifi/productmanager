<?php
namespace Fortifi\Tests\ProductManager;

use Fortifi\ProductManager\Log\Message;
use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{
  public function testJsonSerialize()
  {
    $debug = Message::DEBUG("Debug Message", 1234);
    $this->assertEquals('{"type":"debug","message":"Debug Message","timestamp":1234}', json_encode($debug));
  }
}
