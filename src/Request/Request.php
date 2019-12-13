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
        $request = new ProvisioningSetupRequest();
        break;
      case RequestType::PROVISION_ACTIVATE:
        $request = new ProvisioningActivateRequest();
        break;
      case RequestType::PROVISION_PROPERTIES_SET:
        $request = new ProvisioningPropertiesSetRequest();
        break;
      case RequestType::PROVISION_SUSPEND:
        $request = new ProvisioningSuspendRequest();
        break;
      case RequestType::PROVISION_REACTIVATE:
        $request = new ProvisioningReactivateRequest();
        break;
      case RequestType::PROVISION_CANCEL:
        $request = new ProvisioningCancelRequest();
        break;
      case RequestType::PROVISION_TERMINATE:
        $request = new ProvisioningTerminateRequest();
        break;
      case RequestType::AVAILABILITY_CHECK:
        $request = new AvailabilityCheckRequest();
        break;
      case RequestType::AVAILABILITY_RESERVE:
        $request = new AvailabilityReserveRequest();
        break;
      default:
        $request = new static();
        break;
    }

    $request->hydrate($raw);
    $request->type = $type;
    return $request;
  }
}
