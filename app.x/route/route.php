<?php
namespace appx\route;

use hx\c_base_class;
use appx\framework\i_route;
use hx\fun\stdclass\c_stdclass;

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