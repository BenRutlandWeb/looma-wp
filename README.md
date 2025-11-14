# WordPress bootstrap

This is a basic WordPress installation managed by Composer.

## Installation

```sh
composer install
```

## Deployment

Make sure to exclude your theme or plugin from the `.gitignore`. E.g.

```
/public/app/plugins/**
!/public/app/plugins/plugin-name/
!/public/app/plugins/plugin-name/**

/public/app/themes/**
!/public/app/themes/theme-name/
!/public/app/themes/theme-name/**
```
