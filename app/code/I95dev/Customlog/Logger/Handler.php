<?php
namespace I95dev\Customlog\Logger;
 
use Monolog\Logger;
 
class Handler extends \Magento\Framework\Logger\Handler\Base
{
    protected $loggerType = Logger::INFO;
 
    protected $fileName = '/var/log/i95dev_customlog_log_file.log';
}
