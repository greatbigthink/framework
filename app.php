<?php
namespace framework;

use \framework\app as app;
use \framework\session as session;
use \framework\view as view;
use \framework\autoload as autoload;

define('ROOT', dirname(__FILE__));

require ROOT . '/vendor/autoload.php';
//=============================================================================
//	Requires
//=============================================================================

define('ERROR_REPORTING', true);

$app = new app();

$app->setting('model-path', ROOT . '/models');
$app->setting('view-path', ROOT . '/views');
$app->setting('public-path', ROOT . '/public');
$app->setting('vendor-path', ROOT . '/vendor');

############################################

function debug( $output )
{
	echo '<pre>', print_r($output, $as_string = true), '</pre>';
}

############################################

$app->engine('twig');

//=============================================================================
//	INCLUDE THE ROUTES
//=============================================================================

$app->use( './routes/index' );
// $app->use( './routes/auth', '/auth' );

//=============================================================================
//
//	Render
//
//=============================================================================

$app->route();
exit;
