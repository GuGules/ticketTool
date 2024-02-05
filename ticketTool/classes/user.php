<?php
class User
{
   public $connectedUser = "";
   public $isLoggedIn = false;
   public function __construct()
   {
   }

   function getConnectedUser(){
      return $this->connectedUser;
   }

}
