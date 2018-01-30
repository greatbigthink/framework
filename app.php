<?php

//=============================================================================
//	Requires
//=============================================================================

define('ERROR_REPORTING', true);

use \framework\session as session;
use \framework\app as app;
use \framework\view as view;
use \framework\autoload as autoload;

$app = new app();

define('ROOT', dirname(__FILE__));
$app->setting('model-path', ROOT . '/models');
$app->setting('view-path', ROOT . '/views');
$app->setting('public-path', ROOT . '/public');
$app->setting('vendor-path', ROOT . '/vendor');

############################################

require $app->setting('vendor-path') . '/autoload.php';

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
