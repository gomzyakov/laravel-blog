# Deployment to VDS

For simplicity, we will deploy the project to VDS. The deployment process consists of several steps:

## Create a VDS on your preferred hosting

Create a VDS virtual machine for example at [NetAngels](https://panel.netangels.ru). In this example we used distribution `Ubuntu 20.04`.

## Set up VDS

Login via SSH (as `root` user) and check PHP version (`php -v`).

If necessary, [upgrade to PHP 8](https://php.watch/articles/php-8.0-installation-update-guide-debian-ubuntu):

```bash
sudo apt update
sudo apt install software-properties-common
sudo apt update
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php8.1-common php8.1-cli php8.1-mysql php8.1-xml php8.1-curl php8.1-bcmath php8.1-mbstring -y
```

Manually [install](https://getcomposer.org/download/) Composer:

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

And make it available for calling through `composer`:

```bash
sudo mv composer.phar /usr/local/bin/composer
```

## CHANGE USER!

Next, we do everything from the user `web`, not `root`!!!


## Generate RSA-key (for access to GitHub)

First, generate SSH-keys with `ssh-keygen`:

```bash
cd ~/.ssh && ssh-keygen
```

With default settings, you will see something like:

```bash
Generating public/private rsa key pair.
Enter file in which to save the key (/root/.ssh/id_rsa): 
Enter passphrase (empty for no passphrase): 
Enter same passphrase again: 
Your identification has been saved in /root/.ssh/id_rsa
Your public key has been saved in /root/.ssh/id_rsa.pub
The key fingerprint is:
SHA256:e+Wuo7OK0Vd+oJ3LM75ZAhJq9xZOSZ0schYgsmdFdSg root@vm-80ae16e5
The key's randomart image is:
+---[RSA 3072]----+
|  . ..+oo..      |
|   o oE .= .     |
|  . o o.= +      |
|   o . * o       |
|    o o S o .    |
|   . o = O =     |
|    . . B * +    |
|     o o.o+B     |
|    . ..o=B*.    |
+----[SHA256]-----+
```

## Add RSA-key to GitHub

In the GitHub-repository, in the `Settings > Deploy Keys` section, set the value of the public key from the virtual machine.

You can get it via:

```bash
cat ~/.ssh/id_rsa.pub
```

This will allow deployment via `git pull` from VDS.


## Set secrets on GitHub

After that, in the GitHub repository, in the `Settings > Secrets > Actions` section , set the values:

- `SSH_HOST`: This is the IP address of the server.
- `SSH_USERNAME`: This is the `web` username.
- `SSH_PASSWORD`: This is the user password.


## Clone repository from GitHub

Go to path `/var/www/web/sites` and clone current repository (or your own fork). For example, use `laravel-blog.app` folder name:

```bash
cd /var/www/web/sites
git clone git@github.com:gomzyakov/laravel-blog.git laravel-blog.app
cd secretic
```

Where `laravel-blog.app` is the domain that you previously purchased and under which your website will be visible.

## Set up Laravel

Then go to path `/var/www/web/sites/laravel-blog.app` and run some commands:

```bash
php -r "file_exists('.env') || copy('.env.ci', '.env');"
composer install
chmod -R 777 storage bootstrap/cache
php artisan key:generate
```

- Write the correct database requisites in the `.env` file
- Create a `secretnotes` database via phpMyAdmin
- Run migrations `php artisan migrate:fresh --seed`

Open assigned to VDS URL (like `dd`) in your favorite browser. Happy using laravel-blog app!


## Optional: Make domain aliases (if needed)

```bash
cd /var/www/web/sites 
ln -s laravel-blog.app www.laravel-blog.app
ln -s laravel-blog.app laravel-blog.io
ln -s laravel-blog.app laravelblog.com
```

## Optional: Set up HTTPS

>No need if you are using mode `Flexible` on Cloudflare

Read more about HTTPS connection in [https.md](./https.md)
