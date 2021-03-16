<?php

namespace app\site\controller;
use app\core\Controller;

class DashboardController extends Controller
{
    public function __construct()
    /**
     * __construct
     * 
     * @return void
     */
    {
      \app\classes\Security::protect();
  }
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {

        $userId = \app\classes\Session::getValue('id');
        $this->view('dashboard/main', [
            'livros' => (new \app\site\model\LivroModel())->getUserLivros($userId)
        ]);
    }
    


}