<?php
/**
 * @SWG\Swagger(
 *   basePath="/api",
 *   @SWG\Info(
 *     title="Core API",
 *     version="1.0.0"
 *   )
 * )
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * @SWG\Get(
     *   path="/test-swagger",
     *   summary="Sample",
     *   @SWG\Response(response=200, description="successful operation")
     * )
     * 
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return response()->json(['code' => 0], 200);

    }
}
