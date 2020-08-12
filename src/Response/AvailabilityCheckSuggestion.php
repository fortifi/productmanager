<?php

namespace Fortifi\ProductManager\Response;

use Fortifi\ProductManager\TransportProperty;

class AvailabilityCheckSuggestion
{
  /** @var string */
  public $sku;

  /** @var TransportProperty[] */
  public $properties = [];
}
