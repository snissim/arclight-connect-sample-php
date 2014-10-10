<?php

class SubmitResponse
{

    /**
     * @var SubmitResponseRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param SubmitResponseRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
