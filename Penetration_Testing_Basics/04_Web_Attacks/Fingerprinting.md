Fingerprinting a web server means detecting:

- The daemon providing the web server service, such as IIS,Apache,nginx, and others.
- It's version
- The operating system of the machine hosting the server.

### Fingerprinting with NETCAT

- Netcat es una herramienta popular tambien conocida como "TCP/IP Swiss army knife". Se puede usar 
como servidor o cliente.

- Netcat no hace ningun tipo de encriptación por lo que no se conecta a HTTPS

#### Banner Grabbing with nc

`nc <target address> 80`

Ahora podremos enviar un solicitud de mensaje al servidor

Verbs: PUT, TRACE, HEAD, POST.

> GET  / HTTP/1.1

or

> HEAD / HTTP/1.0

Netcat no notifica la conexion al servidor por lo que podemos usar el swithc -v

### Fingerprinting with OPENSSL

Podemos usar esta herramienta para realizar conexions a servidores que acepten HTTPS unicamente.

`openssl s_client -connect <target>:443`
>HEAD / HTTP/1.0

### Fingerprinting with Httprint

Httprint is a web server fingerprinting tool that uses a **signature-based technique** to identify web servers

`httprint -P0 -h <target> -s <signature file>`

p0 = avoid pinging the hosts

-h = tell the tool to fingerprint a list of host

-s = set the signature file to use (/usr/share/httprint/signature.txt)



