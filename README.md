# TYPO3 CMS Waardepapieren Clerk frontend Distribution

Get going quickly with TYPO3 CMS.

## Prerequisites
* PHP 7.3
* [Composer](https://getcomposer.org/download/)

### Waardepapieren
* Get Waardepapieren at `https://github.com/discipl/waardepapieren`
* `docker-compose -f docker-compose-travis.yml up`

## Quickstart
* `cd [this-directory]`
* `composer install`
* `bin/start-environment.sh`
* At `Do you want to restore the database from previous dump? y/N` enter `y`

## Webservers
* Waardepapieren: `https://localhost`
* TYPO3: `https://localhost:8090`

### TYPO3 backend
* `https://localhost:8090/typo3`
* username: `app`
* password: `password`

# License
GPL-2.0 or later
