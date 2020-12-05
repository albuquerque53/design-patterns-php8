# Factory Method

## Intent :dart:

Factory Method defines a method that can be used for creating objects without the direct constructor
(```new``` operator). The subclasses can override this method to change the classes of the objects 
will be created.

## Elements of Factory Pattern 

### Product

Product is the interface of the class that we want to instanciate with Factory Method, for example, a Car Interface, Book Interface or a Product Interface.

### Concrete Product 

The concrete product is the class that will implements the Product interface, for example, the FordGT, the SherlockHolmes or even the Notebook class.

### Creator

The Creator is the abstract class that have the abstract Factory Method, this class is responsible for return a Product implementation (Concrete Product).

### Concrete Creator

This class extends the Creator class, is responsible to override the Factory Method to return a Concrete Product.

## Aplicability :memo:

Use the Factory method patten when:

* A class can't anticipate the class of objects it must create.
* A class wants its subclasses to specify the objects it creates.
* Classes delegate responsibility to one or several helper subclasses, and you want to localize the knowledge of which helper subclass is the delegate.
