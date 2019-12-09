<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Integrations
 *
 * This Class contains all functions pertaining to Third-Party Integrations
 *
 * @package		CodeIgniter
 */

/**
 * Integrations Library
 */
class Integrations
{
    /**
     *	Registers listeners to be kicked off on trigger
     */
    public function __construct()
    {
        Events::register('event_create', array($this,'integrations_create'));
        Events::register('event_read', array($this,'integrations_read'));
        Events::register('event_update', array($this,'integrations_update'));
        Events::register('event_delete', array($this,'integrations_delete'));
    }
    
    /**
     * Event trigger for integrations on Create CRUD operation
     *
     * @param	array		$data	Data to be made available to Third Party Integrations separated into "type" which is the type of data being sent (ITEMS, ITEM_KITS, CUSTOMERS, SUPPLIERS and GIFTCARDS) and "data"
     * @return	string|NULL			NULL is returned on a successful completion of integration tasks or the integration and failure message
     */
    public function integrations_create($data)
    {
        $negative_results = NULL;
        //calls to create functions for the different Integrations
        
        return $negative_results;
    }
    
    /**
     * Event trigger for integrations on Read CRUD operation
     *
     * @param	array		$data	Data to be made available to Third Party Integrations separated into "type" which is the type of data being sent (ITEMS, ITEM_KITS, CUSTOMERS, SUPPLIERS, GIFTCARDS, RECEIVINGS, and SALES) and "data"
     * @return	string|NULL			NULL is returned on a successful completion of integration tasks or the integration and failure message
     */
    public function integrations_read($data)
    {
        //Currently no triggers are established for Read operations.  It's unclear whether we will use these in integrations
        $negative_results = NULL;
        //calls to read functions for the different Integrations
        
        return $negative_results;
    }
    
    /**
     * Event trigger for integrations on Update CRUD operation
     *
     * @param	array		$data	Data to be made available to Third Party Integrations separated into "type" which is the type of data being sent (ITEMS, ITEM_KITS, CUSTOMERS, SUPPLIERS, GIFTCARDS, RECEIVINGS, and SALES) and "data"
     * @return	string|NULL			NULL is returned on a successful completion of integration tasks or the integration and failure message
     */
    public function integrations_update($data)
    {
        $negative_results = NULL;
        //calls to update functions for the different Integrations
        
        return $negative_results;
    }
    
    /**
     * Event trigger for integrations on Delete CRUD operation
     *
     * @param	array		$data	Data to be made available to Third Party Integrations separated into "type" which is the type of data being sent (ITEMS, ITEM_KITS, CUSTOMERS, SUPPLIERS and GIFTCARDS) and "data"
     * @return	string|NULL			NULL is returned on a successful completion of integration tasks or the integration and failure message
     */
    public function integrations_delete($data)
    {
        $negative_results = NULL;
        //calls to delete functions for the different Integrations
        
        return $negative_results;
    }
    
    /**
     * ALL THIRD-PARTY INTEGRATION-SPECIFIC FUNCTIONS SHOULD BE GROUPED BELOW THIS LINE AND CALLED IN THE FUNCTIONS ABOVE
     */
}