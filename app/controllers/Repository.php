<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

use App\Models\ChartModel;

class Repository extends Controller {
	
    public function __construct(){
        parent:: __construct();
        $this->call->model('ChartModel');
    }
    public function admin(){
        $this->call->view('admin');
    }

    public function student(){
        $this->call->view('student');
    }

    public function home(){
        $this->call->view('home');
    }

    public function login(){
        $this->call->view('login');
    }

    public function register(){
        $this->call->view('register');
    }

    public function researchoutputs(){
        $this->call->view('researchoutputs');
    }

    public function archives(){
        $this->call->view('archives');
    }

    public function users(){
        $this->call->view('users');
    }
    public function bar() {
        $this->call->model('ChartModel');
        $data['chartData'] = $this->ChartModel->getbarData();
        $this->call->view('admin', $data); // Pass $data to the view
    }
    
}
?>
