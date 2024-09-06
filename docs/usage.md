# Usage
## Initiate IMAP
To use `IMAP`, simply include the IMAP.php file and create a new instance of the `IMAP` class.

```php
<?php

// Import additionnal class into the global namespace
use LaswitchTech\coreIMAP\IMAP;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Initiate IMAP
$IMAP = new IMAP();
```

### Properties
`IMAP` provides the following properties:

- [Configurator](https://github.com/LaswitchTech/coreConfigurator)
- [Logger](https://github.com/LaswitchTech/coreLogger)

### Methods
`IMAP` provides the following methods:

- [close()](methods/IMAP/close.md)
- [config()](methods/IMAP/config.md)
- [createFolder()](methods/IMAP/createFolder.md)
- [deleteFolder()](methods/IMAP/deleteFolder.md)
- [getFolders()](methods/IMAP/getFolders.md)
- [getHost()](methods/IMAP/getHost.md)
- [getMessages()](methods/IMAP/getMessages.md)
- [getUsername()](methods/IMAP/getUsername.md)
- [isConnected()](methods/IMAP/isConnected.md)
- [isInstalled()](methods/IMAP/isInstalled.md)
- [setFolder()](methods/IMAP/setFolder.md)

## Initiate Message
To use `Message`, simply include the IMAP.php file and create a new instance of the `IMAP` class.

```php
<?php

// Import additionnal class into the global namespace
use LaswitchTech\coreIMAP\Message;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Initiate Message
$Message = new Message();
```

### Methods
`Message` provides the following methods:

- [answer()](methods/IMAP/answer.md)
- [copy()](methods/IMAP/copy.md)
- [delete()](methods/IMAP/delete.md)
- [draft()](methods/IMAP/draft.md)
- [flag()](methods/IMAP/flag.md)
- [getAttachments()](methods/IMAP/getAttachments.md)
- [getBcc()](methods/IMAP/getBcc.md)
- [getBody()](methods/IMAP/getBody.md)
- [getCc()](methods/IMAP/getCc.md)
- [getDate()](methods/IMAP/getDate.md)
- [getFrom()](methods/IMAP/getFrom.md)
- [getId()](methods/IMAP/getId.md)
- [getReplyTo()](methods/IMAP/getReplyTo.md)
- [getSender()](methods/IMAP/getSender.md)
- [getSubject()](methods/IMAP/getSubject.md)
- [getTo()](methods/IMAP/getTo.md)
- [getUid()](methods/IMAP/getUid.md)
- [isAnswered()](methods/IMAP/isAnswered.md)
- [isDeleted()](methods/IMAP/isDeleted.md)
- [isDraft()](methods/IMAP/isDraft.md)
- [isFlagged()](methods/IMAP/isFlagged.md)
- [isRead()](methods/IMAP/isRead.md)
- [isRecent()](methods/IMAP/isRecent.md)
- [move()](methods/IMAP/move.md)
- [read()](methods/IMAP/read.md)
- [save()](methods/IMAP/save.md)
- [size()](methods/IMAP/size.md)
- [unanswer()](methods/IMAP/unanswer.md)
- [undraft()](methods/IMAP/undraft.md)
- [unflag()](methods/IMAP/unflag.md)
- [unread()](methods/IMAP/unread.md)

## Initiate Attachment
To use `Attachment`, simply include the IMAP.php file and create a new instance of the `Attachment` class.

```php
<?php

// Import additionnal class into the global namespace
use LaswitchTech\coreIMAP\Attachment;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Initiate Attachment
$Attachment = new Attachment();
```

### Methods
`Attachment` provides the following methods:

- [getContent()](methods/IMAP/getContent.md)
- [getContentType()](methods/IMAP/getContentType.md)
- [getDisposition()](methods/IMAP/getDisposition.md)
- [getEncoding()](methods/IMAP/getEncoding.md)
- [getFilename()](methods/IMAP/getFilename.md)
- [getFiletype()](methods/IMAP/getFiletype.md)
- [getId()](methods/IMAP/getId.md)
- [save()](methods/IMAP/save.md)

## Initiate Command for coreCLI integration
To use `Command`, simply create `Command/ImapCommand.php` file and extend a new instance of the `Command` class.

```php

// Import Logger class into the global namespace
// These must be at the top of your script, not inside a function
use LaswitchTech\coreIMAP\Command;

// Initiate the Command class
class ImapCommand extends Command {}
```

### Methods
`Command` provides the following methods:

- [method()](methods/Command/method.md)

## Initiate Controller for coreAPI and/or coreRouter integration
To use `Controller`, simply create `Controller/ImapController.php` file and extend a new instance of the `Controller` class.

```php

// Import Logger class into the global namespace
// These must be at the top of your script, not inside a function
use LaswitchTech\coreIMAP\Controller;

// Initiate the Controller class
class ImapController extends Controller {}
```

### Methods
`Controller` provides the following methods:

- [method()](methods/Controller/method.md)
