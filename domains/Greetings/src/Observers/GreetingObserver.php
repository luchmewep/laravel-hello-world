<?php

namespace Luchavez\HelloWorld\Domains\Greetings\Observers;

use Luchavez\HelloWorld\Domains\Greetings\Models\Greeting;

/**
 * Class GreetingObserver
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class GreetingObserver
{
    /**
     * Handle events after all transactions are committed.
     *
     * @var bool
     */
    public bool $afterCommit = true;

    /**
     * Handle the Greeting "created" event.
     *
     * @param  Greeting $greeting
     * @return void
     */
    public function created(Greeting $greeting): void
    {
        //
    }

    /**
     * Handle the Greeting "updated" event.
     *
     * @param  Greeting $greeting
     * @return void
     */
    public function updated(Greeting $greeting): void
    {
        //
    }

    /**
     * Handle the Greeting "deleted" event.
     *
     * @param  Greeting $greeting
     * @return void
     */
    public function deleted(Greeting $greeting): void
    {
        //
    }

    /**
     * Handle the Greeting "restored" event.
     *
     * @param  Greeting $greeting
     * @return void
     */
    public function restored(Greeting $greeting): void
    {
        //
    }

    /**
     * Handle the Greeting "force deleted" event.
     *
     * @param  Greeting $greeting
     * @return void
     */
    public function forceDeleted(Greeting $greeting): void
    {
        //
    }
}
