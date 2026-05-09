<?php
/*
 <
 */
declare(strict_types = 1);

/* Copyright 2026 BREEZZEER
 * SPDX-License-Identifier: Apache-2.0
 *
 >
 */

/* This file is the framework route entry. You do not need to modify this basic loading logic. All files in the subdirectory are for your own business route logic. These files can be deleted or modified, and you can also add new files there.
 *
 *
 *
 <
 */
namespace appx\route;

use hx\c_base_class;
use appx\framework\i_route;
use hx\fun\stdclass\c_stdclass;

class route extends c_base_class implements i_route
{

	public function get (): array
	{
		$ar = [];foreach ($this->get_more() as $k => $v)
		{
			$ar = array_merge($ar,$v);
		}
		return $ar;
	}

	private function get_more (): array
	{
		$ar = [];foreach (glob(__DIR__ . '/more/*.php') as $f)
		{
			$ar_one = (static function (string $f): array{ return include (gf()->fun->file->realpath($f)); })($f);if (is_array($ar_one))
			{
				$ar[] = $ar_one;
			}
		}
		return $ar;
	}
}
/*
 >
 */