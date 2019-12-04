<?php
namespace Fortifi\ProductManager\Request;

use Fortifi\ProductManager\BaseData;
use Packaged\Helpers\ValueAs;

class Request extends BaseData
{
  public $orderFid;
  public $productFid;
  public $priceFid;
  public $customerFid;

  /**
   * @var RequestType
   */
  public $type;

  /**
   * @var string URL to post updates for this request to
   */
  public $updateUrl;

  /**
   * @var string Hash to verify your request
   */
  public $verifyHash;

  public function hydrate($from)
  {
    parent::hydrate($from);
    $this->configuration = ValueAs::arr($this->configuration);
    $this->type = new RequestType($this->type);
    return $this;
  }

  /**
   * @param $productManagerKey - Configured
   *
   * @return bool
   */
  public function isVerified($productManagerKey)
  {
    return $this->verifyHash == md5($this->transportKey . $productManagerKey);
  }

  public static function fromRaw($raw)
  {
    if(!isset($raw->type))
    {
      throw new \Exception("Invalid response type");
    }

    $type = new RequestType($raw->type);
    switch($type)
    {
      case RequestType::PROVISION_SETUP:
      case RequestType::PROVISION_ACTIVATE:
      case RequestType::PROVISION_PROPERTIES_SET:
      case RequestType::PROVISION_SUSPEND:
      case RequestType::PROVISION_REACTIVATE:
      case RequestType::PROVISION_CANCEL:
      case RequestType::PROVISION_TERMINATE:
        $response = new ProvisioningRequest();
        break;
      case RequestType::AVAILABILITY_CHECK:
      case RequestType::AVAILABILITY_RESERVE:
        $response = new AvailabilityRequest();
        break;
      default:
        $response = new static();
        break;
    }
    $response->hydrate($raw);
    return $response;
  }
}
