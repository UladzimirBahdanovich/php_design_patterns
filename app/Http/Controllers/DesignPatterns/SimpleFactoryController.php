<?php

namespace App\Http\Controllers\DesignPatterns;

use App\Http\Controllers\Controller;
use App\Libraries\DesignPatterns\SimpleFactory\SimpleFactory;
use Illuminate\Http\Request;


class SimpleFactoryController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return void
     */
    public function __invoke(Request $request)
    {

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
    }
}
