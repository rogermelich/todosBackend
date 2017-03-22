<?php

namespace RogerMelich\TodosBackend\Transformers;

use RogerMelich\TodosBackend\Exceptions\IncorrectModelException;

class UserTransformer extends Transformer
{
    public function transform($resource)
    {
        if (!$resource instanceof \RogerMelich\TodosBackend\Task) {
            throw new IncorrectModelException();
        }

        return [
            'name'      => $resource['name'],
            'email'     => $resource['email'],
        ];
    }
}
