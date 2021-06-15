Durante un escaneo de puertos si el puerto se encuentra cerrado el servidor respondera con un paquete con las flags `RST` y `ACK` seteadas.

** El escaneo TCP SCAN se puede detectar facilmente por los administradores de sistemas

`TCP SYN SCAN` son mas sigilosos por lo que unicamente envian paquetes `SYN` y si reciben como respuesta del servidor un paquete con la flag `ACK` significa que
el puerto esta abierto.

### Spotting a Firewall
You might often see that a version was not recognized regardless of the open port 

Or even the service type is not recognized by an `?`

`tcpwrapped` means that the TCP handshake was completed but the remote host closed the connection without receiving any data

`--reason` nmap flag will show an explanation of twhy a port is marked as open or closed

