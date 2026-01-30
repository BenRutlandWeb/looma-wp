# WordPress bootstrap

This is a basic WordPress installation managed by Composer.

## Installation

```sh
composer create-project brw/looma-wp
```

## Deployment

Make sure to exclude your custom themes or plugins from the `.gitignore`. E.g.

```
/public/app/plugins/**
!/public/app/plugins/plugin-name/
!/public/app/plugins/plugin-name/**

/public/app/themes/**
!/public/app/themes/theme-name/
!/public/app/themes/theme-name/**
```
