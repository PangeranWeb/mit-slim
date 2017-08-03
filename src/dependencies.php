<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

//dbal
$container['db'] = function ($c) {
	$settings = $c->get('settings')['database'];
	$config = new \Doctrine\DBAL\Configuration();
	$connectionParams = array(
	    'dbname' 	=> $settings['name'],
	    'user' 		=> $settings['user'],
	    'password' 	=> $settings['pass'],
	    'host' 		=> $settings['host'],
	    'driver' 	=> 'pdo_mysql',
	);
	$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

	return $conn;
};

//account model
$container['account_model'] = function ($c) {
	$qb = $c->db->createQueryBuilder();
	return new Mit\Model\AccountModel($qb);
};