all:sass js
copy:
	cp -rf ./themes/vincent ./public_html/wp-content/themes
	cp -rf ./themes/vincent/css ./public_html/
	cp -rf ./themes/vincent/js ./public_html/
	cp -rf ./themes/vincent/fonts ./public_html/
	cp ./plugins/vincent-custom-types.php ./public_html/wp-content/plugins/
sass:
	npm run sass
	make copy
js:
	npm run bundle-js
	make copy
	npm run minify
perm:
	sudo docker-compose exec mysql chown -R mysql:mysql /var/lib/mysql
	sudo chown -R www-data:www-data ./public_html
	sudo chmod 755 ./public_html
package:
	cd public_html/ && \
	zip -r vin-theme.zip css/app.css js/app.js wp-content/themes/vincent/*
	mv public_html/vin-theme.zip ./vin-theme.zip
