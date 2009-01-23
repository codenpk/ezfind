<?php
//
//
// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: eZ Find
// SOFTWARE RELEASE: 2.0.x
// COPYRIGHT NOTICE: Copyright (C) 2009 eZ Systems AS
// SOFTWARE LICENSE: GNU General Public License v2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
//
//
// ## END COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
//

/**
 * File containing the eZFindElevateConfiguration class.
 *
 * @package eZFind
 */
class eZFindElevateConfiguration extends eZPersistentObject
{
    /**
     * Used as a data transmission artifact.
     * Will store the configuration XML string once it was generated by the method generateConfiguration()
     *
     * @see function generateConfiguration()
     * @var string
     */
    protected static $configurationXML = null;

    /**
     * Constructor. Will create a new configuration row.
     *
     * @param array $row Contains the values for each column in the DB.
     */
    public function __construct( $row )
    {
        $this->eZPersistentObject( $row );
    }

    /**
     * Mandatory method defining the eZFindElevationConfiguration persistent object
     *
     * @return array An array defining the eZFindElevationConfiguration persistent object
     */
    public static function definition()
    {
        return array(
            "fields" => array( "search_query"     => array(    'name' => 'searchQuery',
                                                               'datatype' => 'string',
                                                               'default' => '',
                                                               'required' => true ),
                               "contentobject_id" => array(    'name' => 'contentObjectId',
                                                               'datatype' => 'int',
                                                               'default' => 0,
                                                               'required' => true ),
                               "language_code"    => array(    'name' => 'languageCode',
                                                               'datatype' => 'string',
                                                               'default' => '',
                                                               'required' => true )
                             ),
            "keys" => array( "search_query", "contentobject_id", "language_code" ),
            "function_attributes" => array(),
            "class_name" => "eZFindElevateConfiguration",
            "sort" => array( "id" => "asc" ),
            "name" => "ezfind_elevate_configuration"
        );
    }

    /**
     * Retrieves the query strings triggering elevation for a given content object, possibly per language.
     *
     * @param int $objectID ID of the content object to fetch elevate configuration for
     * @param string $languageCode if filtering on language-code is required
     * @return array An array containing the query strings elevating the object
     */
    public static function fetchQueryStringsForObject( $objectID, $languageCode = null )
    {
    }

    /**
     * Retrieves the content objects elevated by a given query string, possibly per language.
     *
     * @param string $queryString query string for which elevate configuration is retrieved
     * @param string $languageCode if filtering on language-code is required
     * @return array An array containing the content objects elevated by the query string
     */
    public static function fetchObjectsForQueryString( $queryString, $languageCode = null )
    {
    }

    /**
     * Synchronises the elevate configuration stored in the DB
     * with the one actually used by Solr.
     */
    public static function synchroniseWithSolr()
    {
    }

    /**
     * Extracts the configuration stored in the DB and turns it into a Solr-compliant XML string.
     * Stores the result string in the local property $configurationXML
     *
     * @see $configurationXML
     * @return boolean true if the generation run correclty, false otherwise.
     */
    protected static function generateConfiguration()
    {
    }

    /**
     * Simple static getter to the configuration XML
     *
     * @see $configurationXML
     * @return mixed A string containing the configuration XML, null otherwise ( default value of $configurationXML )
     */
    protected static function getConfiguration()
    {
    }

    /**
     * Pushes the configuration XML to Solr. Different push methods might be used
     *   * phase 1 : direct update of the XML file, locally.
     *   * phase 2 : push to Solr through a requestHandler
     *
     * @see $configurationXML
     * @return void
     */
    protected static function pushConfigurationToSolr()
    {
        // this one might throw a few exceptions...
    }
}
?>