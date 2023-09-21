.PHONY: main build install

BRANCH := $(shell cat .git/HEAD | awk -F/ '{ print $$3 }')

main: build

# init:
# 	-curl -sS https://getcomposer.org/installer | php
# 	-sudo mv composer.phar /usr/local/bin/composer

install:
	-npm install

build: install
	-npm run build
#	-git pull origin ${BRANCH}
#	-composer install

#upgrade:
#	-composer self-update

#test:
#	vendor/bin/phpunit

