<?php
namespace Fortifi\ProductManager\Response;

use Fortifi\ProductManager\Enum;

/**
 * @method static ResponseType PROVISION_SUCCESS
 * @method static ResponseType PROVISION_PROCESSING
 * @method static ResponseType PROVISION_FAILED
 * @method static ResponseType AVAILABILITY
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
   * Product Availability
   */
  const AVAILABILITY = 'availability';
}
