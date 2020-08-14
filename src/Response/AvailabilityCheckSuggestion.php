<?php

namespace Fortifi\ProductManager\Response;

use Fortifi\ProductManager\DataType\TransportProperty;

class AvailabilityCheckSuggestion
{
  /** @var string */
  public $sku;

  /** @var TransportProperty[] */
  public $properties = [];
}
