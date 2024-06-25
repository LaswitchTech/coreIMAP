<?php

// Import additionnal class into the global namespace
use LaswitchTech\coreIMAP\IMAP;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Initiate IMAP
$IMAP = new IMAP();

// Check Connection Status
$IMAP->isConnected();

// Get Host
$IMAP->getHost();

// Get Username
$IMAP->getUsername();

// Get Folders
$IMAP->getFolders();

// Set Folder
$IMAP->setFolder("INBOX");

// Loop through messages
foreach($IMAP->getMessages() as $message){

    // Get Message To
    $message->getTo();

    // Get Message Cc
    $message->getCc();

    // Get Message Bcc
    $message->getBcc();

    // Get Message Sender
    $message->getSender();

    // Get Message From
    $message->getFrom();

    // Get Message ReplyTo
    $message->getReplyTo();

    // Get Message Uid
    $message->getUid();

    // Get Message Id
    $message->getId();

    // Get Message Date
    $message->getDate();

    // Get Message Subject
    $message->getSubject();

    // Get Message Body
    $message->getBody();

    // Save Message
    $message->save();

    // Loop through attachments
    foreach($message->getAttachments() as $attachement){

        // Get Attachment Disposition
        $attachement->getDisposition();

        // Get Attachment Filename
        $attachement->getFilename();

        // Get Attachment Id
        $attachement->getId();

        // Get Attachment Encoding
        $attachement->getEncoding();

        // Get Attachment ContentType
        $attachement->getContentType();

        // Get Attachment Content
        $attachement->getContent();

        // Save Attachment
        $attachement->save();
    }
}
