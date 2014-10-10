<?php

include_once('ResponseBase.php');

class GetProfileResponse extends ResponseBase
{

    /**
     * @var ConsumerProfile $Profile
     * @access public
     */
    public $Profile = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
