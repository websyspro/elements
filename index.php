<?php

declare(strict_types=1);

define( "ROUTE_ROOT", __DIR__ );
define( "PUBLICS", [
  __DIR__ . "/src",
]);

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/vendor/websyspro/devtools/router.php";