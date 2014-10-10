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
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
