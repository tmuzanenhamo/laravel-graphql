<?php 

namespace App\GraphQL\Queries;

class JobQuery{

    public function byStatus($root, array $args){

      return \App\Models\Jobs::query()
      ->where('status', $args['status'])
      ->get();
    }
}