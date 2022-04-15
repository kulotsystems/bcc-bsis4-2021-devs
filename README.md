## bcc-bsis4-2021-devs
During the last quarter of year 2021, I got an opportunity to mentor some 4th year Bachelor of Science in Information Systems (BSIS) students
of [Baao Community College](https://web.facebook.com/baacommunitycollege) who were doing their capstone projects.

To keep a record of their projects,
I created a Single Page Application (SPA) using [Vuetify](https://vuetifyjs.com/en) on top of [Vue](https://v2.vuejs.org/) and [Laravel](https://laravel.com/).

The initial commit of this project uses the default [laravel-mix](https://laravel-mix.com/) to build front-end assets.
But recently, I started learning **[Vite](https://vitejs.dev/)** and I chose this project for practice.

### Development Environment
| Tool      | Version   |
| --------- | --------- |
| PHP       | `^8.0`    |
| Node      | `^16.14`  |
| Composer  | `^2.2.7`  |

### Development Setup
1. Clone or download this repository.
2. Open the project directory and **copy** `.env.example` to `.env` in its same directory.
3. Create a MySQL database named `bcc_bsis4_2021_devs`.
4. Open cloned directory in your terminal then run the following commands in order:

    *___a.___ Install backend dependencies:*
    ```composer log
    composer update
    ```
   
    *___b___. Install frontend dependencies:*
    ```composer log
    npm install
    ```
   
    *___c___. Generate application key:*
    ```composer log
    php artisan key:generate
    ```
   
    *___d___. Migrate database tables:*
    ```composer log
    php artisan migrate
    ```
   
    *___e___. Populate database tables with data:*
    ```composer log
    php artisan db:seed
    ```
   
    *___f___. Spin a local dev server:*
    ```composer log
    php artisan serve
    ```
   
   *___g___. Run or build frontend in different terminal session:*
 
    *Run while in development:*
    ```composer log
    npm run dev
    ```
    
    *Build assets for production:*
    ```composer log
    npm run prod
    ```
   
4. Access <http://localhost:8000> on your browser.
   
### Optional
Adjust the database connection in `.env` to match your own configuration.

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bcc_bsis4_2021_devs
DB_USERNAME=root
DB_PASSWORD=
```

### Preview
Visit <https://www.kulotsystems.tech/bcc-bsis4-devs>, but this one is built using `webpack` by `laravel-mix`.
