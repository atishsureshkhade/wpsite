# wpsite

Deployed website URL - https://wpsite.velluscent.com

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
