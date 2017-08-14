<?php

namespace MarkVesterskov\InmobilePHPApi;

class MM_Message
{
    private $send_time = '';
	private $message = '';
	private $sendername = '';
	private $recipients = array();

	public function __construct($message, array $recipients, $sendername)
	{
		$this->message = $message;
		$this->recipients = $recipients;
		$this->sendername = $sendername;
	}

	public function getMessage()
	{
		return $this->message;
	}

    public function getSendTime()
	{
		return $this->send_time;
	}

    public function setSendTime($send_time)
	{
		$this->send_time = $send_time;
	}

	public function getRecipients()
	{
		return $this->recipients;
	}

	public function getSendername()
	{
		return $this->sendername;
	}

}