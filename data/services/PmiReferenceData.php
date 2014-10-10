<?php

include_once('ReferenceData.php');

class PmiReferenceData extends ReferenceData
{

    /**
     * @var BrandAmbassador[] $BrandAmbassadors
     * @access public
     */
    public $BrandAmbassadors = null;

    /**
     * @var CollectionCity[] $CollectionCityVenues
     * @access public
     */
    public $CollectionCityVenues = null;

    /**
     * @access public
     */
    public function __construct()
    {
      parent::__construct();
    }

}
