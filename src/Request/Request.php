<?php
namespace Fortifi\ProductManager\Request;

use Fortifi\ProductManager\BaseData;

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
      throw new \Exception("Invalid request type");
    }

    $type = new RequestType($raw->type);
    switch($type)
    {
      case RequestType::PROVISION_SETUP:
        $response = new ProvisioningSetupRequest();
        break;
      case RequestType::PROVISION_ACTIVATE:
        $response = new ProvisioningActivateRequest();
        break;
      case RequestType::PROVISION_PROPERTIES_SET:
        $response = new ProvisioningPropertiesSetRequest();
        break;
      case RequestType::PROVISION_SUSPEND:
        $response = new ProvisioningSuspendRequest();
        break;
      case RequestType::PROVISION_REACTIVATE:
        $response = new ProvisioningReactivateRequest();
        break;
      case RequestType::PROVISION_CANCEL:
        $response = new ProvisioningCancelRequest();
        break;
      case RequestType::PROVISION_TERMINATE:
        $response = new ProvisioningTerminateRequest();
        break;
      case RequestType::AVAILABILITY_CHECK:
        $response = new AvailabilityCheckRequest();
        break;
      case RequestType::AVAILABILITY_RESERVE:
        $response = new AvailabilityReserveRequest();
        break;
      default:
        $response = new static();
        break;
    }
    $response->hydrate($raw);
    return $response;
  }
}
