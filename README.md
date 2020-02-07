# Create a Blog without any MVC Framework
- Coding Interview work of check24
- Any Framework and package will not be allowed to build your MVC structure, except autoload
- Template Engine like twig can be used.
- Primary-Feature: Login/Logout, Create Blog.
- Secondary-Feature: some above related features, like only show the logout button after user login, sort the blog with created_at

> There is a very good example here:
https://github.com/kaurov/BlogNoFrameworkMVC
use less package, but realize almost all the features. This didn't use autoload.

## Let's create a blog system from scratch.

- Create a DB names 'blog' by creating a database by using phpMyAdmin or some DB client like HeidiSQL:

- Add two tables: user and post
```mysql
CREATE TABLE `user` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(100) NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `post` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`title` TEXT NOT NULL,
	`body` TEXT NOT NULL,
	`author_id` INT(10) NOT NULL,
	`created_at` DATETIME NOT NULL
    PRIMARY KEY (`id`)
)
```

- Create some records within
- Create an abstract class within the models folder, called model.php
- Extend two models post.php and user.php in the Models folder
- Create a getUser() method in the User.php with parameter $email and $password

