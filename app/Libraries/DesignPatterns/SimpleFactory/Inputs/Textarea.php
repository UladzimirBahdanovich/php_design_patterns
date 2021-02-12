<?php


namespace App\Libraries\DesignPatterns\SimpleFactory\Inputs;


use App\Libraries\DesignPatterns\SimpleFactory\Interfaces\InputInterface;

/**
 * Class Textarea
 * @package App\Libraries\DesignPatterns\SimpleFactory\Inputs
 */
class Textarea implements InputInterface
{

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $class;

    /**
     * Text constructor.
     * @param string $name
     * @param string $id
     * @param string $class
     */
    public function __construct(string $name, string $id, string $class)
    {
        $this->name = $name;
        $this->id = $id;
        $this->class = $class;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return 'textarea';
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param bool $return
     * @return string
     */
    public function render($return = false): string
    {
        $html = '<textarea " name="' . $this->getName() . '" id="' . $this->getId() . '" class="' . $this->getClass() . '"></textarea>';
        if (!$return) {
            echo $html;
        }
        return $html;
    }
}
