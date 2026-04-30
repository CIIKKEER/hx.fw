<?php
namespace appx\api\demo\model\bbb;

use appx\framework\c_model;
use hx\db\i_db;
use hx\c_base_class;
use hx\route\i_request;
use hx\route\i_response;
use hx\route\i_route_action_with_invoke;
use hx\fun\stdclass\c_stdclass;
use appx\api\demo\model\aaa;

/** 
 * @author Administrator
 * 
 */
class bbb extends c_model
{

	protected function on_set_connection_key (): string
	{
		return 'bbb';
	}

	public function add (c_stdclass $insert): bool
	{
		return $this->insert()
			->done($insert->to_array()
			->get())
			->go()
			->get_insert_id() > 0;
	}

	public function get_info_by_id (int $id): c_stdclass
	{
		return $this->where()
			->and('id','=',$id)
			->order()
			->desc('id')
			->by()
			->select()
			->go()
			->get_single_row();
	}

	public function get_detail_info (): c_stdclass
	{
		return aaa::new()->get_detail_info();
	}
}