# Facade (Façade)

## Intent :dart:

Provide a unified interface to a set of interfaces in a subsystem. Facade defines a
higher-level interface that makes the subsystem easier to use.

## Participants :busts_in_silhouette:

### Facade (compiler)

Is the one who provides controlled access to subsystem classes.

> [Facade class example](User/Facade/User.php)

### Subsystem Classes

All the other classes, each class have your own purpose to exists.

> [Subsystem classes directory](User/)

## Anti-Pattern? :no_entry_sign:

The Facade is considered for some developers as 'Anti-Pattern', this is because the Factory
breaks the S.O.L.I.D principles when implemented.

### Open-Close Principle

The open closed means that a Software Element must be **OPEN to EXTEND** but **CLOSED to MODIFY**, imagine if in my example, I want the UserPosts class, to implement that we gonna need to **MODIFY** the User facade, and this breaks this principle.

### Single Responsibility Principle

The SRP says that a Software Element must have one responsibility, but many times, when we implements this pattern, we ended up developing a **super method** with too many responsibilities, like the ```deleteUser()```.

## Use or not? :thinking:

That's the question! My (very) humbe opinion is that you must analyze the situation and context, many times this pattern can give you headaches in the future, but I believe that in some situations the Facade can be very usefully.