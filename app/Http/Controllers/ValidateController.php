<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class ValidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validation()
    {
        return view('validation');
    }
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validationPost(Request $request)
    {
       // Here you can write code of store data....
    }
}