<?php


namespace App\Libraries\DesignPatterns\FactoryMethod\Approachs\NewApproach\Inputs;


use App\Libraries\DesignPatterns\FactoryMethod\Approachs\NewApproach\Interfaces\InputInterface;

/**
 * Class Checkbox
 * @package App\Libraries\DesignPatterns\FactoryMethod\Approachs\NewApproach\Inputs
 */
class Checkbox implements InputInterface
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
        return 'checkbox';
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
        $html = '<input type="' . $this->getType() . '" name="' . $this->getName() . '" id="' . $this->getId() . '" class="' . $this->getClass() . '">';
        if (!$return) {
            echo $html;
        }
        return $html;
    }
}
