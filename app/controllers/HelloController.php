<?php 
class HelloController extends BaseController
{
    public function showIndex($name = '%username%')
    {
        return View::make('hello.index', array('username' =>$name));
    }


}

