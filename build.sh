#!/bin/bash

git clone git://git.ikiwiki.info/

cd git.ikiwiki.info

Makefile.PL

make

ikiwiki ./ out 
