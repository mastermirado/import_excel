## Step running project ##

# Clone the project

# Run composer install

# Run npm install

# Run service mysql & pma
- docker-compose up -d
To see in browser running pma, run http://localhost:8099, you should see import_database in database list (with empty tables)

# Populate database with structure
- import the dump.sql in scripts repository
  
# Run the app
- php bin/console symfony server:start

# Enjoy