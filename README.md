<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/figuren-theater/phpstan">
    <img src="https://raw.githubusercontent.com/figuren-theater/logos/main/favicon.png" alt="figuren.theater Logo" width="100" height="100">
  </a>

  <h1 align="center">figuren.theater | <code>phpstan.neon</code></h1>

  <p align="center">
    org-wide used phpstan.neon file for the WordPress Multisite network for puppeteers - <a href="https://figuren.theater">figuren.theater</a>.
    <br /><br /><br />
    <a href="https://meta.figuren.theater/blog"><strong>Read our blog</strong></a>
    <br />
    <br />
    <a href="https://figuren.theater">See the network in action</a>
    •
    <a href="https://mein.figuren.theater">Join the network</a>
    •
    <a href="https://websites.fuer.figuren.theater">Create your own network</a>
  </p>
</div>

## About

The configuration is loaded automatically by [phpstan/extension-installer](https://packagist.org/packages/phpstan/extension-installer) and can be overwritten per project with a custom `phpstan.neon` file in the project root folder.

## Background & Motivation

This is a part of the figuren.theater [code-quality](https://github.com/figuren-theater/code-quality) package and delivers a default configuration for *phpstan* throughout the whole platform and (not yet) all of its repos. It further helps reducing the need for an individual `phpstan.neon` file in every repository.

## Install

Install via command line
```sh
composer require --dev figuren-theater/phpstan
```

## Usage

```sh
vendor/bin/phpstan analyze .
```

Create a `phpstan.neon` file inside the project root with something like this:
```neon
#$ vendor/bin/phpstan analyze

includes:
    # Already included
	# @see https://github.com/phpstan/phpstan-src/blob/master/conf/bleedingEdge.neon
    - phar://phpstan.phar/conf/bleedingEdge.neon
    # Include this extension, if not already autoloaded via composer
    # - vendor/szepeviktor/phpstan-wordpress/extension.neon
parameters:
    level: max
    inferPrivatePropertyTypeFromConstructor: true
    bootstrapFiles:
		# Missing constants, function and class stubs
		#   - %currentWorkingDirectory%/tests/phpstan/bootstrap.php
		#   - %currentWorkingDirectory%/tests/static-analysis-stubs/wordpress-defines.stub
		#   - %currentWorkingDirectory%/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php
	# scanFiles:
	    # Plugin stubs
	    #   - %currentWorkingDirectory%/tests/phpstan/PLUGIN-stubs.php
	    # Procedural code
	    #   - %currentWorkingDirectory%/myplugin-functions.php
	# autoload_directories:
	    #   - %currentWorkingDirectory%/inc/
    paths:
        - %currentWorkingDirectory%/plugin.php
        - %currentWorkingDirectory%/inc/
        # - %currentWorkingDirectory%/templates/
    excludePaths:
        - %currentWorkingDirectory%/vendor/
    ignoreErrors:
        # Uses func_get_args()
        # - '#^Function apply_filters(_ref_array)? invoked with [34567] parameters, 2 required\.$#'
        # Fixed in WordPress 5.3
        #- '#^Function do_action(_ref_array)? invoked with [3456] parameters, 1-2 required\.$#'
        #- '#^Function current_user_can invoked with 2 parameters, 1 required\.$#'
        #- '#^Function add_query_arg invoked with [123] parameters?, 0 required\.$#'
        #- '#^Function wp_sprintf invoked with [23456] parameters, 1 required\.$#'
        #- '#^Function add_post_type_support invoked with [345] parameters, 2 required\.$#'
        #- '#^Function ((get|add)_theme_support|current_theme_supports) invoked with [2345] parameters, 1 required\.$#'
        # Fixed in WordPress 5.2 - https://core.trac.wordpress.org/ticket/43304
        #- '/^Parameter #2 \$deprecated of function load_plugin_textdomain expects string, false given\.$/'
        # WP-CLI accepts a class name as callable
        # - '/^Parameter #2 \$callable of static method WP_CLI::add_command\(\) expects callable\(\): mixed, \S+ given\.$/'
        # Please consider commenting ignores: issue URL or reason for ignoring
	# dynamicConstantNames:
	#    - SCRIPT_DEBUG
```


## Built with & uses

  - [dependabot](/.github/dependabot.yml)
  - [phpstan/extension-installer](https://packagist.org/packages/phpstan/extension-installer)

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


## Versioning

We use [Semantic Versioning](http://semver.org/) for versioning. For the versions
available, see the [tags on this repository](/tags).

## Authors

  - **Carsten Bach** - *Provided idea & code* - [figuren.theater/crew](https://figuren.theater/crew/)

See also the list of [contributors](/contributors)
who participated in this project.

## License

This project is licensed under the [GPL-3.0-or-later](LICENSE.md), see the [LICENSE](LICENSE) file for
details

## Acknowledgments

  - [altis](https://github.com/search?q=org%3Ahumanmade+altis) by humanmade, as our digital role model and inspiration
  - [@roborourke](https://github.com/roborourke) for his clear & understandable [coding guidelines](https://docs.altis-dxp.com/guides/code-review/standards/)
  - [python-project-template](https://github.com/rochacbruno/python-project-template) for their nice template->repo renaming workflow
