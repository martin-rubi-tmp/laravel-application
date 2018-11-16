<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;

class CreateUserAction extends Controller
{
    public function __invoke()
    {
        $action = new \Youbim\API\CreteUserEndPoint();

        $json = $action->evaluate( $request->input('user') );

        return response()->json($json);
    }
}