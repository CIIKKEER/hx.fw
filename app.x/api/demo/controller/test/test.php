<?php
namespace appx\api\demo\controller\test;

use hx\route\i_request;
use hx\route\i_response;
use hx\c_base_class;
use hx\route\c_route;
use hx\route\i_route_action_with_invoke;
use hx\cache\redis\i_redis_type;
use appx\api\demo\model\m_test;
use appx\api\demo\model\aaa;
use appx\framework\c_controller;

class test extends c_controller
{

	public function hx ()
	{
		return new class() extends c_controller
		{

			public function about (i_request $r , i_response $s)
			{
				return $s->success(gf()->version->about());
			}
		};
	}

	public function user ()
	{
		return new class() extends c_controller
		{

			public function detail (i_request $r , i_response $s)
			{
				return $s->success(__METHOD__);
			}

			public function info ()
			{
				return new class() implements i_route_action_with_invoke
				{

					public function on_invoke (i_request $r , i_response $s)
					{
						return $s->success([ __METHOD__]);
					}
				};
			}

			public function register (i_request $r , i_response $s)
			{
				return $s->success($this->hx->fun->jwt->set_key('xxxxxxxxxx11111111116666666666666xxxxxx')
					->encoder_with_key([ 'aa' => new \stdClass(),1111111111111]));
			}

			public function login (i_request $r , i_response $s)
			{
				return $s->success($this->fun->jwt->set_key('xxxxxxxxxx11111111116666666666666xxxxxx')
					->decoder($r->get('jwt')));
			}

			public function del ()
			{
				return new class() implements i_route_action_with_invoke
				{

					public function on_invoke (i_request $r , i_response $s)
					{
						/** 
						 * 
						 * @var i_redis_type $rt
						 */
						$rt = gf()->cache->redis->open_with_json_file(__DIR__ . '/../../../../../env/env.json')->connect();
						$rt->s()->set('xxx','xxxxxxxxxxx');
						return $s->success([ __METHOD__,$rt->s()
							->get('xxx')]);
					}
				};
			}

			public function add ()
			{
				return new class() implements i_route_action_with_invoke
				{

					public function on_invoke (i_request $r , i_response $s)
					{
						return $s->error(__METHOD__);
					}
				};
			}

			public function modify ()
			{
				return new class() implements i_route_action_with_invoke
				{

					public function on_invoke (i_request $r , i_response $s)
					{
						return $s->success([ m_test::new()->about(),aaa::new()->about()]);
					}
				};
			}
		};
	}
}