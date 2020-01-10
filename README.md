## Installation

Please check the official laravel installation guide for server requirements before you start. [Laravel Documentation](https://laravel.com/docs/6.x)

Clone the repository	
```bash
git clone https://github.com/najdovski/qadashboard.git
```

Now swtich to the repository folder
```bash
cd qadashboard
```

Install all the dependencies using composer
```bash
composer install
```

Copy the example env file and make the required configuration changes in the .env file
```bash
cp .env.example .env
```

Generate a new application key
```bash
php artisan key:generate
```

Set the database connection and the application name as "Q&A Dashboard" in the .env file

Import the DB backup (filename "qadasboard.sql")

You can register a new user, or use the existing ones
```bash
johndoe@gmail.com
janedoe@outlook.com
petergriffin@yahoo.com
```

They all share the same password
```bash
password
```

Start the local development server
```bash
php artisan serve
```

TL;DR (commands)
```bash
git clone https://github.com/najdovski/qadashboard.git
cd qadashboard
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```