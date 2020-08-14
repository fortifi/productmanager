<?php
namespace Fortifi\ProductManager\DataType;

class PurchasedProduct
{
  /** Product Manager product type */
  public $productType;
  /**
   * Timestamp of the service start date
   */
  public $startTimestamp;
  /**
   * (optional) Timestamp of next renewal
   */
  public $renewTimestamp;
  /**
   * (optional) Timestamp of when the service should end
   */
  public $endTimestamp;
  /**
   * Service cycle period (ISO_8601) e.g. P1W
   * Leave blank for lifetime/onetime services
   */
  public $cycle;

  public $purchaseFid;

  public $productFid;
  public $productSku;
  public $priceFid;

  /** @var TransportProperty[] */
  public $properties = [];

  public $licenceKey;

}
