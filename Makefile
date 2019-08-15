all:sass js
	notify-send "Ready"
copy:
	cp -rf ./themes/vincent ./public_html/wp-content/themes
	cp -rf ./themes/vincent/css ./public_html/
	cp -rf ./themes/vincent/js ./public_html/
	cp -rf ./themes/vincent/fonts ./public_html/
sass:
	npm run sass
	make copy
js:
	npm run bundle-js
	npm run minify
	make copy
perm:
	sudo chown -R www-data:www-data ./mysql-data/
	sudo chown -R marcelo:marcelo ./public_html
