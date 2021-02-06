<?php


namespace App\Libraries\DesignPatterns\FactoryMethod\Inputs;


use App\Libraries\DesignPatterns\FactoryMethod\Interfaces\InputInterface;

/**
 * Class Select
 * @package App\Libraries\DesignPatterns\FactoryMethod\Inputs
 */
class Select implements InputInterface
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
        return 'select';
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
        $html = '<select name="' . $this->getName() . '" id="' . $this->getId() . '" class="' . $this->getClass() . '">';
        $html .= '<option value="1">One</option>';
        $html .= '<option value="2">Two</option>';
        $html .= '<option value="3">Three</option>';
        $html .= '<option value="4">Five</option>';
        $html .= '</select>';
        if (!$return) {
            echo $html;
        }
        return $html;
    }
}
