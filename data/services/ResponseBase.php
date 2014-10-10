<?php

class ResponseBase
{

    /**
     * @var int $ErrorCode
     * @access public
     */
    public $ErrorCode = null;

    /**
     * @var string $ErrorMessage
     * @access public
     */
    public $ErrorMessage = null;

    /**
     * @param int $ErrorCode
     * @access public
     */
    public function __construct($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
    }

}
