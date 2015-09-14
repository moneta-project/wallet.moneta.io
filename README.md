AltCoinWallet
========

AltCoinWallet is a secure opensource online altcoin wallet that works with practically any altcoin.

Setup: 

1) Setup coin daemons, mySQL & phpmyadmin on the server
2) Upload AltCoinWallet in your site root dir
3) Move files to your web directory mv AltCoinWallet/ /var/www/
4) Upload the sql file to your sql server under a new database titled "wallet" (using mysql client or phpmyadmin)
5) Edit "common.php" (Enter Coin Information, Database Information & Donation Information)
6) The wallet should now be running. Login with the default username of piWallet and the password of changeme
7) CHANGE THE PASSWORD RIGHT AWAY!!!
8) The wallet should now be running and ready to send/recieve


Whats New:
- Support Pin - A support button has been added that gives instructions to email the wallet's support team. In additon, a Support Key is shown in the top left corner. The support key is unique to there account and can be used to verify the the owner of that account. The support key changes if the user resets his/her password.

Coming Soon:
- login rate limiting 
- 2fa Authentication


Planned Features:

- Control of Private Keys

Donate Bitcoin: 
1NVH5ub3tSw2wXaEiTXVGorMLAqhZTRAxf
