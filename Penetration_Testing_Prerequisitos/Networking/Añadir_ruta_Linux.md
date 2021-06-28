```bash
root@doguileo:~$ ip route add 192.168.222.0/24 (ip_dest) via 10.175.34.1(ip_source)
```

### Verificamos que la ruta fue añadida mediante estos dos comandos

```bash
root@doguileo:~$ netstat -rn or route
Kernel IP routing table
Destination     Gateway         Genmask         Flags   MSS Window  irtt Iface
...
192.168.222.0     10.175.34.1     255.255.255.0   UG        0 0          0 tap0
...
```
