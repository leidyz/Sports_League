# Football League Management Web Application

A web application designed for the management of a football league, allowing sports entities such as schools or clubs to easily manage their teams and matches.

**Table of Content**

* Introduction
* Features
* Getting Started
* Technologies Used
* Project Structure
* Usage
* Database Seeders


**Introduction**

In level 1 of this project, we have designed and programmed all the functionalities of the application using the MVC (Model-View-Controller) software design pattern. The application is built using Laravel, a PHP web application framework, and incorporates the Eloquent ORM for database interaction. The UI is styled using the Tailwind CSS framework.

**Features**

* Full CRUD functionality for managing teams and matches.
* Implementation of the MVC design pattern.
* Models and migrations for teams and matches.
* Use of Eloquent ORM for database interaction.
* Integration of Tailwind CSS for styling.
* Defined routes for web project.
  
**Getting Started**

Follow these steps to set up the project on your local machine:

Clone the repository:
*git clone https://github.com/leidyz/Sports_League.git*

Install project dependencies:
*composer install*

Copy the .env.example file to .env and configure your database settings:
*cp .env.example .env*

Generate the application key:
*php artisan key:generate*

Run database migrations and seeders:
*php artisan migrate --seed*

Start the development server:
*php artisan serve*

Visit http://localhost:8000 in your browser to access the application.

**Technologies Used**

* Laravel
* Eloquent ORM
* Tailwind CSS
* PHP
* Blade

**Usage**

* Access the web application through the provided URL after running the development server.
* Navigate to the Teams and Matches sections to perform CRUD operations.
* Ensure to follow validation guidelines for entering information.

**Database Seeders**

To populate the database with initial data, seeders have been provided:
TeamsSeeder: Seeds the database with initial team data.
GamesSeeder: Seeds the database with initial game data.

Run the seeders using the following command:
php artisan db:seed 

