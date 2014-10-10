<?php

include_once('ServiceRequest.php');

class ChangePasswordRequest extends ServiceRequest
{

    /**
     * @var string $NewPassword
     * @access public
     */
    public $NewPassword = null;

    /**
     * @var string $OldPassword
     * @access public
     */
    public $OldPassword = null;

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
