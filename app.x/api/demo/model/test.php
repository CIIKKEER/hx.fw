<?php
namespace appx\api\demo\model;

use appx;
use appx\framework\c_model;
	 

class test extends c_model
{

	public function about ()
	{
		/**
		 * 
		 * @var \hx\db\i_trans $i_t
		 */
		return [pathinfo(__FILE__),$this->db->mysqli->open_with_env_json(__DIR__.'/../../../../env/env.json')->get_db_information()->to_array()->get()];
	}
}

