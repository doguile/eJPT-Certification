## NetBIOS

+ Stands for Network Basic Input Output System
+ Servers and clients use NetBIOS when viewing network shares on the local area network
+ Can supply the following information:
  + Hostname
  + NetBIOS name
  + Domain
  + Network shares
+ NetBIOS Session: TCP 139
+ NetBIOS datagrams and names: UDP 138,137

### Shares

An authorized user can access shares by using **UNC Paths (Universal Naming Convention Paths)**:
```
\\ComputerName\C$ # access to a volume (C$, D$, E$)
\\ComputerName\admin$ # points to the windows installation directory
\\ComputerName\ipc$  # used for inter-process communication, cannot be browsed via Explorer
```

## NULL SESSIONS

**Null sessions** attacks can be used to enumerate a lot of information:
  + Passwords
  + System users 
  + System groups
  + Running system processes
### Nbstat
+ Enumerate windows shares
+ Windows command line tool that can display information about a target
```powershell
nbstat /? #check how to use it

nbstat -A x.x.x.x #Displays information about a target

Name                Type      Status
----------------------------------------
ELS-WINXP     <00>  UNIQUE    Registered
WORKGROUP     <00>  GROUP     Registered
ELS-WINXP     <20>  UNIQUE    Registered
```

+ `ELS-WINXP`: name of the machine running at x.x.x.x
+ `<00>`: tell us that ELS-WINXP is a workstation
+ `UNIQUE`: this computer must have only one IP address assigned
+ `<20>`: file sharing service is up and running on the machine

Once we know that the machine has the File Server service running , we can enumerate the shares by using the **NET VIEW** command.

>NET VIEW x.x.x.x

### Nmblookup

+ We can also perform shares enumeration from a Linux machine.
+ We need tools provided by **Samba Suite**
```bash
#nmblookup -A x.x.x.x
```
+ The samba suite also provides **smbclient**, an FTP-like client to access windows shares and enumerate the shares provided by a host.

```python
$ smbclient -L //X.X.X.X -N
$ smbclient -L WORKGROUP -I x.x.x.x -N -U ""
#-L: allows you to look at what services are available on a target.
#-N: forces the tool to not ask for a passwd
```

...Also displays administrative shares that are hidden when using windows standard tools.

To connect we have to type the following command in a windows shell:
```powershell
NET USE \\X.X.X.X\IPC$ '' /u:''
```

### Exploiting NULL SESSIONS with Enum
```powershell
enum -S <target>  # -S lets you enumerate the shares of a machine
enum -U <target>  # -U enumerates the users
enum -P <target>  # -P check the password policy
```

**A PENETRATION TESTER CAN ALSO EXPLOIT NULL SESSIONS BY USING ENUM4LINUX, A PERL SCRIPT THAT CAN PERFORM THE SAME OPERATIONS OF ENUM**
