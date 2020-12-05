# Factory Method

## Intent :dart:

Factory Method defines a method that can be used for creating objects without the direct constructor
(```new``` operator). The subclasses can override this method to change the classes of the objects 
will be created.

## Elements of Factory Pattern :twisted_rightwards_arrows:

### Product :large_blue_circle:

Product is the interface of the class that we want to instanciate with Factory Method, for example, a Car Interface, Book Interface or a Product Interface.
> [Product example](Product/CarInterface.php)

### Concrete Product :red_circle:

The concrete product is the class that will implements the Product interface, for example, the FordGT, the SherlockHolmes or even the Notebook class.
> [Concrete product example 1](ConcreteProduct/Maverick.php) <br />
> [Concrete product example 2](ConcreteProduct/Virtus.php)

### Creator :large_blue_circle:

The Creator is the abstract class that have the Factory Method, this class is responsible for return a Product.
> [Creator example](Creator/CarCreator.php)

### Concrete Creator :red_circle:

This class extends the Creator class, is responsible to override the Factory Method to return a Concrete Product.
> [Concrete creator example 1](ConcreteCreator/MaverickCreator.php) <br />
> [Concrete creator example 2](ConcreteCreator/VirtusCreator.php)

## Aplicability :memo:

Use the Factory method patten when:

* A class can't anticipate the class of objects it must create.
* A class wants its subclasses to specify the objects it creates.
* Classes delegate responsibility to one or several helper subclasses, and you want to localize the knowledge of which helper subclass is the delegate.
