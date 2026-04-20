<?php
namespace appx\api\demo\model;

use appx;
use appx\c_hx_quick;
use appx\framework\c_model;

class aaa extends c_model
{

	public function __construct ()
	{
		parent::__construct();
		$this->set_connnection_key('bbb');
	}

	public function about ()
	{
		/** <
		 *
		 * @var \hx\db\i_trans $i_t
		 */
		return 	[ 
					pathinfo(__FILE__)
					, $this->select("id, ? as aaa")->ai(100)->go(fn($sql)=>$this->dc()->sql->aaa=$sql)->get_single_row()
					, $this->select()->go()->get_single_row()
					, $this->dc->sql
				];
		/* > */
	}
}