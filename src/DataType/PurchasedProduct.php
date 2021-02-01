<?php
namespace Fortifi\ProductManager\DataType;

use Packaged\Helpers\Objects;

class PurchasedProduct
{
  /** Product Manager product type */
  public $productType;

  /** Product Manager code - built in Fortifi name or FID of custom */
  public $productManagerCode;

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
  public $identity;

  public function hydrate($from)
  {
    Objects::hydrate($this, $from);
    if(!empty($this->properties))
    {
      $newProps = [];
      foreach($this->properties as $prop)
      {
        $newProps[] = Objects::hydrate(new TransportProperty(), $prop);
      }
      $this->properties = $newProps;
    }
    return $this;
  }
}
