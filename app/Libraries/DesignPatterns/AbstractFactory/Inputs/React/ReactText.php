<?php


namespace App\Libraries\DesignPatterns\AbstractFactory\Inputs\React;


use App\Libraries\DesignPatterns\AbstractFactory\Interfaces\InputInterface;

/**
 * Class ReactText
 * @package App\Libraries\DesignPatterns\AbstractFactory\Inputs\React
 */
class ReactText implements InputInterface
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
        return 'text';
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
        $html = '<label> This is React Input:';
        $html .= '<input value={this.state.value} onChange={this.handleChange} type="' . $this->getType() . '" name="' . $this->getName() . '" id="' . $this->getId() . '" class="' . $this->getClass() . '">';
        $html .= '</label>';
        if (!$return) {
            echo $html;
        }
        return $html;
    }
}
