<?php

include_once('ServiceRequest.php');

class ResetCredentialsRequest extends ServiceRequest
{

    /**
     * @var string $Email
     * @access public
     */
    public $Email = null;

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
