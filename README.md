 
# E COMMERCE
=======
# Real Estate Site 
### Made By [***DannyGlade***](https://github.com/DannyGlade)
This is a Real E-state Site Project Made with Laravel, Bootstarp, JQuery, DataTables, FancyApp.
I only made it for my College Project, but if you are here that means I might have posted it online somewhere and you are here to steal it or see as refrence, but it's okay.

## What can you do in this website
- Admin can handle facilities, cities, categories, properties, Reviews, Users, Change Password & Site settings
- User can surf properties, handle their profile, Change Password & Save and review properties if logged in
- Yeah that's not much I know but I'm still making and It's a College Project so nothing Serious is gonna happen.
> Please Note!
> Beacause I am not good of a designer I have only used bootstrap, and nothing else, yet. So if you are looking for fancy site this might not be it. otherwise it looks decent enogh and funtionalities are also working... (obviously there will be some bugs)


## Steps to Install
### Clone The GitHub Repo first
1. Open Cmd in folder you want to install project in...
2. Type below Command and hit enter...
```bash
git clone https://github.com/amitchaulagain/restaurant.git
```
4. Then cd into folder using below Command
```bash
cd restaurant
```
> Note from here On, You can also use Terminal from VS Code or Your IDE...

### Install All Composer Dependencies
1. Use below command to install all dependencies then wait till all process is complete...
```bash
composer install
```

### Create a .env file
1. Duplicate *.env.example* as *.env* file
2. Fill information of your DB **username** and **password** & other info if needed...

### Create DataBase
1. Create DataBase by PhpMyadmin (provided by [Wamp](https://www.wampserver.com/en/)) or Any Other DB you use...
> Note DataBase name should be same as typed in *.env* file
### DataBase Structure
> I recommend to import DB structure Using `php artisan` method but you can use *.sql* file to import if you want.
1. Use below Command and wait till all migrations complete...
```bash
php artisan migrate

OR 

import from init.sql
find the command for import

```
2. Use below Command to Link Storage to Public folder (#################-----<<<<<<<<<<>>>>>>>>>>>>>>>   IMPORTANT     <<<<<<<<<< >>>>>>>>>>----------############# )
```bash
php artisan storage:link
```

### Serve Project
1. Use below Command ( [Wamp](https://www.wampserver.com/en/)/Other Should be Runnig ) to run project...
```bash
php artisan serve
```
> if some *key* related error appears then use command `php artisan key:generate` to generate AppKey.

## Update Admin
Go to the Link that `php artisan serve` command gives you and Hopefully it should be working, I hope you are capable of any troubleshooting if any error occurs.

Admin site: `your_site_link/admin/dashboard`

- Admin Email
```bash
hr@hr.com
```
- Admin Password
```bash
admin
```
Update CMS and Site Settings inside Admin Panel (/admin/dashboard) Once (empty or filled doesn't matter), and then goto frontend
> when project loads for first time db won't have values of CMS and Site setting, by updating those fields will be created, so frontend wouldn't show errors after that...





----------------------------------------------****CPANEL HOSTING *****------------------------------------------------------

## TO HOST ON CPANEL, DO THIS XTRA STEP
ln -s public public_html


>>>>>>> develop
