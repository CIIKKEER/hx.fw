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
namespace appx\framework;

use hx\hx;
use hx\db\c_db;
use hx\fun\c_fun;
use hx\c_base_class;
use hx\cache\c_cache;
use hx\cache\redis\c_redis;
use hx\log\c_log;
use hx\log\e_log_save_mode;
use appx\config\c_config_kv;

/* i have provided some short internal accessible properties to make general calling quicker
 < 
 */
trait t_quick_hx
{
	protected 	hx 		$hx						;
	protected 	c_db 	$db						;
	protected 	c_fun 	$fun					;
	protected 	c_redis $redis					;
	protected 	c_log 	$log					;

	public function __construct ()
	{
		$this->hx 		= gf()					;
		$this->db 		= gf()->db				;
		$this->fun 		= gf()->fun				;
		$this->redis 	= gf()->cache->redis	;
		
		/* the default log saving mode uses the local file driver.
		 *  
		 */
		$this->log 		= gf()->log->set_log_env_json_file(c_config_kv::log_system_environment_configuration_file_path)->set_log_save_mode(e_log_save_mode::file);
	}
}
/*
 >
 */