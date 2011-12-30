#!/bin/bash

rsync -e ssh --archive --omit-dir-times --itemize-changes --no-group --exclude .git --exclude-from .gitignore ./ biology@excelsior:~/public_html/
