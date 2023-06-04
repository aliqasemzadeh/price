<?php

class Format
{
    public static function price($number)
    {
        return rtrim(rtrim(sprintf("%10.8f", $number), '0'), '.');
    }

    public static function formatFloat($number , $float)
    {
        return rtrim(rtrim(sprintf("%10.{$float}f", $number), '0'), '.');
    }

    public static function formatPrice($number , $float)
    {
        return number_format(rtrim(rtrim(sprintf("%10.{$float}f", $number), '0'), '.'));
    }
}
