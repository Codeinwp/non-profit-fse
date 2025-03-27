#!/usr/bin/env bash

docker run \
  --user root \
  --rm \
  --volume  "$(pwd):/var/www/html/non-profit-fse" \
  wordpress:cli bash -c 'php -d memory_limit=1024M "$(which wp)" i18n make-pot ./non-profit-fse/ ./non-profit-fse/languages/non-profit-fse.pot --headers={\"Last-Translator\":\"friends@themeisle.com\"\,\"Project-Id-Version\":\"NonProfitFSE\"\,\"Report-Msgid-Bugs-To\":\"https://github.com/Codeinwp/non-profit-fse/issues\"\} --allow-root --exclude=dist,build,bundle,e2e-tests '