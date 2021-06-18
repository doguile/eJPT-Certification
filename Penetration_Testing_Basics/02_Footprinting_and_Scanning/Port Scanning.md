* El escaneo de puertos es el siguiente paso luego de saber que hosts estan activos en la red
* Tambien te permite detectar si existe un firewall entre el objetivo y el atacante
* 3-way handshake:

Si el puerto esta cerrado recibiras paquetes -> RST + ACK

## TIPOS DE ESCANEO NMAP

`-sT` performs a TCP connect scan

`-sS` performs a SYN scan

`-sV` performs a version detection scan


## Detectando un Firewall

Es posible que vea a menudo que no se reconoce una versión independientemente del puerto abierto

O incluso no se reconoce el tipo de servicio

`tcpwrapped` significa que el protocolo de enlace de TCP se completó pero el host remoto cerró la conexión sin recibir ningún dato

`--reason` nmap flag will show an explanation of why a port is marked as open or closed

## Masscan

`./masscan -p22,80,443,135 -Pn --rate=800 --banners 192.168.1.0/24 -e tap0 --router-ip 192.168.1.1 --echo > masscan.conf` (redirigimos el comando al archivo.conf)

Lo podemos editar por si no queremos alguna flag

output-filename = scan.list(.xml .json .grep)

format = list(.xml .json .grep)

`masscan -c masscan.conf`
