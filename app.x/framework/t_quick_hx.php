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
use hx\log\e_log_level;
use hx\log\e_log_save_mode;
use appx\config\c_config_kv;
use hx\log\i_log_save_mode;

/* i have provided some short internal accessible properties to make general calling quicker
 < 
 */
trait t_quick_hx
{
	public 	hx 					$hx				;
	public 	c_db 				$db				;
	public 	c_fun 				$fun			;
	public 	c_redis 			$redis			;
	public 	c_logx			 	$log			;

	public function __construct ()
	{
		$this->hx 		= gf()					;
		$this->db 		= gf()->db				;
		$this->fun 		= gf()->fun				;
		$this->redis 	= gf()->cache->redis	;
		
		/* the default log saving mode uses the local file driver.
		 *  
		 */
		$this->log 		= new c_logx()			;
	}
}

class c_logx  
{
	
	public function warning (mixed $data): self
	{
		return $this->save(e_log_level::warning,$data);
	}
	
	public function error (mixed $data): self
	{
		return $this->save(e_log_level::error,$data);
	}
	
	public function tips (mixed $data): self
	{
		return $this->save(e_log_level::tips,$data);
	}
	
	public function info (mixed $data): self
	{
		return $this->save(e_log_level::info,$data);
	}

	public function __construct ()
	{
		$this->c_log = gf()->log->set_log_env_json_file(c_config_kv::log_system_environment_configuration_file_path)->set_log_save_mode(e_log_save_mode::file);
	}

	private function save (e_log_level $log_level , mixed $data): self
	{
		$this->c_log->save($log_level, $data);
		return $this;
	}
}
/*
 >
 */



 