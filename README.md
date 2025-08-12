# Your Project Name

A brief, one-or-two-sentence description of your project.

## 📦 Installation

1.  **Clone the Repository**

    ```bash
    git clone [https://github.com/your-username/your-project.git](https://github.com/your-username/your-project.git)
    cd your-project
    ```

2.  **Install PHP Dependencies**

    ```bash
    composer install
    ```

3.  **Copy Environment File**

    ```bash
    cp .env.example .env
    ```

4.  **Generate Application Key**

    ```bash
    php artisan key:generate
    ```

5.  **Configure Database**

    Update the `.env` file with your database credentials:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

## 🗄️ Database Setup

-   **Fresh migration** (drops all tables and re-runs migrations)

    ```bash
    php artisan migrate:fresh
    ```

-   **Standard migration** (without dropping existing data)

    ```bash
    php artisan migrate
    ```

-   **Run seeders** (populate database with sample data)

    ```bash
    php artisan db:seed
    ```

-   **Fresh migration with seeders**

    ```bash
    php artisan migrate:fresh --seed
    ```

## 🧪 Running the Application

Start the Laravel development server:

```bash
php artisan serve