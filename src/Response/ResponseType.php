<?php
namespace Fortifi\ProductManager\Response;

use Fortifi\ProductManager\Enum;

/**
 * @method static ResponseType PROVISION_SUCCESS
 * @method static ResponseType PROVISION_PROCESSING
 * @method static ResponseType PROVISION_RETRY
 * @method static ResponseType PROVISION_FAILED
 * @method static ResponseType AVAILABILITY_CHECK
 * @method static ResponseType AVAILABILITY_RESERVE
 * @method static ResponseType HEALTH_CHECK
 * @method static ResponseType CONFIGURATION
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
   * Provisioning Request Failed, Please Retry
   */
  const PROVISION_RETRY = 'provision.retry';

  /**
   * Product Availability Check
   */
  const AVAILABILITY_CHECK = 'availability.check';

  /**
   * Product Availability Reserve
   */
  const AVAILABILITY_RESERVE = 'availability.reserve';

  const HEALTH_CHECK = 'health.check';

  /**
   * Configuration Response
   */
  const CONFIGURATION = 'configuration';
}
