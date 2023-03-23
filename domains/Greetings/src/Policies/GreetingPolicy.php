<?php

namespace Luchavez\HelloWorld\Domains\Greetings\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Luchavez\HelloWorld\Domains\Greetings\Models\Greeting;

/**
 * Class GreetingPolicy
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class GreetingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function viewAny(User $user): Response|bool
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Greeting $greeting
     * @return Response|bool
     */
    public function view(User $user, Greeting $greeting): Response|bool
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function create(User $user): Response|bool
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Greeting $greeting
     * @return Response|bool
     */
    public function update(User $user, Greeting $greeting): Response|bool
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Greeting $greeting
     * @return Response|bool
     */
    public function delete(User $user, Greeting $greeting): Response|bool
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Greeting $greeting
     * @return Response|bool
     */
    public function restore(User $user, Greeting $greeting): Response|bool
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Greeting $greeting
     * @return Response|bool
     */
    public function forceDelete(User $user, Greeting $greeting): Response|bool
    {
        return Response::allow();
    }
}
