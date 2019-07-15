## Procedure of working
	1. Start a new laravel projects
	2. Setup .env file if necessary
	3. Create necessary migration files
	4. Create necessary model
	5. Create routes

### Index/View All
	1. $posts = App\Posts::all();
### Add New
	1. protected $fillable = ['table_col_1','table_col_1',...] (in model for use create in controller)
	2. protected $guarded = ['table_col_1','table_col_1',...] (in model for use create in controller)

### Tips
	1. php artisan make:model Pages -crm
		- This will creates a Model, a Controller with resourses and a migration
	2. php artisan make:controller PostsController --model=Post
		- This will creates a Controller with resourses and a Model

