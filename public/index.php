<?php

require_once "../vendor/autoload.php";
require_once '../routes/route.php';

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::enableMultiRouteRendering(false);
// Start the routing
SimpleRouter::start();
