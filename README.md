# Installation Guide

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- **PHP 8.3 or higher** - [Download PHP](https://www.php.net/downloads)
- **Composer** - [Download Composer](https://getcomposer.org/download/)
- **Node.js 18+** - [Download Node.js](https://nodejs.org/)
- **Git** - [Download Git](https://git-scm.com/)

## Installation Steps

### 1. Clone the Repository

```bash
git clone https://github.com/emiisushi/capstone.git
cd capstone
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Set Up Environment File

```bash
cp .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Install Node Dependencies

```bash
npm install
```
