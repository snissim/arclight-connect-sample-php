<?php

include_once('ResponseBase.php');

class SubmitResponseResponse extends ResponseBase
{

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
