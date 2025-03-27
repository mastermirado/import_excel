## Step running project ##
- Plase install composer & npm
- Please install (if not) symfony cli
https://symfony.com/download

# Clone the project
- git clone git@github.com:mastermirado/import_excel.git
- cd import_excel

# Run composer install

# Run npm install

# Run service mysql & pma
- docker-compose up -d
To see in browser running pma, run http://localhost:8099, you should see import_database in database list (with empty tables)

# Populate database with structure
- import the dump.sql in scripts repository
  
# Run the app
- npm run dev
- php bin/console cache:clear
- php bin/console symfony server:start
  
# Enjoy

## Once you have imported the file with no error, check pma to verify data in database

