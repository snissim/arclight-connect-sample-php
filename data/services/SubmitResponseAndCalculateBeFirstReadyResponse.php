<?php

include_once('SubmitResponseResponse.php');

class SubmitResponseAndCalculateBeFirstReadyResponse extends SubmitResponseResponse
{

    /**
     * @var boolean $IsBeFirstReady
     * @access public
     */
    public $IsBeFirstReady = null;

    /**
     * @param boolean $IsBeFirstReady
     * @access public
     */
    public function __construct($IsBeFirstReady)
    {
      parent::__construct();
      $this->IsBeFirstReady = $IsBeFirstReady;
    }

}
