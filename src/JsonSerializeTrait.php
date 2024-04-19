<?php

namespace WSD\BrightSignApi;

trait JsonSerializeTrait {

    /**
     * Specify data which should be serialized to JSON
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        $vars = get_object_vars($this);
        foreach ($vars as &$var) {
            if ($var instanceof \JsonSerializable) {
                $var = $var->jsonSerialize();
            } else if ($var instanceof \Countable) {
                $out = [];
                for ($i = 0; $i < $var->count(); $i++) {
                    $s = $var[$i];
                    if ($s instanceof \JsonSerializable) {
                        $out[$i] = $s->jsonSerialize();
                    }
                }
                $var = $out;
            }
        }
        if (method_exists($this, '__addJsonData')) {
            $vars = array_merge($vars, $this->__addJsonData());
        }
        return $vars;
    }
}