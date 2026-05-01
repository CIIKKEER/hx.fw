<?php
require_once __DIR__ . '/../vendor/autoload.php';

/*< i will initialize the global configuration file of the framework as the first step 
 < 
 */
\appx\config\c_config::new()->ini();

/* route go ... 
 * 
 */
gf()->route->add_with_array(\appx\route\route::new()->get())->go();

/* 
 >
 */
