<?php

namespace DevsBFF\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function generate(Request $request)
    {
        $userCount = $request->input('userCount');

        for ($i = $userCount; $i > 0; $i--) {
            echo 'Here is a name.<br/>';
        }
    }
}
