
<?php

class App
{

    private static $_request_uri = URL;

    private static $_url ;

    private static $_uri_len;

    private static $_id;

    private static $_dir = '';

    private static $_param;

    public static function init( $param = null )
    {
        if ( !empty(self::$_request_uri) ) {
            self::$_url = explode('/', trim(self::$_request_uri, '/'));
            self::$_uri_len = count( self::$_url );
            //print_r( self::$_uri_len );
        }

        if ( self::$_uri_len > 1 )
        {
            $param = self::$_url[1];
            self::$_param = $param;
            $file = $param . '.php';
            if ( self::$_dir == '' )
            {
                file_exists($file) ? include_once $param . '.php': die('the file don\'t exist');
            }
            else
            {
                if ( is_dir(self::$_dir)  )
                {
                    file_exists(self::$_dir . '/' . $file) ? include_once self::$_dir . '/' . $param . '.php' : die('the file don\'t exist');
                }
                else
                {
                    die( "Dir with name " . self::$_dir . " don't exist" );
                }
            }
        }

    }

    public static function dir_name( $val = '' )
    {
         if ( $val !== '' )
         {
             self::$_dir = $val;
         }
    }

    public static function get_id()
    {
        if ( self::$_uri_len > 2   )
        {
            if ( self::$_url[2] !== '' && self::$_param != '' && file_exists(self::$_param.'.php') )
            {
                self::$_id  = self::$_url[2];
                return self::$_id ;
            }
            else
            {
                //die('The ID is not correct!');
            }
        }
        else
        {
            //die('No ID !');
        }
    }

    public static function base_url()
    {
        return self::$_param;
    }

}
