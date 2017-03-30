# bitly

[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]

Example project of [leopardd/UrlShortenerBundle](https://github.com/leopardd/UrlShortenerBundle)

## Getting started

1. Clone: `git clone https://github.com/leopardd/bitly.git`
2. Install: `composer install`
3. Prepare database: `./bin/console doctrine:schema:update --force`
4. Config `parameters.yml` and `config.dev.yml`

Test
```
POST: /short/
{
  "url": <url>
}

GET: /short/<code>
```

## Feature & Update & Note

- Test script
  - [ ] E2E
  - [x] Codeception
- [ ] Spam protection
- [ ] UI

## Reference

- Inspired by [bitly.com](https://bitly.com/) and [goo.gl](https://goo.gl/)

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/leopardd/bitly/master.svg?style=flat-square

[link-travis]: https://travis-ci.org/leopardd/bitly
