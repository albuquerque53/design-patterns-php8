<?php

/**
 *  CLIENT:
 *  Our properly code,
 *  if we use the booksapi the code will break,
 *  the index method returns a array type, but 
 *  we need a string type.
 *  We need an ADAPTER.
 */

require_once __DIR__ . '/BooksApi.php';
class Library
{
    public function getBooks(): string
    {
        $booksApi = new BooksApi;
        $books = $booksApi->index();

        return $books;
    }
}