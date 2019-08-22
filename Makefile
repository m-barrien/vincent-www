all:sass js
	notify-send "Ready"
copy:
	cp -rf ./themes/vincent ./public_html/wp-content/themes
	cp -rf ./themes/vincent/css ./public_html/
	cp -rf ./themes/vincent/js ./public_html/
	cp -rf ./themes/vincent/fonts ./public_html/
	cp -rf ./plugins/* ./public_html/wp-content/plugins/
	cp  ./themes/vincent/consulta.php ./public_html/consulta.php
sass:
	npm run sass
	make copy
js:
	npm run bundle-js
	npm run minify
	make copy
package:
	cd public_html/ && \
	zip vin-theme.zip css/app.css js/app.js wp-content/themes/vincent/* consulta.php
	mv public_html/vin-theme.zip ./vin-theme.zip