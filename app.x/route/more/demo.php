<?php
use appx\api\demo\controller\test\test;

/*<
 * 
 */
return 	[
			'/hx/about' 			=> test::new()->hx()->about(...),
			'/user/register'		=> test::new()->user()->register(...),
			'/user/add'				=> test::new()->user()->add(),
	
			'/aaa/add'				=> test::new()->aaa()->add(),
			'/aaa/get_detail_info'	=> test::new()->aaa()->get_detail_info(),
			
			'/bbb/add'				=> test::new()->bbb()->add(),
			'/bbb/get_info_by_id'	=> test::new()->bbb()->get_info_by_id(),
			'/bbb/get_detail_info'	=> test::new()->bbb()->get_detail_info(...),
	
	
		];
/* > */