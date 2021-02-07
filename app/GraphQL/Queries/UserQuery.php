<?php 

namespace App\GraphQL\Queries;

class UserQuery{

    public function all(){
        return \App\Models\User::all();
    }

    public function find($root, array $args){

        return \App\Models\User::find($args['id']);

    }

    public function paginate($root, array $args){

        return \App\Models\User::query()->paginate(
            $args['count'],
            ['*'],
            'page',
            $args['page']
        );

    }
}