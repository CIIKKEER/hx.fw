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
use hx\db\orm\c_orm;
use appx\api\demo\model\bbb\bbb;

class test extends c_controller
{

	public function bbb ()
	{
		return new class() extends c_base_class
		{

			public function get_detail_info(i_request $r,i_response $s)
			{
				return $s->success(bbb::new()->get_detail_info());
			}
			public function get_info_by_id ()
			{
				return new class() extends c_base_class implements i_route_action_with_invoke
				{

					public function on_invoke (i_request $r , i_response $s)
					{
						
						return $s->success(bbb::new()->get_info_by_id($r->get('id')));
					}
				};
			}

			public function add ()
			{
				return new class() extends c_base_class implements i_route_action_with_invoke
				{

					public function on_invoke (i_request $r , i_response $s)
					{
						return bbb::new()->add($r->raw_body_content()
							->to_object()
							->set('user_address','aaaaaaaaaaaaadress.' . gf()->fun->cipher->rand->uuid()
							->v4())) === true ? $s->success('bbb.add.ok') : $s->error('bbb.add.error');
					}
				};
			}
		};
	}

	public function aaa ()
	{
		return new class() extends c_controller
		{

			public function add ()
			{
				return new class() extends c_base_class implements i_route_action_with_invoke
				{

					public function on_invoke (i_request $r , i_response $s)
					{
						return $s->success(aaa::new()->add());
					}
				};
			}

			public function get_detail_info ()
			{
				return new class() extends c_base_class implements i_route_action_with_invoke
				{

					public function on_invoke (i_request $r , i_response $s)
					{
						return $s->success(aaa::new()->get_detail_info());
					}
				};
			}
		};
	}

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
					->encoder([ 'aa' => new \stdClass(),1111111111111]));
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
						return $s->success('user.add.ok');
					}
				};
			}

			public function modify ()
			{
				return new class() implements i_route_action_with_invoke
				{

					public function on_invoke (i_request $r , i_response $s)
					{
						return $s->success(__METHOD__);
					}
				};
			}
		};
	}
}