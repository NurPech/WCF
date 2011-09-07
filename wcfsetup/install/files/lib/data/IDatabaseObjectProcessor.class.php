<?php
namespace wcf\data;

/**
 * Default interface for DatabaseObject processors.
 *
 * @author	Marcel Werk
 * @copyright	2001-2011 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	data
 * @category 	Community Framework
 */
interface IDatabaseObjectProcessor {
	/**
	 * Creates a new instance of a database object processor.
	 * 
	 * @param	wcf\data\DatabaseObject		$object
	 */
	public function __construct(DatabaseObject $object);
	
	/**
	 * Delegates property accesses to the processed object if the processor
	 * object has no such property.
	 *   
	 * @param	string		$name
	 * @return	mixed
	 */
	public function __get($name);
	
	/**
	 * Delegates isset calls for object properties to the processed object if
	 * the processor object has no such property.
	 * 
	 * @param	string		$name
	 * @return	boolean
	 */
	public function __isset($name);
	
	/**
	 * Delegates inaccessible methods calls to the processed database object.
	 *  
	 * @param	string		$name
	 * @param	array		$arguments
	 * @return	mixed
	 */
	public function __call($name, $arguments);
}
