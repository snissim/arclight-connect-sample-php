<?php

class GetReferenceData
{

    /**
     * @var GetReferenceDataRequest $referenceDataRequest
     * @access public
     */
    public $referenceDataRequest = null;

    /**
     * @param GetReferenceDataRequest $referenceDataRequest
     * @access public
     */
    public function __construct($referenceDataRequest)
    {
      $this->referenceDataRequest = $referenceDataRequest;
    }

}
