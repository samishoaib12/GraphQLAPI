<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Rebing\GraphQL\GraphQL;
use Rebing\GraphQL\Support\OperationParams;
use Rebing\GraphQL\Support\Helpers;
use Rebing\GraphQL\GraphQLController as BaseController;
use Illuminate\Contracts\Config\Repository;
use Laragraph\Utils\RequestParser;
use GraphQL\Server\OperationParams as BaseOperationParams;

class CustomGraphQLController extends BaseController
{
    public function query(Request $request, RequestParser $parser, Repository $config, GraphQL $graphql): JsonResponse
    {
        // Confirm the route is hit
        dd('GraphQL route hit!', $request->all());

        // Call the original query method (optional)
        return parent::query($request, $parser, $config, $graphql);
    }
}