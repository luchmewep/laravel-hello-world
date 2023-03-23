<?php

namespace Luchavez\HelloWorld\Observers;

use Luchavez\HelloWorld\Models\Blog;

/**
 * Class BlogObserver
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class BlogObserver
{
    /**
     * Handle events after all transactions are committed.
     *
     * @var bool
     */
    public bool $afterCommit = true;

    /**
     * Handle the Blog "created" event.
     *
     * @param  Blog $blog
     * @return void
     */
    public function created(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "updated" event.
     *
     * @param  Blog $blog
     * @return void
     */
    public function updated(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "deleted" event.
     *
     * @param  Blog $blog
     * @return void
     */
    public function deleted(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "restored" event.
     *
     * @param  Blog $blog
     * @return void
     */
    public function restored(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "force deleted" event.
     *
     * @param  Blog $blog
     * @return void
     */
    public function forceDeleted(Blog $blog): void
    {
        //
    }
}
