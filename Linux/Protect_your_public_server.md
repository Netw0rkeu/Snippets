Protect your public server
--------------------------

1. Change your default SSH port
2. Disable SSH root login (you can use the "su"-command if you are logged id as another user)
3. Install fail2ban
4. Use SFTP instead of FTP on a private server
5. Don't open your database port for public!
6. Just open your admin panel's (like phpmyadmin) if you need it
7. Protect your backups with an password (or something better).
8. Choose different password's for each service.
9. Give NOBODY your passwords!
10. Check all your open ports (with nmap for example) and close all you don't need public with iptables