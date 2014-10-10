<?php

class GetBrandAmbassadorsResponse
{

    /**
     * @var anyType $GetBrandAmbassadorsResult
     * @access public
     */
    public $GetBrandAmbassadorsResult = null;

    /**
     * @param anyType $GetBrandAmbassadorsResult
     * @access public
     */
    public function __construct($GetBrandAmbassadorsResult)
    {
      $this->GetBrandAmbassadorsResult = $GetBrandAmbassadorsResult;
    }

}
