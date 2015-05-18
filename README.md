# Vagrant LAMP stack for Drupal development
Basic web development stack using Ansible for provisioning.

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
* drush, drush completion, drupalcs, drupal code generator, drupal console
* nfs-server
* mailcatcher
* postgres
* postgis

Not all of these components are enabled by default. Check out playbook.yml and uncomment required roles.

## Usage
* cd vagrant-lamp
* Modify Vagrant file to set up host name and IP address.
* vagrant up

## Notes
PHP version depends on branch you have cloned.

* PHP 5.3 - Ubuntu 12.04 LTS (precise)
* PHP 5.4 - Ubuntu 13.04 (raring) - Not supported anymore
* PHP 5.5 - Ubuntu 14.04 LTS (trusty)
* PHP 5.6 - Ubuntu 15.04 (vivid)

## Known issues

[Fixing SSH unknown error when provisioning a Vagrant VM with Ansible](http://www.midwesternmac.com/blogs/jeff-geerling/fixing-ssh-unknown-error-when)
