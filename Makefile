all:sass js
	notify-send "Ready"
copy:

sass:
	npm run sass
	#make copy
js:
	npm run bundle-js
	#make copy
