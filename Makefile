all:sass js
	notify-send "Ready"
copy:
	cp -rf ./themes/vincent ./public_html/wp-content/themes
	cp -rf ./themes/vincent/css ./public_html/
	cp -rf ./themes/vincent/js ./public_html/
	cp -rf ./themes/vincent/fonts ./public_html/
	cp -rf ./plugins/* ./public_html/wp-content/plugins/
sass:
	npm run sass
	make copy
js:
	npm run bundle-js
	npm run minify
	make copy
package:
	cd public_html/ && \
	zip -r vin-theme.zip css/app.css js/app.js wp-content/themes/vincent/*
	mv public_html/vin-theme.zip ./vin-theme.zip