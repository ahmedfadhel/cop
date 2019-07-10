<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Session;

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
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
      if ($exception instanceof ModelNotFoundException)
			{
        if ($request->ajax()) {
          return response()->json([
            'status'  => 'failed',
            'message' =>  lcfirst(substr($exception->getModel(), strrpos($exception->getModel(), '\\') +1)) . ' Not Found'
          ],404);
        }
        Session::flash('failed', lcfirst(substr($exception->getModel(), strrpos($exception->getModel(), '\\') + 1)).' Not found!');
        if(lcfirst(substr($exception->getModel(), strrpos($exception->getModel(), '\\') + 1)) === 'category'){
          return redirect()->route(lcfirst(substr($exception->getModel(), strrpos($exception->getModel(), '\\') + 1)).'.index');
        }
        return redirect()->route(lcfirst(substr($exception->getModel(), strrpos($exception->getModel(), '\\') + 1)).'s.index');

			}
      return parent::render($request, $exception);
    }
}
