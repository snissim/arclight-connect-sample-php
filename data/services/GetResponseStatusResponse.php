<?php

class GetResponseStatusResponse
{

    /**
     * @var anyType $GetResponseStatusResult
     * @access public
     */
    public $GetResponseStatusResult = null;

    /**
     * @param anyType $GetResponseStatusResult
     * @access public
     */
    public function __construct($GetResponseStatusResult)
    {
      $this->GetResponseStatusResult = $GetResponseStatusResult;
    }

}
