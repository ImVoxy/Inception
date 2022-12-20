#!/bin/bash

service mysql start

touch dbtmp
envsubst < db.sql > dbtmp
mysql < dbtmp

service mysql stop

exec mysqld_safe
