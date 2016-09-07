<?php

/**
 * Syncroton
 *
 * @package     Syncroton
 * @subpackage  Model
 * @license     http://www.tine20.org/licenses/lgpl.html LGPL Version 3
 * @copyright   Copyright (c) 2012-2014 Kolab Systems AG (http://www.kolabsys.com)
 * @author      Aleksander Machniak <machniak@kolabsys.com>
 */

/**
 * Class to handle ActiveSync Settings/Oof/Get|Set element
 *
 * @package     Syncroton
 * @subpackage  Model
 */
class Syncroton_Model_Oof extends Syncroton_Model_AXMLEntry
{
    const STATUS_DISABLED   = 0;
    const STATUS_GLOBAL     = 1;
    const STATUS_TIME_BASED = 2;

    protected $_xmlBaseElement = array('Get', 'Set');

    protected $_properties = array(
        'Settings' => array(
            'endTime'    => array('type' => 'datetime'),
            'oofMessage' => array('type' => 'container', 'multiple' => true, 'class' => 'Syncroton_Model_OofMessage'),
            'oofState'   => array('type' => 'number'),
            'startTime'  => array('type' => 'datetime'),
        )
    );
}
