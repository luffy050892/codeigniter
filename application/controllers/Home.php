<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	var $template  = array();
  	var $data      = array();

	public function __construct()
    {
    	parent::__construct();
        $this->load->helper('url');
    }

   	public function layout() {
     	$this->template['header']   = $this->load->view('templates/header', $this->data, true);
     	$this->template['middle'] = $this->load->view($this->middle, $this->data, true);
     	//$this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
     	$this->load->view('index', $this->template);
   	}

	public function index()
	{
		$this->data['indexPage'] = "true";
		$this->data['pageTitle'] = "Buyout";
		$this->middle = 'content/home'; 
		$this->layout();
	}

	public function login() {
		$this->data['pageTitle'] = "Login";
		$this->middle = 'content/login'; 
		$this->layout();
	}
}
