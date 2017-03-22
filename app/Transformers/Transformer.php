<?php

namespace RogerMelich\TodosBackend\Transformers;

use \RogerMelich\TodosBackend\Transformers\Contracts\Transformer as TransformerContract;

abstract class Transformer implements TransformerContract {
    public function transformCollection($resources) {
        return array_map(function($resource) {
            return $this->transform($resource);
        }, $resources);
    }
}