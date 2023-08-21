## Log Viewer

Log Viewer is an internal tool built to view the cs application logs in the browser.


### Install with Docker Compose

```
version: '3.3'
services:
    cs-logs-viewer:
        container_name: cs-logs-viewer
        ports:
            - '8080:80'
        environment:
            - PUID=1000
            - PGID=1000
        volumes:
            - './logs:/var/www/html/storage/logs'
        image: 'danielfelix/cs-logs-viewer:latest'
        restart: unless-stopped
```
