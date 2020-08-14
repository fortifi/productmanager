<?php
namespace Fortifi\ProductManager;

use Exception;
use Fortifi\ProductManager\Request\Request;
use Fortifi\ProductManager\Response\Response;

class Transport
{
  /**
   * @param string $jsonString
   *
   * @return Request
   * @throws Exception
   */
  public static function fromJsonRequest($jsonString)
  {
    $decoded = json_decode($jsonString);
    return Request::fromRaw($decoded);
  }

  /**
   * @param string $jsonString
   *
   * @return Response
   * @throws Exception
   */
  public static function fromJsonResponse($jsonString)
  {
    $decoded = json_decode($jsonString);
    return Response::fromRaw($decoded);
  }

  /**
   * @param BaseData $data
   *
   * @return string
   */
  public static function toJson(BaseData $data)
  {
    return json_encode($data);
  }
}
