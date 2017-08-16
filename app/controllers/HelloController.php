<?php 
class HelloController extends BaseController
{
    public function showIndex($name = '%username%')
    {
        return View::make('hello.index', array('username' =>$name));
    }

    public function getAction()
    {
        return View::make('hello.my-form');
    }

 /*   public function postMyForm()
    {
        return print_r(Input::post('email'));

    }
  */
    public function postMyForm()
    {
        Session::put('my-form', Input::all());
        Session::put('my-form-name',Input::get('email'));
        return print_r(Input::all(), true);
    }

    public function getFlush()
    {
        Session::flush();
        return 'Session flush';
    }

    public function getSession()
    {
            return print_r(Session::all(), true);
    }

 
    public function getJson()
    {
        $data = array('name'=>'Steve', 'email'=>'steve@goo.ru');
        return Response::json($data);
    }


}

