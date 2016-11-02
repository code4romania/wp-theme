# Code4

Code for Romania.

## Instalare

### Hosts
- Classic Apache, MySQL, php tools, foloseste [MAMP](https://www.mamp.info/en/) sau ceva similar.
- Seteaza host name in `/etc/hosts`:
```
127.0.0.1 code4.local
```
- Seteaza VirtualHost in  `YOUR_APACHE_PATH/extra/httpd-vhosts.conf` cu urmatoarele:
```
<VirtualHost *:80>
  ServerAdmin contact@code4.ro
  DocumentRoot "YOUR_HTDOCS_PATH/code4"
  ServerName code4.local
</VirtualHost>
```

### Baza de date
#### Fara continut
- Creaza o baza de date noua cu user si permission-urile necesare si instaleaza ultima versiune de [Wordpress](https://wordpress.org/download/).

#### Cu continut
- Foloseste [Search Replace DB](https://interconnectit.com/products/search-and-replace-for-wordpress-databases/) pentru trecerea de la code4.ro la code4.local. Prefixul tabelelor trebuie modificat in `wp-config.php`, vezi DB dupa import pentru prefix.

### Tema
- `git clone https://github.com/code4romania/theme.git code4` in `themes`.
- Presupunem ca Node/NPM si Bower sunt parte din setup-ul tau:
```
cd code4
npm install && bower install
gulp build
gulp watch
```
- Activeaza tema in Dashboard si distreaza-te.

Merci [Sage starter theme](Sage.md).
