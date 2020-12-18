# Observer

## Intent :dart:

Define a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.

## An Example :cloud:

When a person subscribes in a newsletter, and every day, receives the news in your mailbox, the same person can subscribe in various newsletter and receive different news from different providers. The person are OBSERVING the news, and the news providers are sending notification every day or every breaking news.

## Participants :busts_in_silhouette:

### Publisher :page_facing_up

Publisher is responsible to send notificiation to all yours subscribers. For that, this class must have a subscription infrastructure, for new subscribers, unsubscribe or notify subscribers.

> In PHP, the Publisher must implements the [SplSubject](https://php.net/manual/en/class.splsubject.php) interface <br>
> [Publisher Example](TechNewsletter.php) <br>

### Subscriber (ObserverInterface) :eyeglasses:

The Subscriber interface declares the notification method, in most cases consists in a update method, this method must be called every time by a Publisher to send the notifications to subscriber.

> In PHP, the subscriber is already set, as [SplObserver](https://www.php.net/manual/en/class.splobserver.php)

### Concrete Subscriber (Observer) :eyes:

The concrete subscriber must implements the interface method update.

> [Subscriber example 1](InterestingDeveloper.php) <br>
> [Subscriber example 2](Curious.php)

