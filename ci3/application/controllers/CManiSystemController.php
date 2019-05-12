<?php
class CMainSystemController extends CI_Controller {

	private $m_intUserId;

	public function setUserId( $intUserId ) {
		$this->m_intUserId = $intUserId;
	}

	public function getUserId() {
		return $this->m_intUserId;
	}

}
?>