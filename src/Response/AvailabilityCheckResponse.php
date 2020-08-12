<?php

namespace Fortifi\ProductManager\Response;

class AvailabilityCheckResponse extends Response
{
  /** @var bool */
  public $isAvailable;

  /** @var string[] */
  public $availableSkus = [];

  /** @var AvailabilityCheckSuggestion[] */
  public $suggestions = [];

  public function __construct()
  {
    $this->type = ResponseType::AVAILABILITY_CHECK();
  }
}
