<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plantilla extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->library('hash'); 
	}
	public function dashboard()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/dashboard";
		$data->panel_title = "Dashboard";
		$this->load->view('frontend', $data);
	}

	public function flot()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/flot";
		$data->panel_title = "Flot";
		$this->load->view('frontend', $data);
	}

	public function morris()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/morris";
		$data->panel_title = "Morris.js Charts";
		$this->load->view('frontend', $data);
	}

	public function tables()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/tables";
		$data->panel_title = "Tables";
		$this->load->view('frontend', $data);
	}

	public function forms()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/forms";
		$data->panel_title = "Forms";
		$this->load->view('frontend', $data);
	}

	public function panelsWells()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/panels-wells";
		$data->panel_title = "Panels-Wells";
		$this->load->view('frontend', $data);
	}

	public function buttons()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/buttons";
		$data->panel_title = "Buttons";
		$this->load->view('frontend', $data);
	}

	public function notifications()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/notifications";
		$data->panel_title = "Notifications";
		$this->load->view('frontend', $data);
	}

	public function typography()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/typography";
		$data->panel_title = "Typography";
		$this->load->view('frontend', $data);
	}

	public function icons()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/icons";
		$data->panel_title = "Icons";
		$this->load->view('frontend', $data);
	}

	public function grid()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/grid";
		$data->panel_title = "Grid";
		$this->load->view('frontend', $data);
	}

	public function blank()
	{	
		$data = new stdClass();
		$data->title = "Titulo";
		$data->contenido = "plantilla/blank";
		$data->panel_title = "Blank";
		$this->load->view('frontend', $data);
	}

	public function login()
	{	
		$data = new stdClass();
		$data->panel_title = "Login";
		$this->load->view('frontend/plantilla/login', $data);
	}

}