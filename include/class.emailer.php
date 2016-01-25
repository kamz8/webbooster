<?php
require './PHPMailer/PHPMailerAutoload.php';
require './include/class.thtml.php';
class Emailer
{
	private $mail;
	private static $toAdress = "kamzil2@gmail.com";
	private $from;
	private $phone;
	private $persone;
	private $content;
	private $msgBody;
	
	function __construct()
	{
		$this->mail = new PHPMailer;
		$this->msgBody = new Thtml('./templates/mail_contact.html');
			
	}
	
	private function generateMsg()
	{
		$this->msgBody->setVariable('name',$this->persone);
		$this->msgBody->setVariable('phone',$this->phone);
		$this->msgBody->setVariable('msg',$this->content);
		
	}
	
	public function setMailData($name,$mail,$phone,$message)
	{
		$this->persone = $name;
		$this->from = $mail;
		$this->phone = $phone;
		$this->content = $message;
	}
	
	public function sendMail()
	{
		$this->generateMsg();
		$this->mail->CharSet = 'UTF-8';
		$this->mail->setLanguage('pl');
		$this->mail->setFrom($this->from, $this->persone);
		$this->mail->addAddress(self::$toAdress,"kontakt WebBooster");
		$this->mail->addReplyTo($this->from);
		$this->mail->Subject = '[Wiadomość ze strony] '.$this->persone.' napisał(-ła) do ciebie.';
		$this->mail->msgHtml($this->msgBody->getDocument());
	  if (!$this->mail->send()) {
		  return "Mailer Error: " . $this->mail->ErrorInfo;
		} else {

			return true;
		}				
	}
	
	
}



?>