# Code4

Code for Romania theme.

## Installation steps
- Classic Apache, MySQL, php tools, use [MAMP](https://www.mamp.info/en/).
- Setup host names in `/etc/hosts`:
```
127.0.0.1 code4.local
```
- Setup VirtualHost names in `APACHE_PATH/extra/httpd-vhosts.conf` with the following:
```
<VirtualHost *:80>
    ServerAdmin contact@code4.ro
    DocumentRoot "HTDOCS_PATH/code4"
    ServerName code4.local
</VirtualHost>
```
- Create new DB, assign user to it and install latest [Wordpress](https://wordpress.org/download/).
- `git clone https://github.com/code4romania/theme.git code4` in the themes folder.
- `cd code 4 && npm install && bower install` given NPM and Bower are already part of your workflow, they should be.
- Activate new theme & do the voodoo.
- Read more about the Sage starter theme [here](Sage.md).
