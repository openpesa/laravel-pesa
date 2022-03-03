<?php

if (!function_exists('pesa')) {

    /**
     * Get the pesa instance.
     *
     * @return \Openpesa\SDK\Pesa
     */
    function pesa()
    {
        return app('pesa');
    }
}
