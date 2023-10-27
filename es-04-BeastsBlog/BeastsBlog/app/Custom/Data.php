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


/* 

// Use DBML to define your database structure
// Docs: https://dbml.dbdiagram.io/docs

Table users {
  id biginteger [primary key]
  name varchar
  surname varchar
  birth_date timestamp
  email email
  address varchar
  phone integer
}

Table books {
  id biginteger [primary key]
  title varchar
  author varchar
  year timestamp [note: 'year of publication']
  quantity integer [note: 'quantity in stock']
}

Table orders {
  id integer [primary key]
  user_id biginteger
  book_id biginteger
  order_date timestamp
  payment_state integer
  shipping_address varchar
}



Ref: "users"."id" < "orders"."user_id"

Ref: "books"."id" < "orders"."book_id"

*/

/* 

E-COMMERCE

// Use DBML to define your database structure
// Docs: https://dbml.dbdiagram.io/docs

Table users {
  id biginteger [primary key]
  name varchar
  surname varchar
  birth_date timestamp
  email email
  address varchar
  phone integer
}

Table books {
  id biginteger [primary key]
  title varchar
  author varchar
  year timestamp [note: 'year of publication']
  quantity integer [note: 'quantity in stock']
}

Table orders {
  id integer [primary key]
  user_id biginteger
  book_id biginteger
  order_date timestamp
  payment_state integer
  shipping_address varchar
}



Ref: "users"."id" < "orders"."user_id"

Ref: "books"."id" < "orders"."book_id"

*/

/* 

SOCIAL NETWORK

// Use DBML to define your database structure
// Docs: https://dbml.dbdiagram.io/docs

Table users {
  id biginteger [primary key]
  username varchar
  email email
  photo photo
}

Table posts {
  id biginteger [primary key]
  body text [note: 'Content of the post']
  created_at timestamp
  user_id biginteger
}

Table likes {
  id biginteger [primary key]
  user_id biginteger
  post_id biginteger
  created_at timestamp
}


Ref: "users"."id" < "posts"."user_id"

Ref: "users"."id" < "likes"."user_id"

Ref: "posts"."id" < "likes"."post_id"

*/

/* 

SITO DI ANNUNCI

// Use DBML to define your database structure
// Docs: https://dbml.dbdiagram.io/docs

Table users {
  id biginteger [primary key]
  name varchar
  surname varchar
  birth_date timestamp
  email email
  role varchar
}

Table announcements {
  id biginteger [primary key]
  title varchar
  body text [note: 'Content of the announcement']
  user_id biginteger
  category_id biginteger
  created_at timestamp
  status integer
}

Table categories {
  id biginteger [primary key]
  name varchar
}


Ref: "categories"."id" <> "announcements"."category_id"

Ref: "users"."id" < "announcements"."user_id"

*/