<?php
/*
 <
 */
declare(strict_types = 1);

/* Copyright 2026 BREEZZEER
 * SPDX-License-Identifier: Apache-2.0
 *
 >
 */
require_once __DIR__ . '/../vendor/autoload.php';

/* hello everyone, welcome to the ultra-simple ciikkeer/hx.fw framework that is a PHP open-source Composer library based on ciikkeer/hx. The dynamic properties of PHP use standard interface services to access different modules very quickly.
 * 
 * 
 * 
 * 
 < 
 */

/* i will initialize the global configuration file of the framework as the first step 
 * 
 */
\appx\config\c_config::new()->ini();

/* route go ... 
 * 
 */
gf()->route->add_with_array(\appx\route\route::new()->get())->go();

/* 
 >
 */
