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

## Built with & uses

  - [dependabot](/.github/dependabot.yml)
  - ....

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
