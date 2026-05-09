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
use hx\route\i_request;
use hx\route\i_response;

/*<
 *
 */
return 	[
			'/test/about' => function (i_request $r,i_response $s) { return $s->success('test.ok');}
		];
/* > */