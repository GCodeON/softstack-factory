<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 6/12/18
 * Time: 1:58 PM
 */

namespace App;


class DataLoader
{
    private static function support()
    {
        return Support::whereNotNull("published_at")
            ->whereNull("deleted_at")
            ->orderBy("created_at", "desc")->get();
    }

    public static function fetch($class)
    {
        switch ($class){
            case "Support":
                return self::support();
                break;
        }
    }

}