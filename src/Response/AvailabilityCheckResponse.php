<?php

namespace Fortifi\ProductManager\Response;

class AvailabilityCheckResponse extends Response
{
  public $result;

  public function __construct()
  {
    $this->type = ResponseType::AVAILABILITY_CHECK();
  }
}
