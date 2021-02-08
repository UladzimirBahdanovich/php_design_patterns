<?php

namespace App\Http\Controllers\DesignPatterns;

use App\Http\Controllers\Controller;
use App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Creators\CheckboxCreator;
use App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Creators\SelectCreator;
use App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Creators\TextareaCreator;
use App\Libraries\DesignPatterns\FactoryMethod\Approachs\Classic\Creators\TextCreator;
use App\Libraries\DesignPatterns\FactoryMethod\Approachs\NewApproach\Creators\Creator;
use Illuminate\Http\Request;


class FactoryMethodController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return void
     */
    public function classicApproach(Request $request)
    {

        echo 'Фабричный метод (англ. Factory Method), или виртуальный конструктор (англ. Virtual Constructor) — порождающий шаблон проектирования, предоставляющий подклассам (дочерним классам) интерфейс для создания экземпляров некоторого класса. В момент создания наследники могут определить, какой класс создавать. Иными словами, данный шаблон делегирует создание объектов наследникам родительского класса. Это позволяет использовать в коде программы не специфические классы, а манипулировать абстрактными объектами на более высоком уровне.';
        echo '<br>';
        // An array of creators
        $creators = [new TextCreator(), new CheckboxCreator(), new TextareaCreator(), new SelectCreator()];
        // Iterate over creators and render inputs
        $counter = 1;
        foreach ($creators as $creator) {
            $name = get_class($creator) . '_name';
            $class = get_class($creator) . '_class';
            $id = get_class($creator) . '_id';
            $creator->create($name, $id, $class)->render();
            echo '<br>';
            $counter++;
        }
    }

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return void
     */
    public function newApproach(Request $request)
    {

        echo 'Фабричный метод (англ. Factory Method), или виртуальный конструктор (англ. Virtual Constructor) — порождающий шаблон проектирования, предоставляющий подклассам (дочерним классам) интерфейс для создания экземпляров некоторого класса. В момент создания наследники могут определить, какой класс создавать. Иными словами, данный шаблон делегирует создание объектов наследникам родительского класса. Это позволяет использовать в коде программы не специфические классы, а манипулировать абстрактными объектами на более высоком уровне.';
        echo '<br>';
        $inputs = [
            'Text',
            'Textarea',
            'Checkbox',
            'Select'
        ];
        $creator = new Creator();
        foreach ($inputs as $input) {
            $input = $creator->create($input, $input . '_name', $input . 'id', $input . 'text-class');
            $input->render();
            echo '<br>';
        }
    }
}
