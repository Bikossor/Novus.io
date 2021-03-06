<?php

namespace Osmium\Controller {

    use Osmium\Core\Controller;

    class IndexController extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->view->render('index/index');
        }
    }
}
