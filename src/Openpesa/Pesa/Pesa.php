<?php

namespace Openpesa\Pesa;

use Openpesa\SDK\Pesa as PesaSDK;
use Illuminate\Support\Traits\Macroable;


class Pesa
{
    use Macroable;

    private $pesa;

    /**
     * @param Pesa $pesa
     */
    function __construct(PesaSDK $pesa)
    {
        $this->pesa = $pesa;
    }


    /**
     *{@inheritdoc}
     */
    public function get_session()
    {
        return $this->pesa->get_session();
    }

    /**
     * {@inheritdoc}
     */
    public function query($data, $session = null)
    {
        return $this->pesa->query($data, $session);
    }

    /**
     *  {@inheritdoc}
     */
    public function c2b($data, $session = null)
    {

        return $this->pesa->c2b($data, $session);
    }

    /**
     *{@inheritdoc}
     */
    public function b2c($data, $session = null)
    {

        return $this->pesa->b2c($data, $session);
    }


    /**
     *   {@inheritdoc}
     */
    public function b2b($data, $session = null)
    {
        return $this->pesa->b2b($data, $session);
    }

    /**
     * {@inheritdoc}
     */
    public function reverse($data, $session = null)
    {

        return $this->pesa->reverse($data, $session);
    }

    /**
     *
     *{@inheritdoc}
     */
    public function debit_create($data, $session = null)
    {

        return $this->pesa->debit_create($data, $session);
    }

    /**
     * {@inheritdoc}
     */
    public function debit_payment($data, $session = null)
    {

        return $this->pesa->debit_payment($data, $session);
    }
}
