Durante un escaneo de puertos si el puerto se encuentra cerrado el servidor respondera con un paquete con las flags `RST` y `ACK` seteadas.

** El escaneo TCP SCAN se puede detectar facilmente por los administradores de sistemas

`TCP SYN SCAN` son mas sigilosos por lo que unicamente envian paquetes `SYN` y si reciben como respuesta del servidor un paquete con la flag `ACK` significa que
el puerto esta abierto.


