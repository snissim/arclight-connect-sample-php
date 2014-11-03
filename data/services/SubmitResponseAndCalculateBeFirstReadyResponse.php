<?php

include_once('SubmitResponseResponse.php');

class SubmitResponseAndCalculateBeFirstReadyResponse extends SubmitResponseResponse
{

    /**
     * @var anyType $SubmitResponseAndCalculateBeFirstReadyResult
     * @access public
     */
    public $SubmitResponseAndCalculateBeFirstReadyResult = null;

    /**
     * @param anyType $SubmitResponseResult
     * @param anyType $SubmitResponseAndCalculateBeFirstReadyResult
     * @access public
     */
    public function __construct($SubmitResponseResult, $SubmitResponseAndCalculateBeFirstReadyResult)
    {
      parent::__construct($SubmitResponseResult);
      $this->SubmitResponseAndCalculateBeFirstReadyResult = $SubmitResponseAndCalculateBeFirstReadyResult;
    }

}
