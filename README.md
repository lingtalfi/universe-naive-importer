UniverseNaiveImporter
=========================
2017-03-11 --> 2017-04-01




A naive importer for the [universe](https://github.com/karayabin/universe-snapshot) framework.

Why naive? Because it doesn't care about version numbers, it always take the latest version.

(and also, I liked the UNI acronym, which is how I wanted to name the command).


It imports the planets dependencies though (otherwise this project would be close to useless).



What can it do for you?
=================
Although I first intended to do only an importer tool, I added a few features along the way.

So, now the uni command can do the following (see Usage section for more info):

- import a planet
- import all planets
- list all planets
- search in planet names
- search in planet descriptions
- transform planets to symlinks to the local universe (advanced)
- transform planets to directories from the local universe (advanced)
- clean the planets directories (remove the .git, .gitignore, .DS_Store and .idea files) recursively 





Setup
==========

Before you can use the uni command, you need to install it on your computer.

First, download the whole repo, and move it where you want.

From there you could already use the uni script.

The uni script is just a php script inside the repo, and you could call it directly like this:

```bash
php -f /myphp/universe-naive-importer/uni -- help
```

Or we can even call it directly, like this:


```bash
/myphp/universe-naive-importer/uni -- help
```

You might need the execute permissions on the uni script (chmod u+x uni) though.


But in both cases that's too long to type, so instead you should put it in your $PATH.
 
We can use a simple symlink for instance, like this:

```bash
ln -s /myphp/universe-naive-importer/uni /usr/local/bin/uni
```

Now, you can use the uni command anywhere on your machine:
 
```bash
uni import AdminTable
``` 

Enjoy ;)




Usage
=============

Once the setup is done, you can use the uni command.
Below is the synopsis (from the help of the command, just type uni to see the help below).

```txt
Usage
-------

The word item is defined like this:
- item: itemId | itemName
- itemId: repositoryId.itemName | repositoryAlias.itemName


# import/install
uni import {item}                       # import an item and its dependencies, skip already existing item(s)/dependencies
uni import -f {item}                    # import an item and its dependencies, replace already existing item(s)/dependencies
uni importall {repoId}?                 # import all items at once, skip already existing item(s)/dependencies
uni importall {repoId}? -f              # import all items at once, replace already existing item(s)/dependencies
uni install {item}                      # install an item and its dependencies, will import them if necessary, skip already existing item(s)/dependencies
uni install -f {item}                   # install an item and its dependencies, will import them if necessary, replace already existing item(s)/dependencies
uni installall {repoId}?                # install all items at once, will import them if necessary, skip already existing item(s)/dependencies
uni installall {repoId}? -f             # install all items at once, will import them if necessary, replace already existing item(s)/dependencies
uni uninstall {item}                    # call the uninstall method on the given item and dependencies


# list/search
uni list {repoAlias}?                   # list available items
uni listd {repoAlias}?                  # list available items with their description if any
uni listimported                        # list imported items
uni listinstalled                       # list installed items
uni search {term} {repoAlias}?          # search through available items names
uni searchd {term} {repoAlias}?         # search through available items names and/or description

# local (shared) repo
uni setlocalrepo {repoPath}             # set the local repository path
uni getlocalrepo                        # print the local repository path
uni todir                               # converts the top level items of the import directory to directories (based on the directories in local repo)
uni tolink                              # converts the top level items of the import directory to symlinks to the directories in local repo


# utilities
uni clean                               # removes the .git, .gitignore, .idea and .DS_Store files in your items directories, recursively
uni update                              # update the uni command with the latest definitions (it does a simple git pull, so is assumes you cloned the uni command in the first place)




For instance:
    uni import Connexion
    uni import km.Connexion
    uni import -f Connexion
    uni import -f km.Connexion
    uni importall
    uni importall -f
    uni install Connexion
    uni install km.Connexion
    uni install -f Connexion
    uni install -f km.Connexion
    uni installall
    uni installall -f
    uni uninstall Connexion
    uni uninstall km.Connexion
    uni list
    uni list km
    uni listd
    uni listd km
    uni listimported
    uni listinstalled
    uni search ling
    uni search ling km
    uni searchd kaminos
    uni searchd kaminos km
    uni setlocalrepo /path/to/local/repo
    uni getlocalrepo
    uni tolink
    uni todir
    uni clean
    uni update

```


So now, you can basically import any planets :)

If you want to download them all at once, you can either check the [universe snapshot project](https://github.com/karayabin/universe-snapshot),
or, just use the command:

```php
uni importall
```







