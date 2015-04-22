#!/bin/bash

rm status/status_$1
touch status/status_$1
echo "0" >> status/status_$1
