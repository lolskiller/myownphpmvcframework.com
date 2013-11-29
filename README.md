myownphpmvcframework.com
========================

Create your own PHP MVC Framework from scratch

<VirtualHost *:80>
    ServerName myownphpmvcframework.com
    DocumentRoot /path_to/myownphpmvcframework.com/public
    ErrorLog "/path_to/myownphpmvcframework.com/logs/error_log"
    CustomLog "/path_to/myownphpmvcframework.com/logs/access_log" common

    #php_value xdebug.profiler_output_dir /path_to/myownphpmvcframework.com
    #php_value include_path .:/path_to/ZendFramework2/library

    #SetEnv ZF2_PATH /path_to/ZendFramework2/library
    SetEnv APPLICATION_ENV "development"

    <Directory /path_to/myownphpmvcframework.com/public/>
        Options Indexes FollowSymLinks
        DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>