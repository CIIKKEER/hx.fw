<?php
namespace appx\config;

use hx\c_base_class;

class c_config extends c_base_class
{

	public function ini ()
	{
		/* database and redis ... 
		 * 
		 */
		gf()->config->mysql->set_mysql_config_env_file_path(__DIR__ . '/../../env/env.json');

		/* i can continue to initialize other configuration file
		 * 
		 * 
		 * 
		 * 
		 * 
		 */
	}
}