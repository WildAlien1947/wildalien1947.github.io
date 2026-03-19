How To Use:

1. Open phpMyAdmin
Make sure your XAMPP Control Panel has the "MySQL" module started (it should be green).

Open your browser and go to: http://localhost/phpmyadmin

2. Create the Missing Database
Click on the "New" button in the left-hand sidebar.

Under Database name, type exactly: user_system

Click Create.

3. Create the Table
Once the database is created, click on user_system in the sidebar, then click the SQL tab at the top and paste this in:

SQL
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

Click Go.
