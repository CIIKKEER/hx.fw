<?php
namespace appx\framework;

use hx\c_base_class;
use appx\framework\t_quick_hx;
use hx\db\i_trans;
use hx\db\i_bindx;
use hx\db\orm\c_orm;

abstract class c_model extends c_orm
{
	use t_quick_hx;
}