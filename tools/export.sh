#!/bin/sh
# Static copy of the site for Cloudflare / GitHub Pages (PHP does not run there): sh tools/export.sh
# Clean URLs (/about, /service-book-trailer) are what Cloudflare serves for about.html etc.
set -e
cd "$(dirname "$0")/.."
PHP=${PHP:-/d/Xampp/php/php.exe}
HOST=${HOST:-fablenestpublishers.com}
OUT=docs
rm -rf $OUT && mkdir -p $OUT
cp -r assets $OUT/assets
cp style.css about.css service.css seo.css main.js about.js $OUT/
sed -i "s/let msg = 'Please try again';/let msg = 'Preview only: form is off';/" $OUT/main.js
touch $OUT/.nojekyll
# sed rules: the static ones plus one pair per keyword address in inc/slugs.php
SEDF=$(mktemp)
cat > $SEDF <<'EOF'
s#(href="|https://[^/"]+/|<loc>https://[^<]*/)guide\.php\?g=([a-z-]+)#\1\2#g
s#guide\.php\?g=([a-z-]+)#/\1#g
s#href="index\.php(\#[a-z-]*)?"#href="/\1"#g
s#href="about\.php(\#[a-z-]*)?"#href="/about\1"#g
s#(https://[^/" <]+/)about\.php#\1about#g
s#href="index\.php#href="/#g
EOF
$PHP tools/slugsed.php >> $SEDF
fix() { sed -E -f $SEDF ; }
r() { $PHP tools/render.php "$@" "$HOST" ; }
$PHP tools/render.php index.php "" $HOST | fix > $OUT/index.html
$PHP tools/render.php about.php "" $HOST | fix > $OUT/about.html
BP=$($PHP -r '$m=require "inc/slugs.php"; echo $m["book-publishing"];')
$PHP tools/render.php book-publishing.php "" $HOST | fix > $OUT/$BP.html
for g in $($PHP -r '$a=require "content-articles.php"; echo implode(" ",array_keys($a));'); do
  $PHP tools/render.php guide.php $g $HOST | fix > $OUT/$g.html
done
for s in $($PHP -r '$a=require "content-services.php"; echo implode(" ",array_keys($a));'); do
  P=$($PHP -r '$m=require "inc/slugs.php"; echo $m["services"]["'$s'"] ?? "service-'$s'";')
  $PHP tools/render.php service.php $s $HOST | fix > $OUT/$P.html
done
$PHP tools/render.php sitemap.php "" $HOST | fix > $OUT/sitemap.xml
$PHP tools/render.php llms.php "" $HOST | fix > $OUT/llms.txt
printf 'User-agent: *\nAllow: /\n\nSitemap: https://%s/sitemap.xml\n' "$HOST" > $OUT/robots.txt
echo "exported: $(ls $OUT/*.html | wc -l) pages"
