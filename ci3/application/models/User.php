<?php
class User{
     protected $m_intId;
     protected $m_strFirstName;
     protected $m_strLastName;
     protected $m_strUserName;
     protected $m_strPassword;

    // traditional setters and getters
    public function setFirstName( $strFirstName ){
        $this->m_strFirstName = $m_strFirstName;
    }

    public function getFirstName(){
        return $this->m_strFirstName;
    }

    public function setLastName( $strLastName ){
        $this->m_strLastName = $m_strLastName;
    }

    public function getLastName(){
        return $this->m_strLastName;
    }

    public function setUserName( $m_strUserName ){
        $this->m_strFirstName = $m_strFirstName;
    }

    public function getFirstName(){
        return $this->m_strFirstName;
    }

    public function setFirstName( $strFirstName ){
        $this->m_strFirstName = $m_strFirstName;
    }

    public function getFirstName(){
        return $this->m_strFirstName;
    }

    public function getId() {
        return $this->m_intId;
    }

    public function setId( $intId ) {
        $this->m_intId = $m_intId;
    }

    // animal constructors
    function __construct(){
       // some code here
    }

}
?>