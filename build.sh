#!/bin/bash

git clone git://github.com/fsquillace/junest ~/junest
PATH=~/junest/bin:$PATH
junest -f -- pacman --noconfirm -Sy ikiwiki

junest -- ikiwiki ./ out 
