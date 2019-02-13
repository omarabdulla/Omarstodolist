# Note taking API

This is a basic note-taking API which supports CRUD (create, read, update and delete) operations as well as an archive operation via RESTful API for manipulating note objects.

This example is implemented using PHP, the Laravel framework and a MySQL database.

## Setup

### Prerequisites
In order to install Laravel, Laravel Homestead virtual machine should be installed, alternatively the following requirements could be used (details on this are found in detail at: https://laravel.com/docs/5.7):

1)PHP --> 7.1.3
2)OpenSSL PHP Extension
3)PDO PHP Extension
4)Mbstring PHP Extension
5)Tokenizer PHP Extension
6)XML PHP Extension
7)Ctype PHP Extension
8)JSON PHP Extension
9)BCMath PHP Extension

### Installing Laravel

Laravel can be instead using Composer, download the Laravel installer using:

```
composer global require laravel/installer
```
The database `todoListDB` must be created along with the user `todoListUser`.

> note, this uses mysql as a database

To setup the api, run the following commands:

```
php artisan key:generate
php artisan migrate:fresh
php artisan serve
```

## Examples

The following url should be used for note functions (displayed below) except the archive function:
http://localhost:8000/api/

```
POST: localhost/api/ ,
{
  "title" : "item title",
  "content": "item content"
}
```
POST is used to create an "id", in this case a NOTE ENTRY that can then be retrieved using GET and changed using PUT
NOTE: each note entry has two fields: title and content that can be filled in and then edited using PUT (below)

```
PUT: localhost/api/{id} ,
{
  "title" : "item title",
  "content": "item content"
}

```
In this context, PUT can be used to edit a note entry that was created using POST
To change an entry, enter the key you want to change i.e. title or content and then type in what you it to display in the value field

```
GET: localhost/api/ ,
{
  "title" : "item title",
  "content": "item content"
}

```
GET is used is used in this context to display the note entries that have been made
```
DELETE: localhost/api/ ,
{
  "title" : "item title",
  "content": "item content"
}

```
DELETE can be used to delete any note entries, although once deleted it cannot be retrieved. The archive function, displayed below, can be used to 'hide' a note entry that can still be retrieved when needed
```

```
The following url should be used to archive notes only (displayed below):
http://localhost:8000/api/{id}/archive
The {id} part of the url should be replaced by the id number of the note you want to archive


The following url should be used to display the list of notes that have been archived (displayed below):
http://localhost:8000/api/archived

## Routes
Routes have been created for each of the POST, PUT, Delete and Get functions and then PUT and GET function routes were also created for archived notes
## Troubleshooting

### Common Errors
A list of common errors that could come up and a description of the error can be found at:
https://en.wikipedia.org/wiki/List_of_HTTP_status_codes

### Checking if Laravel is running

To check if Laravel is running, run the command:
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

## What would i do if i had more time:
1) Research to see if it is possible to have a de-archive function
2)Implement a mail function to share notes via a local or cloud-based service
3) A function could also be added to send notifications related to the creation or the maintaining of notes for group-related projects using SMS and/or slack
4) A function to lock notes could also be added in order  to confidential notes
5) The code could be made more flexible for use in other programming languages
6) A PATCH function could also be added if the user only wants to update specific fields while leaving the others alone as opposed to PUT which requests the identity as a whole, as this API only has 2 fields, a PUT function was implemented
## Built with
This was built on Laravel, using Atom to edit the code and Postman to test the note taking functions of the code
## Author
Omar Abdulla
## Acknowledgments
Clear instructions on how to build the code from thirdfort
Github for examples of API code to use for inspiration
