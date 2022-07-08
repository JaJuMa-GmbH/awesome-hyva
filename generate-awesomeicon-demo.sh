#!/usr/bin/env bash
for FILE in view/frontend/web/svg/awesomeicons/brands/*.svg
do
    echo -n " {'name':'"
    echo -n $(basename -s .svg $FILE)
    echo -n "', 'href':'<?= \$block->getBaseUrl() ?>awesomehyva/iconv6/detail?name="
    echo -n $(basename -s .svg $FILE)
    echo -n "&style=brands', 'function':'<?= \str_replace(\"\\"
    echo -n "n\", \"\", \$awesomeiconsbrands->"
    echo -n $(basename -s .svg $FILE | sed -E 's/-(.)/\U\1/g')
    echo "Html('w-10 h-10',25,25))?>'},"
done
