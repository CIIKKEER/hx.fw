<?php
use appx\config\c_config;

require_once __DIR__ . '/../vendor/autoload.php';

/* i will initialize the global configuration file of the framework as the first step
 * 
 */
c_config::new()->ini();

/* rotue go ... <
 * 
 */
gf()->route->add_with_array(\appx\route\route::new()->get())->go();/* > */



