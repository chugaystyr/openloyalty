<?php

class TestController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function getIndex()
    {              
        $users = Testapi::all();
        return Response::json($users)->setCallback('testapi');
    }

}
