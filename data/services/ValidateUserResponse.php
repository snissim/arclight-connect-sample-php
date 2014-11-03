<?php

include_once('ResponseBase.php');

class ValidateUserResponse extends ResponseBase
{

    /**
     * @var string $ConsumerID
     * @access public
     */
    public $ConsumerID = null;

    /**
     * @var boolean $IsAuthenticated
     * @access public
     */
    public $IsAuthenticated = null;

    /**
     * @param int $ErrorCode
     * @param boolean $IsAuthenticated
     * @access public
     */
    public function __construct($ErrorCode, $IsAuthenticated)
    {
      parent::__construct($ErrorCode);
      $this->IsAuthenticated = $IsAuthenticated;
    }

}
