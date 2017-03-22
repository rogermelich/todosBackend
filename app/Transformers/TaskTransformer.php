<?php

namespace RogerMelich\TodosBackend\Transformers;

use RogerMelich\TodosBackend\Exceptions\IncorrectModelException;
use RogerMelich\TodosBackend\Task;

/**
 * Class TaskTransformer.
 *
 * @package RogerMelich\TodosBackend\Transformers
 */
class TaskTransformer extends Transformer
{
    /**
     * Transform a task.
     *
     * @param $resource
     * @return array
     * @throws IncorrectModelException
     */
    public function transform($resource)
    {
        if (!$resource instanceof Task) {
            throw new IncorrectModelException();
        }

        return [
            'id'       => (int) $resource['id'],
            'name'     => $resource['name'],
            'done'     => (bool) $resource['done'],
            'priority' => (int) $resource['priority'],
            'user_id'  => (int) $resource['user_id'],
        ];
    }
}
