<?php
/* Copyright 2026 BREEZZEER
 * SPDX-License-Identifier: Apache-2.0
 *
 *
 *
 */
namespace appx\config;

class c_config_kv
{
	/* it is a file path that contains the database and Redis configuration information
	 <
	 */
	public const mysql_config_env_file_path 								= __DIR__ . '/../../env/env.json';

	/* file container the default key string of the JWT component
	 *
	 */
	public const jwt_encoder_and_decoder_default_key_string_env_file_path 	= __DIR__ . '/../../env/env.json';
	
	/*
	 >
	 */
}