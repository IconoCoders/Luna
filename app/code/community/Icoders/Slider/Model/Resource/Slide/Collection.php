<?php
/**
 * @category  Aion
 * @package   Aion_Rbanner
 * @author    Dombi István <istvan.dombi@aionhill.com>
 * @copyright 2017 AionNext Kft. (http://aionhill.com)
 * @license   http://aionhill.com/licence Aion License
 * @link      http://aionhill.com
 */

/**
 * Class Aion_Rbanner_Model_Resource_Slide_Collection
 */
class Aion_Rbanner_Model_Resource_Slide_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('aion_rbanner/slide');
    }

}
