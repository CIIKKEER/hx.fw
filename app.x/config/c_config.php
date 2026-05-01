<?php

/* Copyright 2026 BREEZZEER
 * SPDX-License-Identifier: Apache-2.0
 * 
 * 
 <
 */
namespace appx\config;

use hx\c_base_class;
use hx\db\mysqli\c_mysqli_connection_pool;

class c_config extends c_base_class
{
	/* you must release the MySQL connection resources in the connection pool
	 * 
	 */
	public function __destruct ()
	{
		c_mysqli_connection_pool::new()->free();
	}
	
	public function ini ()
	{
		/* it is a file path that contains the database and Redis configuration information 
		 * 
		 */
		gf()->config->mysql->set_mysql_config_env_file_path(c_config_kv::mysql_config_env_file_path);
		
		/* it is the default encoder and decoder key string for the JWT component.
		 * 
		 */
		gf()->fun->jwt->set_key(gf()->fun->json->decoder_with_local_file(gf()->fun->file->realpath(c_config_kv::jwt_encoder_and_decoder_default_key_string_env_file_path))->ok()->jwt->key);

		/* you can continue to initialize other configuration file
		 * 
		 * 
		 .
		 .
		 .
		 .
		 .
		 .
		 .
		 .
		 *
		 >
		 */
	}
}