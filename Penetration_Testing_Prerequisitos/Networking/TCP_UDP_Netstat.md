**Checking the ARP table**

OS|Command
-|-
`arp -a`|	Windows
`arp`	|*nix OS
`ip neighbour`	|Linux

**Checking the routing table:**

OS|Command
-|-
Linux|`ip route`
Windows	|`route print`
Mac OS X	|`netstat -r`

TCP: Transmission Control Protocol |	UDP: User Datagram Protocol
------------ | -------------
Guarantees packet delivery|Does not guarantee packet delivery
Connection oriented	|It's connectionless
Vast majority of applications use it|	Faster that TCP, better throughput
Lower throughput than UDP	|Multimedia applications


Check listening ports and current TCP connections as information about the processes listening on the machine and processes connecting to remote servers:


OS           |    Command
------------ | -------------
Windows	     | `netstat -ano`
Linux	       | `netstat -tunp`
Mac OS X     |	`netstat -p tcp -p udp` together with `lsof -n -i4TCP -i4UDP`


