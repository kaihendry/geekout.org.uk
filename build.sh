#!/bin/bash

apt-get install -y --no-install-recommends ikiwiki

ikiwiki ./ out 
