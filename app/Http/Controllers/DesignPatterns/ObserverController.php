<?php

namespace App\Http\Controllers\DesignPatterns;

use App\Http\Controllers\Controller;
use App\Libraries\DesignPatterns\Observer\EventDispatcher;
use App\Libraries\DesignPatterns\Observer\Events\Event;
use App\Libraries\DesignPatterns\Observer\Events\FirstEvent;
use App\Libraries\DesignPatterns\Observer\Observers\BarObserver;
use App\Libraries\DesignPatterns\Observer\Observers\FooObserver;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ObserverController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return void
     */
    public function __invoke(Request $request)
    {

        $eventDispatcher = new EventDispatcher();

        $fooObserver = new FooObserver();
        $barObserver = new BarObserver();

        $firstEvent = new Event('firstEvent', ['observableObj' => $this]);
        $secondEvent = new Event('secondEvent', ['observableObj' => $this, 'sampleData' => [1,2,3,4,5]]);


        $eventDispatcher->addObserver('firstEvent', $fooObserver);
        $eventDispatcher->addObserver('firstEvent', $barObserver);
        $eventDispatcher->addObserver('secondEvent', $barObserver);


        $eventDispatcher->dispatch($firstEvent);
        $eventDispatcher->dispatch($secondEvent);
    }
}
