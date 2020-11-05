<?php
namespace Fortifi\ProductManager\Request;

use Exception;
use Fortifi\ProductManager\BaseData;

class Request extends BaseData
{
  public $orgFid;
  public $brandFid;
  public $orderFid;
  public $customerFid;

  /**
   * @var RequestType
   */
  public $type;

  public static function fromRaw($raw)
  {
    if(is_array($raw))
    {
      $raw = (object)$raw;
    }
    if(!isset($raw->type))
    {
      throw new Exception("Invalid request type");
    }

    switch($raw->type)
    {
      case RequestType::AVAILABILITY_CHECK:
        $request = new AvailabilityCheckRequest();
        break;
      case RequestType::AVAILABILITY_RESERVE:
        $request = new AvailabilityReserveRequest();
        break;
      case RequestType::CONFIGURATION:
        $request = new ConfigurationRequest();
        break;
      case RequestType::HEALTH_CHECK:
        $request = new HealthCheckRequest();
        break;
      case RequestType::PROVISION_ACTIVATE:
        $request = new ProvisioningActivateRequest();
        break;
      case RequestType::PROVISION_CANCEL:
        $request = new ProvisioningCancelRequest();
        break;
      case RequestType::PROVISION_MODIFY:
        $request = new ProvisioningModifyRequest();
        break;
      case RequestType::PROVISION_NOTIFY:
        $request = new ProvisioningNotifyRequest();
        break;
      case RequestType::PROVISION_PROPERTIES_SET:
        $request = new ProvisioningPropertiesSetRequest();
        break;
      case RequestType::PROVISION_REACTIVATE:
        $request = new ProvisioningReactivateRequest();
        break;
      case RequestType::PROVISION_RENEW:
        $request = new ProvisioningRenewRequest();
        break;
      case RequestType::PROVISION_SETUP:
        $request = new ProvisioningSetupRequest();
        break;
      case RequestType::PROVISION_SUSPEND:
        $request = new ProvisioningSuspendRequest();
        break;
      case RequestType::PROVISION_TERMINATE:
        $request = new ProvisioningTerminateRequest();
        break;
      default:
        $request = new static();
        break;
    }

    $request->hydrate($raw);
    if(!($request->type instanceof RequestType))
    {
      $request->type = new RequestType($raw->type);
    }
    return $request;
  }
}
