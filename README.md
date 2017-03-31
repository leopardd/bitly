# bitly

[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]

Example project of [leopardd/UrlShortenerBundle](https://github.com/leopardd/UrlShortenerBundle)

## Getting started

1. Clone: `git clone https://github.com/leopardd/bitly.git`
2. Install: `composer install`
3. Prepare database: `./bin/console doctrine:schema:update --force`
4. Config `parameters.yml` and `config.dev.yml`

`composer.lock` file was generated on PHP 5.6.
If you want to use it on 7.0, remove `composer.lock` first.

Test
```
POST: /short/
{
  "url": <url>
}

GET: /short/<code>
```

## Feature & Update & Note

- [x] Support PHP 5.6, 7.0
- Test script
  - [ ] E2E
  - [x] Codeception
- [ ] Spam protection
- [ ] UI

## Reference

- Inspired by [bitly.com](https://bitly.com/) and [goo.gl](https://goo.gl/)

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/leopardd/bitly/master.svg?style=flat-square

[link-travis]: https://travis-ci.org/leopardd/bitly
