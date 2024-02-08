# wpsite

Deployed website URL - https://wpsite.velluscent.com

# Server Provisionig and Website Configuration. 

1) Created Digital Ocean account and configured Ubuntu 22.04.3 Server Droplet.
2) Taken Server access using SSH and updated server using apt.
3) Configured UFW firewall to allow ports 22, 80 and 443.
4) Installed Nginx, MySQL-server, PHP and its required extensions.
5) Also installed certbot and python3-certbot-nginx for configuring SSL/TLS certificate.
6) Made changes in php.ini files like memory_limit, max_execution_time, post_max_size and upload_max_filesize.
7) We can also make changes in www.conf file to control PHP child processes managed by process manager. This helps in fine tuning of php processing on server.
8) Made changes in nginx.conf with security headers and gzip compression.
9) Created nginx virtual host configuration to host website.
10) Uncommented mysql port in mysqld.cnf. Here in this file we can also adjust various settings like bind-address, binlog, recovery options and others.
12) Created mysql database, created user and granted privileges to that user on database.
13) Downloaded wordpress zip using wget and extracted in /var/www/wpsite directory.
14) Copied wp-config-sample.php file into wp-config.php file, generated Authentication unique keys, salts and added in wp-config.php. Also added database details in wp-config.php file.
15) Given www-data user and group ownership recursively.
16) Also gave 755 and 644 permissions recursively to directories and files respectively.
17) Now added A record for wpsite.velluscent.com in DNS management section on Cloudflare.
18) Installed and configured SSL/TLS certificate using cerbot.
19) Then carried out wordpress installation on web by setting administrative user and password.
20) After successful setup of website did setup for automated deployment using Github Actions Workflow.


# Instructions on how to set up the environment locally and deploy the website using the GitHub Actions workflow.

1) Install Nginx, MySQL, Git, PHP and its required extensions on your local machine based on your project requirements.
2) Create repository on Github.
3) Make sure you can authenticate with github to connect with github repository.
4) Clone repository to local.
5) Download and extract Wordpress.
6) Do all necessary setup and test website locally.
7) Do secrets setup on Github repository.
8) Create .github/workflows directory and inside this directory create YAML file.
9) In this YAML file define deployment workflow.
10) Add all your work in staging using git add command.
11) Now you can commit.
12) Next step is to push on Github repository.
13) As we have defined deployment workflow in YAML file thus Github Actions will 
automatically deploy Wordpress site on Server.
14) But deployment workflow I defined uses git pull method to deploy code that is why 
I first cloned Github repository on server at first instance.
15) Now whenever we push code to Github repository then Github Actions will automatically deploy it on Server.


# Please read.

I tried to complete this Technical Assignment but there is still scope to have some significant changes and configurations like setting up caching using fastcgi cache, varnish or using plugins as well. We can use Cloudflare CDN and WAF for caching over edge and security respectively. Also we can make changes in mysql configuration for performance tuning as per need.
