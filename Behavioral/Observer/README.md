# Observer

## Intent :dart:

Define a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.

## An Example

Imagine a loading screen, the load is a bar being complete, as the page load, the bar is filled, until reach 100%.

We gonna will divide this screen in two, the logic (the real load) and the visual (the bar being filled).

The observer pattern acts between these two layers, sending 'notifications' of logic to visual layer in real-time so that the bar is filled according with the state of logic layer.

The visual layer **observing** the logic and getting the info.

## Participants

### The Observer

The observer are notified when the **subject** state changes, we is always watching.

### The Subject

The element that are observed, must send 'notifications' to their observers in every change.

