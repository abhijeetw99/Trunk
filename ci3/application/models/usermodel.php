<?php
class UserModel extends CI_Model {
	protected $m_intId;
	protected $m_firstname;
	protected $m_lastname;
	protected $m_username;
	protected $m_password;

	public function __construct() {
  		//$this->load->database(); 
	}

	public function insert($data) {
		return $this->db->insert('users', $data);
	}

	public function getUser( $data ) {

		$arrstrWhereCondition = array('username' => $data['username'], 'password' => $data['password']);

		$this->db->where($arrstrWhereCondition);

		$arrobjQueryResult = $this->db->get('users');

		return $arrobjQueryResult->result();			 
	}

	public function getAllUsers() {
		$arrobjresultSet = $this->db->get( 'users' );

		return $arrobjresultSet->result();
	}

}
?>