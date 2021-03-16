<?php

namespace app\site\controller;
use app\core\Controller;

class AboutController extends Controller
{
    public function __construct()
    /**
     * __construct
     * 
     * @return void
     */
    {
      // echo 'Construct';
    }
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
       $this->view('about/quemsomos');
    }
    
      

}