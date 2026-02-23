# Football World Cup 2022 App
[![Ask DeepWiki](https://devin.ai/assets/askdeepwiki.png)](https://deepwiki.com/Claudio1009/Football-World-Cup-2022-App)

This repository contains a dynamic web application built with PHP and MySQL that provides comprehensive information about the FIFA World Cup 2022. Users can view match schedules, results, group standings, knockout brackets, and player statistics. The application also includes a complete admin panel for managing players and managers.

## Features

### For Users
-   **Login System**: Secure login for both regular users and administrators.
-   **Match Schedules & Results**: View today's matches and browse the results of all past matches from the group and knockout stages.
-   **Group Standings**: Detailed tables for each group (A-H) showing teams, matches played, wins, draws, losses, goals for, goals against, and points.
-   **Tournament Bracket**: A full visual bracket for the knockout stages, from the Round of 16 to the Final.
-   **Player Statistics**: View leaderboards for top goal scorers, assists, cards (yellow/red), and goalkeeper saves.
-   **Search Functionality**: A search bar to quickly find information about any player or team in the tournament.
-   **Fun Facts**: A dedicated page with interesting statistics, such as the most aggressive team and the top 3 goal scorers.

### For Admins
-   **Admin Dashboard**: A central panel for managing the application's data.
-   **Manager Management (CRUD)**: Full Create, Read, Update, and Delete capabilities for team managers.
-   **Player Management (CRUD)**: Full Create, Read, Update, and Delete capabilities for players, including their personal details and tournament statistics.

## Technology Stack

-   **Backend**: PHP
-   **Database**: MySQL
-   **Frontend**: HTML, CSS, JavaScript
-   **Frameworks/Libraries**: Bootstrap

## Database Structure

The `WorldCup2022_db` directory contains SQL dump files to set up the entire database. The schema is organized into the following tables:

-   `login`: Stores user and admin credentials.
-   `manager`: Contains information about team managers.
-   `team`: Details for each of the 32 national teams.
-   `players`: Information for every player in the tournament.
-   `stadium`: Data on the stadiums used in the tournament.
-   `matchstats`: Records the result and statistics for every match played.
-   `statsoverall`: Aggregates the overall statistics (goals, assists, cards, saves) for each player.

## Setup and Installation

To run this project locally, follow these steps:

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/claudio1009/football-world-cup-2022-app.git
    ```

2.  **Set up a local server environment:**
    -   Install a local server environment like XAMPP, WAMP, or MAMP which includes Apache, PHP, and MySQL.

3.  **Create the database:**
    -   Open your MySQL database management tool (like phpMyAdmin).
    -   Create a new database and name it `worldcup`.

4.  **Import the database schema and data:**
    -   Select the `worldcup` database.
    -   Import all the `.sql` files located in the `WorldCup2022_db` directory.

5.  **Configure database connection:**
    -   The PHP files connect to the database using the following credentials:
        -   **Host**: `localhost`
        -   **User**: `root`
        -   **Password**: `123456`
        -   **Database**: `worldcup`
    -   If your local MySQL setup uses a different username or password, you will need to update these credentials at the top of each `.php` file.

6.  **Run the application:**
    -   Move the `Main app` folder into your web server's root directory (e.g., `htdocs` in XAMPP).
    -   Open your web browser and navigate to `http://localhost/Main app/index.php`.

## Usage

### User Access
-   **Username**: `claudiu`
-   **Password**: `cesafaci`

Navigate through the tabs to view matches, results, and group standings. Use the links in the "Clasamente" (Standings) section to access player statistics and the tournament bracket.

### Admin Access
-   **Username**: `admin`
-   **Password**: `admin`

After logging in as an admin, you will have access to the Admin Panel where you can add, edit, or delete player and manager records.
