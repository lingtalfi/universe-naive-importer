UniverseNaiveImporter
=========================
2017-03-11 --> 2017-03-24




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
- clean the planets directories (remove the .git, .gitignore, .DS_Store and .idea files), recursively or not





Setup
==========

Before you can use the uni command, you need to install it on your computer.

To do so, follow the steps below.

In this repository, you will find the "uni" script.
This is a php script.

- download it (just the uni script, you don't need the whole repository, which by the way contains my working files)
- Then, you need to give it execution permissions (chmod u+x uni)
- The last step is to put the uni script in your $PATH, so that it can be executed from anywhere (or use symbolic links if you prefer to do so, for instance ln -s /usr/loca/bin/uni /path/to/my/uni)




Usage
=============

Once the setup is done, you can use the uni command.
Below is the synopsis (from the help of the command, just type uni to see the help below).

```txt
Usage
-------
uni import {fullPlanetName}                     # import one planet and dependencies, but skip already existing planet(s)/dependencies. You need to be in your application directory first
uni import -f {fullPlanetName}                  # remove the planet and its dependencies, then re-import them. You need to be in your application directory first
uni import _all_ {universe}?                    # import all planets and dependencies, but skip already existing planet(s)/dependencies. You need to be in your application directory first
uni import -f _all_ {universe}?                 # remove all planets and dependencies, then re-import them one by one. You need to be in your application directory first

uni importp {fullPlanetName}                    # like import, but in the import in the current directory (import in place) rather than in the class-planets directory
uni importp -f {fullPlanetName}                 # like import, but in the import in the current directory (import in place) rather than in the class-planets directory
uni importp _all_ {universe}?                   # like import, but in the import in the current directory (import in place) rather than in the class-planets directory
uni importp -f _all_ {universe}?                # like import, but in the import in the current directory (import in place) rather than in the class-planets directory

uni list {universe}?                            # list available planets
uni listd {universe}?                           # list available planets, with description

uni search {term} {universe}?                   # search a term in available planets
uni searchd {term} {universe}?                  # search a term in available planets and description

uni getlocaluniverse                            # get the local universe path
uni setlocaluniverse {localUniversePath}        # set the local universe path

uni tosymlink                                   # converts the planets of the application to symlinks (to the local universe)
uni todir                                       # converts the planets of the application to directories (copied from the local universe)

uni clean                                       # removes the .git, .gitignore, .idea and .DS_Store files at the top level of your application's planet directories, but does nothing if the planet is a symlink
uni cleanr                                      # removes the .git, .gitignore, .idea and .DS_Store files from the planet directories recursively, but does nothing if the planet is a symlink


For instance: 
    uni import Bat
    uni import ling.Bat
    uni import -f Bat
    uni import -f _all_
    uni import -f _all_ ling
    uni list
    uni list ling
    uni listd
    uni listd ling
    uni search ba
    uni search ba ling
    uni searchd ba 
    uni searchd ba ling
    uni setlocaluniverse /myphp/universe
    uni getlocaluniverse
    uni tosymlink
    uni todir
    uni clean
    uni cleanr
    
    
Options
-------------
-f: force overwriting of existing planets and dependencies.
    
    
Nomenclature
--------------
- fullPlanetName: (<universe> <.>) <planetName>

```


So now, you can basically import any planets :)

If you want to download them all at once, you can either check the [universe snapshot project](https://github.com/karayabin/universe-snapshot),
or, just use the command:

```php
uni import _all_ -f
```







