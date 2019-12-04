<?php
namespace Fortifi\ProductManager\Response;

class AvailabilityResponse extends Response
{

  public function __construct()
  {
    $this->type = ResponseType::AVAILABILITY();
  }
}
