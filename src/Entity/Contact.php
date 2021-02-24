<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{

     private string $firstname;
     private string $name;
     private string $email;

     /**
      * @Assert\Length(min=10)
      */
     private string $message;


     /**
      * Get the value of firstname
      */ 
     public function getfirstname()
     {
          return $this->firstname;
     }

     /**
      * Set the value of firstname
      *
      * @return  self
      */ 
     public function setFirstname($firstname)
     {
          $this->firstname = $firstname;

          return $this;
     }

     /**
      * Get the value of name
      */ 
     public function getname()
     {
          return $this->name;
     }

     /**
      * Set the value of name
      *
      * @return  self
      */ 
     public function setname($name)
     {
          $this->name = $name;

          return $this;
     }

     /**
      * Get the value of email
      */ 
     public function getEmail()
     {
          return $this->email;
     }

     /**
      * Set the value of email
      *
      * @return  self
      */ 
     public function setEmail($email)
     {
          $this->email = $email;

          return $this;
     }

     /**
      * Get the value of message
      */ 
     public function getMessage()
     {
          return $this->message;
     }

     /**
      * Set the value of message
      *
      * @return  self
      */ 
     public function setMessage($message)
     {
          $this->message = $message;

          return $this;
     }
}
