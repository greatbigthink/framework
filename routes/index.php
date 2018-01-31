<?php

$route->any('/', function() use ($res, $req) {
	$res->send_code(200)->render('index.html');

});
