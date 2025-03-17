#!/usr/bin/env bash

docker run \
  --user root \
  --rm \
  --volume  "$(pwd):/var/www/html/nonprofit-fse" \
  wordpress:cli bash -c 'php -d memory_limit=1024M "$(which wp)" i18n make-pot ./nonprofit-fse/ ./nonprofit-fse/languages/nonprofit-fse.pot --headers={\"Last-Translator\":\"friends@themeisle.com\"\,\"Project-Id-Version\":\"NonprofitFSE\"\,\"Report-Msgid-Bugs-To\":\"https://github.com/Codeinwp/nonprofit-fse/issues\"\} --allow-root --exclude=dist,build,bundle,e2e-tests '