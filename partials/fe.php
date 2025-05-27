<?php

if (file_exists(".env")) {
    $env_file = fopen(".env", 'r');

    if ($env_file) {
        while (($line = fgets($env_file)) !== false) {
            $line = trim($line);
            

            if ($line && strpos($line, '=') !== false) {
                list($key, $value) = explode('=', $line, 2);

                $key    = trim($key);
                $value  = trim($value);

                if (!getenv($key)) {
                    putenv("$key=$value");
                    $_ENV[$key]     = $value;
                }

            }
        }
        fclose($env_file);
    }
}

define('mainpage', getenv('mainpage'));
define('rootpath', getenv('rootpath'));

define('pages', '_frontend/pages');
define('_backend', '_backend');
define('assets', '_frontend/assets');

define('SUCCESS', getenv('success_code'));




if(! function_exists('page')){
    function page(string $path=""){
        if($path == "" || $path == null){
            return pages;
        }else{
            return pages."/".$path;
        }
    }
}
if(! function_exists('_backend')){
    function _backend(string $path=""){
        if($path == "" || $path == null){
            return _backend;
        }else{
            return _backend."/".$path;
        }
    }
}
if(! function_exists('assets')){
    function assets(string $path=""){
        if($path == "" || $path == null){
            return assets;
        }else{
            return assets."/".$path;
        }
    }
}

if(! function_exists('href')){
    function href(string $path=""){
        if($path == "" || $path == null){
            header('location: '.rootpath);
        }else{
            header('location: '.rootpath."/?page=$path");
        }  
    }
}

if(! function_exists('redirect')){
    function redirect(string $path="", int $time=0){
        header("refresh: $time; url=".rootpath."/?page=$path");
    }
}

if(! function_exists("write_sql_log")){
    function write_sql_log($message){
            $setting = getenv('sql_logs');
            if($setting){
                $filename = "sql_".date("Y-M-d")."_yros.log";
                $logfile =  "partials/app/dblogs/". $filename;
                $formatted_message = "[" . date('Y-m-d H:i:s') . "] " . $message . PHP_EOL;
                file_put_contents($logfile, $formatted_message, FILE_APPEND);
            }  
    }
}

if(! function_exists("write_sql_error")){
    function write_sql_error($message, string $query = ""){;
        $setting = getenv('sql_errors');
        if($setting == true){
            $logfile = "partials/app/db_errors/sqlerrors.txt";
    
            $message = preg_replace('/\s+/', ' ', trim($message));
            $query = preg_replace('/\s+/', ' ', trim($query));
    
            $formatted_message = "[" . date('Y-m-d H:i:s') . "] " . $message . " ==>> QUERY: " . $query . PHP_EOL.PHP_EOL;
            file_put_contents($logfile, $formatted_message, FILE_APPEND);
        }
    }
}

if(! function_exists("include_page")){
    function include_page(string $page){
        if(file_exists("_frontend/includes/$page")){
            include "_frontend/includes/$page";
        }else{
            include "_frontend/errors/include404.php";
        }
    }
}
if(! function_exists("display_error111")){
    function display_error111(string $message){
        $str = new Exception($message);
        $arr = explode("#", $str);
        $err = [];
        foreach($arr as $r){
            if (strpos($r, '\app\system\helpers') !== false) {
                
            }elseif(strpos($r, '\app\system') !== false){

            }elseif(strpos($r, '\index.php(11): require_once(') !== false){

            }
            else{
                $err[] = $r;
            }
        }
        $ff = implode("\n", $err);
        $final = $message." ".$ff;
        return $final;
    }
}

if(! function_exists("array_is_multidimensional")){
    function array_is_multidimensional(array $arr){
        foreach ($arr as $element) {
            if (is_array($element)) {
                return true; 
            }
        }
        return false;
    }
}




?>

