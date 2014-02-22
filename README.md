# Vagrant LAMP stack
Basic LAMP stack using Ansible for provisioning.

## Requirements
* [VirtualBox](https://www.virtualbox.org)
* [Vagrant](http://vagrantup.com)
* [Ansible](http://www.ansible.com)

## Included software

* vim, zip, unzip, sqlite3, curl, mc, git
* apache,
* MySQL
* PHP
* phpMyAdmin
* adminer
* xdebug
* composer
* drush, drush completion, drupalcs
* postgres
* postgis
* nfs-server

Not all of these packages are enabled by default. Check out playbook.yml and uncomment required components.

## Usage
* cd vagrant-lamp
* Modify Vagrant file to set up host name and IP address.
* vagrant up

## Notes
PHP version depends on which version vm box you used. You can change it in Vagrant file. This provision was tested with both Ubuntu 12.04 (precise) and Ubuntu 13.04 (raring) distribution.
