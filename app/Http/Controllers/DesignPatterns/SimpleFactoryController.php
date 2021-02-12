<?php

namespace App\Http\Controllers\DesignPatterns;

use App\Http\Controllers\Controller;
use App\Libraries\DesignPatterns\SimpleFactory\SimpleFactory;
use App\Libraries\DesignPatterns\SimpleFactory\SimpleFactory2;
use Exception;
use Illuminate\Http\Request;


class SimpleFactoryController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return void
     * @throws Exception
     */
    public function __invoke(Request $request)
    {

        echo '<h3>The First Approach:</h3>';
        $factory = new SimpleFactory();
        $text = $factory->createText('text_name', 'text_id', 'text_class');
        $textarea = $factory->createTextarea('textarea_name', 'textarea_id', 'textarea_class');
        $checkbox = $factory->createCheckbox('checkbox_name', 'checkbox_id', 'checkbox_class');
        $select = $factory->createSelect('select_name', 'select_id', 'select_class');
        $text->render();
        echo '<br>';
        $textarea->render();
        echo '<br>';
        $checkbox->render();
        echo '<br>';
        $select->render();
        echo '<br>';

        echo '<h3>The Second Approach:</h3>';
        $factory2 = new SimpleFactory2();
        $text = $factory2->create('text', 'text_name', 'text_id', 'text_class');
        $textarea = $factory2->create('textarea', 'textarea_name', 'textarea_id', 'textarea_class');
        $checkbox = $factory2->create('checkbox', 'checkbox_name', 'checkbox_id', 'checkbox_class');
        $select = $factory2->create('select', 'select_name', 'select_id', 'select_class');
        $text->render();
        echo '<br>';
        $textarea->render();
        echo '<br>';
        $checkbox->render();
        echo '<br>';
        $select->render();
        echo '<br>';

    }
}
