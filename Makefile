all:sass js
	notify-send "Ready"
copy:
	cp -rf ./themes/vincent2 ./public_html/wp-content/themes
	cp -rf ./themes/vincent2/css ./public_html/
	cp -rf ./themes/vincent2/js ./public_html/
	cp -rf ./themes/vincent2/fonts ./public_html/
sass:
	npm run sass
	make copy
js:
	npm run bundle-js
	npm run minify
	make copy
perm:
	sudo docker-compose exec mysql chown -R mysql:mysql /var/lib/mysql
	sudo chown -R marcelo:marcelo ./public_html
package:
	cd public_html/ && \
	zip -r vin-theme.zip css/app.css js/app.js wp-content/themes/vincent2/*
	mv public_html/vin-theme.zip ./vin-theme.zip