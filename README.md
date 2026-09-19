# MyIP

Self hosted network information and speed test page. The application shows
the visitor's local address, public IPv4/IPv6 information, browser, operating
system, approximate location, network provider, and an embedded OpenSpeedTest
page.

## Addresses and placeholders

This repository contains no organization-specific hostname or branding. When
a deployment needs a public hostname, use `example.com` as the documentation
placeholder and replace it with the real address in the deployment
configuration.

## Local development

Run it with a PHP-capable web server from the repository root:

```bash
php -S 127.0.0.1:8000 -t .
```

Open <http://127.0.0.1:8000/> in a browser.

## Docker deployment

The Compose file uses the official `php:8.3-apache` image and mounts the
application from `/home/ccnadmin/myip` on the Docker host:

```bash
docker compose up -d
```

It publishes the application on port `8002`. The host path can be changed in
[`compose.yaml`](compose.yaml) for another deployment.

## External services

Public IP geolocation is read from the IPv4 and IPv6 endpoints at
`api-ipv4.ip.sb` and `api-ipv6.ip.sb`. The speed test itself is included in
the `Speed-Test/` directory and runs locally.
