#Ronnie Young
#Deployed project on Repl: https://quotes-midterm.rryoung.repl.co/

**Read Author**
----
  _Returns a JSON object of all authors each individual author as a JSON object_

* **URL**

  <_/authors_>

* **Method:**
  
  <_The request type_>

  `GET`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{{ id : 1, "author":"Author name" }, { id : 2, "author": "Author name 2}}`

* **Sample Call:**

  * `https://quotes-midterm.rryoung.repl.co/api/authors`


**Read Single Author**
----
  _Returns a JSON object of a single author_

* **URL**

  <_/authors?id=:id_>
  
  *  **URL Params**

   **Required:**
 
   `id=[integer]`

* **Data Params**

  None

* **Method:**
  
  <_The request type_>

  `GET`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ id : 1, "author":"Author name" }`
    
 * **Error Response:**
`{"message":"author_id Not Found"}`

* **Sample Call:**

  * `https://quotes-midterm.rryoung.repl.co/api/authors?id=1`

**Create Author**
----
  _Creates an entry for the author object. Returns the individual author as a JSON object_

* **URL**

  <_/authors_>

* **Method:**
  
  <_The request type_>

  `POST`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ id : 1, "author":"Author name" }`

* **Sample Call:**

  * `'POST'
    {
      'author': 'Bruce Wayne'
      }`
      
 **Update Author**
----
  _Returns a JSON object of a single author_

* **URL**

  <_/authors_>
  
  *  **URL Params**

   **Required:**
 
   `id=[integer]`
   `author=[string]`

* **Method:**
  
  <_The request type_>

  `PUT`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ id : 1, "author":"Author name" }`
    
 * **Error Response:**
`{"message":"author_id Not Found"}`

* **Sample Call:**

  * `https://quotes-midterm.rryoung.repl.co/api/authors?id=1`

* **Sample Call:**

  * `'PUT'
    { 'id': '1'
      'author': 'Bruce Wayne'
      }`
      
      
  **Delete Author**
----
  _Returns a JSON object of a successfully deleted message_

* **URL**

  <_/categories_>
  
  *  **URL Params**

   **Required:**
 
   `id=[integer]`

* **Method:**
  
  <_The request type_>

  `DELETE`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ "message":"Author successfully removed" }`
    
 * **Error Response:**
`{"message":"author_id Not Found"}`

** Read Categories**
----
  _Returns a JSON object of all categories each individual category as a JSON object_

* **URL**

  <_/categories_>

* **Method:**
  
  <_The request type_>

  `GET`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{{"id":1,"category":"Business"},{"id":2,"category":"Historical"}}`

* **Sample Call:**

  * `https://quotes-midterm.rryoung.repl.co/api/categories`

**Read Single Category**
----
  _Returns a JSON object of a single category_

* **URL**

  <_/categories?id=:id_>
  
  *  **URL Params**

   **Required:**
 
   `id=[integer]`

* **Data Params**

  None

* **Method:**
  
  <_The request type_>

  `GET`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{"id":1,"category":"Business"}`
    
* **Error Response:**
`{"message":"category_id Not Found"}`

* **Sample Call:**

  * `https://quotes-midterm.rryoung.repl.co/api/categories?id=1`

**Create Category**
----
  _Creates an entry for the category object. Returns the individual category as a JSON object_

* **URL**

  <_/category_>

* **Method:**
  
  <_The request type_>

  `POST`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ id : 1, "Category":"Category name" }`

* **Sample Call:**

  * `'POST'
    {
      'category': 'Crime fighting puns'
      }`
      
      
 **Update Category**
----
  _Returns a JSON object of a single category_

* **URL**

  <_/categories_>
  
  *  **URL Params**

   **Required:**
 
   `id=[integer]`
   `category=[string]`

* **Method:**
  
  <_The request type_>

  `PUT`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ id : 1, "Category":"Category name" }`
    
 * **Error Response:**
`{"message":"category_id Not Found"}`

 **Delete Category**
----
  _Returns a JSON object of a successfully deleted message_

* **URL**

  <_/categories_>
  
  *  **URL Params**

   **Required:**
 
   `id=[integer]`

* **Method:**
  
  <_The request type_>

  `DELETE`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ "message":"Category successfully removed" }`
    
 * **Error Response:**
`{"message":"category_id Not Found"}`

** Read Quotes**
----
  _Returns a JSON object of all quotes each individual quote as a JSON object_

* **URL**

  <_/quotes_>

* **Method:**
  
  <_The request type_>

  `GET`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{{"id":6,"quote":"Your time is limited so do not waste it living someone elses life","author":"Steve Jobs","category":"Philosophical"},{"id":7,"quote":"Success is a lousy teacher","author":"Bill Gates","category":"Business"}}`

* **Sample Call:**

  * `https://quotes-midterm.rryoung.repl.co/api/quotes`

**Read Single Quote**
----
  _Returns a JSON object of a single quote_

* **URL**

  <_/quotes?id=:id_>
  
  *  **URL Params**

   **Required:**
 
   `id=[integer]`

* **Data Params**

  None

* **Method:**
  
  <_The request type_>

  `GET`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{"id":6,"quote":"Your time is limited so do not waste it living someone elses life","author":"Steve Jobs","category":"Philosophical"}`
    
* **Error Response:**
`{"message":"No Quotes Found"}`

* **Sample Call:**

  * `https://quotes-midterm.rryoung.repl.co/api/quotes?id=1`


**Create Quote**
----
  _Creates an entry for the quote object. Returns the individual quote as a JSON object_

* **URL**

  <_/quote_>

* **Method:**
  
  <_The request type_>

  `POST`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ id : 1, 'Quote':'Do not trip over a dead body Robin', 'author_id': '1',  'category_id':'1' }`

* **Sample Call:**

  * `'POST'
    { 'quote': 'Do not trip over a dead body Robin',
      'author_id': '1'
      'category': 'Crime fighting puns'
      }`
      
      
  **Update Quote**
----
  _Returns a JSON object of a single quote_

* **URL**

  <_/quote_>
  
  *  **URL Params**

   **Required:**
 
   `id=[integer]`
   
   **Required:**
 
   `quote=[string]`
   `author_id=[integer]`
   `category_id=[integer]`

* **Method:**
  
  <_The request type_>

  `PUT`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ id : 1, 'Quote':'Do not trip over a dead body Robin', 'author_id': '1',  'category_id':'1' }`
    
 * **Error Response:**
`{"message":"quote_id Not Found"}`
OR
`{"message":"author_id Not Found"}`
OR
`{"message":"category_id Not Found"}`

  **Delete Quote**
----
  _Returns a JSON object of a successfully deleted message_

* **URL**

  <_/quote_>
  
  *  **URL Params**

   **Required:**
 
   `id=[integer]`
   
   **Required:**
 
   `quote=[string]`
   `author_id=[integer]`
   `category_id=[integer]`

* **Method:**
  
  <_The request type_>

  `DELETE`


* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ "message" : "quote successfully deleted" }`
    
 * **Error Response:**
`{"message":"quote_id Not Found"}`
OR
`{"message":"author_id Not Found"}`
OR
`{"message":"category_id Not Found"}`
