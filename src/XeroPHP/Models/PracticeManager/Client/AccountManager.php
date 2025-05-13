<?php

namespace XeroPHP\Models\PracticeManager\Client;

use XeroPHP\Models\PracticeManager\Model\IdAndNameModel;

class AccountManager extends IdAndNameModel
{
    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'AccountManager';
    }
}
