<?php

class SendUserName
{

    /**
     * @var SendUserNameRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param SendUserNameRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
