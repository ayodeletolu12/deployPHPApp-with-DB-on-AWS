# Deploying a PHP application connected to MySql database using AWS EC2 instance and RDS with MySQL database engine

Create a Simple Database App: Connecting to MySQL with PHP

## Steps taken

1. Create a S3 bucket to store the application source code
2. Launch an EC2 instance, assign instance profile role and use the User Data to install the webservers and dependecies at launch of EC2
3. #!/bin/bash
sudo yum update -y
sudo amazon-linux-extras install -y lamp-mariadb10.2-php7.2 php7.2
sudo yum install -y httpd mariadb-server
sudo systemctl start httpd
sudo systemctl enable httpd
sudo systemctl is-enabled httpd
sudo aws s3 cp s3://dynamic-website-2-tolu --region us-east-2 /var/www/html/ --recursive
4. Create a RDS database and use Mysql engine, ensure high availability: Multi-AZ deployment
5. Take note of the Database Endpoint and port 3306 to be configured with the web app
6. Create a security group and ensure its only open to the web server

# AWS services used
1. EC2 instance
2. RDS (MySQL)
3. Elastic Load Balancer
4. Autoscalling Group
5. Security Groups
6. Amazon Machine Image 
