<?php

namespace App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Interfaces;

/**
 * Interface InputInterface
 * @package App\Libraries\DesignPatterns\FactoryMethod\Interfaces
 */
interface InputInterface
{

    /**
     * InputInterface constructor.
     * @param string $name
     * @param string $id
     * @param string $class
     */
    public function __construct(string $name, string $id, string $class);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * Factory Method
     * @param bool $return
     * @return string
     */
    public function render($return = false): string;

}
