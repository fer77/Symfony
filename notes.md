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

## 3

[varDumper](http://symfony.com/doc/current/components/var_dumper.html) provides better output when dumping variables to the page.

formats the `var_dump` in a more readable way.

## 4

"The [EventDispacher](http://symfony.com/doc/current/components/event_dispatcher.html) component provides tools that allow your application components to communicate with each other by dispatching events and listening to them."

The event `$dispatcher` will usually be a _singleton_ so that anywhere in the app listeners can be added to that single instance and dispatch event to all those listeners.

_event classes_ useful when information about the event needs to be passed.

Create events that corresponds to the thing that took place:

1. create an event dispatcher: place it in a container, once for project.
```php
$listener = new SendThankYouEmail;
```
2. dispatch an event
```php
$dispatcher->dispatch(UserSignedUp::class, $event);
```
3. create the class:
```php
//...
namespace App\Listeners;

class SendThankYouEmail
{
    //...
}
```
4. Add the listener:
```php
$dispatcher->addListener(UserSignedUp::class, [$listener, 'handle']);
```