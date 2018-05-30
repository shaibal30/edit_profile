<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
        
        public function abc($name) {
           //$name="shaibal";
           $this->load->view('abc',array('name'=> $name)); 
            
        }
        public function db(){
            //creating an object of test model class.
            $this-> load->model('test_model');
            
            //accesing the object $this->test_model(class name)
            $r= $this->test_model->get_data_from_table();
            
            //printing the return associative array.
            print_r($r);  
            
        }
}
