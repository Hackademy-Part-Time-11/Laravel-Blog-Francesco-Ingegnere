<?php
namespace App\Custom;

class Data {
    public static function articles () {
        return [
            ['id' => 1, 'title' => 'Articolo #1', 'category' => 'Finanza', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
            ['id' => 2, 'title' => 'Articolo #2', 'category' => 'Gossip', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
            ['id' => 3, 'title' => 'Articolo #3', 'category' => 'Sport', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => false],
            ['id' => 4, 'title' => 'Articolo #4', 'category' => 'Cronaca', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
            ['id' => 5, 'title' => 'Articolo #5', 'category' => 'Tech', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => false],
            ['id' => 6, 'title' => 'Articolo #6', 'category' => 'Natura', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
        ];
    }
}


/* 

// Use DBML to define your database structure
// Docs: https://dbml.dbdiagram.io/docs

Table articles {
  id biginteger [primary key]
  title varchar
  category_id biginteger
  description varchar
  visibile integer
  created_at timestamp 
}

Table categories {
  id integer [primary key]
  name varchar
}



Ref: "articles"."category_id" < "categories"."id"

*/