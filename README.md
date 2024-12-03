
# Califyn-LMS Backend

## Introduction

Califyn-LMS is an innovative Learning Management System (LMS) designed to streamline academic processes through automation and advanced technologies like Machine Learning (ML). The backend of this project, which powers the application's functionality, handles critical operations such as user management, data processing, and API services. It facilitates automated activity point calculations, attendance monitoring, and performance predictions, ensuring seamless interaction between students, faculty, and administrators.

This repository contains the backend code for Califyn-LMS.

## Table of Contents

1. [Features](#features)
2. [Technologies Used](#technologies-used)
3. [Installation](#installation)
4. [Usage](#usage)
5. [API Endpoints](#api-endpoints)
6. [Contributing](#contributing)
7. [License](#license)

## Features

- **Activity Point Calculator**: Automates the calculation of activity points based on uploaded certificates.
- **Attendance Monitoring**: Allows faculties to track attendance and visualize data.
- **Student Performance Prediction**: Uses machine learning to predict academic performance.
- **Online Test Portal**: Provides a secure platform for conducting quizzes and exams.
- **User Roles**: Distinct roles for students, faculty, and administrators with specific permissions.

## Technologies Used

- **Backend Framework**: Laravel (PHP)
- **Database**: MySQL
- **Machine Learning**: Python (Jupyter Notebook, Spyder)
- **Frontend (not included in this repository)**: React.js

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/ashwinsabu/Califyn-LMS.git
   cd Califyn-LMS
   ```

2. Install dependencies using Composer:
   ```bash
   composer install
   ```

3. Set up environment variables:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the database credentials and other configurations in the `.env` file.

4. Run database migrations:
   ```bash
   php artisan migrate
   ```

5. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage

The backend is designed to serve as the core API provider for the Califyn-LMS application. Once the backend is up and running:
- Use the provided endpoints to interact with various LMS features.
- Ensure that the frontend application is configured to connect to the backend API.

## API Endpoints

### User Management
- **POST** `/api/register`: Register a new user.
- **POST** `/api/login`: Authenticate a user.
- **GET** `/api/users`: Retrieve user details (admin only).

### Activity Points
- **POST** `/api/activity-points/upload`: Upload activity documents.
- **GET** `/api/activity-points/status`: Check activity point status.

### Attendance
- **POST** `/api/attendance/mark`: Mark attendance.
- **GET** `/api/attendance/overview`: Get attendance statistics.

### Performance Prediction
- **GET** `/api/performance/predict`: Get predicted performance for a student.

_For a detailed API documentation, refer to the official documentation or `docs` directory in the repository._

## Contributing

Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a feature branch:
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes and push to the feature branch.
4. Open a pull request for review.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
