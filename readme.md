# Simple User Crud
## Design Assumptions and Decisions
* No Authentication methods were implemented.
* As minimal information is stored, a separate page dedicated to viewing the user was omitted. Instead all the information for a user can be seen in the list view.
* User Roles cannot be edited, only set when a user is created. As user roles really serve no purpose with the lack of authentication. 

## API Documentation
* `GET` /getUsersById
* `GET` /getAllUsers
* `POST` /createUser
* `POST` /updateUser

## Requirements Provided

Specifications:

Provide an implementation based on the specifications below, using a PHP MVC framework of your choice (Laravel is recommended, but other options are also acceptable)

Using the DB schema specified in the attached .sql file, create a basic web application that includes the following:

A web Front-End that performs CRUD functionality for user objects

RESTful API endpoints that provide CRUD functionality for user objects

Deliverables:

Source code checked into version control, with a link where we can access it.
Documentation outlining the API endpoints and parameters that get passed in. 
Documentation describing any design decisions you made that weren’t straightforward. 
(Documentation can either be in version control or shared separately via email). 

