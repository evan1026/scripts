scripts
=======

Just some scripts I made for myself that I decided to throw up onto this site for convenience. Feel free to comment or whatever or steal these for personal use.

=======

For the record, `4chanDownload` was not made by me. I found it on some website and only tweaked it to fix it not working with the new way 4chan saves files.
`convertomp3` is the same story.
`git-sh-prompt` is not mine either. It comes with git, and for some reason or other I had to move it here, although it's been so long that I forgot why.
Other than that, these are all mine, except for some stuff that I grabbed from a forum when I was stumped. Note that since they are mine, they have some personalized stuff to them. If you want it to work for you, it may involve some tweaking. Directories can already be changed in the config file, but otherwise do what you need to make it work.

Usage/info
======

`4chanDownload <4chan thread url>`: Downloads all of the images in the given thread. Downloads to the directory specified in the config file.

`changeBackground`: Picks a random image from the pictures directory as the desktop background.

`convertomp3 <file extension>`: You supply a file extension, it converts all files of that type in the current directory to mp3 files. A bit limiting, I know, but I didn't make it, and when I needed it, that was what I wanted.

`fileCount`: Just lists the number of files and the total size of them all. Simple, and not particularly useful, but I have it in case I ever want it.

`gitAddUpdateIgnore`: Ok this requires an explaination of the whole system: The script `gitRemotesUpdate` pushes to a specified remote in all git repositories (I link to them all in one folder, so it's easy to do that). Unfortunately, for the remote "origin", there are many repos I can't push to. So I created a list of repos to ignore if the -i option is set for any call to `gitRemotesUpdate`, just to limit the amount of error messages and wasted time. This script adds the current repo (if you're in one) to that list.

`gitCheck`: Finds repos that are either behind or ahead of their remotes or have uncommitted changes and reports that status to the console. There's a screenshot of it below.

`gitHDDUpdate`: Actually more of an alias. I have a hard drive that has backups of all of my git repos, and I always name the remote for them "hdd". This goes through and pushes all of them to the hard drive.

`gitOriginsUpdate`: Like the previous command, except it pushes to origin, and it has the -i option set (see `gitRemotesUpdate`).

`gitPS1Calc`: Calculates the git-related text for my PS1. Prints the name of the current branch (color does not change unless there are local changes, in which case it's red) as well as whether or not the branch is ahead or behind its upstream (also in red, if applicable).

`gitRemotesUpdate <remote name>`: Pushes each branch on each repo that has a remote with the given name to that remote. I name similar remotes similarly (e.g. origin = github , hdd = hard drive, etc.), so this is actually quite convenient, since I can, for example, push everything to my external hard drive when I mount it, or push everything to a private server when I'm connected to it.

`git-sh-prompt`: Just defines some functions used in other scripts.

`gitUpdate`: Fetches changes from every remote in every repo. Outputs a line if new changes were actually fetched.

`pseudolc <file or pattern>`: Does a count of actual functional lines for Java/C/C++/similar languages. It ignores empty lines as well as ones that just contain a curly brace, and counts the rest.

`restartConky`: For those times when conky needs to be restarted (which apparently was a lot at some point, since I took the time to make this).

`rssUpdate`: I run [tt-rss](http://tt-rss.org) on my webserver, and this forces it to update all feeds (in case I feel the 5 minute update period is too long).

`tmuxt <tmux session>`: I lied earlier. I didn't make this either; all credit to [Joe](https://github.com/Ginto8). Anyway it attaches to the given session, creating it if it doesn't already exist.

`doMount <drive Name>`: Mounts a drive with the given label to /media/LABEL or /media/USER/LABEL, depending on the setup of your version of linux. Note: this means you can mount without having to know how a drive is referenced (/dev/sda1, /dev/sdc5, etc.), as long as you know the drive's label.

`doUnmount <drive name>`: Same as `doMount`, but it unmounts the drive.

`replaceTabs <file name>`: Replaces the tabs in a specified file with spaces. The number of spaces is specified in the config.


======

Feel free to contact me or whatever about anything with this, especially if you know bash well enough to improve these, since I realize I am not the best at it.

Here's a cool screenshot of `gitCheck` in action:

![gitCheck in action](https://dl.dropboxusercontent.com/u/16835571/Pictures/2013-07-14-025201_397x139_scrot.png)
