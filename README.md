# WP Log HTTP Headers

Logs the contents of the $_SERVER superglobal to wp-content/headers.log

## Security Caution

This plugin is for debugging purposes only. Don't leave it running, and delete 
headers.log as soon  as possible after it's created. 
headers.log is a plain text file, so it has tons of potential to leak info about
your server to the world.