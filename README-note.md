# Note

## Cli

```
composer create-project symfony/framework-standard-edition <project-name>
composer create-project symfony/framework-standard-edition bitly

composer dump-autoload

composer require <package-name> [version]
composer require <package-name[:version]> [...package-name[:version]]
composer require doctrine/doctrine-migrations-bundle "^1.0"
composer require doctrine/doctrine-migrations-bundle:^1.0 jms/serializer-bundle:^1.3 leopardd/url-shortener-bundle:^1.0
composer require --dev phpmd/phpmd:^2.6 phpspec/phpspec:^3.1 squizlabs/php_codesniffer:^2.8

composer remove <package-name>

./bin/console server:run
./bin/console generate:bundle
./bin/console debug:router
./bin/console cache:clear
./bin/console security:check
./bin/phpspec desc "Leopardd\Bundle\UrlShortenerBundle\Service\RedirectService"
./bin/phpspec run
```

## In considering

```
friendsofsymfony/rest-bundle
codeception/codeception
jms/serializer-bundle
snc/redis-bundle
php-amqplib/rabbitmq-bundle
leezy/pheanstalk-bundle
rollbar/rollbar
predis/predis
facebook/graph-sdk
```
