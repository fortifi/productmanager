<?php
namespace Fortifi\ProductManager\Response;

use Fortifi\ProductManager\Enum;

/**
 * @method static ResponseType PROVISION_SUCCESS
 * @method static ResponseType PROVISION_PROCESSING
 * @method static ResponseType PROVISION_FAILED
 * @method static ResponseType AVAILABILITY_CHECK
 * @method static ResponseType AVAILABILITY_RESERVE
 */
class ResponseType extends Enum
{
  /**
   * Provisioning Request Handled
   */
  const PROVISION_SUCCESS = 'provision.success';
  /**
   * Provisioning Request Processing
   */
  const PROVISION_PROCESSING = 'provision.processing';
  /**
   * Provisioning Request Failed
   */
  const PROVISION_FAILED = 'provision.failed';

  /**
   * Product Availability Check
   */
  const AVAILABILITY_CHECK = 'availability.check';

  /**
   * Product Availability Reserve
   */
  const AVAILABILITY_RESERVE = 'availability.reserve';
}
