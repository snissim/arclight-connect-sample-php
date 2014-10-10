<?php

class Campaign
{

    /**
     * @var string $Code
     * @access public
     */
    public $Code = null;

    /**
     * @var dateTime $EndDate
     * @access public
     */
    public $EndDate = null;

    /**
     * @var dateTime $LastEditDate
     * @access public
     */
    public $LastEditDate = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var Phase[] $Phases
     * @access public
     */
    public $Phases = null;

    /**
     * @var string $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var string $Type
     * @access public
     */
    public $Type = null;

    /**
     * @param dateTime $LastEditDate
     * @access public
     */
    public function __construct($LastEditDate)
    {
      $this->LastEditDate = $LastEditDate;
    }

}
