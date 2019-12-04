<?php
namespace Fortifi\ProductManager\Log;

use Packaged\Enum\AbstractEnum;

class Source extends AbstractEnum
{
  const SOURCE_STATUS = 'status';
  const SOURCE_PROCESS = 'process';
  const SOURCE_LOG = 'log';
}
