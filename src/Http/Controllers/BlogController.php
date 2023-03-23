<?php

namespace Luchavez\HelloWorld\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

// Model
use Luchavez\HelloWorld\Models\Blog;

// Requests
use Luchavez\HelloWorld\Http\Requests\Blog\IndexBlogRequest;
use Luchavez\HelloWorld\Http\Requests\Blog\StoreBlogRequest;
use Luchavez\HelloWorld\Http\Requests\Blog\ShowBlogRequest;
use Luchavez\HelloWorld\Http\Requests\Blog\UpdateBlogRequest;
use Luchavez\HelloWorld\Http\Requests\Blog\DeleteBlogRequest;
use Luchavez\HelloWorld\Http\Requests\Blog\RestoreBlogRequest;

// Events
use Luchavez\HelloWorld\Events\Blog\BlogCollectedEvent;
use Luchavez\HelloWorld\Events\Blog\BlogCreatedEvent;
use Luchavez\HelloWorld\Events\Blog\BlogShownEvent;
use Luchavez\HelloWorld\Events\Blog\BlogUpdatedEvent;
use Luchavez\HelloWorld\Events\Blog\BlogArchivedEvent;
use Luchavez\HelloWorld\Events\Blog\BlogRestoredEvent;

/**
 * Class BlogController
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class BlogController extends Controller
{
    /**
     * Blog List
     *
     * @group Blog Management
     *
     * @param IndexBlogRequest $request
     * @return JsonResponse
     */
    public function index(IndexBlogRequest $request): JsonResponse
    {
        $data = new Blog;

        if ($request->has('full_data') === TRUE) {
            $data = $data->get();
        } else {
            $data = $data->fastPaginate($request->get('per_page', 15));
        }

        event(new BlogCollectedEvent($data));

        return customResponse()
            ->data($data)
            ->message('Successfully collected record.')
            ->success()
            ->generate();
    }

    /**
     * Store Blog
     *
     * @group Blog Management
     *
     * @param StoreBlogRequest $request
     * @return JsonResponse
     */
    public function store(StoreBlogRequest $request): JsonResponse
    {
        $data = $request->all();

        $model = Blog::create($data)->fresh();

        event(new BlogCreatedEvent($model));

        return customResponse()
            ->data($model)
            ->message('Successfully created record.')
            ->success()
            ->generate();
    }

    /**
     * Show Blog
     *
     * @group Blog Management
     *
     * @param ShowBlogRequest $request
     * @param Blog $blog
     * @return JsonResponse
     */
    public function show(ShowBlogRequest $request, Blog $blog): JsonResponse
    {
        event(new BlogShownEvent($blog));

        return customResponse()
            ->data($blog)
            ->message('Successfully collected record.')
            ->success()
            ->generate();
    }

    /**
     * Update Blog
     *
     * @group Blog Management
     *
     * @param UpdateBlogRequest $request
     * @param Blog $blog
     * @return JsonResponse
     */
    public function update(UpdateBlogRequest $request, Blog $blog): JsonResponse
    {
        // Logic here...

        event(new BlogUpdatedEvent($blog));

        return customResponse()
            ->data($blog)
            ->message('Successfully updated record.')
            ->success()
            ->generate();
    }

    /**
     * Soft Delete Blog
     *
     * @group Blog Management
     *
     * @param DeleteBlogRequest $request
     * @param Blog $blog
     * @return JsonResponse
     */
    public function destroy(DeleteBlogRequest $request, Blog $blog): JsonResponse
    {
        $blog->delete();

        event(new BlogArchivedEvent($blog));

        return customResponse()
            ->data($blog)
            ->message('Successfully archived record.')
            ->success()
            ->generate();
    }

    /**
     * Restore Blog
     *
     * @group Blog Management
     *
     * @param RestoreBlogRequest $request
     * @param $blog
     * @return JsonResponse
     */
    public function restore(RestoreBlogRequest $request, $blog): JsonResponse
    {
        $data = Blog::withTrashed()->find($blog)->restore();

        event(new BlogRestoredEvent($data));

        return customResponse()
            ->data($data)
            ->message('Successfully restored record.')
            ->success()
            ->generate();
    }
}
