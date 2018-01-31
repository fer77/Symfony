## 1 

add _Symfony_ to `composer.json`:
- `composer require symfony/console`
- create an entry point that will trigger the command:
`touch demo`
which will echo all of the options.
- console command's parent class is in:
`/vendor/symfony/console/command/Command.php`
- create a command:
`src/SpeakCommand.php`
- configure and execute it.
- in `composer.json` specify autoloading.

_entry point_ is where autoloader is pulled in, create the console application, add the speak command, and run the application.

## 2

[finder component](http://symfony.com/doc/current/components/finder.html) perfect for when you need to fetch a set of files or directories, based upon file type, creation date, file contents, and more.

Can do things like:

```php
$files = Finder::create()
        ->in(app_path())
        ->name('*.txt')
        ->contains('{example-key}');
```