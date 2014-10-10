<?php

class Test
{

    /**
     * @var ServiceRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param ServiceRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
