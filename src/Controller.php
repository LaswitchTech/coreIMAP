<?php

// Declaring namespace
namespace LaswitchTech\coreIMAP;

// Import additionnal class into the global namespace
use LaswitchTech\coreBase\BaseController;
use LaswitchTech\coreIMAP\IMAP;

class Controller extends BaseController {

    // Properties
    protected $IMAP;

    /**
     * Constructor
     * @param object $Auth
     */
	public function __construct($Auth){

        // Namespace: /imap

		// Set the controller Authentication Policy
		$this->Public = true; // Set to false to require authentication

		// Set the controller Authorization Policy
		$this->Permission = false; // Set to true to require a permission for the namespace used.
		$this->Level = 1; // Set the permission level required

        // Initialize IMAP
        $this->IMAP = new IMAP();

		// Call the parent constructor
		parent::__construct($Auth);
	}
}
