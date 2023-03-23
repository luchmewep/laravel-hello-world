<?php

namespace Luchavez\HelloWorld\Domains\Greetings\Events\Greeting;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Queue\SerializesModels;

// Model
use Luchavez\HelloWorld\Domains\Greetings\Models\Greeting;

/**
 * Class GreetingArchivedEvent
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class GreetingArchivedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(public Greeting|Collection|LengthAwarePaginator|Paginator $greeting)
    {
        //
    }
}
