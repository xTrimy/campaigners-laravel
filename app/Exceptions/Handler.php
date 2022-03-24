<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    protected function registerErrorViewPaths()
    {
        $paths = collect(config('view.paths'));
        if ( Request::segment(1) == 'portal') {
            View::replaceNamespace('errors', $paths->map(function ($path) {
                return "{$path}/portal/errors";
            })->push(__DIR__ . '/views')->all());
        } else {
            View::replaceNamespace('errors', $paths->map(function ($path) {
                return "{$path}/errors";
            })->push(__DIR__ . '/views')->all());
        }
    }
}
