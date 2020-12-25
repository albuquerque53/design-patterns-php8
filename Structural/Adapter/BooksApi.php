<?php

/**
 *  SERVICE:
 *  An thirdy part API
 *  Is not compatible with our code
 */

class BooksApi
{
    public function index()
    {
        $books = [
            ['title' => 'Sherlock Holmes: A Study in Scarlet'],
            ['title' => 'The Hobbit'],
            ['title' => 'Neuromancer']
        ];

        return $books;
    }
}