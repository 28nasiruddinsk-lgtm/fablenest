#!/bin/sh
# Static copy of the site for GitHub Pages (PHP does not run there): sh tools/export.sh
set -e
cd "$(dirname "$0")/.."
PHP=${PHP:-/d/Xampp/php/php.exe}
OUT=docs
rm -rf $OUT && mkdir -p $OUT
cp -r assets $OUT/assets
cp style.css about.css service.css seo.css main.js about.js $OUT/
sed -i "s/let msg = 'Please try again';/let msg = 'Preview only: form is off';/" $OUT/main.js
touch $OUT/.nojekyll
fix() { sed -E \
  -e 's#href="index\.php#href="index.html#g' \
  -e 's#href="about\.php#href="about.html#g' \
  -e 's#href="book-publishing\.php#href="book-publishing.html#g' \
  -e 's#service\.php\?s=([a-z-]+)#service-\1.html#g' \
  -e 's#/index\.php#/index.html#g' -e 's#/about\.php#/about.html#g' -e 's#/book-publishing\.php#/book-publishing.html#g'; }
$PHP tools/render.php index.php | fix > $OUT/index.html
$PHP tools/render.php about.php | fix > $OUT/about.html
$PHP tools/render.php book-publishing.php | fix > $OUT/book-publishing.html
for s in $($PHP -r '$a=require "content-services.php"; echo implode(" ",array_keys($a));'); do
  $PHP tools/render.php service.php $s | fix > $OUT/service-$s.html
done
$PHP tools/render.php sitemap.php | fix > $OUT/sitemap.xml
$PHP tools/render.php llms.php | fix > $OUT/llms.txt
printf 'User-agent: *\nAllow: /\n\nSitemap: https://28nasiruddinsk-lgtm.github.io/fablenest/sitemap.xml\n' > $OUT/robots.txt
echo "exported: $(ls $OUT/*.html | wc -l) pages"
