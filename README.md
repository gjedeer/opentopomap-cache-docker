# TileCache

A simple tilecache written in Apache and PHP.

Apache directly serves locally cached tiles.
PHP requests new tiles from providers and caches them locally.

## Install

```bash
docker build -t otm-mirror .
docker run -p 8080:80 otm-mirror
```

And the tiles are available at URLs like http://localhost:8080/11/1089/563.png . You probably want to put nginx with SSL in front of it.
