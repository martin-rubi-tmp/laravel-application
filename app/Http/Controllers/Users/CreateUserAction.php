<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;

class CreateUserAction extends Controller
{
    public function __invoke()
    {
        /// Initialize endpoints
        if( ! \Youbim\Collections\RedBeanCollection::is_connected() ) {
            $mysql = config('database.mysql');
            \Youbim\Collections\RedBeanCollection::setup_connection( $mysql['connect'], $mysql['user'], $mysql['password'] );
        }

        $action = new \Youbim\API\CreteUserEndPoint();

        $json = $action->evaluate( $request->input('user') );

        return response()->json($json);
    }
}