#!/bin/sh
# Static copy of the site for Cloudflare / GitHub Pages (PHP does not run there): sh tools/export.sh
# Clean URLs (/about, /service-book-trailer) are what Cloudflare serves for about.html etc.
set -e
cd "$(dirname "$0")/.."
PHP=${PHP:-/d/Xampp/php/php.exe}
HOST=${HOST:-fablenest.28nasiruddinsk.workers.dev}
OUT=docs
rm -rf $OUT && mkdir -p $OUT
cp -r assets $OUT/assets
cp style.css about.css service.css seo.css main.js about.js $OUT/
sed -i "s/let msg = 'Please try again';/let msg = 'Preview only: form is off';/" $OUT/main.js
touch $OUT/.nojekyll
fix() { sed -E \
  -e 's#href="index\.php(\#[a-z-]*)?"#href="/\1"#g' \
  -e 's#href="(about|book-publishing)\.php(\#[a-z-]*)?"#href="/\1\2"#g' \
  -e 's#(href="|https://[^/"]+/|<loc>https://[^<]*/)service\.php\?s=([a-z-]+)#\1service-\2#g' \
  -e 's#service\.php\?s=([a-z-]+)#/service-\1#g' \
  -e 's#(https://[^/" <]+/)(about|book-publishing)\.php#\1\2#g' \
  -e 's#href="index\.php#href="/#g' ; }
r() { $PHP tools/render.php "$@" "$HOST" ; }
$PHP tools/render.php index.php "" $HOST | fix > $OUT/index.html
$PHP tools/render.php about.php "" $HOST | fix > $OUT/about.html
$PHP tools/render.php book-publishing.php "" $HOST | fix > $OUT/book-publishing.html
for s in $($PHP -r '$a=require "content-services.php"; echo implode(" ",array_keys($a));'); do
  $PHP tools/render.php service.php $s $HOST | fix > $OUT/service-$s.html
done
$PHP tools/render.php sitemap.php "" $HOST | fix > $OUT/sitemap.xml
$PHP tools/render.php llms.php "" $HOST | fix > $OUT/llms.txt
printf 'User-agent: *\nAllow: /\n\nSitemap: https://%s/sitemap.xml\n' "$HOST" > $OUT/robots.txt
echo "exported: $(ls $OUT/*.html | wc -l) pages"
