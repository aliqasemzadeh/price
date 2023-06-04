<?php
namespace AliQasemzadeh\Price;
class Format
{
    public static function price($number)
    {
        return rtrim(rtrim(sprintf("%10.8f", $number), '0'), '.');
    }

    public static function formatFloat($number , $precision = 8)
    {
        return rtrim(rtrim(sprintf("%10.{$precision}f", $number), '0'), '.');
    }

    public static function formatPrice($number , $precision = 8)
    {
        $numberArray = explode('.', $number);

        return rtrim(number_format($numberArray[0]) . "." . sprintf("%8f", $numberArray[1]), '0');
    }
}
