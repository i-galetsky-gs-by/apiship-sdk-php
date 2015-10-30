<?php

namespace Apiship;

use Apiship\Adapter\AdapterInterface;
use Apiship\Api\Users;
use Apiship\Api\Orders;
use Apiship\Api\Calculator;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class Apiship
{
    /**
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * @param AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @return Users
     */
    public function users()
    {
        return new Users($this->adapter);
    }

    /**
     * @return Orders
     */
    public function orders()
    {
        return new Orders($this->adapter);
    }

    /**
     * @return Calculator
     */
    public function calculator()
    {
        return new Calculator($this->adapter);
    }
}
