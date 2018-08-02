#!/bin/sh

# save env
env > /env

/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf