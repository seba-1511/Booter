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

## CodeIgniter's Layout Library
As we don't want to always load the same Headers, Footers, etc... of the page, we implemented a library to do this for us. The principle is that you add views, that will be stored in the class. Then by simply calling the printPage function with
 ```php
 $this->layout->printPage();
 ``` 
 the whole page will be printed. Note that you can also add a JS, CSS and set the title by simply calling the librarie's methods. See an example in the welcome controler.

 Also, you can set your own default layouts by creating them in the views/layout folder.

 **IMPORTANT: The Layout Library is imported by default, so remove it in autoload if you don't use it !** 

## CodeIgniter CRUD Model
 The file application/core/MY_CRUD.php implements a basic CRUD implementation. (With count option) The easiest way to understand it is to read the file. We highly recommend to use it as a core function for the different models you'll build, by doing so:
 ```php
 class User_model extends MY_CRUD
{
    protected $table = 'users';
}

 ```

## License

Copyright (C) 2013 Sébastien Arnold

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
=======
>>>>>>> ae379c4d5d7f4b5cdbe94a8e23e43de46b4ee2b9
