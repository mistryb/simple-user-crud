# Simple User Crud

## Installation Instructions
1. Pull repository.
2. Update Composer.
3. Install Bower Components in the public directory.
4. Run migrations.
5. Enjoy.

## Design Assumptions and Decisions
* No Authentication methods were implemented.
* As minimal information is stored, a separate page dedicated to viewing the user was omitted. Instead all the information for a user can be seen in the list view.
* User Roles cannot be edited, only set when a user is created. As user roles really serve no purpose with the lack of authentication. 
* Deleting can only be done through the web application to allow for a confirmation prompt before deletion.

## API Documentation
* [`GET` /getUserById](#get-getuserbyid)
* [`GET` /getAllUsers](#get-getallusers)
* [`POST` /createUser](#post-createuser)
* [`POST` /updateUser](#post-updateUser)

### `GET` /getUserById
#### Description
Gets a user given an id
#### Parameters
* id : The ID of the user being requested
#### Return Format
JSON containing the User object
#### Example
Request
```
https://simle-user-crud-mistryb.c9users.io/getUserById?id=2
```

Response
```
{
  "id": 2,
  "user_roles_id": 2,
  "username": "I_Publish",
  "email": "publisher@test.com",
  "created_at": "2017-05-20 13:05:53",
  "updated_at": "2017-05-22 15:08:53"
}
```
---
### `GET` /getAllUsers
#### Description
Gets all the users in the system
#### Parameters
* none
#### Return Format
Array containing the Users
#### Example
Request
```
https://simle-user-crud-mistryb.c9users.io/getAllUsers
```

Response
```
[
  {
    "id": 2,
    "user_roles_id": 2,
    "username": "I_Publish",
    "email": "publisher@test.com",
    "created_at": "2017-05-20 13:05:53",
    "updated_at": "2017-05-22 15:08:53"
  },
  {
    "id": 13,
    "user_roles_id": 1,
    "username": "sdfsdf",
    "email": "sdfsd@sdfsdf.com",
    "created_at": "2017-05-30 14:41:44",
    "updated_at": "2017-05-30 14:41:44"
  }
]
```
---

### `POST` /createUser
#### Description
Creates a new user in the system
#### Parameters
* username : the username for the new user
* email : the email for the new user
#### Return Format
JSON object of the new user created
#### Example
Request
```
https://simle-user-crud-mistryb.c9users.io/createUser?username=testingjohn&email=jtest@hotmail.com
```

Response
```
{
  "username": "testingjohn",
  "email": "jtest@hotmail.com",
  "updated_at": "2017-05-30 15:27:15",
  "created_at": "2017-05-30 15:27:15",
  "id": 14
}
```
---


### `POST` /updateUser
#### Description
Updates a user in the system
#### Parameters
* id : the id of the user to be edited
* any of the users data that needs to be updated
#### Return Format
JSON object of the updated user
#### Example
Request
```
https://simle-user-crud-mistryb.c9users.io/updateUser?username=testingEdited&id=2

```

Response
```
{
  "id": 2,
  "user_roles_id": 2,
  "username": "testingEdited",
  "email": "publisher@test.com",
  "created_at": "2017-05-20 13:05:53",
  "updated_at": "2017-05-30 15:29:51"
}
```


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

