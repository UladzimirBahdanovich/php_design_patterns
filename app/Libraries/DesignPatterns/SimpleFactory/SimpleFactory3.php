<?php


namespace App\Libraries\DesignPatterns\SimpleFactory;


use App\Libraries\DesignPatterns\SimpleFactory\Inputs\Checkbox;
use App\Libraries\DesignPatterns\SimpleFactory\Inputs\Select;
use App\Libraries\DesignPatterns\SimpleFactory\Inputs\Text;
use App\Libraries\DesignPatterns\SimpleFactory\Inputs\Textarea;
use App\Libraries\DesignPatterns\SimpleFactory\Interfaces\InputInterface;
use App\Libraries\DesignPatterns\SimpleFactory\Interfaces\SimpleFactory2Interface;
use Exception;

/**
 * Class SimpleFactory2
 * @package App\Libraries\DesignPatterns\SimpleFactory
 */
class SimpleFactory3 implements SimpleFactory2Interface
{

    /**
     * @param string $type
     * @param string $name
     * @param string $id
     * @param string $class
     * @return InputInterface
     * @throws Exception
     */
    public function create(string $type, string $name, string $id, string $class): InputInterface
    {
        $class = 'App\Libraries\DesignPatterns\SimpleFactory\Inputs\\' . ucfirst($type);
        if (!class_exists($class)) {
            throw new Exception("Missing format class.");
        }
        return new $class($name, $id, $class);
    }
}
