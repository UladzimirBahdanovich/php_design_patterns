<?php


namespace App\Libraries\DesignPatterns\AbstractFactory\Inputs\Bootstrap;


use App\Libraries\DesignPatterns\AbstractFactory\Interfaces\InputInterface;

/**
 * Class BootstrapText
 * @package App\Libraries\DesignPatterns\AbstractFactory\Inputs\Bootstrap
 */
class BootstrapText implements InputInterface
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
        $html = '<div class="form-group">';
        $html .= '<label for="' . $this->getName() . '">This is Bootstrap input:</label>';
        $html .= '<input type="' . $this->getType() . '" class="form-control ' . $this->getClass() . '" id="' . $this->getId() . '" placeholder="' . $this->getName() . '">';
        $html .= '</div>';
        if (!$return) {
            echo $html;
        }
        return $html;
    }
}
