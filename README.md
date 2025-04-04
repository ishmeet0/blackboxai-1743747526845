
Built by https://www.blackbox.ai

---

```markdown
# Developer Portal

## Project Overview

The Developer Portal is a web application that allows users to log in and access a dashboard interface. The application provides a simple and secure way to manage user authentication and access a developer-oriented dashboard with basic capabilities such as viewing database status and recent activities.

## Installation

To set up the Developer Portal locally, follow these steps:

1. **Clone the Repository**:
   ```bash
   git clone https://your-repository-url.git
   cd developer-portal
   ```

2. **Setup the SQLite Database**:
   The application uses SQLite as its database. The database file `users.db` will be created automatically when you first attempt to log in.

3. **Ensure PHP is Installed**:
   The application requires a server environment with PHP installed. You can use XAMPP, WAMP, or any local PHP server.

4. **Start the Server**:
   If using a built-in PHP server, run the following command in the project directory:
   ```bash
   php -S localhost:8000
   ```
   Now you can access the application by navigating to `http://localhost:8000/index.php` in your web browser.

## Usage

1. **Login**: Navigate to `index.php` to access the login form. Enter the default username (`Ishmeet`) and password (`ishmeet@singh1`) to log in.

2. **Dashboard**: Upon successful login, you will be redirected to `dashboard.html`, where you can see database status, recent activities, and quick action buttons.

3. **Logout**: Use the Logout button to end your session, which will redirect you back to the login page.

## Features

- User authentication using a simple login form.
- SQLite database connection for user management.
- A responsive dashboard with a sidebar to navigate through different sections.
- Visual feedback on the database status and recent activity.

## Dependencies

The application leverages the following external libraries:

- **Tailwind CSS** for styling the UI.
- **Font Awesome** for icons used in the interface.

No dependencies are listed in a `package.json` file as this project is built using PHP and HTML/CSS without a package manager.

## Project Structure

```
developer-portal/
├── db.php               # Database connection and initialization logic
├── login.php            # User authentication logic
├── dashboard.html       # Main dashboard user interface
├── logout.php           # Logout functionality
└── index.php            # Login page user interface
```

### File Explanations:

- **db.php**: Manages database connection using the Singleton pattern and initializes the user table if it does not exist.
  
- **login.php**: Handles user login logic, checks credentials, manages user session, and redirects based on authentication success or failure.

- **dashboard.html**: User interface for the dashboard, showing various statistics and options for database interaction.

- **logout.php**: Logic to log out the user, destroy the session, and redirect them to the login page.

- **index.php**: Displays the login form where users can enter their credentials to access the application.

## License

This project is licensed under the MIT License - see the LICENSE file for details.
```