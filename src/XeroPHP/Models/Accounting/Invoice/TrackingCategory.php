<?php
namespace XeroPHP\Models\Accounting\Invoice;

use XeroPHP\Remote;

class TrackingCategory extends Remote\Model
{

    /**
     * The Xero identifier for a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @property string TrackingCategoryID
     */

    /**
     * The Xero identifier for a tracking option e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @property string TrackingOptionID
     */

    /**
     * The status of a tracking category name
     *
     * @property string Name
     */

    /**
     * See Tracking Option
     *
     * @property string Option
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'TrackingCategories';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'TrackingCategory';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return 'TrackingCategoryID';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return Remote\URL::API_CORE;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods()
    {
        return array(
            Remote\Request::METHOD_GET,
            Remote\Request::METHOD_PUT,
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_DELETE
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly
     *
     * @return array
     */
    public static function getProperties()
    {
        return array(
            'TrackingCategoryID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'TrackingOptionID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Name' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Option' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getTrackingCategoryID()
    {
        return $this->_data['TrackingCategoryID'];
    }

    /**
     * @param string $value
     * @return TrackingCategory
     */
    public function setTrackingCategoryID($value)
    {
        $this->propertyUpdated('TrackingCategoryID', $value);
        $this->_data['TrackingCategoryID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingOptionID()
    {
        return $this->_data['TrackingOptionID'];
    }

    /**
     * @param string $value
     * @return TrackingCategory
     */
    public function setTrackingOptionID($value)
    {
        $this->propertyUpdated('TrackingOptionID', $value);
        $this->_data['TrackingOptionID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_data['Name'];
    }

    /**
     * @param string $value
     * @return TrackingCategory
     */
    public function setName($value)
    {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->_data['Option'];
    }

    /**
     * @param string $value
     * @return TrackingCategory
     */
    public function setOption($value)
    {
        $this->propertyUpdated('Option', $value);
        $this->_data['Option'] = $value;
        return $this;
    }

}
