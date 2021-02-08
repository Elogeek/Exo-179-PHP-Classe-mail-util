<?php
class Email
{
    private string $to;
    private string $from;
    private string $subject;
    private string $message;


    /**
     * email constructor
     * @param string $to ,$from,$message $subject
     */
    public function __construct(string $to, string $from, string $message, string $subject) {
        $this->setTo($to);
        $this->setFrom($from);
        $this->setMessage($message);
        $this->setSubject($subject);
    }

    /**
     * @return string
     */
    public function getTo() {
        return $this->to;
    }

    /**
     * @param string $to
     */
    public function setTo(string $to) {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getFrom() {
        return $this->from;
    }
    /**
     * @param string $from
     */
    public function setFrom(string $from) {
        $this->from = $from;
    }
    /**
    * @return string
    */
    public function getMessage() {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message) {
        $this->message = $message;
    }
    /**
     * @return string
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject) {
        $this->subject = $subject;
    }

    public function send() {
        mail($this->to, $this->subject, $this->message);
    }
}