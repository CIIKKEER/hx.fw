<?php
use appx\api\demo\controller\test\test;

/*<
 * 
 */
return 	[
			'/user/add' => test::new()->user()->add(),
			'/user/del' => test::new()->user()->del(),
		];
/* > */