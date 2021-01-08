<?php

namespace ByTIC\Html\Tags;

/**
 * Class Input
 * @package ByTIC\Html\Tags
 */
class Input extends AbstractTag
{
    /**
     * @param $name
     * @param null $value
     * @param array $options
     * @return mixed
     */
    public static function hidden($name, $value = null, $options = [])
    {
        return static::input('hidden', $name, $value, $options);
    }

    /**
     * @param $type
     * @param null $name
     * @param null $value
     * @param array $options
     * @return mixed
     */
    protected static function input($type, $name = null, $value = null, $options = []) {

        if (!isset($options['type'])) {
            $options['type'] = $type;
        }
        $options['name'] = $name;
        $options['value'] = $value === null ? null : (string) $value;
        return static::tag('input', '', $options);
    }
}
