#!/bin/bash

git log --pretty=%at --name-status --reverse | perl -ane '($x,$f)=@F;next if !$x;$t=$x,next if !defined($f)||$s{$f};$s{$f}=utime($t,$t,$f),next if $x=~/[AM]/;'

ikiwiki --setup geekout.org.uk.setup
