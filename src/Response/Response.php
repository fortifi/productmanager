<?php
namespace Fortifi\ProductManager\Response;

use Fortifi\ProductManager\BaseData;

class Response extends BaseData
{
  /**
   * @var ResponseType
   */
  public $type;

  public function hydrate($from)
  {
    parent::hydrate($from);
    $this->type = new ResponseType($this->type);
    return $this;
  }

  public static function fromRaw($raw)
  {
    if(!isset($raw->type))
    {
      throw new \Exception("Invalid response type");
    }

    $type = new ResponseType($raw->type);
    switch($type)
    {
      case ResponseType::PROVISION_FAILED:
      case ResponseType::PROVISION_SUCCESS:
      case ResponseType::PROVISION_PROCESSING:
        $response = new ProvisioningResponse();
        break;
      default:
        $response = new static();
        break;
    }
    $response->hydrate($raw);
    return $response;
  }
}
