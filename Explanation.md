Vehicle Class:

* Acts as the base class, storing common properties like make, model, and year.  
* Has a getDetails method to display these details (cannot be overridden) and a describe method that gives a basic vehicle description.

Car Class:

* Inherits from Vehicle and adds a numberOfDoors property.  
* Overrides the describe method to include the number of doors in the description.

Motorcycle Class:

* Inherits from Vehicle and provides a custom describe method for motorcycles.  
* Marked as final, so it can't be extended further.

ElectricVehicle Interface:

* Defines a chargeBattery method that any electric vehicle must implement.  
* ElectricCar Class:

Inherits from Car and implements ElectricVehicle.

* Adds a batteryLevel property and a chargeBattery method.  
* Overrides the describe method to include both car details and battery level.

Testing:

* Instances of Car, Motorcycle, and ElectricCar are created.  
* The getDetails and describe methods are called to show how each vehicle behaves differently, demonstrating inheritance and polymorphism.

