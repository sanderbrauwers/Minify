while inotifywait -e create /var/www/html/webapp/minify/data; do python3 server.py
done