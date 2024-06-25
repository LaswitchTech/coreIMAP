# config(string $option, string $value)
This method is used to set the configuration options for the module.

```php
$IMAP->config('option', 'value');
```

## Available Options
- host: The host of the IMAP server.
- username: The username of the IMAP server.
- password: The password of the IMAP server.
- port: The port of the IMAP server.
- encryption: The encryption method of the IMAP server.
- flag: The flag of the IMAP server. e.g. novalidate-cert
