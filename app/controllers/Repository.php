<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Repository extends Controller {
	
    public function admin(){
        $this->call->view('admin');
    }

    public function student(){
        $this->call->view('student');
    }

    public function home(){
        $this->call->view('home');
    }
}
?>
