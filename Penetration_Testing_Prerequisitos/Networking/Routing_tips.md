### Routing

El paquete necesita seguir un camino valido para llegar al destinatario.

### Metricas de enrutamiento

Durante el descubrimiento del camino, los protocolos de enrutamiento tambien asignan una métrica a cada enlace. Esto asegura que si dos caminos tienen el mismo numero de saltos, la ruta mas rapida se seleccionará.

Para verificar la tabla de rutas se deben usar los siguientes comandos:

+ ip route - en Linux
+ route print - en Windows
+ netstat -r - en OSX

Para listar las MAC address de la tarjeta de red en un host:
+ ipconfig/all - en Windows
+ ifconfig - en sistemas operativos nix, como MacOS
+ ip addr - en Linux

Para verificar la tabla ARP de un host:
+ arp -a - en Windows
+ arp - en sistemas operativos nix
+ ip neighbour - en Linux
