# TYPO3 CMS Waardepapieren Clerk frontend Distribution

Get going quickly with TYPO3 CMS.

## Prerequisites
* Get Waardepapieren at `https://github.com/discipl/waardepapieren`
* `docker-compose -f docker-compose-travis.yml up`

## Quickstart
* `cd [this-directory]`
* `bin/start-environment.sh`
* At `Do you want to restore the database from previous dump? y/N` enter `y`
* `bin/composer.sh install`

## Webservers
* Waardepapieren: `https://localhost`
* TYPO3: `https://localhost:8090`

### TYPO3 backend
* `https://localhost:8090/typo3`
* username: `app`
* password: `password`

## Troubleshooting
Because we are in a development phase, you might encounter some problems:

### Certificates
The certificates for both webservers are currently self assigned. You need
to make an exception for these certificates for both webservers in your
browser.

### Cross-Origin Resource Sharing (CORS)
Cross-origin requests are made, but CORS has not been implemented yet.
This will result into failures when information from the Waardepapieren  
websocket is requested. To overcome this problem CORS needs to be
disabled in the browser.

WARNING: The settings below will disable CORS for all websites. When you
have finished, turn these settings OFF.

#### Safari
* Go to Preferences > Advanced and check the option `Show develop menu in menu bar`
* In the menu bar click on Develop and check the option `Disable Cross-Origin restrictions`

#### Chrome
* Install the extension `Allow CORS: Access-Control-Allow-Origin` and turn it on

#### Firefox
* Install the extension `CORS everywhere` and turn it on

#### Opera
* Install the extension `CORS Toggle` and turn it on

# License
GPL-2.0 or later
