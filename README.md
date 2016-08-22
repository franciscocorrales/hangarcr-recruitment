

#Laravel Test - RESTful API#

##How to use it:##

Server URL: 
https://hangarlaravel.herokuapp.com/


###CRUD Actions:###

Verb  | Path | Action | Route Name
------------- | ------------- | ------------- | -------------
GET  | /api/v1/songs  | index  | songs.index 
GET  | /api/v1/songs/{id}  | show  | songs.show
POST  | /api/v1/songs  | store  | songs.store
PUT  | /api/v1/songs/{id}  | update  | songs.update
DELETE  | /api/v1/songs/{id}  | destroy  | songs.destroy


##Time Spent:##
 * Setup (Heroku, Laravel, Repository, Local)   - 3 hours
 * Set Models, Controllers, Database, Seeders	- 4 hours
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
