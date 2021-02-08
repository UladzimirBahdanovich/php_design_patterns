<?php


namespace App\Libraries\DesignPatterns\FactoryMethod\Approachs\NewApproach\Creators;

use App\Libraries\DesignPatterns\FactoryMethod\Approachs\NewApproach\Interfaces\InputCreatorInterface;
use App\Libraries\DesignPatterns\FactoryMethod\Approachs\NewApproach\Interfaces\InputInterface;

/**
 * Class Creator
 * @package App\Libraries\DesignPatterns\FactoryMethod\Approachs\NewApproach\Creators
 */
class Creator implements InputCreatorInterface
{

    /**
     * @param string $type
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     */
    public function create(string $type, string $name, string $id, string $class): InputInterface
    {
        $className = "App\Libraries\DesignPatterns\FactoryMethod\Approachs\NewApproach\Inputs\\" . $type;
        return new $className($name, $id, $class);
    }
}
