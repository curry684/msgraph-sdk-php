<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainDnsMxRecord File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* DomainDnsMxRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DomainDnsMxRecord extends DomainDnsRecord
{
    /**
    * Gets the mailExchange
    *
    * @return string The mailExchange
    */
    public function getMailExchange()
    {
        if (array_key_exists("mailExchange", $this->_propDict)) {
            return $this->_propDict["mailExchange"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mailExchange
    *
    * @param string $val The mailExchange
    *
    * @return DomainDnsMxRecord
    */
    public function setMailExchange($val)
    {
        $this->_propDict["mailExchange"] = $val;
        return $this;
    }
    
    /**
    * Gets the preference
    *
    * @return int The preference
    */
    public function getPreference()
    {
        if (array_key_exists("preference", $this->_propDict)) {
            return $this->_propDict["preference"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preference
    *
    * @param int $val The preference
    *
    * @return DomainDnsMxRecord
    */
    public function setPreference($val)
    {
        $this->_propDict["preference"] = intval($val);
        return $this;
    }
    
}