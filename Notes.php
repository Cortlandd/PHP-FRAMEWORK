<? 
PHP TAGS USED JUST FOR SOME COLOR BECAUSE THE DEFAULT PLAIN WHITE TEXT IS UGLY.

To further breakdown the folder structure. I have a difficult time
remembering things so the comments and this description page will help.

*Controllers*

*Models*

*Views*

*Libs* will be separated into different categories, such as 
[helpers], which assits in the presentation logic 
[services], which will be reused across the aplpication for
different tasks

*Vendor* will contain any 3rd party libraries used. Installed
using composer which is a package manager.

*Public_* is the root of the application. Contains the main
file to run index.php. Keeping the assets folder accessible
by the browser 

*Core* folder to keep the framework files

?>

<!-- =============================== -->

<?

			Understanding	" -> "
$this->$that or $this->$that($then)
$this is an object created somewhere, and $that is a function defined in the object of "$this"

and also has $then being passed into the function $that.

?>

<!-- =============================== -->

<?

To avoid writing tons of require statements, PHP provides us
convinient way to load in files which are required to run the 
script properly. At begining we will use our own solution for 
autoloading, and later on we will implement standardized way
(composer) to autoload files.

?>