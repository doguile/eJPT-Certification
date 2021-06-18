Ping works by sending one or more special ICMP packets `(Type 8 - echo requests)` to a host.

If the destination host replies with `ICMP echo replys packets`, then the host is alive.

Note: ICMP uses the services provided by IP.

### TOOLS

* Fping

`fping -a -g IPRANGE` (10.0.0.0/24 or 10.0.0.0 10.0.0.255)

-a: only show alive hosts

-g: perform a ping sweep instead of a standard ping


## NMAP 

nmap -sn 192.168.0.0/16

nmap -sn -iL hostilist.txt

* HOST DISCOVERY:

-sL: List Scan - simply list targets to scan

-sn: Ping Scan - disable port scan

-Pn: Treat all hosts as online -- skip host discovery

-PS/PA/PU/PY[portlist]: TCP SYN/ACK, UDP or SCTP discovery to given ports

-PE/PP/PM: ICMP echo, timestamp, and netmask request discovery probes

-PO[protocol list]: IP Protocol Ping

