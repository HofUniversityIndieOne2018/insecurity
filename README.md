# Insecurity

Demonstration of basic security aspects on SQL injection, Cross-Site Scripting and Insecure Deserialization
in web applications.

## Installation

* having Docker and [DDEV](https://github.com/drud/ddev) (at least version 1.5) installed
  + https://ddev.readthedocs.io/en/stable/#docker-installation
  + https://ddev.readthedocs.io/en/stable/#installation-or-upgrade-windows
* clone git repository
* execute `ddev start`
* execute `ddev composer install`
* import dummy database using `ddev import-db --src ./ddev/database.sql.gz`

Web project is provided at [http://insecurity.ddev.local/](http://insecurity.ddev.local/)
