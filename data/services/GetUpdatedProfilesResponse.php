<?php

include_once('ResponseBase.php');

class GetUpdatedProfilesResponse extends ResponseBase
{

    /**
     * @var ConsumerProfile[] $Profiles
     * @access public
     */
    public $Profiles = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
