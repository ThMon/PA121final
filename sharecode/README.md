ShareCode
=========

ShareCode provides a ready-to-use live code sharing tool written in PHP & JS without the need of any specific installation or database.

Online Version
--------------

If you don't care about setting it up and just want to use it, I created an online version (free and ad-free) available at [http://sharecode.so](http://sharecode.so).

Installation
------------

Just copy/paste ShareCode directory wherever from you want to use it,
or `git clone https://github.com/ivangabriele/ShareCode.git`.

Depending on your rights under Linux, you may have to change them to allow writting under the `codes/` directory.

Usage
-----

Just go to `http://[...]/ShareCode/` and you'll be automatically redirected to `http://[...]/ShareCode/XXX`, XXX being an automatically generated slug that you give to others to allow them watching your code "live" as you type it.

The first to use the slug is the "administrator" one : only him can change the code. Others can only watch and copy it.

Releases Notes
--------------

### v1.2.1
* Fix code sharing problems
* Cancels the scroll re-initializing for each reloading

### v1.2.0
* CodeMirror v4 to v5
* Autofocus when user is admin
* Better code optimization and logic (less variables and parameters)
* Tabulations indentation replaced by indentation with spaces (2)
* Lose focus when "escape" key is pressed
* Auto-clean all code files older than 7 days
* Slug is now shown in the page title
* A favicon (yeah I know...)

### v1.1.0
* Safer server-side AJAX files (managing wrong slug and no existing file)
* Complete reorganization of JS And PHP Ajax files
* Better code optimization and logic
* No more "last character" issue with fast-typing code (client-server double parameters comparison instead of one)
* Usage of jquery-min instead of jquery (to lighten the global size)
* Many more comments
