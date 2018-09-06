<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class PostType extends BaseType
{
    protected $attributes = [
        'name' => 'PostType',
        'description' => 'A Post'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The ID of the post'
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The Title of the post'
            ],
            'body' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The Body of the post'
            ],
        ];
    }
}
