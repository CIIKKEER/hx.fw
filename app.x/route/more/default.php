<?php
use hx\route\i_request;
use hx\route\i_response;

/*<
 *
 */
return 	[
			'test/about' => function (i_request $r,i_response $s) { return $s->success('test.ok');}
		];
/* > */