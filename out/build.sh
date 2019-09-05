#!/bin/bash

aptitude download ikiwiki

dpkg-deb -x *.deb

./usr/bin/ikiwiki ./ out 
