all:sass js
copy:
	cp -rf ./themes/vincent2 ./public_html/wp-content/themes
	cp -rf ./themes/vincent2/css ./public_html/
	cp -rf ./themes/vincent2/js ./public_html/
	cp -rf ./themes/vincent2/fonts ./public_html/
	cp ./plugins/vincent-custom-types.php ./public_html/wp-content/plugins/
sass:
	npm run sass
	make copy
js:
	npm run bundle-js
	npm run minify
perm:
	sudo chown -R vincent:vincent ./public_html
	sudo chown -R www-data:www-data ./public_html/wp-content/uploads
package:
	cd public_html/ && \
	zip -r vin-theme.zip css/app.css js/app.js wp-content/themes/vincent2/*
	mv public_html/vin-theme.zip ./vin-theme.zip