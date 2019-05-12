<?php
class user1 {
	protected $m_struserName;

	public function __construct( $strUserName ) {
		$this->m_struserName = $strUserName;
	}

	public function getUserName() {
		return $this->m_struserName;
	}
}
?>