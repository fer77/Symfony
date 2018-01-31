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