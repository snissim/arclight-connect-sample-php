<?php

include_once('ResponseBase.php');

class ResetCredentialsResponse extends ResponseBase
{

    /**
     * @var string $CredentialValue
     * @access public
     */
    public $CredentialValue = null;

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
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
