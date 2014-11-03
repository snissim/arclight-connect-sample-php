<?php

include_once('SubmitResponseResponse.php');

class RegisterWebProfileResponse extends SubmitResponseResponse
{

    /**
     * @var anyType $RegisterWebProfileResult
     * @access public
     */
    public $RegisterWebProfileResult = null;

    /**
     * @param anyType $SubmitResponseResult
     * @param anyType $RegisterWebProfileResult
     * @access public
     */
    public function __construct($SubmitResponseResult, $RegisterWebProfileResult)
    {
      parent::__construct($SubmitResponseResult);
      $this->RegisterWebProfileResult = $RegisterWebProfileResult;
    }

}
