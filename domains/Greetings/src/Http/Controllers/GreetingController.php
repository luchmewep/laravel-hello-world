<?php

namespace Luchavez\HelloWorld\Domains\Greetings\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

// Model
use Luchavez\HelloWorld\Domains\Greetings\Models\Greeting;

// Requests
use Luchavez\HelloWorld\Domains\Greetings\Http\Requests\Greeting\IndexGreetingRequest;
use Luchavez\HelloWorld\Domains\Greetings\Http\Requests\Greeting\StoreGreetingRequest;
use Luchavez\HelloWorld\Domains\Greetings\Http\Requests\Greeting\ShowGreetingRequest;
use Luchavez\HelloWorld\Domains\Greetings\Http\Requests\Greeting\UpdateGreetingRequest;
use Luchavez\HelloWorld\Domains\Greetings\Http\Requests\Greeting\DeleteGreetingRequest;
use Luchavez\HelloWorld\Domains\Greetings\Http\Requests\Greeting\RestoreGreetingRequest;

// Events
use Luchavez\HelloWorld\Domains\Greetings\Events\Greeting\GreetingCollectedEvent;
use Luchavez\HelloWorld\Domains\Greetings\Events\Greeting\GreetingCreatedEvent;
use Luchavez\HelloWorld\Domains\Greetings\Events\Greeting\GreetingShownEvent;
use Luchavez\HelloWorld\Domains\Greetings\Events\Greeting\GreetingUpdatedEvent;
use Luchavez\HelloWorld\Domains\Greetings\Events\Greeting\GreetingArchivedEvent;
use Luchavez\HelloWorld\Domains\Greetings\Events\Greeting\GreetingRestoredEvent;

/**
 * Class GreetingController
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class GreetingController extends Controller
{
    /**
     * Greeting List
     *
     * @group Greeting Management
     *
     * @param IndexGreetingRequest $request
     * @return JsonResponse
     */
    public function index(IndexGreetingRequest $request): JsonResponse
    {
        $data = new Greeting;

        if ($request->has('full_data') === TRUE) {
            $data = $data->get();
        } else {
            $data = $data->fastPaginate($request->get('per_page', 15));
        }

        event(new GreetingCollectedEvent($data));

        return customResponse()
            ->data($data)
            ->message('Successfully collected record.')
            ->success()
            ->generate();
    }

    /**
     * Store Greeting
     *
     * @group Greeting Management
     *
     * @param StoreGreetingRequest $request
     * @return JsonResponse
     */
    public function store(StoreGreetingRequest $request): JsonResponse
    {
        $data = $request->all();

        $model = Greeting::create($data)->fresh();

        event(new GreetingCreatedEvent($model));

        return customResponse()
            ->data($model)
            ->message('Successfully created record.')
            ->success()
            ->generate();
    }

    /**
     * Show Greeting
     *
     * @group Greeting Management
     *
     * @param ShowGreetingRequest $request
     * @param Greeting $greeting
     * @return JsonResponse
     */
    public function show(ShowGreetingRequest $request, Greeting $greeting): JsonResponse
    {
        event(new GreetingShownEvent($greeting));

        return customResponse()
            ->data($greeting)
            ->message('Successfully collected record.')
            ->success()
            ->generate();
    }

    /**
     * Update Greeting
     *
     * @group Greeting Management
     *
     * @param UpdateGreetingRequest $request
     * @param Greeting $greeting
     * @return JsonResponse
     */
    public function update(UpdateGreetingRequest $request, Greeting $greeting): JsonResponse
    {
        // Logic here...

        event(new GreetingUpdatedEvent($greeting));

        return customResponse()
            ->data($greeting)
            ->message('Successfully updated record.')
            ->success()
            ->generate();
    }

    /**
     * Soft Delete Greeting
     *
     * @group Greeting Management
     *
     * @param DeleteGreetingRequest $request
     * @param Greeting $greeting
     * @return JsonResponse
     */
    public function destroy(DeleteGreetingRequest $request, Greeting $greeting): JsonResponse
    {
        $greeting->delete();

        event(new GreetingArchivedEvent($greeting));

        return customResponse()
            ->data($greeting)
            ->message('Successfully archived record.')
            ->success()
            ->generate();
    }

    /**
     * Restore Greeting
     *
     * @group Greeting Management
     *
     * @param RestoreGreetingRequest $request
     * @param $greeting
     * @return JsonResponse
     */
    public function restore(RestoreGreetingRequest $request, $greeting): JsonResponse
    {
        $data = Greeting::withTrashed()->find($greeting)->restore();

        event(new GreetingRestoredEvent($data));

        return customResponse()
            ->data($data)
            ->message('Successfully restored record.')
            ->success()
            ->generate();
    }
}
