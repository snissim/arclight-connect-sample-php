<?php

class SubmitResponseAndCalculateBeFirstReady
{

    /**
     * @var CalculateBeFirstReadyRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param CalculateBeFirstReadyRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
