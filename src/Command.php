<?php

// Declaring namespace
namespace LaswitchTech\coreIMAP;

// Import additionnal class into the global namespace
use LaswitchTech\coreBase\BaseCommand;
use LaswitchTech\coreIMAP\IMAP;

class Command extends BaseCommand {

    // Properties
    protected $IMAP;

    /**
     * Constructor
     * @param object $Auth
     */
	public function __construct($Auth){

        // Namespace: /imap

        // Initialize IMAP
        $this->IMAP = new IMAP();

		// Call the parent constructor
		parent::__construct($Auth);
	}
}
