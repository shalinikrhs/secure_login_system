
# Secure_login_system
php secure login system with mysql and md5 encryption


## Create Database
```
CREATE DATABASE login_system;
```

## Create Table
```
CREATE TABLE `admin` (
  `id` int(45) NOT NULL,
  `username` varchar(22) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(34) NOT NULL,
  `usertype` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

```

## Encryption With md5
```
  $email_login =  $_POST['email'];
  $password = md5($_POST['password']);
```
