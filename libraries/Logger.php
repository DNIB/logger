<?php

namespace Php\Exam;

require_once('LoggerInterface.php');

use Psr\Log as pl;

/**
 * 繼承 LoggerInterface 之所有功能，以完成考試目標
 */
class Logger extends pl\LoggerInterface
{

}