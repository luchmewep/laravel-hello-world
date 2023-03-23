<?php

namespace Luchavez\HelloWorld\Events\Blog;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Queue\SerializesModels;

// Model
use Luchavez\HelloWorld\Models\Blog;

/**
 * Class BlogUpdatedEvent
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class BlogUpdatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(public Blog|Collection|LengthAwarePaginator|Paginator $blog)
    {
        //
    }
}
