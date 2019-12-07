# SOLID Principles - S

_**Note: The code in this repository is example code.**_

The 'S' in SOLID is for Single Responsibility Principle. In short this means that a class should have one and only one reason to change.

Why do we do that?
- The class becomes easier to maintain as it only contains the functionality that the class is responsible for.
- Testing a class with a single responsibility is a lot easier.
- Promotes loose coupling.
- Share functionality between classes.

## SRP Violation

If you go to `app/SingleResponsibilityViolation/Order.php` you will find a class with a single `create()` method. This method is responsible for validating, saving and emailing. 

This class is doing too much and can be broken down to have a "Single Responsibility". You will probably agree it looks a bit messy all the different parts of code within the method.

Sure you could create a few smaller methods out of that to handle the different aspects but the class itself will still be doing too much. 

Lets say a bug is introduced, you'll have to find the code within the class and then update it. What if that code is coped and pasted into several classes? You'll have to patch each class. Also you won't be keeping DRY. Why do you want to create more work for yourself?

## SRP it up...

Now that we've covered off the SRP violation, lets look at the class when we've split everything out and got classes with a single responsibility.

Navigate to the `app/SingleResponsibilityPrinciple/Order.php`, you'll notice the code has changed. The `create()` method has been cleaned up and is much more readable.

The method now contains instances of new classes. 3 new classes have been made...
- EmailService.php
- OrderRepository.php
- OrderValidationService.php

Each class has a single responsibility to handle. Yes this could create a lot of separate classes which contain the 1 method but that's not a problem.

## Useful Resources

- https://www.toptal.com/software/single-responsibility-principle
- https://laracasts.com/series/solid-principles-in-php/episodes/1
- https://www.youtube.com/watch?v=DfBqZCA8_Zg&list=PLrIm-p2rpV0EMU_OsbH8RekBNp9buhsr-&index=1
