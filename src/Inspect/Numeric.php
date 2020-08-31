<?php

namespace ElegantTechnologies\Validations\Inspect;

class Numeric
{
    /* 2/20' This was born before PHP had parameter types.  Seems like they should go in this class somewhere
    But that would throw an error, which is not what we want, sooo.  We'll wait for a specific use case.
    */
    public static function IsInteger($value)
    { //http://www.php.net/manual/en/function.is-int.php#82857
        //https://stackoverflow.com/a/31070960/93933
        /*
        $int = 999999999999999999;
        $min = 1;
        $max = 2147483647;

        if (filter_var($int, FILTER_VALIDATE_INT, array("options"=>
                array("min_range"=>$min, "max_range"=>$max))) === false) {
            echo("Variable value is not within the legal range");
        } else {
            echo("Variable value is within the legal range");
        }
    */
        //return is_int(filter_var($input, FILTER_VALIDATE_INT));//http://php.net/manual/en/function.ctype-digit.php#118121

        #if ($value ==
        return
            is_numeric($value) &&
            is_int(filter_var($value, FILTER_VALIDATE_INT))
            && (strpos($value . '', '.') === false) // not catch 1.0
            && (strpos($value, '+') === false)
            && ($value !== '-0');//https://stackoverflow.com/a/8981883/93933

        /*  if (is_array($input)) {
              return false;
          }
          return(ctype_digit(strval($input)));
        */
    }


    public static function IsWhole($input)
    { //http://www.php.net/manual/en/function.is-int.php#82857
        if (static::IsInteger($input) && $input >= 0) {
            return true;
        } else {
            return false;
        }
    }

    static function IsDecimal($val) //http://stackoverflow.com/a/6772657/93933
    {
        return is_numeric($val) && floor($val) != $val;
    }
}