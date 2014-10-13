# Project METEO 1 #
This is the first pratical exercise to be worked on classes.

Notice that it makes use of many new concepts that wil be explained through the development.

With this exercise it is intended to write a *Web* page that is able to receive a location as the user input and to give as the result the weather current condition (and forecast) for that location. This is made using an external weather web API.


## Goals ##
1. design a very basic *HTML* form
2. process data form with a *php* script
3. consume a API service from *php*
4. parse *XML* and/or *JSON* with *php*
5. use php to dynamically generate *HTML* content

## Languages ##
+ HTML
+ PHP
+ JSON
+ XML
+ CSS

### Step 0 ###

+ Go to https://developer.worldweatheronline.com/ and register for a new acount.
+ Get a Free API key.
+ Explore the API. Syudy both the *JSON* and *XML* formats.

### Step 1 ###

FILE : *getmeteo.html*
> This file should have a HTML form with an input text and a submit and reset button. The form should use *GET* as method to send data to the server. The input text form field should be named *location*. By now you should configure *dump.php* as the *action* to process the script.

FILE : *dump.php*
> This file should write a *dump* of the values that are received as form fiels via the *GET* and *POST* methods in PHP.

TEST :
> Test the *dump.php* either with URL encoded data either with the *getmeteo.html*.

### Step 2 ###
STUDY : *file_get_contents()* and *cURL*
> notice that: *file_get_contents()* is a handy function to make *GET* requests and grab the response in a string.

> notice that: cURL is much more powerful library able to communicate with servers under different types of internet protocols.

STUDY : *SimpleXML* php API
> how to instantiate an object.

> how to search / navigate

STUDY : *json_encode* and *json_decode()* functions.

FILE : *getmeteoJSON.php* v1.
> write a file that receives a GET *location* parameter and requests weather
forecast information from the worlweatheronline API in JSON format.
> the file should dump the result string/object to the output.

FILE: *getmeteoJSON.php* v2.
> write the code to extract current waether status (temperature, humidity, precipitation, status, etc) and write them into a propor html format (eg. list).

FILE: *getmeteoXML.php*
> same as the previous, but using XML instead.

### Step 3 ###
FILE : *getmeteo.html*
>point the form action into *getmeteoJSON.php* and/or to *getmeteoXML.php*

FILE: *meteostyle.css*
>write a simple CSS style sheet to enhance visual presentation of the results.







