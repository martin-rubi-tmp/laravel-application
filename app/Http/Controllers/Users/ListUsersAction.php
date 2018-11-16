<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;

class ListUsersAction extends Controller
{
    public function __invoke()
    {
        /// Initialize endpoints
        if( ! \Youbim\Collections\RedBeanCollection::is_connected() ) {
            $mysql = config('database.mysql');
            \Youbim\Collections\RedBeanCollection::setup_connection( $mysql['connect'], $mysql['user'], $mysql['password'] );
        }

        $action = new \Youbim\API\ListUsersEndPoint();

        $json = $action->evaluate();

        return response()->json($json);
    }
}