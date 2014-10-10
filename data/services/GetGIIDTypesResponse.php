<?php

include_once('ResponseBase.php');

class GetGIIDTypesResponse extends ResponseBase
{

    /**
     * @var GIIDType[] $GIIDTypes
     * @access public
     */
    public $GIIDTypes = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      parent::__construct($ErrorCode);
    }

}
