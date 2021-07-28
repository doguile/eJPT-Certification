#### john the ripper and unshadow to crack the user passwords

```bash
unshadow passwd shadow > to_crack
```
#### Now that we have the password hashes stored in the file named to_crack, we can use John the Ripper to crack them:

```bash
john to_crack
```
