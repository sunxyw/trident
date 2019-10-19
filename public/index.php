<?php

use Framework\Framework;
use LeanCloud\Client;

require_once __DIR__ . '/../vendor/autoload.php';

const ROOT_DIR = __DIR__ . '/..';
const APP_DIR = ROOT_DIR . '/app';
const CONFIG_DIR = ROOT_DIR . '/config';
const FRAMEWORK_DIR = ROOT_DIR . '/Framework';
const LOG_DIR = ROOT_DIR . '/logs';
const PUBLIC_DIR = __DIR__ . '/';

const DEBUG_MODE = true;
const TIMEZONE = 'Asia/Shanghai';
ini_set('data.timezone', TIMEZONE);

$framework = Framework::getInstance();
$framework->init(CONFIG_DIR . '/app.php');
Client::initialize("bYgdYlRkuK7C89TtS8CNcTUv-MdYXbMMI", "Yf4CeVBYaVWz96PtsRdhJ04o", "CzblFnk8E9NKWoHFvitnePCg");
Client::setDebug(config('debug', true));
$router = $framework->getRouter();
require ROOT_DIR . '/routes/web.php';
$framework->setRouter($router);
$framework->run();
