<?php
namespace appx\config;

use hx\c_base_class;
use hx\db\mysqli\c_mysqli_connection_pool;

class c_config extends c_base_class
{

	public function ini ()
	{
		/* it is a file path that contains the database and Redis configuration information 
		 * 
		 */
		gf()->config->mysql->set_mysql_config_env_file_path(e_config::mysql_config_env_file_path->value);

		/* it is the default encoder and decoder key string for the JWT component.
		 * 
		 */
		gf()->fun->jwt->set_key(e_config::jwt_encoder_and_decoder_default_key_string->value);

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
		 *
		 */
	}

	public function __destruct ()
	{
		/* you must release the MySQL connection resources in the connection pool
		 *
		 */
		c_mysqli_connection_pool::new()->free();
	}
}