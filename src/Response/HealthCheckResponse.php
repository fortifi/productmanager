<?php

namespace Fortifi\ProductManager\Response;

class HealthCheckResponse extends Response
{
  public function __construct()
  {
    $this->type = ResponseType::HEALTH_CHECK();
  }
}
