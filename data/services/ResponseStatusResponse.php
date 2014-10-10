<?php

include_once('ResponseBase.php');

class ResponseStatusResponse extends ResponseBase
{

    /**
     * @var int $ConsumerId
     * @access public
     */
    public $ConsumerId = null;

    /**
     * @var int $InboundStatusCode
     * @access public
     */
    public $InboundStatusCode = null;

    /**
     * @var ValidationError[] $ValidationErrors
     * @access public
     */
    public $ValidationErrors = null;

    /**
     * @param int $ErrorCode
     * @param int $InboundStatusCode
     * @access public
     */
    public function __construct($ErrorCode, $InboundStatusCode)
    {
      parent::__construct($ErrorCode);
      $this->InboundStatusCode = $InboundStatusCode;
    }

}
