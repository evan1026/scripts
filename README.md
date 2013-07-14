scripts
=======

Just some scripts I made for myself that I decided to throw up onto this site for lulz. Feel free to comment or whatever or steal these for personal use.

=======

For the record, `4chanDownload` was not made by me. I found it on some website and only tweaked it to fix it not working with the new way 4chan saves files.
`convertomp3` is the same story.
`git-sh-prompt` is not mine either. It comes with git, and for some reason or other I had to move it here, although it's been so long that I forgot why.
Other than that, these are all mine, except for some stuff that I grabbed from a forum when I was stumped. Note that since they are mine, they have some personalized stuff to them. If you want it to work for you, it may involve some tweaking. In the future I might change things to make that a bit more convenient, but for now, just deal with it.

Usage/info
======

`4chanDownload <4chan thread url>`: Downloads all of the images in the given thread. Go ahead and change the directory if you don't like it, but I will probably make that an editable variable later.

`changeBackground`: Picks a random image from a givin directory as the desktop background.

`convertomp3 <file extension>`: You supply a file extension, it converts all files of that type in the current directory to mp3 files. A bit limiting, I know, but I didn't make it, and when I needed it, that was what I wanted.

`fileCount`: Just lists the number of files and the total size of them all. Simple, and not particularly useful, but I have it in case I ever want it.

`gitAddUpdateIgnore`: Ok this requires and explaination of the whole system: The script `gitRemotesUpdate` pushes to a specified remote in all git repositories (I link to them all in one folder, so it's easy to do that). Unfortunately, for the remote "origin", there are many repos I can't push to. So I created a list of repos to ignore if the -i option is set for any call to `gitRemoteUpdate`, just to limit the amount of error messages and wasted time. This script adds the current repo (if you're in one) to that list.

`gitCheck`: Uses `git status` to determine which repos need to be looked at (uncommitted changes or behind/ahead branches) and writes their names to the console. It's limited in what it can find that way, so I hope to expand it's usefulness later.

`gitHDDUpdate`: Actually more of an alias. I have a hard drive that has backups of all of my git repos, and I always name the remote for them "hdd". This goes through and pushes all of them to the hard drive.

`gitOriginsUpdate`: Like the previous command, except it pushes to origin, and it has the -i option set (see `gitRemotesUpdate`).

`gitPS1Calc`: Calculates the git-related text for my PS1. Prints the name of the current branch (color does not change unless there are local changes, in which case it's red) as well as whether or not the branch is ahead or behind it's upstream (also in red, if applicable).

`gitRemotesUpdate <remote name>`: Pushes each branch on each repo that has a remote with the given name to that remote. I name similar remotes similarly (e.g. origin = github , hdd = hard drive, etc.), so this is actually quite convenient, since I can, for example, push everything to my external hard drive when I mount it, or push everything to a private server when I'm connected to it.

`git-sh-prompt`: Just defines some functions used in other scripts.

`gitUpdate`: Fetches changes from every remote in every repo. Outputs a line if new changes were actually fetched.

`pseudolc <file or pattern>`: Does a count of actual functional lines for Java/C/C++/similar languages. It ignores empty lines as well as ones that just contain a curly brace, and counts the rest.

`restartConky`: For those times when conky needs to be restarted (which apparently was a lot at some point, since I took the time to make this).

`rssUpdate`: I run [tt-rss](tt-rss.org) on my webserver, and this forces it to update all feeds (in case I feel the 5 minute update period is too long).

`tmuxt <tmux session>`: I lied earlier. I didn't make this either; all credit to [Joe](https://github.com/Ginto8). Anyway it attaches to the given session, creating it if it doesn't already exist.


======

Feel free to contact me or whatever about anything with this, especially if you know bash well enough to improve these, since I realize I am not the best at it.
