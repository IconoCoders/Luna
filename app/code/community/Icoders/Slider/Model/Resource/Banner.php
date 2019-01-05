<?php
/**
 * @category  Icoders
 * @package   Icoders_Slider
 * @author    Dombi István <istvan.dombi@icoders.co>
 * @copyright 2017 Icoders (http://icoders.co)
 * @license   http://icoders.co/licence Icoders License
 * @link      http://icoders.co
 */

/**
 * Class Icoders_Slider_Model_Resource_Banner
 */
class Icoders_Slider_Model_Resource_Banner extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('icoders_slider/banner', 'entity_id');
    }

}
