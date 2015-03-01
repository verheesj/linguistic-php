<?php namespace verheesJ\Linguistic\Tokenisation;

class WhitespaceTokeniser implements Tokeniser {

    public function tokenise(&$input) {

        $text = (string) preg_replace("/\ \ +/", " ", preg_replace("/[^a-zA-Z0-9\ ]/", " $0 ", trim($input)));

        return explode(" ", $input);

    }

}