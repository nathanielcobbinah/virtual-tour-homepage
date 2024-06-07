Virtual Tour Website
Welcome to the Virtual Tour Website! This project is a web application built using HTML, CSS, JavaScript, and PHP. It offers a virtual tour experience, accessible only to authenticated users. Unauthorized users are redirected to the login or signup page to create an account.



Project Structure
Features
Installation
Usage
Technologies Used
Contributing
License
Contact


Project Structure

/Forms
│
├── css/
│   └── style.css
│
├── img/
│   └── virtual3.png
│
├── js/
│   └── index.js
│
├── config.php
├── index.php
├── login.php
├── logout.php
├── profile.php
├── edit_profile.php
├── signup.php
└── README.md


css/: Contains the stylesheet style.css for the project.
img/: Contains images used in the project.
js/: Contains the JavaScript file index.js for the project.
config.php: Contains the database configuration.
index.php: The homepage of the application.
login.php: The login page.
logout.php: The logout script.
profile.php: The user profile page.
edit_profile.php: The page for editing the user profile.
signup.php: The signup page.


Features


User Authentication: Users can sign up, log in, and log out.
User Profile: Users can view and edit their profile.
Personalized Homepage: Authenticated users are greeted by name on the homepage.
Virtual Tour: Access to the virtual tour experience for authenticated users.
Responsive Design: The application is responsive and works well on different screen sizes.

Installation

Prerequisites
XAMPP or any other local server with PHP and MySQL.
Git (optional, for version control).
Steps
Clone the Repository:

git clone https://github.com/nathanielcobbinah/php-form.git
Navigate to the Project Directory:

cd Forms
Start the Local Server:

Ensure that XAMPP is running. Place the project folder inside the htdocs directory of XAMPP.

Create a Database:

Open PHPMyAdmin and create a database named virtual_world.

Create Tables:

Execute the following SQL queries in PHPMyAdmin to create the necessary tables:


CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
Configure Database Connection:

Update the config.php file with your database credentials.

<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "virtual_world";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
Usage
Signup:
Open your web browser and navigate to http://localhost/Forms/signup.php. Fill in the signup form and submit.

Login:
Open your web browser and navigate to http://localhost/Forms/login.php. Fill in the login form and submit.

Profile:
After logging in, you will be redirected to the homepage. Click on your username to view and edit your profile.

Logout:
Click the logout button to end your session.

Technologies Used
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL
Contributing
Contributions are welcome! Please follow these steps:

Fork the repository.
Create your feature branch (git checkout -b feature/AmazingFeature).
Commit your changes (git commit -m 'Add some AmazingFeature').
Push to the branch (git push origin feature/AmazingFeature).
Open a pull request.
License
This project is licensed under the MIT License. See the LICENSE file for details.

Contact
Nathaniel Cobbinah - nathanielamofah@gmail.com

<<<<<<< HEAD
<!-- Project Link: https://github.com/nathanielcobbinah/php-form -->
=======
<!-- Project Link: https://github.com/nathanielcobbinah/php-form -->
>>>>>>> 83f071ddb8e761ae55f8ad2c9b0d0bfaf622bffd
