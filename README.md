# Note taking API

This is a basic note-taking API which supports CRUD (create, read, update and delete) operations as well as an archive operation via RESTful API for manipulating note objects.

This example is implemented using PHP, the Laravel framework and a MySQL database.

## Setup

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
PUT: localhost/api/ ,
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
: localhost/api/ ,
{
  "title" : "item title",
  "content": "item content"
}

```
The following url should be used to archive notes only (displayed below):
http://localhost:8000/api/{id}/archive
The {id} part of the url should be replaced by the id number of the note you want to archive


The following url should be used to display the list of notes that have been archived (displayed below):
http://localhost:8000/api/archived

## Routes
Routes have been created for each of the POST, PUT, Delete and Get functions and then PUT and GET function routes were also created for archived notes
## Choice of Technology
Laravel is one of the neatest frameworks to use to create REST APIs.
It has a great deal of simplicity  and flexibility when used as well as clean and simple routing.

## What would i do if i had more time:
1)A function to share notes could be added
2) A function to lock notes could also be added in order protect some notes
3) The code could be made more flexible for use in other programming languages
4) A PATCH function could also be added if the user only wants to update specific fields while leaving the others alone as opposed to PUT which requests the identity as a whole
