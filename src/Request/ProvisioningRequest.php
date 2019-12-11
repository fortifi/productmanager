<?php
namespace Fortifi\ProductManager\Request;

use Packaged\Helpers\ValueAs;

class ProvisioningRequest extends Request
{
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
   * Configuration Data for the service
   *
   * @var array
   */
  public $configuration = [];
  /**
   * Service cycle period (ISO_8601) e.g. P1W
   * Leave blank for lifetime/onetime services
   */
  public $cycle;

  public $purchaseFid;

  public function hydrate($from)
  {
    parent::hydrate($from);
    $this->configuration = ValueAs::arr($this->configuration);
    return $this;
  }

}
