***Using HTTP/1.1 syntax implies also sending a Host: header in your request. If you use HTTP1.0 you can skip the host header***

The most common HTTP methods are:

##  GET (request a resource)
>GET /page.php HTTP/1.1
>
>Host: www.example.site

Can also pass **arguments**

>GET /page.php?course=PTS HTTP/1.1
>
>Host: www.example.site

## POST (submit HTML form data)

Post parameters **must be** in the message format

>POST /login.php HTTP/1.1
>
>Host: www.example.site
>
>username=john&password=mypass


## HEAD (ask headers fo the response)

>HEAD / HTTP/1.1
>
>Host: www.example.site


## PUT(used to upload a file to the server)

>PUT /path/to/destination HTTP/1.1
>
>Host: www.example.site
>
>***Put data***

You have to know the size of the file you want to upload on the server.

To do that you can use the Unix utility `wc(word counter)` with its `-m` parameter to count how long
,in bytes, your payload is.
>$ wc -m payload.php

>$nc www.example.site 80
>
>PUT /payload.php HTTP/1.0
>
>Content-type: text/html
>
>Content-length: 20
>
>php phpinfo();

## DELETE (remove a file from the server)

>DELETE /path/to/destination HTTP/1.1
>
>Host: www.example.site

## OPTIONS (used to query the web server for enabled HTTP Verbs)

>OPTIONS / HTTP/1.1
>
>Host: www.example.site
