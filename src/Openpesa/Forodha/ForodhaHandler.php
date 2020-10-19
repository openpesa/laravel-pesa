<?php

namespace Openpesa\Forodha;

use Illuminate\Support\Traits\Macroable;
use Openpesa\SDK\Forodha as Pesa;

class ForodhaHandler
{
    use Macroable;

    private $forodha;

    /**
     * @param Pesa $forodha
     */
    function __construct(Pesa $forodha)
    {
        $this->forodha = $forodha;
    }

    /**
     *
     * @param $type
     * @param $data
     * @return $this
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function transact($type, $data)
    {
        return $this->forodha->transact($type, $data);
    }

}
