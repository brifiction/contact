<?php

namespace brifiction\EntwurfhausContact\Helpers;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{

    public static function shout(string $string)
    {
        return strtoupper($string);
    }

}
