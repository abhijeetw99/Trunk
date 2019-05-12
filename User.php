<?php

class user {
	private $name;

	public function showName() {
		echo 'the name is '.$this->name;
	}
}

$u1 = new user();
$u1->showName();

?>