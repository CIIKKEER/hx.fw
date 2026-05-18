# hx.fw
>Based on the ciikkeer/hx PHP project it aims to create an ultra-lightweight high-performance zero-dependency dynamic property service tree framework

# Summary of framework basic layout
>/app.x/api ................. All application projects will be placed in this directory. Each individual subdirectory in the folder will be treated as a single application project
>>demo

>>...

>>...

>>...

>>...

>/config/c_config_kv.php ...  You can configure public const variable value that include mysql configuration environment file path and JWT component default key string or other 

>/config/c_config.php ....... You can add additional logic in the file's init function

>/route

>>more ...................... All the route configuration files in this subdirectory will serve as part of the framework's routing system.



#configuration file demo :

#env/env.config : 
<?php
        /* this is the content of a standard log system configuration file, which directly returns a PHP array when included in the execution context of the parent file.
         *
         */
         return [
                      'log' => [
                                    # the log system uses a local file storage driver
                                    #
                                    #
                                    'file' => [
                                                 'path'              => __DIR__.'/../tmp.x/log.x/log.txt'                          , # required
                                                 'enable_file_lock'  => false                                                      , # required : a true file lock flag makes the framework use an OS file lock to protect the shared writing data
                                             ]
                                    ,

                                    # the JSON field log_data_table of this array is a standard mapping relation, in which each item is mapped to an actual table name, a log level, and a log data field in your database.
                                    #
                                    #
                                    'db' => [
                                                      'mysql' => [
                                                                      'default' => [
                                                                                      'hostname'                      => "x.x.x.x"                              , # required
                                                                                      'port'                          => 3306                                   , # required
                                                                                      'username'                      => "root"                                 , # required
                                                                                      'password'                      => 'xxxxxxxxxxxxxxxxxxxxxx'               , # required
                                                                                      'database'                      => "bbb"                                  , # required

                                                                                      # mapping log table field name
                                                                                      #
                                                                                      #
                                                                                      'log_data_table'                => [
                                                                                                                              'table'         => 'log'          , # required
                                                                                                                              'log_level'     => 'log_level'    , # required
                                                                                                                              'log_data'      => 'log_data'     , # required
                                                                                                                         ],
                                                                                   ],
                                                                 ],
                                              ]

                                ]
               ];

#env/env.json :
{
        "mysql" :
        {
                "default" :
                {
                        "hostname"      : "x.x",
                        "port"          : 3306,
                        "username"      : "root",
                        "password"      : "",
                        "database"  : "bbb"
                }
                ,
                "aaa" :
                {
                        "hostname"      : "x.x",
                        "port"          : 3306,
                        "username"      : "root",
                        "password"      : "sql",
                        "database"  : "aaaaaaaa"
                }
                ,
                "bbb" :
                {
                        "hostname"      : "x.x",
                        "port"          : 53306,
                        "username"      : "root",
                        "password"      : "sql",
                        "database"  : "bbb"
                }
        }
        ,
        "redis":
        {
                "default":
                {
                        "scheme":"tcp",
                        "host":"x.x",
                        "port":6379,
                        "password":"",
                        "database":0
                }
        }
        ,
        "jwt":
        {
                "key":"you.can.modify.this.content.to.server.as.new.key.string.for.the.jwt.component"
        }
}

