all:sass js
	notify-send "Ready"
copy:
	cp -rf ./themes/vincent2 ./public_html/wp-content/themes
	cp -rf ./themes/vincent2/style.css ./public_html/css/style.css
	cp -rf ./themes/vincent2/js ./public_html/
	cp -rf ./themes/vincent2/fonts ./public_html/
sass:
	npm run sass
	make copy
js:
	npm run bundle-js
	make copy
