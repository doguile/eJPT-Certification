## ARP POISONING

Powerfull attack you can uso to **Intercep traffic on a switched network**

+ To send an IP packet, a host need to know the MAC Address of the next hop. 
+ To identify the MAC Address of a host, computers use the Address Resolution Protocol (ARP)
+ After the MAC Address resolution is complete, hosts save the destination address in their **ARP Cache table**

> If an attacker finds a way to manipulate the ARP cache, they will also be able to receive traffic destinated to other IP addresses!!

This happens because as long as a destination MAC address is in the ARP cache table, the sender does not need to run ARP to reach that destination host.

If an attacker manipulates the ARP tables of the 2 parties involved in a communication, it will be able to sniff
the whole communication, thus performing **MITM attack**. This can be done by sending **gratuitous ARP replies** to
the gateway.

The attacker tells the router that the other hosts can reach a specific IP to his machine because the attacker altered his
own IP address.

> The attacker can prevent the poisoned entry from expiring by sending gratuitous ARP replies every X seconds or so.

### Forwarding and Mangling Packets

As soon as the attacker's machine receives the packets, it must **forward them to the correct destination**.




