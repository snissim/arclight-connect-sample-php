<?php

include_once('ServiceRequest.php');

class SetCredentialsRequest extends ServiceRequest
{

    /**
     * @var string $ConsumerId
     * @access public
     */
    public $ConsumerId = null;

    /**
     * @var string $Password
     * @access public
     */
    public $Password = null;

    /**
     * @access public
     */
    public function __construct()
    {
      parent::__construct();
    }

}
