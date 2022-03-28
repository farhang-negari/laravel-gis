# Laravel GIS

> Why Laravel GIS?

Laravel GIS is an ongoing project with all explanations available at [LaravelGIS](https://www.laravelgis.com/)

I've been working as developer with commercial and opensource GIS software for more than 20 years. I kind of let the commercial ESRI/Microsoft a few years ago to concentrate on opensource. In my opinion, the Laravel framework is a piece of beauty for backend development, the developer experience is simply amazing. So my goto Web/GIS backend stack is now:


* [Laravel](https://laravel.com/)
* [PostGIS](https://postgis.net/)
* [Geoserver](http://geoserver.org/)

I'm really more on the backend than on the frontend when it comes to web development so the frontend stack I use is a minimal one: Alpine.js. As stated by Caleb Porzio, it's creator, "Alpine is a rugged, minimal tool for composing behavior directly in your markup". It's syntax is very similar to Vuejs so, if you are familiar with Vue, learning Alpine is a piece of cake.
Along with Alpine.js, I also heavily use Laravel Livewire, a Laravel package also created by Caleb Porzio. Livewire is like magic as is allows the creation of frontend reactive backend components in Laravel using it's blade templating engine.
Finally, the last piece of the frontend puzzle is OpenLayers, which is, in my opinion, the most complete Javascript mapping library.

* [Alpine.js](https://alpinejs.dev/)
* [Laravel Livewire](https://laravel-livewire.com/)
* [OpenLayers](https://openlayers.org/)

> Development stack

* [Docker](https://www.docker.com/)

Laravel offer a great [Docker](https://www.docker.com/) environment with [Laravel Sail](https://laravel.com/docs/9.x/sail) but we will try to work with docker directly in order to have complete control over the docker images we use. Docker might be intimidating at first but is really powerfull and will allow us to have the perfect PHP/Laravel development environment with all of our dependencies running smoothly.
