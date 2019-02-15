# Note taking API

This is a basic note-taking API which supports CRUD (create, read, update and delete) operations as well as an archive operation via RESTful API for manipulating note objects.

This example is implemented using PHP, the Laravel framework and a MySQL database.

## Setup

### Prerequisites
In order to install Laravel, Laravel Homestead virtual machine should be installed, alternatively the following requirements could be used (details on this are found in detail at: https://laravel.com/docs/5.7):

1. PHP --> 7.1.3

2. OpenSSL PHP Extension

3. PDO PHP Extension

4. Mbstring PHP Extension

5. Tokenizer PHP Extension

6. XML PHP Extension

7. Ctype PHP Extension

8. JSON PHP Extension

9. BCMath PHP Extension


### Installing Laravel

Laravel can be instead using Composer, download the Laravel installer using:

```
composer global require laravel/installer
```
The database `todoListDB` must be created along with the user `todoListUser`.

> note, this uses mysql as a database

To setup the api, run the following commands within the root directory of the repo:

```
composer install
php artisan key:generate
php artisan migrate:fresh
php artisan serve
```

## API

### database

A brief description

| ITEM      | TYPE     | DESCRIPTION |
| --------- | -------- | ----------- |
| id        | *int*    | id of the todo list item *unique* |
| title     | *string* | title of the todo list item. |
| content   | *text*   | content of the item. |
| archived  | *bool*   | flag to indicate whether archived or not. |

### routes
| METHOD | ROUTE          | INPUT |
| ------ | -------------- | ----- |
| POST   | localhost/api/ | create a new todo list item. |
| PUT    | localhost/api/{id} | edit an existing todolist item. |
| DELETE | localhost/api/{id} | remove a todo list item. |
| GET    | localhost/api/     | list all the (non-archived) todolist items that are in the database. |
| PUT    | localhost/api/{id}/archive | archive a todolist item. |
| GET    | localhost/api/archived     | show all archived todolist items. |

## Examples

The following url should be used for note functions (displayed below) except the archive function:
http://localhost:8000/api/

```
POST: localhost/api/ ,
{
  "title" : "item title",
  "content": "item content"
}

returns,

{
  "id" : 1,
  "title" : "item title",
  "content": "item content",
  "archived" : 0
}
```
POST is used to create an "id", in this case a NOTE ENTRY that can then be retrieved using GET and changed using PUT
NOTE: each note entry has two fields: title and content that can be filled in and then edited using PUT (below)


```
PUT: localhost/api/1 ,
{
  "title" : "new item title",
  "content": "new item content"
}

returns,

{
  "id" : 1,
  "title" : "new item title",
  "content": "new item content",
  "archived" : 0
}

```
In this context, PUT can be used to edit a note entry that was created using POST
To change an entry, enter the key you want to change i.e. title or content and then type in what you it to display in the value field

```
GET: localhost/api/

returns,

[
    {
      "id" : 1,
      "title" : "item title a",
      "content": "item content a",
      "archived" : 0
    },
    {
      "id" : 2,
      "title" : "item title b",
      "content": "item content b",
      "archived" : 0
    }
    ...

]


```
GET is used is used in this context to display the note entries that have been made


```
DELETE: localhost/api/1

returns,

{
  "id" : 1,
  "title" : "item title",
  "content": "item content",
  "archived" : 0
}


```
DELETE can be used to delete any note entries, although once deleted it cannot be retrieved. The archive function, displayed below, can be used to 'hide' a note entry that can still be retrieved when needed

```
PUT: localhost/api/1/archive

returns,

{
  "id" : 1,
  "title" : "item title",
  "content": "item content",
  "archived" : 1
}

```

The following url should be used to archive notes only (displayed below):
http://localhost:8000/api/{id}/archive
The {id} part of the url should be replaced by the id number of the note you want to archive

```
GET: localhost/api/archived

returns,

[
    {
      "id" : 1,
      "title" : "item title a",
      "content": "item content a",
      "archived" : 1
    },
    {
      "id" : 2,
      "title" : "item title b",
      "content": "item content b",
      "archived" : 1
    }
    ...

]

```

The following url should be used to display the list of notes that have been archived (displayed below):
http://localhost:8000/api/archived


## Troubleshooting



### Checking if Laravel is running

Make sure the backend server is running
run the command:
```
php artisan serve

```
### Other possible sources of error

Make sure two commands don't have the same name (which could be a slight issue with having an archive function), i.e. there should be one version for each functions. The same applies for route addresses.

## Technology

### Choice of Technology
Laravel is one of the neatest frameworks to use to create REST APIs.
It has a great deal of simplicity and flexibility when used as well as clean and simple routing that produces lean code. The routes are automatically loaded by the framework, where the most basic Laravel routes simply accept a URI and a Closure, providing a very simple and expressive method of defining routes. The in-built tool "Artisan" performs repetitive and complex programming tasks as well as handles the database. To summarise, Laravel has a framework which makes it easy to solve common tasks quickly, with the aim to focus faster on the creative/application tasks.
### Technology Alternatives

> investigate node.js and python django

## What would i do if i had more time:
1. Implement a function to back-up all the notes on to the internet/cloud
2. Implement a mail function to share notes as well as the option to send attachments with the notes, audio files included 
3. Being able to categorise the notes made would be very useful. This way, the notes can be matched with the different stages the team goes through, from the customer research stage to the selling the design solution to a business stage
3. A function could also be added to send notifications related to the creation or the maintaining of notes for group-related projects using SMS and/or slack to help automate and ease communication within the team
4. Another function that could be added is to be able search through the notes for specific keywords, e.g. double-checking if the product meets the requirements needed from meetings with customers before presenting it to consumers
5. Locking the notes could also be added, in order to protect confidential notes. A possible function could be used to make it that only the owner of the note can view it. That being said, that is not very practical for the team as collaboration is  need through different stages, e.g. while designing the product.  A possbile way of implementing a more collaboratvie approach is using a function, where accounts with no rights to access particular data will not be able to retrieve the metadata for the those specific (protected) files, although more time is needed to test this out
6. The code could be made more flexible for use in other programming languages
## Built with
This was built on Laravel, using Atom to edit the code and Postman to test the note taking functions of the code
## Author
Omar Abdulla
## Acknowledgments
1. Github users for examples of API code to use for guidance and inspiration
