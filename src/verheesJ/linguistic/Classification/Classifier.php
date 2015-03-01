<?php namespace verheesj\linguistic\Classification;

interface Classifier {

    public function train(array &$trainer, array &$label);

    public function classify($dataTest);

    public function likelihood($dataTest, $cat);

}