<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 20/11/13
 * Time: 16:54
 */

// Define path to application directory
defined('APPLICATION_PATH')
|| define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));

require_once APPLICATION_PATH . '/library/Application.php';

$application = new library\Application();
$application->bootstrap();
$application->run();