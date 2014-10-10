<?php

class TestResponse
{

    /**
     * @var string $TestResult
     * @access public
     */
    public $TestResult = null;

    /**
     * @param string $TestResult
     * @access public
     */
    public function __construct($TestResult)
    {
      $this->TestResult = $TestResult;
    }

}
