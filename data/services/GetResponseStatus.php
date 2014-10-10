<?php

class GetResponseStatus
{

    /**
     * @var GetResponseStatusRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param GetResponseStatusRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
