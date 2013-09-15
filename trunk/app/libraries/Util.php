<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 9/11/13
 * Time: 12:49 AM
 * To change this template use File | Settings | File Templates.
 */

class Util
{

    public static function add_date($date, $day = 0, $mth = 0, $yr = 0)
    {
        $cd = strtotime($date);
        $newDate = date('Y-m-d h:i:s', mktime(date('h', $cd),
            date('i', $cd), date('s', $cd), date('m', $cd) + $mth,
            date('d', $cd) + $day, date('Y', $cd) + $yr));
        return $newDate;
    }

    public static function getYearFromDate($date)
    {
        $timestamp = strtotime($date);
        return date('Y', $timestamp);
    }
}