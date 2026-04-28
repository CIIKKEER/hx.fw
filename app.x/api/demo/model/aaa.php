<?php
namespace appx\api\demo\model;

use appx;
use hx\db\i_db;
use appx\c_hx_quick;
use appx\framework\c_model;
use hx\fun\stdclass\c_stdclass;

class aaa extends c_model
{

	protected function on_set_open_with_env_json (): string
	{
		return __DIR__ . '/../../../../env/env.json';
	}

	

	public function add (): c_stdclass
	{
		return $this->fun->stdclass->new()->set('insert_id',$this->insert()
			->done([ 'name' => 'jack.add','age' => 24])
			->go()
			->get_insert_id());
	}

	protected function on_set_connection_key (): string
	{
		return 'bbb';
	}

	public function get_detail_info (): c_stdclass
	{
		return $this->field()
			->where()
			->like('name','jack')
			->select()
			->go()
			->get_single_row();
	}
}