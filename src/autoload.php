<?php
namespace XCC ;
class XAutoload
{
    static $index_path ;
    static public function setup($indexPath=null)
    {

        if(empty(static::$index_path))
        {

            static::$index_path = !empty($indexPath) ? $indexPath : getenv('INDEX_PATH') ;
        }
        if(! empty(static::$index_path))
        {
            spl_autoload_register(function(){ static::index_load() ; });
            spl_autoload_register(function($cls) { return static::class_load($cls) ;} );
        }
    }

    static function index_load()
    {
        static $index_load = false ;
        if ($index_load ) { return ; }
        $indexRoot = static::$index_path ;
        pylon_dict_data("$indexRoot/_autoload_clspath.idx","","");
        pylon_dict_data("$indexRoot/_autoload_clsname.idx","","");
        $index_load = true ;
        return false ;
    }
    static function class_load($classname)
    {
        $key       = $classname ;
        $path      = pylon_dict_find($key);
        if($path  != NULL)
        {
            include_once("$path");
            return true ;
        }
    }
}
XAutoload::setup() ;
