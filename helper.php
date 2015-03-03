<?php
defined('_JEXEC') or die;

class modTemplateDBHelper {
	
	public static function getTemplate(){
// Obtain a database connection
$db = JFactory::getDbo();
// Retrieve the shout
$query = $db->getQuery(true)
    ->select($db->quoteName(array('name')))
    ->from($db->quoteName('#__assets'));
// Prepare the query
$db->setQuery($query);
// Load the row.
$result = $db->loadObjectList();
// Return the Hello
return $result;
	}
}

?>