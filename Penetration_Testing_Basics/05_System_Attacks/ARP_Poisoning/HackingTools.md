## Dsniff Arpspoof

+ Is a collection of tools for network auditing and pentest.
+ It includes **arpspoof** a utility designed to intercept traffic on a switched LAN.

> To run the tools, you hace to enable the _**Linux Kernel IP Forwarding**_, a feature that transforms a linux
> bot into a router.

By enabling IP Forwarding, you tell your machine to forward the packets you intercetp to the real destination host.

```bash
# echo 1 > /proc/sys/net/ipv4/ip_forward
```

You can then run *arpspoof*:

```bash
# arpspoof -i <interface> -t <target> -r <host>
```
+ Interface is the NIC you want to use
