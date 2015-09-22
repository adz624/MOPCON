.PHONY: main init install update composerInstall composerDumpAutoload composerUpdate

main: install

init:
	-curl -sS https://getcomposer.org/installer | php
	-sudo mv composer.phar /usr/local/bin/composer

install:
	-composer install

update:
	git pull origin develop
	-composer install

# composer
#
composerInstall:
	-composer install

composerDumpAutoload:
	-composer dump-autoload

composerUpdate:
	-composer update

#test:
#	vendor/bin/phpunit

