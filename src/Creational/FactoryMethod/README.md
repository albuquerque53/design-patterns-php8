# Factory Method

## Intent :dart:

Factory Method defines a method that can be used for creating objects without the direct constructor
(```new``` operator). The subclasses can override this method to change the classes of the objects 
will be created.

## How to identify a Factory Method Pattern? :mag:

You can identify a Factory method by their 'Creation' classes and methods, that create objects from concrete classes and return them as Interface or Abstract classes.

> Take a look in my Creation class (line 4) & Creation method (line 6) in [index.php](index.php) 

## Aplicability :memo:

Use the Factory method patten when:

* A class can't anticipate the class of objects it must create.
* A class wants its subclasses to specify the objects it creates.
* Classes delegate responsibility to one or several helper subclasses, and you want to localize the knowledge of which helper subclass is the delegate.
