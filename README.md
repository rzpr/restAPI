# Create Yourself restAPI Website 

![php Badge](https://img.shields.io/badge/Made%20with-php-green)


<p align="center">
<img src="https://user-images.githubusercontent.com/58212770/144481340-b5d4deff-5721-48a5-931d-19998622488b.png" width="128" height="128"/>
</p>
<p align="center">
<a href="https://github.com/rezzaapr/restAPI/fork"><img alt="GitHub forks" src="https://img.shields.io/github/forks/rezzaapr/restAPI?label=Fork%20This%20Project&style=social"></a>
</p>
<p align="center">
<a href="https://github.com/rezzaapr"><img title="Author" src="https://img.shields.io/badge/Author-rezzaapr-red.svg?style=for-the-badge&logo=github"></a>
</p>
<p align="center">
<a href="https://github.com/rezzaapr/followers"><img title="Followers" src="https://img.shields.io/github/followers/rezzaapr?color=blue&style=flat-square"></a>
<a href="https://github.com/rezzaapr/restAPI/stargazers/"><img title="Stars" src="https://img.shields.io/github/stars/rezzaapr/restAPI?color=red&style=flat-square"></a>
<a href="https://github.com/rezzaapr/restAPI/network/members"><img title="Forks" src="https://img.shields.io/github/forks/rezzaapr/restAPI?color=red&style=flat-square"></a>
<a href="https://github.com/rezzaapr/restAPI/watchers"><img title="Watching" src="https://img.shields.io/github/watchers/rezzaapr/restAPI?label=Watchers&color=blue&style=flat-square"></a>

## ✨ Features
- Register >  Login > logout
- Activating API Key By Url ( If You Want Get Money Using Shortlink )
- Giving Alert Notification If API Key User Limit


## 🗒️ Requirements
* [PHP 7.4](https://www.python.org/downloads/) Or Higher

* [MySQL database](https://palletsprojects.com/p/flask/) Of Course

* A Coffe

# ⌨️ How To Setup

## Connection Database Setup
- Edit Hostname
- user
- password
- database name

To Our Configuration
 
```php
<?php

$server = "localhost";
$user = "phpmyadmin";
$pass = "rezza123";
$database = "phpmyadmin";

$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

?>

 ```
 
 ## Register
 Note : If You Want Setup Your Mailer Later You Can Activating Your Account Self First opened phpmyadmin select ```user table``` And Copy token go to ```https://yourdomain.com/activation.php?t=PasteHere```
 
 # Preview
 
- User Not Login

<img src="https://user-images.githubusercontent.com/58212770/144475334-e69677fd-ed0b-448f-af05-ad6b0ae2eafe.png" height="100%" width="100%">

- User Logined

<img src="https://user-images.githubusercontent.com/58212770/144475334-e69677fd-ed0b-448f-af05-ad6b0ae2eafe.png" height="100%" width="100%">

- New Account

<img src="https://user-images.githubusercontent.com/58212770/144476676-679749a4-3030-4816-89e8-37e436d4f614.png" height="100%" width="100%">

- API Key Limit

<img src="https://user-images.githubusercontent.com/58212770/144476861-5a52329b-aac7-4076-9014-acb9561b1ac4.png" height="100%" width="100%">

- Rest API

<img src="https://user-images.githubusercontent.com/58212770/144479532-a556a18a-a64d-499e-a70c-2439fb7056d7.png" height="100%" width="100%">
 
- About
 
<img src="https://user-images.githubusercontent.com/58212770/144479547-9923a878-4971-4079-8e3d-b635c5eb0d43.png" height="100%" width="100%">


## CREDITS
- <a href="https://getstisla.com/"> Stisla</a> All Of This Page Using Theme From Stisla

## PREVIEW
- https://rezzaapr.my.id
  
## NOTE
- This Project Is 100% Not Completed, But You Can Use Normaly. Or You Can develop it self
