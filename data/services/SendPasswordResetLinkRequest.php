<?php

include_once('ServiceRequest.php');

class SendPasswordResetLinkRequest extends ServiceRequest
{

    /**
     * @var string $Url
     * @access public
     */
    public $Url = null;

    /**
     * @var string $UserName
     * @access public
     */
    public $UserName = null;

    /**
     * @access public
     */
    public function __construct()
    {
      parent::__construct();
    }

}
