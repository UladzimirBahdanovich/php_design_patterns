<?php

namespace App\Libraries\DesignPatterns\SimpleFactory\Interfaces;

/**
 * Interface SimpleFactoryInterface
 * @package App\Libraries\DesignPatterns\SimpleFactory\Interfaces
 */
interface SimpleFactoryInterface
{

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createText(string $name, string $id, string $class): InputInterface;

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createTextarea(string $name, string $id, string $class): InputInterface;

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createCheckbox(string $name, string $id, string $class): InputInterface;

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function createSelect(string $name, string $id, string $class): InputInterface;


}
