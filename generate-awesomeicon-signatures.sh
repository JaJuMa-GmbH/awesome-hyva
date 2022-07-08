#!/usr/bin/env bash
for FILE in view/frontend/web/svg/awesomeicons6/solid/*.svg
do
    echo -n " * @method string "
    echo -n $(basename -s .svg $FILE | sed -E 's/-(.)/\U\1/g')
    echo "Html(string \$classnames = '', ?int \$width = 24, ?int \$height = 24, array \$attributes = [])"
done
