Booter
======

The Booter Project: A predefined structure to kick your projects. This includes:
* CodeIgniter 2.1.3 (With some default configuration. Ex: Autoload, Cookies, etc...)
* jQuery 1.9 and jQuery 2.0 to best match your targeted visitors
* jQuery UI 1.10.3 not themed
* Bootstrap 2.3.1 JS and CSS
* Less 1.3.3
* HandleBarsJS 1.0.0
* Glyphish Pro 3.0 Icons
* Custom Scripts

# Notes on Custom Scripts

## CI's Layout Library
As we don't want to always load the same Headers, Footers, etc... of the page, we implemented a library to do this for us. The principle is that you add views, that will be stored in the class. Then by simply calling the printPage function with
 ```php
 $this->layout->printPage();
 ``` 
 the whole page will be printed. Note that you can also add a JS, CSS and set the title by simply calling the librarie's methods. See an example in the welcome controler.

 **IMPORTANT: The Layout Library is imported by default, so remove it in autoload if you don't use it !** 