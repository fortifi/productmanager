<?php
namespace Fortifi\ProductManager\Request;

use Fortifi\ProductManager\Enum;

/**
 *
 * @method static RequestType AVAILABILITY_CHECK
 * @method static RequestType AVAILABILITY_RESERVE
 * @method static RequestType PROVISION_SETUP
 * @method static RequestType PROVISION_ACTIVATE
 * @method static RequestType PROVISION_PROPERTIES_SET
 * @method static RequestType PROVISION_MODIFY
 * @method static RequestType PROVISION_SUSPEND
 * @method static RequestType PROVISION_REACTIVATE
 * @method static RequestType PROVISION_CANCEL
 * @method static RequestType PROVISION_TERMINATE
 */
class RequestType extends Enum
{
  //Availability
  const AVAILABILITY_CHECK = 'availability.check';
  const AVAILABILITY_RESERVE = 'availability.reserve';

  // Product Provisioning
  const PROVISION_SETUP = 'provision.setup';
  const PROVISION_ACTIVATE = 'provision.activate';
  const PROVISION_PROPERTIES_SET = 'provision.properties.set';
  const PROVISION_MODIFY = 'provision.modify';
  const PROVISION_SUSPEND = 'provision.suspend';
  const PROVISION_REACTIVATE = 'provision.reactivate';
  const PROVISION_CANCEL = 'provision.cancel';
  const PROVISION_TERMINATE = 'provision.terminate';
}
