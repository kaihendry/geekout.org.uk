#!/bin/bash -x

# I don't think the following line helps, ikiwiki seems to default to ctime which you cannot touch,
# using --gettime asks ikiwiki to get the time stamps from git
# https://ikiwiki.info/forum/Blog_posting_times_and_ikiwiki_state/
# git log --pretty=%at --name-status --reverse | perl -ane '($x,$f)=@F;next if !$x;$t=$x,next if !defined($f)||$s{$f};$s{$f}=utime($t,$t,$f),next if $x=~/[AM]/;'

# Always force a rebuild since we're not likely to be doing simple posts any more
# https://ikiwiki.info/bugs/IkiWiki_does_not_use_file__39__s_mtime_for_Last_Edited/

git remote remove origin
ikiwiki --setup geekout.org.uk.setup --gettime --rebuild 2>&1 |
# hide /usr/share/perl5/IkiWiki/Plugin/calendar.pm line 272 messages
grep -v calendar.pm

echo Test dates are correct https://github.com/kaihendry/geekout.org.uk/issues/4
git log -n1 posts/non-sponsorship.mdwn
if ! grep edited /home/jamie/geekout.org.uk/out/posts/non-sponsorship/index.html | grep 2019
then
	echo Test failed!
	exit 1
fi
