# Adapter

## Intent :dart:

Convert the interface of a class into another interface clients expect. Adapter lets classes work together that couldn't otherwise because of incompatible interfaces.

## Participants :busts_in_silhouette:

### Client :bust_in_silhouette:

Simply, your application code, the client code have your system rules and behavior

> [Client class example](Library.php)

### Service :globe_with_meridians:

The service, many times gonna be a external part of your application, and 'extension'. The problem is when the service are incompatible with your client code (or class).

> [Service class example](BooksApi.php)

### Adapter :electric_plug:

The Adapter are the solution for our problem, this class are responsible to rewrite some features of client, so that the application can work with the external service properly.

> [Adapter class example](MyLibrary.php)