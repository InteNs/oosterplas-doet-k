# oosterplas doet
[![Code Climate](https://codeclimate.com/repos/589dafbd73fd307939000474/badges/79352d992c3cc046ac4b/gpa.svg)](https://codeclimate.com/repos/589dafbd73fd307939000474/feed)
[![Test Coverage](https://codeclimate.com/repos/589dafbd73fd307939000474/badges/79352d992c3cc046ac4b/coverage.svg)](https://codeclimate.com/repos/589dafbd73fd307939000474/coverage)
[![Issue Count](https://codeclimate.com/repos/589dafbd73fd307939000474/badges/79352d992c3cc046ac4b/issue_count.svg)](https://codeclimate.com/repos/589dafbd73fd307939000474/feed)
[![Build Status](https://travis-ci.com/InteNs/oosterplas-doet-k.svg?token=sGMSyACVozf1C3y7y3tv&branch=master)](https://travis-ci.com/InteNs/oosterplas-doet-k)

## Wiki

check the wiki here for more info on some of the frameworks we're using

## Code Style

code needs to be approved by code-climate

## github usage

for the git-apprentices that want to _(should)_ use the command line:

 
 [here](https://raw.githubusercontent.com/Fabriquartz/laptop-install/master/dotfiles/gitconfig)
are some useful aliases

###branches

- only one branch per feature
- feature branch name should be: `feature/<feature-name>`
- bugfix branch name should be: `bugfix/<bug-name>`
- branch name should be lowercase and english
- start a new branch _from master_ if you start working on something else

####keeping your branch up-to-date
to keep your branch up to date with master, you need to _rebase_ it.
rebasing is only easy if you do it often

you can rebase your branch by doing the following:
```
git pull --rebase origin master
```

[fix conflicts in a rebase](https://help.github.com/articles/resolving-merge-conflicts-after-a-git-rebase/)

if rebasing is not your thing, or your branch has gotten too much out of hand,
you can merge master into your branch by doing the following:
```
git merge origin master
```

###commits

- only one commit per reasonable change ([good example](http://imgur.com/Wb4gOb5), [bad example](http://imgur.com/dFgX9Wu))
- commit name should say what _changed_ in the commit
- commit name should be lowercase and english

### pull-requests
- has a reference to taiga [this way](https://tree.taiga.io/support/integrations/changing-elements-status-via-commit-message/) if applicable
- explains what is in it
- is only opened when they are done
- is only opened when up-to-date with master
- is only merged when all status checks should pass
- is only merged by an administrator
