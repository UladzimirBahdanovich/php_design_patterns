<?php

namespace App\Libraries\DesignPatterns\FactoryMethod\Approachs\NewApproach\Interfaces;

/**
 * Interface InputCreatorInterface
 * @package App\Libraries\DesignPatterns\FactoryMethod\Interfaces
 */
interface InputCreatorInterface
{
    /**
     * Factory method
     * @param string $type
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function create(string $type, string $name, string $id, string $class): InputInterface;
}
