# Peacock Room

This is a customized version of Omeka-S, made for the Smithsonian and Wayne State University Libraries joint project, The Peacock Room.


## Installation

### Requirements
* Linux
* Apache (with [AllowOverride](https://httpd.apache.org/docs/2.4/mod/core.html#allowoverride) set to "All" and [mod_rewrite](http://httpd.apache.org/docs/current/mod/mod_rewrite.html) enabled)
* MySql 5.5.3+
* PHP 5.6+ (latest stable version preferred, with [PDO](http://php.net/manual/en/intro.pdo.php), [pdo_mysql](http://php.net/manual/en/ref.pdo-mysql.php), and [xml](http://php.net/manual/en/intro.xml.php) extensions installed)

### Gotchas
* The default library for generating thumbnails is ImageMagick, at least version
6.7.5. Older versions will not correctly produce thumbnails. See local.config.php
options in the [documentation](https://omeka.org/s/docs/user-manual/configuration/).

### Installation

1. Create a database for Omeka
1. Clone repository
1. Create `config/database.ini` from the template file in the `config` directory. Configure accordingly.
1. Create `config/local.config.php` from the template file in the `config` directory. Configure accordingly.
1. Check permissions on `files/` and make sure it is writable by Apache.
1. Navigate to application's web directory in your browser to finish configuration/setup.


### Development work

This repo is intended to be portable and easily drop-in/installable. It assumes either a machine with a LAMP stack pre-installed (with DB already created) or can create a local environment using Vagrant/Ansible (not yet created)

1. Commit and push all work to the Github repository.
1. Consider creating and using a separate branch for larger features and merge with `master` when complete.



## From Omeka-S repo

*Make a backup copy of your entire site and its database!*

### Updating from GitHub Omeka-S Repo

1. In your local repository, add the Omeka-S remote repository
2. `git pull` as usual. Use the `master` branch for the latest releases.
3. From the Omeka S root directory, run `gulp deps` to make sure dependencies are up to date.
4. Compare changes in `/config/local.config.php` and `/config/local.config.php.dist`. Some default configurations might have changed, so you might need to reconcile changes to the distributed configuration with your local configuration (e.g., a path to PHP specific to your server, dev mode settings, etc.)
5. In your web browser, go to your site and run any migrations that are needed.

### Updating from released zip file
1. Download the latest release from the [release page](https://github.com/omeka/omeka-s/releases)
2. Make a copy of your `/config` directory. You will need to restore your `local.config.php` and `database.ini` files from that copy.
3. Make a copy of your `/modules` and `/themes` directories.
4. Make a copy of your `/files` directory.
5. Remove all Omeka S files, and replace them with the files from the updated zip file.
6. Replace your original `/config/local.config.php` file, and the `/modules`, `/themes`, and `/files` directories that you copied.
7. In your web browser, go to your site and run any migrations that are needed.


## Libraries

Omeka uses the following libraries, among others:

* [Zend Framework 3](http://framework.zend.com/)
* [Doctrine 2](http://www.doctrine-project.org/)
* [EasyRdf](http://www.easyrdf.org/)
* [PHPUnit](https://phpunit.de/)
* [jQuery](http://jquery.com/)

## Coding Standards

Omeka development adheres to the [Zend Framework 2 Coding Standards](https://zf2-docs.readthedocs.org/en/latest/ref/coding.standard.html)
and uses the [git-flow](http://nvie.com/posts/a-successful-git-branching-model/) branching model.
