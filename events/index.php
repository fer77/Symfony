<?php

require 'vendor/autoload.php';

use App\Events\UserSignedUp;
use App\Listeners\SendThankYouEmail;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcher;

$dispatcher = new EventDispatcher;

// $dispatcher->addListener(UserSignedUp::class, function(Event $event) {

//     var_dump($event);

// });

// in Laravel found in the Service provider
$listener = new SendThankYouEmail;

// EventServiceProvider
$dispatcher->addListener(UserSignedUp::class, [$listener, 'handle']);


$event = new UserSignedUp( (object) ['name'=> 'Bob', 'email' => 'B@b.com'] );

$dispatcher->dispatch(UserSignedUp::class, $event); // In Laravel this can be: event(), or Event::fire(), or Illuminate\Events\Dispatcher...