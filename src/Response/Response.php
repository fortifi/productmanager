<?php
namespace Fortifi\ProductManager\Response;

use Exception;
use Fortifi\ProductManager\BaseData;

class Response extends BaseData
{
  /**
   * @var ResponseType
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
      throw new Exception("Invalid response type");
    }

    switch($raw->type)
    {
      case ResponseType::CONFIGURATION:
        $response = new ConfigurationResponse();
        break;
      case ResponseType::HEALTH_CHECK:
        $response = new HealthCheckResponse();
        break;
      case ResponseType::PROVISION_FAILED:
        $response = new ProvisioningFailedResponse();
        break;
      case ResponseType::PROVISION_SUCCESS:
        $response = new ProvisioningSuccessResponse();
        break;
      case ResponseType::PROVISION_RETRY:
        $response = new ProvisioningRetryResponse();
        break;
      case ResponseType::PROVISION_PROCESSING:
        $response = new ProvisioningProcessingResponse();
        break;
      case ResponseType::AVAILABILITY_CHECK:
        $response = new AvailabilityCheckResponse();
        break;
      case ResponseType::AVAILABILITY_RESERVE:
        $response = new AvailabilityReserveResponse();
        break;
      default:
        $response = new static();
        break;
    }
    $response->hydrate($raw);
    if(!($response->type instanceof ResponseType))
    {
      $response->type = new ResponseType($raw->type);
    }
    return $response;
  }
}
