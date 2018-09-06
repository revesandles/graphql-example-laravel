## graphql-example-laravel

An example application in Laravel to demonstrate GraphQL.

### Getting Started

```sh
git clone https://github.com/kinship/graphql-example-laravel.git
cd graphql-example-laravel
composer install
cp -v .env.example .env
php artisan key:generate
createdb graphql-example-laravel # create databases
php artisan migrate --seed # creates some fake data, too
```

### Starting a Server

```sh
php artisan serve
```

### Making a Query

[GraphiQL](https://github.com/graphql/graphiql) is bundled and enabled by default. Once your server is running, goto http://localhost:8000/graphiql. From there you can explore the automatically-generated documentation and run your own queries:

![image](https://user-images.githubusercontent.com/100/45127931-ffaba200-b148-11e8-838e-5b7cd90cae2d.png)

Here's a simple GraphQL query to display all posts:

```graphql
query {
  allPosts {
    id
    title
  }
}
```
