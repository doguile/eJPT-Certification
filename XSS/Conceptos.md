## CROSS-SITE SCRIPTING
It's a vulnerabiliy that let an attacker control some of the content of a web application

XSS vulnerabilities happen when a web applications use **unfiltered user input** to **build the output content** displayed to its end users;
this lets an attacker control the output HTML or Javascript code.

Cross-site scripting vulnerabilities can be **reflected** ,**persistent**,**DOM Based**

### **REFLECTED XSS ATTACKS**
Happen when the malicious payload carried **insied the request** ,that the browser of the victim sends to
the vulnerable website.

An input field of the HTTP Requests sent by the browser gets immediatly reflected to the output page

### **PERSISTENT XSS ATTACKS**

Persistent XSS attacks occurs when the **payload is sent to the vulnerable web server** and then **stored**

It is called persistent because the malicious code gets delivered each and everytime a web browser hits
the *injected* web page.


