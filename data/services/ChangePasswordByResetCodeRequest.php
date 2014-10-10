<?php

include_once('ServiceRequest.php');

class ChangePasswordByResetCodeRequest extends ServiceRequest
{

    /**
     * @var string $NewPassword
     * @access public
     */
    public $NewPassword = null;

    /**
     * @var string $ResetCode
     * @access public
     */
    public $ResetCode = null;

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
