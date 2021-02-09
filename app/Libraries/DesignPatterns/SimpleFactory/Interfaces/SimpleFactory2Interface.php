<?php

namespace App\Libraries\DesignPatterns\SimpleFactory\Interfaces;

/**
 * Interface SimpleFactoryInterface
 * @package App\Libraries\DesignPatterns\SimpleFactory\Interfaces
 */
interface SimpleFactory2Interface
{

    /**
     * @param string $type
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function create(string $type, string $name, string $id, string $class): InputInterface;

}
