

#Laravel Test - RESTful API#

Francisco Corrales Morales


##How to use it:##

Server URL: 
https://hangarlaravel.herokuapp.com/

###Valid Content-Type:###
 * application/x-www-form-urlencoded
 * multipart/form-data
 * application/json
 
 
###CRUD Actions:###

Verb  | Path | Action | Route Name
------------- | ------------- | ------------- | -------------
GET  | /api/songs  | index  | songs.index 
GET  | /api/songs/{id}  | show  | songs.show
POST  | /api/songs  | store  | songs.store
PUT  | /api/songs/{id}  | update  | songs.update
DELETE  | /api/songs/{id}  | destroy  | songs.destroy


###Song Attributes:###
Attribute  | Type | Required | Generated
------------- | ------------- | ------------- | -------------
id  | integer  | No  | Yes 
url  | string  | Yes  | No
songname  | string  | Yes  | No
artistid  | string  | Yes  | No
albumid  | string  | Yes  | No
albumid  | string  | Yes  | No
albumname  | string  | Yes  | No
created_at  | date  | No  | Yes
updated_at  | date  | No  | Yes


##Time Spent:##
 * Setup (Heroku, Laravel, Repository, Local)   - 3 hours
 * Set Models, Controllers, Database, Seeders	- 4 hours
 * RESTful API
  * CRUD - 2  hours
  * Validation - 0.5 hours
  * Auth - not yet
 * Extras
  * Spotify Preview - 0.5 hours
  * Dingo - 3.5 hours
  * Test - not yet

##Notes:##
 * The songs ids were not unique. So some are changed to maintain *id* as the unique identifier. 

##References:##
 * https://devcenter.heroku.com/articles/getting-started-with-laravel
 * https://laracasts.com/series/laravel-5-fundamentals/
 * https://laravel.com/docs/5.2/controllers#restful-resource-controllers
 * https://laravel.com/docs/5.2/eloquent#insert-update-delete
 * https://github.com/dingo/api
