<?php
namespace appx\route;

use hx\c_base_class;
use appx\framework\i_route;
use hx\fun\stdclass\c_stdclass;

// class c_route extends c_base_class
// {

// 	public function get (): array
// 	{
// 		return [
// 					'/user/del' 		=> test::new()->user()->del(...)			,
// 					'/user/add' 		=> test::new()->user()->add()				,
// 					'/user/login'		=> [test::new()->user()::class,'login']	,
// 					'/user/register' 	=> test::new()->user()->register(...)		,
// 					'/user/info'		=> test::new()->user()->info()			,
// 					'/user/modify'		=> test::new()->user()->modify()			,
// 					'/hx/about'			=> test::new()->hx()->about(...)			,
// 		];
// 	}
// }
//
class route extends c_base_class implements i_route
{

	public function get (): array
	{
		$ar = [ ];
		foreach ($this->get_more() as $k => $v)
		{
			$ar = array_merge($ar,$v);
		}
		return $ar;
	}

	private function get_more (): array
	{
		$ar = [ ];
		foreach (glob(__DIR__ . '/more/*.php') as $f)
		{
			$ar[] = (include_once (gf()->fun->file->realpath($f)));
		}
		return $ar;
	}
}