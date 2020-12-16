# Observer

## Intent :dart:

Define a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.

## An Example

When a person subscribes in a newsletter, and every day, receives the news in your mailbox, the same person can subscribe in various newsletter and receive different news from different providers. The person are OBSERVING the news, and the news providers are sending notification every day or every breaking news.

## Participants

### Publisher

Publisher is responsible to send notificiation to all yours subscribers. For that, this class must have a subscription infrastructure, for new subscribers, unsubscribe or notify subscribers.

### Subscriber

The Subscriber interface declares the notification method, in most cases consists in a update method, this method must be called every time by a Publisher to send the notifications to subscriber.

### Concrete Subscriber

The concrete subscriber must implements the interface method update.


