# Smart Agriculture Monitoring System

A starter project structure for a web-based smart agriculture monitoring system using HTML, CSS, JavaScript, Bootstrap, PHP, MySQL and ESP32.

## Project structure
- `index.html` – monitoring dashboard
- `login.html`, `register.html` – starter authentication pages
- `css/` – custom styles
- `js/` – dashboard and sensor scripts
- `backend/` – PHP configuration, authentication and API endpoints
- `database/agriculture.sql` – starter MySQL schema
- `esp32/smart_agriculture.ino` – ESP32 firmware template
- `docs/` – project documentation

## Setup
1. Install XAMPP and start Apache and MySQL.
2. Copy this folder into XAMPP's `htdocs` directory.
3. Create a MySQL database by importing `database/agriculture.sql` in phpMyAdmin.
4. Configure `backend/config/database.php` with your local database credentials.
5. Open `http://localhost/Smart-Agriculture-Monitoring-System/`.

## Important
This ZIP is a structured starter template, not a finished deployed system. Add and test your own sensor hardware, Wi-Fi credentials, authentication security and production configuration. Never commit real passwords, Wi-Fi credentials, API keys or secrets to GitHub.
