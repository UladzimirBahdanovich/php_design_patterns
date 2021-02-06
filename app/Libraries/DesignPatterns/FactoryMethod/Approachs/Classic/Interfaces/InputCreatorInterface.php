<?php

namespace App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Interfaces;

/**
 * Interface InputCreatorInterface
 * @package App\Libraries\DesignPatterns\FactoryMethod\Interfaces
 */
interface InputCreatorInterface
{
    /**
     * Factory method
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function create(string $name, string $id, string $class): InputInterface;
}
