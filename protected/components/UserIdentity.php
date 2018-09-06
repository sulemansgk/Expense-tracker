<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
   private $_id;
   private $Username;
   public function authenticate()
   {
       $record=Users::model()->findByAttributes(array('username'=>$this->username));  // here I use Email as user name which comes from database
	
	
       if($record===null)
               {
				
                       $this->_id='user Null';
                       $this->errorCode=self::ERROR_USERNAME_INVALID;
               }
       else if($record->password!==$this->password)            // here I compare db password with passwod field
               {       $this->_id=$this->username;
                       $this->errorCode=self::ERROR_PASSWORD_INVALID;
               }
         else if($record['Active_status']!=='1')                //  here I check status as Active in db
               {        
                                        $err = "You have been Inactive by Admin.";
                                $this->errorCode = $err;
				  
               }
        
       else
       {  
   
    				
          $this->_id=$record['id'];
		  Yii::app()->session['Username'] = $record['username'];
          $this->setState('title', $record['username']);
          $this->errorCode=self::ERROR_NONE;

       }
       return !$this->errorCode;
   }

   public function getId()       //  override Id
   {
       return $this->_id;
   }

   
}