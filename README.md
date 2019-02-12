# Todo List Exercise

This is a small REST API for creating and editing todo lists.

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

```
POST: localhost/api/ , 
{
  "title" : "item title",
  "content": "item content"
}

```
