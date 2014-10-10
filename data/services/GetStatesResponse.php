<?php

include_once('ResponseBase.php');

class GetStatesResponse extends ResponseBase
{

    /**
     * @var State[] $States
     * @access public
     */
    public $States = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
