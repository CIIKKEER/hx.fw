<?php
require_once __DIR__ . '/../vendor/autoload.php';

/* < go ...
 * 
 */
gf()->route->add_with_array(\appx\route\route::new()->get())->go();
/* > */