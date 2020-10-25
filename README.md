# Infinite scroll project
This is a project from a class in Udemy.com. In the class we learned how to create an IPA from php, connect it to a database created with phpMyAdmin and use AJAX to load the data from the ipa into the jQuery file and as the user scrolls down the page, more content loads. 

The repository includes the following files
 1- Index.html
 This code includes html to output the data + jQuery code that loads the data with AJAX from the IPA file and outputs it to the html page. 

 2- conn.php 
 PHP file that creates a connection to the database

 3- build.php
 A php file that insert data to the database

 4- createDB.sql 
 A SQL file that contains code to create the database 'sp' for the project and creates the table 'bposts' the table that would contain all the data to upload to webpage

 5- api.php
 The API file. This file connects the page to the database. It contains a query that returns the rows of data that it asks for. It received the data that it needs from AJAX (these variables are saying how many and which rows to load). And converts the data from DB into JSON code so AJAX can read it. 
 
 Class source: https://www.udemy.com/course/ajax-project/
