<?php

namespace Fortifi\ProductManager\Response;

class AvailabilityCheckResponse extends Response
{
  /**
   * @var bool
   */
  public $isAvailable;

  /**
   * @var string[]
   */
  public $availableSkuFids;

  public function __construct()
  {
    $this->type = ResponseType::AVAILABILITY_CHECK();
  }
}