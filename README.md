# Coupling PHP Examples

> PHPUnit  
> Infector  
> vlucas/phpdotenv  
> clio/clio  

## Install

```bash
make install
```

## Setup

```bash
make
```

## Composer

```bash
make composer-install
```

## Running tests

```bash
make env
vendor/bin/phpunit tests
```

## Running mutation tests

```bash
make env-root
vendor/bin/infection --threads=4
```
