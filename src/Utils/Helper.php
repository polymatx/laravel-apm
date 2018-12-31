<?php
/**
 * Created by PhpStorm.
 * User: faridcs
 * Date: 2018-12-31
 * Time: 10:59
 */

namespace faridcs\ApmLaravel\Utils;


class Helper
{
    /**
     * Provide access to optional objects.
     *
     * @param  mixed  $value
     * @param  callable|null  $callback
     * @return mixed
     */
    public static function optional($value = null, callable $callback = null)
    {
        if (is_null($callback)) {
            return new \faridcs\ApmLaravel\Utils\Optional($value);
        } elseif (! is_null($value)) {
            return $callback($value);
        }
    }
}