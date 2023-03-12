<?php
require 'vendor/autoload.php';
interface EmailServerInterface {
	public function sendEmail($to, $subject, $message);
}
class EmailSender {
    private $emailServer;

    public function __construct(EmailServerInterface $emailServer) {
        $this->emailServer = $emailServer;
    }

    public function send($to, $subject, $message) {
        $this->emailServer->sendEmail($to, $subject, $message);
    }
}
class MyEmailServer implements EmailServerInterface {
    public function sendEmail($to, $subject, $message) {
        //Implementation to send email using MyEmailServer
    }
}
$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("example@example.com", "Test Email", "This is a test email.");


?>