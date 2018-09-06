<?php

namespace App\GraphQL\Query;

use App\Post;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;

class AllPostsQuery extends Query
{
    protected $attributes = [
        'name' => 'AllPostsQuery',
        'description' => 'Returns all Posts'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('PostType'));
    }

    public function args()
    {
        return [

        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        return Post::all();
    }
}
