# connect($username, $password, $host, $port = 993, $encryption = 'ssl', $flag = null)
This method is used to connect to the IMAP server. The method requires the username, password, host, and port of the IMAP server. The method also accepts an optional encryption parameter which defaults to 'ssl'.

```php
$IMAP->connect('mail@domain.com', '123password', '127.0.0.1');
```
