<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Invite_modal extends CI_model
 {
   function __construct()
      {
            $this->load->database();
            $this->load->library('session');
            $this->load->library('email');
           // $this->load->library('upload');
      }
	  function send_invite($email,$fname,$lname)
	  {
		$to =$email;
		$subject = 'Welcome In Monday Morning';
		$from = 'MondayMorning@mondaymorning.co.in';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										$headers .= 'From: '.$from."\r\n".
										'Reply-To: '.$from."\r\n" .
										'X-Mailer: PHP/' . phpversion();
		$message="test";								
		mail($to, $subject, $message, $headers);
	  }

}
?>