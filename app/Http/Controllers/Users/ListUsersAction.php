<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;

class ListUsersAction extends Controller
{
    public function __invoke()
    {
        $action = new \Youbim\API\ListUsersEndPoint();

        $json = $action->evaluate();

        return response()->json($json);
    }
}