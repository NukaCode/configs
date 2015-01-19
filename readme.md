# Scrutinizer

Just copy the .scrutinizer.yml into your project.  Note, this is set to wait for a code coverage report to be sent.  If you are not running tests, or you have tests running without coverage, remove line 2 from that file. 

# Travis CI

## General

> composer require mockery/mockery orchestra/testbench

## Behat

> composer require behat/behat behat/mink behat/mink-extension laracasts/behat-laravel-extension --dev

- If you are using behat by itself, just copy the behat config and travis-behat config to your project as .travis.yml.
- If you are using it along side other tests, grab the other travis config, copy it over and add the last 2 lines from before_script and the single script line from .travis-behat.yml into it.
    - An example is included for phpspec/behat in .travis-phpspec-behat.yml.
    
## PHPSpec

> composer require phpspec/phpspec henrikbjorn/phpspec-code-coverage

- Copy phpspec.yml into your project.
    - Make sure to change the NAMESPACE to your projects namespace.

## PHPUnit

> composer require phpunit

- Straight forward.  Copy the .travis-phpunit.yml to your project as .travis.yml.

## Codeception

> composer require codeception/codeception

- Copy the codeception.yml into your project.  Then copy the 3 configs from codeception/ into your projects test/ directory.
    - Make sure to change URL to your url in acceptance.suite.yml.