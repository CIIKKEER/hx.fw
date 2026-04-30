<?php
namespace appx\config;

/** <
 * 
 * @author Administrator
 *
 */
enum e_config : string
{
	/* it is a file path that contains the database and Redis configuration information
	 *
	 */
	case mysql_config_env_file_path 					= __DIR__ . '/../../env/env.json';
	case jwt_encoder_and_decoder_default_key_string 	= 'you.can.modify.this.content.to.server.as.new.key.string.for.the.jwt.enponent';
}
/* > */