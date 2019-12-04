<?php
namespace Fortifi\ProductManager\Response;

use Fortifi\ProductManager\Enum;

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
   * Item available to order
   */
  const AVAILABILITY_AVAILABLE = 'availability.available';

  /**
   * Item has no availability
   */
  const AVAILABILITY_UNAVAILABLE = 'availability.unavailable';
}
