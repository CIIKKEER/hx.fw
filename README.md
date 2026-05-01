# hx.fw
>Based on the ciikkeer/hx PHP project it aims to create an ultra-lightweight high-performance zero-dependency dynamic property service tree framework

# Summary of framework basic layout
>/app.x/api ... All application projects will be placed in this directory. Each individual subdirectory in the folder will be treated as a single application project
>>demo

>>...

>>...

>>...

>>...

>/config/c_config_kv.php ... You can configure public const variable value that include mysql configuration environment file path and JWT component default key string or other 

>/config/c_config.php ... You can add additional logic in the file's init function

>/route

>>more ... All the route configuration files in this subdirectory will serve as part of the framework's routing system.