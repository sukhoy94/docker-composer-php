## Overview
This repository demonstrates the integration of Composer in PHP projects using Docker. It's ideal for PHP developers seeking a consistent development environment with Docker-based Composer setup.

## Features
- **Dockerfile**: Configures PHP and Composer on Apache (located in the `.docker` directory).
- **Composer Installer Script**: A custom script to install Composer.
- **Application Source Code**: PHP project with Composer configuration (in `app` folder).
- **Docker-Compose Support**: Facilitates easy building and running of the environment.

## Getting Started
1. Clone the repository:
```
git clone https://github.com/sukhoy94/docker-composer-php.git
```

2. Navigate to the directory:
```
cd docker-composer-php
```

3. Build and run the application using Docker Compose:
```
docker-compose up -d
```