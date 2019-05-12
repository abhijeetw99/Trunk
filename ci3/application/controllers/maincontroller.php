<?php

require_once('CMainSystemController.php');

class MainController extends CMainSystemController {

	public function index() {
		$this->load->view('welcome');
	}

	public function registration() {
		$this->load->view('registration');
	}

	public function login() {
		$data['strErrorMessage'] = '';
		$this->load->view('login', $data);
	}

	public function authenticate() {
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);

		$this->load->model('usermodel');

		$arrobjUser = $this->usermodel->getUser($data);

		if( true == valArr( $arrobjUser ) ) {
			$this->loadHome();
		} else {
			$strErrorMessage = 'Invalid login details';
			$data['strErrorMessage'] = $strErrorMessage;

			$this->load->view('login', $data);
		}

	}

	public function saveUser() {

		//Setting values for tabel users
		$data = array(
			'firstname' => $this->input->post('firstname'),
			'lastname'  => $this->input->post('lastname'),
			'username'  => $this->input->post('username'),
			'password'  => $this->input->post('password')
		);

		$this->load->model('usermodel');

		if( true == $this->usermodel->insert($data) ) {
			$this->load->view('registered', $data);
		} else {
			echo 'Error adding data';
		}
		
			
	}

	public function loadHome(){
		$this->load->model('usermodel', 'userdb');
		$arrObjUsers = $this->userdb->getAllUsers();
		$data['users'] = $arrObjUsers;

		$this->load->view('home',$data);
	}
}

?>