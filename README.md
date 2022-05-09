# nouvelles
 A simple news aggregator using NewsAPI

## Requirements
- PHP Version >= 8.1<br>

## Setup Guide
### 1. Clone GitHub repo for this project locally
```
git clone https://github.com/iamjuney/nouvelles.git
```
### 2. `cd` into the `nouvelles` project
```
cd nouvelles
```
### 3. Install Composer Dependencies
```
composer install
```
### 4. Create a copy of `.env` file from `.env.example`. 
The `.env.example` file is already filled with default database information including the name of the database `minilibrarysystem`.
```
cp .env.example .env
```
### 5. Create a NewsAPI key from this [link](https://newsapi.org/). 
Then write your api key in the `.env` file.
```
// your newsapi key here
NEWSAPI_KEY = 
```
### 6. Generate an app encryption key.
```
php artisan key:generate
```
### 7. Start a Laravel development server.
```
php artisan serve

