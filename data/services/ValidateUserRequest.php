<?php

include_once('ServiceRequest.php');

class ValidateUserRequest extends ServiceRequest
{

    /**
     * @var string $Password
     * @access public
     */
    public $Password = null;

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
