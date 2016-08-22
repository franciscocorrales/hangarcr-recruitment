

#Laravel Test - RESTful API#

##How to use it:##

Server URL: 
https://hangarlaravel.herokuapp.com/


###Actions Handled###

Verb  | Path | Action | Route Name
------------- | ------------- | ------------- | -------------
GET  | /songs  | index  | songs.index 
GET  | /songs/create  | create   | songs.create
POST  | /songs  | store  | songs.store
GET  | /songs/{songs}  | show  | songs.show
GET  | /songs/{songs}/edit  | edit  | songs.edit
PUT/PATCH  | /songs/{songs}  | update  | songs.update
DELETE  | /songs/{songs}  | destroy  | songs.destroy

Remember, since HTML forms can't make PUT, PATCH, or DELETE requests, you will need to add a hidden _method field to spoof these HTTP verbs:

`<input type="hidden" name="_method" value="PUT">`







##Time:##
 * Setup (Heroku, Laravel, Repository, Local)   - 3 hours
 * Set Models, Controllers, Database, Seeders	- 3 hours
 * RESTful API
  * CRUD - 0  hours
  * Auth - 0  hours
  * Database - 0  hours

##Notes:##
 * The songs ids were not unique. So some are changed to maintain *id* as the unique identifier. 

##References:##
 * https://devcenter.heroku.com/articles/getting-started-with-laravel
 * https://laracasts.com/series/laravel-5-fundamentals/
 * https://laravel.com/docs/5.2/controllers#restful-resource-controllers 
