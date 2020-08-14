<?php
namespace Fortifi\ProductManager\Request;

use Fortifi\ProductManager\DataType\PurchasedProduct;
use Packaged\Helpers\ValueAs;

class ProvisioningRequest extends Request
{
  /**
   * Configuration Data for the resource
   *
   * @var array
   */
  public $resourceConfig = [];

  public $resourceFid;

  /**
   * @var string URL to post updates for this request to
   */
  public $updateUrl;

  /** @var PurchasedProduct */
  public $purchasedProduct;
  /** @var PurchasedProduct[] */
  public $childProducts = [];
  /** @var PurchasedProduct[] */
  public $parentProducts = [];
  /** @var PurchasedProduct[] */
  public $siblingProducts = [];

  public function hydrate($from)
  {
    parent::hydrate($from);
    $this->resourceConfig = ValueAs::arr($this->resourceConfig);
    return $this;
  }

}
