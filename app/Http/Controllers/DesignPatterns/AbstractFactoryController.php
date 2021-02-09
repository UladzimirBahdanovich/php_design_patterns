<?php

namespace App\Http\Controllers\DesignPatterns;

use App\Http\Controllers\Controller;
use App\Libraries\DesignPatterns\AbstractFactory\Factories\BootstrapInputFactory;
use App\Libraries\DesignPatterns\AbstractFactory\Factories\ReactInputFactory;
use App\Libraries\DesignPatterns\AbstractFactory\Factories\SimpleInputFactory;
use Illuminate\Http\Request;


class AbstractFactoryController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return void
     */
    public function __invoke(Request $request)
    {
        $factories = [];
        $factories[] = new SimpleInputFactory();
        $factories[] = new BootstrapInputFactory();
        $factories[] = new ReactInputFactory();
        foreach ($factories as $factory) {
            echo '<h3>' . ucfirst($factory->getType()) . ' factory inputs:</h3>';
            $factory->createText($factory->getType() . '_name', $factory->getType() . '_id', $factory->getType() . '_class')->render();
            echo '<br>';
            $factory->createTextarea($factory->getType() . '_name', $factory->getType() . '_id', $factory->getType() . '_class')->render();
            echo '<br>';
        }
    }

}
