# Singleton

## Intent :dart:

Ensure a class has just a **single instance**, and provide a **global point of access** to it.

## The problems of Singleton :warning:

Many programmers consider the Singleton pattern a Anti-pattern, because he have some implemention problems.

### Low flexibility

One of biggest problems with Singleton Pattern is that you use that pattern when you assume there you'll need a single one instance of determinate class. But if you are wrong? Its a big bet, if you must to implement a new feature, and for that you have another instance of Singleton Class, you'll gonna to refactor, anyway, using Singleton your code turn very inflexible. 

### Fragile

With singleton, you'll have just one instance of specific class in your code, it means that if your class broke in any part of your code, all parts that use the class will broke too.

### Consequences

With low flexibility and highly fragility, the Singleton turns difficult to maintain, to test, and scale the system.

## Conclusion :white_check_mark:

This pattern is here for educational purposes, avoid using Singleton in your projects.