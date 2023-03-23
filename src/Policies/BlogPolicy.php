<?php

namespace Luchavez\HelloWorld\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Luchavez\HelloWorld\Models\Blog;

/**
 * Class BlogPolicy
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class BlogPolicy
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
     * @param Blog $blog
     * @return Response|bool
     */
    public function view(User $user, Blog $blog): Response|bool
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
     * @param Blog $blog
     * @return Response|bool
     */
    public function update(User $user, Blog $blog): Response|bool
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Blog $blog
     * @return Response|bool
     */
    public function delete(User $user, Blog $blog): Response|bool
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Blog $blog
     * @return Response|bool
     */
    public function restore(User $user, Blog $blog): Response|bool
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Blog $blog
     * @return Response|bool
     */
    public function forceDelete(User $user, Blog $blog): Response|bool
    {
        return Response::allow();
    }
}
