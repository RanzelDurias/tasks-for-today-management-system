# Tasks for Today Management System

A simple CodeIgniter 4 application that displays today's tasks, all tasks, a demo user profile, and information about the developer.

## Pages

- `/` - tasks scheduled for today
- `/tasks` - complete task list ordered by date
- `/profile` - demo user profile
- `/about` - information about the system and developer

## Local Setup

1. Place the project inside the XAMPP `htdocs` folder.
2. Start Apache and MySQL in XAMPP.
3. Create a MySQL database named `tasks_for_today`.
4. Import `database.sql` using phpMyAdmin.
5. Copy the `env` file and rename the copy to `.env`.
6. Configure the database section of `.env`:

```ini
database.default.hostname = localhost
database.default.database = tasks_for_today
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

7. Install the project packages:

```bash
composer install
```

8. Start the application:

```bash
php spark serve
```

9. Open `http://localhost:8080` in a browser.

## Developer Details

The demo profile uses the developer name Ranzel Ked Durias. Update the email address in the `users` table before submission.
