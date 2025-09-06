# 🚀 Laravel Project

This is a Laravel-based project. Follow the instructions below to set up and deploy the system.

---

## 📦 Deployment Instructions

1. Clone the repository

   ```bash
   git clone <your-repo-url>
   cd <your-project-folder>
   ```

2. Copy the environment file

   ```bash
   cp .env.example .env
   ```

3. Configure your database

   - Open the `.env` file.
   - Update the database connection settings (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) according to your environment.
   - Make sure the database exists in your database management system.

4. Generate the application key

   ```bash
   php artisan key:generate
   ```

5. Install PHP dependencies

   ```bash
   composer install
   ```

6. Install Node.js dependencies

   ```bash
   npm install
   ```

7. Dump autoload files

   ```bash
   composer dump-autoload
   ```

8. Run database migrations and seeders

   ```bash
   php artisan migrate:fresh --seed
   ```

   ⚠️ `--fresh` will drop all tables and re-run all migrations.

9. Build frontend assets

   ```bash
   npm run build
   ```

10. Start the local development server

    ```bash
    php artisan serve
    ```
✅ Additional Notes

Ensure you have PHP ≥ 8.2, Composer, Node.js, and NPM installed.

Laravel artisan commands must be run from the project root.

## 🔐 Login Access

You can access the secured backend portal:

- Open in browser → (http://127.0.0.1:8000/login) 
- Use **Ctrl + Enter** shortcut if supported, or go directly to `/login`

Landing page: http://127.0.0.1:8000/

### Credentials

- **Email:** `admin@example.com`  
- **Password:** `password`
