<?php

class GIIDType
{

    /**
     * @var string $Code
     * @access public
     */
    public $Code = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var boolean $DisplayOnExternalSystem
     * @access public
     */
    public $DisplayOnExternalSystem = null;

    /**
     * @var dateTime $LastEditDate
     * @access public
     */
    public $LastEditDate = null;

    /**
     * @var string $LocalLanguageDescription
     * @access public
     */
    public $LocalLanguageDescription = null;

    /**
     * @param boolean $DisplayOnExternalSystem
     * @param dateTime $LastEditDate
     * @access public
     */
    public function __construct($DisplayOnExternalSystem, $LastEditDate)
    {
      $this->DisplayOnExternalSystem = $DisplayOnExternalSystem;
      $this->LastEditDate = $LastEditDate;
    }

}
