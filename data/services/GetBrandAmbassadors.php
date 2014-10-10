<?php

class GetBrandAmbassadors
{

    /**
     * @var RefereceDataServiceRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param RefereceDataServiceRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
