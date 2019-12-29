# Server

#### 1. Install Server
navigate to the server root directory inside the project

```
composer install
```

#### 3. Configuration

Inside the config directory you will find a "config.dist.json" file.

1. Copy the contents of the config.dist.json file into a config.json file.
2. Fill the parameters in the config.json file.

#### 2. Run Server
navigate to the server root directory inside the project

The port you specify is optional as long as you have one configured in your config.json.

Run the following command inside your terminal:
```
php run.php [PORT]
```