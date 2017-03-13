UniverseNaiveImporter
=========================
2017-03-11



A naive importer for the [universe](https://github.com/karayabin/universe-snapshot) framework.

Why naive? Because it doesn't care about version numbers, it always take the latest version.

(and also, I liked the UNI acronym, which is how I wanted to name the command).


It imports the planets dependencies though (otherwise it would be close to useless).



What can it do for you?
=================
Although I first intended to do only an importer tool, I added a few features.
So, now the uni command can do the following (see Usage section for more info):

- import a planet
- import all planets
- list all planets
- transform planets to symlinks to the local universe
- transform planets to directories from the local universe
- clean the planets directories (remove the .git, .gitignore, .DS_Store and .idea files)





Setup
==========

In this repository, you will find the "uni" script.
This is a php script.

- You need first to download it
- Then, you need to give it execution permissions (chmod u+x uni)
- The last step is to put it in your $PATH, so that it can be executed from anywhere (or use symbolic links if you prefer to do so)




Usage
=============

Once the setup is done, you can use the uni command.

First cd to your app directory.

Then call the uni command.

Below is the synopsis (from the help of the command)

```txt
Usage
-------
uni import {planetName} {universe}?                 # import one planet and dependencies, skip already existing planet(s)/dependencies
uni import -f {planetName} {universe}?              # import one planet and dependencies, replace already existing planet(s)/dependencies
uni import -f _all_ {universe}?                      # import all planets and dependencies, replace already existing planet(s)/dependencies
uni list {universe}?                                # list available planets
uni setlocaluniverse {localUniversePath}            # set the local universe path
uni getlocaluniverse                                # get the local universe path
uni tosymlink                                       # converts the planets of the application to symlinks (to the local universe)
uni todir                                           # converts the planets of the application to directories (copied from the local universe)
uni clean                                           # removes the .git, .gitignore, .idea and .DS_Store files at the top level of your application's planet directories

For instance: 
    uni import Bat
    uni import Bat ling
    uni import -f Bat
    uni import -f _all_
    uni import -f _all_ ling    
    uni list
    uni list ling
    uni setlocaluniverse /myphp/universe
    uni getlocaluniverse
    uni tosymlink
    uni todir
    uni clean
    
    
Options
-------------
-f: force overwriting of existing planets and dependencies. If not set, the Importer will skip existing planets/dependencies.    
    

```



By default, this will create the class-planets directory inside your app, which contains a bigbang.php script, plus the planets that you've imported.

From your app, now include the bigbang script and you can use the planets.




So now, you can basically import any planets :)

Here is the current list of planets (note: if you want to download them all at once, please check the [universe snapshot project](https://github.com/karayabin/universe-snapshot): 


- AdminTable
- ApplicationLog
- ArrayExport
- ArrayStore
- ArrayToString
- ArrayToTable
- AssetLoader
- AssetsList
- BabyDash
- BabyYaml
- Bat
- Bate
- Beauty
- BullSheet
- BumbleBee
- Colis
- CommandLineManiac
- ConventionGuy
- CopyDir
- Csv
- DirScanner
- DirTransformer
- Dreamer
- Escaper
- Explorer
- Ffmpeg
- FileCleaner
- FileCreator
- GetFileSize
- Here
- HtmlTemplate
- Icons
- IndentedLines
- Installer
- InstantLog
- JAjaxLoader
- JChronometer
- JCookie
- JDragSlider
- JFullScreen
- JGoodies
- JImageRotator
- JInfiniteSlider
- JItemSlider
- JQuery
- JVideoPlayer
- JqueryUrlWithDropZone
- Linker
- LogSlicer
- Lys
- Meredith
- MikeMagicTools
- MySimpleXmlElement
- MysqlTabular
- NotationFan
- Observer
- Ornella
- Pea
- PermsHiker
- PhpBeast
- PhpTemplate
- Privilege
- PublicException
- QuickForm
- QuickLog
- QuickPdo
- Quoter
- ReflectionRepresentation
- RssUtil
- ScreenDebug
- SecureImageUploader
- SelectChain
- SequenceMatcher
- SitemapBuilderBox
- SitemapSlicer
- StringFormatter
- SuspiciousException
- SvgGridGenerator
- TheAnarchist
- TheBar
- TheScientist
- ThumbnailTools
- Tim
- TimeFileUtil
- Tiphaine
- TokenFun
- Tokens
- TreeListHelper
- Umail
- UniqueNameGenerator
- Updf
- Uploader
- UploaderHandler
- UrlFriendlyListHelper
- VSwitch
- VariableToString
- VideoSubtitles
- WrappedString
- YouTubeUtils
- Zoli












