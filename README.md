# Jovark Services Admin Panel

### Setup and Configuration

1. Change your database Username and Password in the `db.php` file.

   - We recommend a password at least 12 characters long with spaces and special characters.

2. Create Database Using the following Query:
   - You can use the `root` user to login to MySQL with the command: `sudo mysql`.

```sql
CREATE DATABASE IF NOT EXISTS register;
CREATE TABLE IF NOT EXISTS register.`users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );

 CREATE TABLE IF NOT EXISTS register.`status` (
    `mc_status` varchar(20) NOT NULL,
    `mt_status` varchar(20) NOT NULL
 );
```

Manage your Minecraft Java Edition Server Installation like a pro. Manage your Minecraft Java Edition and Minetest Server like a pro.

## Features

Manage your Minecraft Java Edition Server Installation like a pro.

## Roadmap

1. Jovark Minecraft Java Edition Web Installer
   - Web Installer (Minecraft)
   - Basic server management
   - Remote management interface
     - Admin users with MySQL backend
     - Remote Console viewing
     - Remote Console commands

#### Devs wanted! This project is mostly written in PHP, with `exec()` running a lot of the backend processes.
