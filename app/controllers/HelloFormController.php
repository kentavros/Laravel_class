<?php
class HelloFormController extends BaseController
{

    public function showForm()
    {

      return View::make('hello.form'); 
    
    }


    public function postForm()
    {
        return Redirect::route('bladepath');
      // return View::make('hello.post', array('name' => Input::get('name')));

    }

    public function showBlade()
    {
        return View::make('hello.blade', array('list'=>array(1,2,3,4,5), 'item'=>'my text',
             'ival' =>100));
    }


} 

