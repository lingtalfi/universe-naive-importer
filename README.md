UniverseNaiveImporter
=========================
2017-03-11 --> 2019-03-12


A naive importer for the [universe](https://github.com/karayabin/universe-snapshot) framework.


This is a console tool to manage the dependencies of the [universe framework](https://github.com/karayabin/universe-snapshot).

This is a wrapper for the [Uni2 planet](https://github.com/lingtalfi/Uni2). Please refer to the Uni2 planet
for more documentation.



Summary
===========
- [Installation](#installation)
    - [Installing uni on Mac or Linux](#installing-uni-on-mac-or-linux)
    - [Installing uni on Windows or manually](#installing-uni-on-windows)



Installation
==============


Requirements
------------

Before you start, make sure your machine meets the following requirements:

- php 7 or higher is available on your machine
- the git command is available on your machine






Installing uni on Mac or Linux
------------

Open a terminal and copy paste that line:


```bash
temp_file=$(mktemp); curl -fsSL https://raw.githubusercontent.com/lingtalfi/universe-naive-importer/master/installer.php > $temp_file; sudo php -f $temp_file;
```


This was tested successfully on macOS Sierra 10.12.6, and ubuntu xenial 16.04.

If the one-liner doesn't work for your machine, please use the manual install described in the next section.

This one-liner should take less than 10 seconds, if it takes more than that, just abort and retry (it happens sometime, I believe it's a network problem...).

If it's stuck, the last line you'll see is:

- "Downloading uni-tool from github.com..."





Installing uni on Windows or manually
------------

Unfortunately, there is no one-liner install for Windows users.

So the following procedure should be performed manually.

Note: you just need to do this once, after which you can use the [upgrade](https://github.com/lingtalfi/Uni2#help) command
to upgrade.



- Define a directory to contain the uni-tool directory. I will choose **/usr/local/etc/uni**
- Define a path to contain the uni-tool program. I will choose **/usr/local/bin/uni**
- Cd to a system temporary directory. Mine will be /tmp
- Download this archive: https://github.com/lingtalfi/universe-naive-importer/archive/master.zip
- Extract the archive, you should have a **universe-naive-importer-master** directory
- Move the **/tmp/universe-naive-importer-master/uni** directory to your chosen uni-tool directory (**/usr/local/etc/uni** in my case)
- Optionally chmod the **/usr/local/etc/uni** so that user has the necessary permissions on it
- Remove any symlink **/usr/local/bin/uni** which might exist from previous installation
- Create a symlink, the link being the chosen path to the uni-tool program (**/usr/local/bin/uni** in my case), and the target being **/usr/local/etc/uni/uni.php**
- Type **uni help** to check that everything worked



Now you can check the [Uni2 documentation](https://github.com/lingtalfi/Uni2) for more information.









History Log
=================

**&nbsp;**

- 2.0.536 -- 2019-09-11

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.5.0 --> 1.5.1


- 2.0.535 -- 2019-09-11

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.4.0 --> 1.5.0


- 2.0.534 -- 2019-09-11

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.9.0 --> 1.9.1


- 2.0.533 -- 2019-09-11

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.1.1 --> 1.1.2


- 2.0.532 -- 2019-09-11

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.1.0 --> 1.1.1


- 2.0.531 -- 2019-09-11

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.0.0 --> 1.1.0


- 2.0.530 -- 2019-09-11

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller)  --> 1.0.0


- 2.0.529 -- 2019-09-11

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.8.1 --> 1.9.0


- 2.0.528 -- 2019-09-11

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer) 1.2.1 --> 1.2.2


- 2.0.527 -- 2019-09-10

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.5.0 --> 1.6.0


- 2.0.526 -- 2019-09-10

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.4.1 --> 1.4.2


- 2.0.525 -- 2019-09-10

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.0.0 --> 1.1.0


- 2.0.524 -- 2019-09-10

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer) 1.2.0 --> 1.2.1


- 2.0.523 -- 2019-09-10

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer) 1.1.2 --> 1.2.0


- 2.0.522 -- 2019-09-10

    - [Ling/ParentChild](https://github.com/lingtalfi/ParentChild)  --> 1.0.0


- 2.0.521 -- 2019-09-09

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.2.0 --> 1.2.1


- 2.0.520 -- 2019-09-09

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.1.1 --> 1.2.0


- 2.0.519 -- 2019-09-06

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.192 --> 1.193


- 2.0.518 -- 2019-09-06

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.3.0 --> 1.4.0


- 2.0.517 -- 2019-09-06

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.2.0 --> 1.3.0


- 2.0.516 -- 2019-09-05

    - [Ling/AjaxCommunicationProtocol](https://github.com/lingtalfi/AjaxCommunicationProtocol)  --> 1.0.0


- 2.0.515 -- 2019-09-05

    - [Ling/Csv](https://github.com/lingtalfi/Csv) 1.2.0 --> 1.2.1


- 2.0.514 -- 2019-09-05

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.3.1 --> 1.4.0


- 2.0.513 -- 2019-09-05

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.6.0 --> 1.6.1


- 2.0.512 -- 2019-09-05

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.5.0 --> 1.6.0


- 2.0.511 -- 2019-09-05

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.1.0 --> 1.2.0


- 2.0.510 -- 2019-09-05

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.4.1 --> 1.5.0


- 2.0.509 -- 2019-09-05

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable)  --> 1.1.0


- 2.0.508 -- 2019-09-05

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.4.0 --> 1.4.1


- 2.0.507 -- 2019-09-05

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.3.0 --> 1.4.0


- 2.0.506 -- 2019-09-05

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.2.0 --> 1.3.1


- 2.0.505 -- 2019-09-05

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.2.0 --> 1.3.0


- 2.0.504 -- 2019-09-05

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.4.0 --> 1.5.0


- 2.0.503 -- 2019-09-04

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.13.1 --> 1.13.2


- 2.0.502 -- 2019-09-04

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.1.1 --> 1.2.0


- 2.0.501 -- 2019-09-04

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.1.0 --> 1.2.0


- 2.0.500 -- 2019-09-04

    - [Ling/JRicAdminTableHelper](https://github.com/lingtalfi/JRicAdminTableHelper) 1.0.1 --> 1.0.2


- 2.0.499 -- 2019-09-04

    - [Ling/JRicAdminTableHelper](https://github.com/lingtalfi/JRicAdminTableHelper) 1.0.0 --> 1.0.1


- 2.0.498 -- 2019-09-04

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 2.0.0 --> 2.0.1


- 2.0.497 -- 2019-09-04

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.1.0 --> 1.1.1


- 2.0.496 -- 2019-09-04

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.0.1 --> 1.1.0


- 2.0.495 -- 2019-09-04

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.0.0 --> 1.1.0


- 2.0.494 -- 2019-09-03

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.13.1 --> 0.13.2


- 2.0.493 -- 2019-09-03

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.0.0 --> 1.0.1


- 2.0.492 -- 2019-09-03

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist)  --> 1.0.0


- 2.0.491 -- 2019-09-03

    - [Ling/JRicAdminTableHelper](https://github.com/lingtalfi/JRicAdminTableHelper)  --> 1.0.0


- 2.0.490 -- 2019-09-03

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper)  --> 1.0.0


- 2.0.489 -- 2019-08-30

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.2.1 --> 1.3.0


- 2.0.488 -- 2019-08-30

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.2.0 --> 1.2.1


- 2.0.487 -- 2019-08-30

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.1.0 --> 1.2.0


- 2.0.486 -- 2019-08-30

    - [Ling/UniversalLogger](https://github.com/lingtalfi/UniversalLogger) 1.0.0 --> 1.1.0


- 2.0.485 -- 2019-08-30

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.0.0 --> 1.1.0


- 2.0.484 -- 2019-08-30

    - [Ling/Light_SpinKitHelper](https://github.com/lingtalfi/Light_SpinKitHelper) 1.0.0 --> 1.0.1


- 2.0.483 -- 2019-08-30

    - [Ling/Light_SpinKitHelper](https://github.com/lingtalfi/Light_SpinKitHelper)  --> 1.0.0


- 2.0.482 -- 2019-08-30

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.1 --> 1.9.2


- 2.0.481 -- 2019-08-30

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.12.0 --> 1.12.1


- 2.0.480 -- 2019-08-30

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.29.0 --> 1.30.0


- 2.0.479 -- 2019-08-30

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 1.1.3 --> 1.2.0


- 2.0.478 -- 2019-08-30

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 1.6.1 --> 2.0.0


- 2.0.477 -- 2019-08-30

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.11.0 --> 1.12.0


- 2.0.476 -- 2019-08-30

    - [Ling/Light_HtmlPageCopilot](https://github.com/lingtalfi/Light_HtmlPageCopilot)  --> 1.0.0


- 2.0.475 -- 2019-08-30

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.11.0 --> 1.11.1


- 2.0.474 -- 2019-08-30

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.10.0 --> 1.11.0


- 2.0.473 -- 2019-08-29

    - [Ling/Kit_PrototypeWidget](https://github.com/lingtalfi/Kit_PrototypeWidget) 1.0.1 --> 1.1.0


- 2.0.472 -- 2019-08-27

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.191 --> 1.192


- 2.0.471 -- 2019-08-27

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.3.5 --> 1.4.0


- 2.0.470 -- 2019-08-21

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.13.0 --> 0.13.1


- 2.0.469 -- 2019-08-21

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.12.0 --> 0.13.0


- 2.0.468 -- 2019-08-21

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.1.1 --> 1.2.0


- 2.0.467 -- 2019-08-21

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute)  --> 1.0.0


- 2.0.466 -- 2019-08-14

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 1.1.2 --> 1.1.3


- 2.0.465 -- 2019-08-14

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 1.1.1 --> 1.1.2


- 2.0.464 -- 2019-08-14

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.11.4 --> 1.11.5


- 2.0.463 -- 2019-08-14

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 1.0.1 --> 1.1.1


- 2.0.462 -- 2019-08-14

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.11.3 --> 1.11.4


- 2.0.461 -- 2019-08-14

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.10.0 --> 1.11.0


- 2.0.460 -- 2019-08-14

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.11.0 --> 0.12.0


- 2.0.459 -- 2019-08-14

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.8.0 --> 1.8.1


- 2.0.458 -- 2019-08-14

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.6.0 --> 1.8.0


- 2.0.457 -- 2019-08-14

    - [Ling/Light_Bullsheet](https://github.com/lingtalfi/Light_Bullsheet) 1.0.1 --> 1.0.2


- 2.0.456 -- 2019-08-14

    - [Ling/Light_Bullsheet](https://github.com/lingtalfi/Light_Bullsheet) 1.0.0 --> 1.0.1


- 2.0.455 -- 2019-08-14

    - [Ling/Light_Bullsheet](https://github.com/lingtalfi/Light_Bullsheet)  --> 1.0.0


- 2.0.454 -- 2019-08-14

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.19 --> 1.191


- 2.0.453 -- 2019-08-14

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.189 --> 1.19


- 2.0.452 -- 2019-08-14

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.188 --> 1.189


- 2.0.451 -- 2019-08-14

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.187 --> 1.188
    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.5.0 --> 1.6.0


- 2.0.450 -- 2019-08-14

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.1.0 --> 1.2.0


- 2.0.449 -- 2019-08-14

    - [Ling/TinyBullsheeter](https://github.com/lingtalfi/TinyBullsheeter)  --> 1.0.0


- 2.0.448 -- 2019-08-14

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.186 --> 1.187


- 2.0.447 -- 2019-08-14

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.0.2 --> 1.1.0


- 2.0.446 -- 2019-08-14

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.1.0 --> 1.2.0


- 2.0.445 -- 2019-08-14

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.0.0 --> 1.1.0


- 2.0.444 -- 2019-08-13

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.4.1 --> 1.5.0


- 2.0.443 -- 2019-08-13

    - [Ling/Light_Flasher](https://github.com/lingtalfi/Light_Flasher) 1.1.0 --> 1.2.0


- 2.0.442 -- 2019-08-13

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.13.0 --> 1.13.1


- 2.0.441 -- 2019-08-13

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.9.0 --> 1.10.0


- 2.0.440 -- 2019-08-13

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.12.0 --> 1.13.0


- 2.0.439 -- 2019-08-13

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.4.0 --> 1.4.1


- 2.0.438 -- 2019-08-13

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.10.0 --> 0.11.0


- 2.0.437 -- 2019-08-12

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery)  --> 1.0.0


- 2.0.436 -- 2019-08-12

    - [Ling/SqlQuery](https://github.com/lingtalfi/SqlQuery) 1.10.0 --> 1.10.1


- 2.0.435 -- 2019-08-12

    - [Ling/SqlQuery](https://github.com/lingtalfi/SqlQuery) 1.9.1 --> 1.10.0


- 2.0.434 -- 2019-08-09

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.185 --> 1.186


- 2.0.433 -- 2019-08-09

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.184 --> 1.185


- 2.0.432 -- 2019-08-09

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.3.0 --> 1.4.0


- 2.0.431 -- 2019-08-09

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.2.0 --> 1.3.0


- 2.0.430 -- 2019-08-09

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.8.2 --> 1.9.0


- 2.0.429 -- 2019-08-09

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.9.0 --> 0.10.0


- 2.0.428 -- 2019-08-09

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.8.1 --> 1.8.2


- 2.0.427 -- 2019-08-09

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.183 --> 1.184


- 2.0.426 -- 2019-08-09

    - [Ling/WiseTool](https://github.com/lingtalfi/WiseTool) 1.1.1 --> 1.2.0


- 2.0.425 -- 2019-08-09

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.1.0 --> 1.2.0


- 2.0.424 -- 2019-08-09

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.0.0 --> 1.1.0


- 2.0.423 -- 2019-08-09

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu)  --> 1.0.0


- 2.0.422 -- 2019-08-09

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.10.1 --> 1.10.2


- 2.0.421 -- 2019-08-08

    - [Ling/DotMenu](https://github.com/lingtalfi/DotMenu) 1.0.0 --> 1.0.1


- 2.0.420 -- 2019-08-08

    - [Ling/DotMenu](https://github.com/lingtalfi/DotMenu)  --> 1.0.0


- 2.0.419 -- 2019-08-08

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.182 --> 1.183


- 2.0.418 -- 2019-08-07

    - [Ling/WiseTool](https://github.com/lingtalfi/WiseTool) 1.1.0 --> 1.1.1


- 2.0.417 -- 2019-08-07

    - [Ling/WiseTool](https://github.com/lingtalfi/WiseTool) 1.0.0 --> 1.1.0


- 2.0.416 -- 2019-08-07

    - [Ling/Light_Flasher](https://github.com/lingtalfi/Light_Flasher) 1.0.1 --> 1.1.0


- 2.0.415 -- 2019-08-07

    - [Ling/WiseTool](https://github.com/lingtalfi/WiseTool)  --> 1.0.0


- 2.0.414 -- 2019-08-07

    - [Ling/Light_Flasher](https://github.com/lingtalfi/Light_Flasher) 1.0.0 --> 1.0.1


- 2.0.413 -- 2019-08-07

    - [Ling/Light_Flasher](https://github.com/lingtalfi/Light_Flasher)  --> 1.0.0


- 2.0.412 -- 2019-08-07

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.181 --> 1.182


- 2.0.411 -- 2019-08-07

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.1.0 --> 1.1.1


- 2.0.410 -- 2019-08-07

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.0.0 --> 1.1.0


- 2.0.409 -- 2019-08-07

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.3.0 --> 1.4.0


- 2.0.408 -- 2019-08-07

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.2.0 --> 1.3.0


- 2.0.407 -- 2019-08-07

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.3.0 --> 1.4.0


- 2.0.406 -- 2019-08-07

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.10.0 --> 1.10.1


- 2.0.405 -- 2019-08-07

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.18 --> 1.181


- 2.0.404 -- 2019-08-07

    - [Ling/Light_PasswordProtector](https://github.com/lingtalfi/Light_PasswordProtector)  --> 1.0.0


- 2.0.403 -- 2019-08-06

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.1.2 --> 1.2.0


- 2.0.402 -- 2019-08-06

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.2.0 --> 1.3.0


- 2.0.401 -- 2019-08-06

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.0.0 --> 1.0.1


- 2.0.400 -- 2019-08-06

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager)  --> 1.0.0


- 2.0.399 -- 2019-08-06

    - universe minor increment


- 2.0.398 -- 2019-08-06

    - universe minor increment


- 2.0.397 -- 2019-08-05

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.1.0 --> 1.1.1


- 2.0.396 -- 2019-08-05

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.10.0 --> 1.11.0


- 2.0.395 -- 2019-08-05

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.0.1 --> 1.1.0


- 2.0.394 -- 2019-08-05

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.9.0 --> 1.10.0


- 2.0.393 -- 2019-08-02

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.8.4 --> 1.9.0


- 2.0.392 -- 2019-08-02

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.179 --> 1.18


- 2.0.391 -- 2019-08-02

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.178 --> 1.179


- 2.0.390 -- 2019-08-02

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.177 --> 1.178


- 2.0.389 -- 2019-08-02

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.7.3 --> 0.9.0


- 2.0.388 -- 2019-08-01

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger)  --> 1.0.0


- 2.0.387 -- 2019-07-31

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.8.3 --> 1.8.4


- 2.0.386 -- 2019-07-30

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.11.1 --> 1.12.0


- 2.0.385 -- 2019-07-30

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.1.0 --> 1.2.0


- 2.0.384 -- 2019-07-30

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.0.1 --> 1.1.0


- 2.0.383 -- 2019-07-29

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.8.2 --> 1.8.3


- 2.0.382 -- 2019-07-29

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.9.0 --> 1.10.0


- 2.0.381 -- 2019-07-29

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.7.2 --> 1.8.1


- 2.0.380 -- 2019-07-26

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.0.0 --> 1.0.1


- 2.0.379 -- 2019-07-26

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.2.1 --> 1.2.2


- 2.0.378 -- 2019-07-26

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.8.1 --> 1.8.2


- 2.0.377 -- 2019-07-26

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer)  --> 1.0.0


- 2.0.376 -- 2019-07-26

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.8.0 --> 1.8.1


- 2.0.375 -- 2019-07-26

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.2.0 --> 1.2.1


- 2.0.374 -- 2019-07-26

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.7.0 --> 1.8.0


- 2.0.373 -- 2019-07-26

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.6.9 --> 1.7.0


- 2.0.372 -- 2019-07-26

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.1.0 --> 1.2.0


- 2.0.371 -- 2019-07-26

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.0.3 --> 1.1.0


- 2.0.370 -- 2019-07-26

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.7.1 --> 1.7.2


- 2.0.369 -- 2019-07-26

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.7.0 --> 1.7.1


- 2.0.368 -- 2019-07-25

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.11.0 --> 1.11.1


- 2.0.367 -- 2019-07-25

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.10.0 --> 1.11.0


- 2.0.366 -- 2019-07-25

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.6.4 --> 1.7.0


- 2.0.365 -- 2019-07-25

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.0.2 --> 1.0.3


- 2.0.364 -- 2019-07-25

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.9.1 --> 1.10.0


- 2.0.363 -- 2019-07-25

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.8.0 --> 1.9.0


- 2.0.362 -- 2019-07-25

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.9.0 --> 1.9.1


- 2.0.361 -- 2019-07-25

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.8.1 --> 1.9.0


- 2.0.360 -- 2019-07-24

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.8.0 --> 1.8.1


- 2.0.359 -- 2019-07-24

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.28.1 --> 1.29.0


- 2.0.358 -- 2019-07-24

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.7.1 --> 1.8.0


- 2.0.357 -- 2019-07-23

    - [Ling/ArrayVariableResolver](https://github.com/lingtalfi/ArrayVariableResolver) 1.1.1 --> 1.1.2


- 2.0.356 -- 2019-07-23

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.1.0 --> 1.2.0


- 2.0.355 -- 2019-07-23

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.0.1 --> 1.1.0


- 2.0.354 -- 2019-07-23

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.0.0 --> 1.1.0


- 2.0.353 -- 2019-07-23

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.9.0 --> 1.10.0


- 2.0.352 -- 2019-07-23

    - [Ling/MysqlCreateTableUtil](https://github.com/lingtalfi/MysqlCreateTableUtil) 1.0.1 --> 1.0.2


- 2.0.351 -- 2019-07-23

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.0.1 --> 1.0.2


- 2.0.350 -- 2019-07-23

    - [Ling/MysqlCreateTableUtil](https://github.com/lingtalfi/MysqlCreateTableUtil) 1.0.0 --> 1.0.1


- 2.0.349 -- 2019-07-23

    - [Ling/MysqlCreateTableUtil](https://github.com/lingtalfi/MysqlCreateTableUtil)  --> 1.0.0


- 2.0.348 -- 2019-07-22

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.1.0 --> 1.1.1


- 2.0.347 -- 2019-07-22

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.0.3 --> 1.1.0


- 2.0.346 -- 2019-07-22

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.0.2 --> 1.0.3


- 2.0.345 -- 2019-07-22

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.0.0 --> 1.0.1


- 2.0.344 -- 2019-07-22

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.0.1 --> 1.0.2


- 2.0.343 -- 2019-07-22

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.8.2 --> 1.9.0


- 2.0.342 -- 2019-07-22

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database)  --> 1.0.0


- 2.0.341 -- 2019-07-19

    - [Ling/QuickPdo](https://github.com/lingtalfi/QuickPdo) 2.41.0 --> 2.41.1


- 2.0.340 -- 2019-07-19

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.0.0 --> 1.0.1


- 2.0.339 -- 2019-07-19

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.2.0 --> 1.2.1


- 2.0.338 -- 2019-07-19

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.1.1 --> 1.1.2


- 2.0.337 -- 2019-07-19

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.0.0 --> 1.0.1


- 2.0.336 -- 2019-07-19

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase)  --> 1.0.0


- 2.0.335 -- 2019-07-18

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.6.3 --> 1.6.4


- 2.0.334 -- 2019-07-18

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.7.4 --> 1.8.0


- 2.0.333 -- 2019-07-18

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.1.1 --> 1.2.0


- 2.0.332 -- 2019-07-18

    - [Ling/Light_Firewall](https://github.com/lingtalfi/Light_Firewall)  --> 1.0.0


- 2.0.331 -- 2019-07-18

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.3.2 --> 1.4.0


- 2.0.330 -- 2019-07-18

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.7.2 --> 0.7.3


- 2.0.329 -- 2019-07-18

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.7.1 --> 0.7.2


- 2.0.328 -- 2019-07-18

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.3.1 --> 1.3.2


- 2.0.327 -- 2019-07-18

    - [Ling/Light_PrerouteHub](https://github.com/lingtalfi/Light_PrerouteHub)  --> 1.0.0


- 2.0.326 -- 2019-07-18

    - [Ling/WebBox](https://github.com/lingtalfi/WebBox) 1.0.0 --> 1.0.1


- 2.0.325 -- 2019-07-18

    - [Ling/ZephyrTemplateEngine](https://github.com/lingtalfi/ZephyrTemplateEngine) 1.1.0 --> 1.1.2


- 2.0.324 -- 2019-07-18

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.16.3 --> 1.16.4


- 2.0.323 -- 2019-07-18

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.0 --> 1.9.1


- 2.0.322 -- 2019-07-18

    - [Ling/SimpleCurl](https://github.com/lingtalfi/SimpleCurl) 1.0.2 --> 1.0.3


- 2.0.321 -- 2019-07-18

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.4.4 --> 1.4.5


- 2.0.320 -- 2019-07-18

    - [Ling/ProjectInfo](https://github.com/lingtalfi/ProjectInfo) 1.0.0 --> 1.0.1


- 2.0.319 -- 2019-07-18

    - [Ling/PlanetSitemap](https://github.com/lingtalfi/PlanetSitemap) 1.0.1 --> 1.0.2


- 2.0.318 -- 2019-07-18

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.11.2 --> 1.11.3


- 2.0.317 -- 2019-07-18

    - [Ling/Light_ZephyrTemplate](https://github.com/lingtalfi/Light_ZephyrTemplate) 1.0.0 --> 1.1.1


- 2.0.316 -- 2019-07-18

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.1.0 --> 1.1.1


- 2.0.315 -- 2019-07-18

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.1.0 --> 1.1.1


- 2.0.314 -- 2019-07-18

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.3.0 --> 1.3.1


- 2.0.313 -- 2019-07-18

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.4.0 --> 1.4.1


- 2.0.312 -- 2019-07-18

    - [Ling/Light_Kit_WebsiteBuilder](https://github.com/lingtalfi/Light_Kit_WebsiteBuilder) 1.0.0 --> 1.0.1


- 2.0.311 -- 2019-07-18

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 1.0.0 --> 1.0.1


- 2.0.310 -- 2019-07-18

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.7.0 --> 1.7.1


- 2.0.309 -- 2019-07-18

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.6.2 --> 1.6.3


- 2.0.308 -- 2019-07-18

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer) 1.1.1 --> 1.1.2


- 2.0.307 -- 2019-07-18

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.7.0 --> 0.7.1


- 2.0.306 -- 2019-07-18

    - [Ling/KrankenStein](https://github.com/lingtalfi/KrankenStein) 1.0.0 --> 1.0.1


- 2.0.305 -- 2019-07-18

    - [Ling/Kit_PrototypeWidget](https://github.com/lingtalfi/Kit_PrototypeWidget) 1.0.0 --> 1.0.1


- 2.0.304 -- 2019-07-18

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.28.0 --> 1.28.1


- 2.0.303 -- 2019-07-18

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.7.3 --> 1.7.4


- 2.0.302 -- 2019-07-18

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 1.6.0 --> 1.6.1


- 2.0.301 -- 2019-07-18

    - [Ling/HashMap](https://github.com/lingtalfi/HashMap) 1.0.0 --> 1.0.1


- 2.0.300 -- 2019-07-18

    - [Ling/EasyConsoleMenu](https://github.com/lingtalfi/EasyConsoleMenu) 1.0.0 --> 1.0.1


- 2.0.299 -- 2019-07-18

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.8.1 --> 1.8.2


- 2.0.298 -- 2019-07-18

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.11.1 --> 1.11.2


- 2.0.297 -- 2019-07-18

    - [Ling/Deploy](https://github.com/lingtalfi/Deploy) 1.1.1 --> 1.1.2


- 2.0.296 -- 2019-07-18

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.0.0 --> 1.0.1


- 2.0.295 -- 2019-07-18

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.0 --> 1.10.1


- 2.0.294 -- 2019-07-18

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.0.1 --> 1.0.2


- 2.0.293 -- 2019-07-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.6.8 --> 1.6.9


- 2.0.292 -- 2019-07-18

    - [Ling/ArrayVariableResolver](https://github.com/lingtalfi/ArrayVariableResolver) 1.1.0 --> 1.1.1


- 2.0.291 -- 2019-07-18

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.11.1 --> 1.11.2


- 2.0.290 -- 2019-07-18

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.8.0 --> 1.8.1


- 2.0.289 -- 2019-07-18

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.7.0 --> 1.8.0


- 2.0.288 -- 2019-07-18

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.11.0 --> 1.11.1


- 2.0.287 -- 2019-07-17

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.3.0 --> 1.4.0


- 2.0.286 -- 2019-07-17

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.2.0 --> 1.3.0


- 2.0.285 -- 2019-07-17

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.6.0 --> 0.7.0


- 2.0.284 -- 2019-07-17

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer) 1.1.0 --> 1.1.1


- 2.0.283 -- 2019-07-17

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.4.3 --> 1.4.4


- 2.0.282 -- 2019-07-17

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.176 --> 1.177


- 2.0.281 -- 2019-07-17

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.5.0 --> 0.6.0


- 2.0.280 -- 2019-07-17

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.1.0 --> 1.2.0


- 2.0.279 -- 2019-07-17

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.4.0 --> 0.5.0


- 2.0.278 -- 2019-07-17

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.3.0 --> 0.4.0


- 2.0.277 -- 2019-07-16

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.0.0 --> 1.1.0


- 2.0.276 -- 2019-07-16

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.2.0 --> 1.3.0


- 2.0.275 -- 2019-07-16

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.2.0 --> 0.3.0


- 2.0.274 -- 2019-07-16

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer) 1.0.0 --> 1.1.0
    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.6.0 --> 1.7.0


- 2.0.273 -- 2019-07-16

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.5.0 --> 1.6.0


- 2.0.272 -- 2019-07-16

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.4.0 --> 1.5.0


- 2.0.271 -- 2019-07-15

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.3.0 --> 1.4.0


- 2.0.270 -- 2019-07-15

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.1.0 --> 1.3.0


- 2.0.269 -- 2019-07-15

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.6.1 --> 1.6.2


- 2.0.268 -- 2019-07-15

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.0.0 --> 1.1.0


- 2.0.267 -- 2019-07-12

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.0.0 --> 1.1.0


- 2.0.266 -- 2019-07-12

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.0.0 --> 1.1.0


- 2.0.265 -- 2019-07-12

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.6.3 --> 1.7.0


- 2.0.264 -- 2019-07-12

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.175 --> 1.176


- 2.0.263 -- 2019-07-11

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.6.0 --> 1.6.1


- 2.0.262 -- 2019-07-11

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.174 --> 1.175


- 2.0.261 -- 2019-07-11

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.27.0 --> 1.28.0


- 2.0.260 -- 2019-07-11

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.7.2 --> 1.7.3


- 2.0.259 -- 2019-07-11

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.5.2 --> 1.6.0


- 2.0.258 -- 2019-07-11

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.1.0 --> 0.2.0


- 2.0.257 -- 2019-07-11

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.6.2 --> 1.6.3


- 2.0.256 -- 2019-07-04

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.26.3 --> 1.27.0


- 2.0.255 -- 2019-07-04

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.5.1 --> 1.5.2


- 2.0.254 -- 2019-07-04

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.5.0 --> 1.5.1


- 2.0.253 -- 2019-07-04

    - [Ling/BeeFramework](https://github.com/lingtalfi/BeeFramework) 1.0.2 --> 1.0.3
    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.26.2 --> 1.26.3


- 2.0.252 -- 2019-07-04

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.4.0 --> 1.5.0


- 2.0.251 -- 2019-07-04

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.173 --> 1.174
    - [Ling/BeeFramework](https://github.com/lingtalfi/BeeFramework) 1.0.1 --> 1.0.2


- 2.0.250 -- 2019-07-03

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.26.1 --> 1.26.2


- 2.0.249 -- 2019-07-03

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.26.0 --> 1.26.1


- 2.0.248 -- 2019-07-03

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.172 --> 1.173


- 2.0.247 -- 2019-05-24

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.171 --> 1.172


- 2.0.246 -- 2019-05-17

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 0.6.4 --> 1.0.0


- 2.0.245 -- 2019-05-17

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.40.0 --> 1.0.0


- 2.0.244 -- 2019-05-17

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.39.0 --> 0.40.0


- 2.0.243 -- 2019-05-17

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.38.0 --> 0.39.0


- 2.0.242 -- 2019-05-17

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.25.0 --> 1.26.0


- 2.0.241 -- 2019-05-17

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.37.0 --> 0.38.0


- 2.0.240 -- 2019-05-17

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.36.0 --> 0.37.0


- 2.0.239 -- 2019-05-17

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.35.0 --> 0.36.0


- 2.0.238 -- 2019-05-17

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.7.1 --> 1.7.2


- 2.0.237 -- 2019-05-17

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.24.0 --> 1.25.0


- 2.0.236 -- 2019-05-17

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.7.0 --> 1.7.1


- 2.0.235 -- 2019-05-17

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.6.0 --> 1.7.0


- 2.0.234 -- 2019-05-17

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.5.1 --> 1.6.0


- 2.0.233 -- 2019-05-17

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.33.0 --> 0.35.0


- 2.0.232 -- 2019-05-16

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.32.0 --> 0.33.0


- 2.0.231 -- 2019-05-16

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.31.0 --> 0.32.0


- 2.0.230 -- 2019-05-16

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.30.0 --> 0.31.0


- 2.0.229 -- 2019-05-16

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.29.0 --> 0.30.0


- 2.0.228 -- 2019-05-16

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.28.0 --> 0.29.0


- 2.0.227 -- 2019-05-16

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.27.1 --> 0.28.0


- 2.0.226 -- 2019-05-16

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.27.0 --> 0.27.1


- 2.0.225 -- 2019-05-16

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.26.0 --> 0.27.0


- 2.0.224 -- 2019-05-16

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.23.0 --> 1.24.0


- 2.0.223 -- 2019-05-15

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.25.0 --> 0.26.0


- 2.0.222 -- 2019-05-15

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.3.0 --> 1.4.0


- 2.0.221 -- 2019-05-15

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.5.0 --> 1.5.1


- 2.0.220 -- 2019-05-15

    - [Ling/ArrayVariableResolver](https://github.com/lingtalfi/ArrayVariableResolver) 1.0.1 --> 1.1.0


- 2.0.219 -- 2019-05-15

    - [Ling/ArrayVariableResolver](https://github.com/lingtalfi/ArrayVariableResolver) 1.0.0 --> 1.0.1


- 2.0.218 -- 2019-05-15

    - [Ling/ArrayVariableResolver](https://github.com/lingtalfi/ArrayVariableResolver)  --> 1.0.0


- 2.0.217 -- 2019-05-15

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.4.2 --> 1.4.3


- 2.0.216 -- 2019-05-15

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.24.0 --> 0.25.0


- 2.0.215 -- 2019-05-15

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.23.0 --> 0.24.0


- 2.0.214 -- 2019-05-14

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.21.0 --> 0.23.0


- 2.0.213 -- 2019-05-14

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.20.0 --> 0.21.0


- 2.0.212 -- 2019-05-14

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.19.0 --> 0.20.0


- 2.0.211 -- 2019-05-14

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.18.0 --> 0.19.0


- 2.0.210 -- 2019-05-14

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.17.0 --> 0.18.0


- 2.0.209 -- 2019-05-14

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 1.5.0 --> 1.6.0


- 2.0.208 -- 2019-05-14

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.16.0 --> 0.17.0


- 2.0.207 -- 2019-05-14

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.15.0 --> 0.16.0


- 2.0.206 -- 2019-05-13

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.14.0 --> 0.15.0


- 2.0.205 -- 2019-05-13

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.13.2 --> 0.14.0


- 2.0.204 -- 2019-05-13

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.22.0 --> 1.23.0


- 2.0.203 -- 2019-05-13

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.13.1 --> 0.13.2


- 2.0.202 -- 2019-05-13

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.21.0 --> 1.22.0


- 2.0.201 -- 2019-05-13

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.13.0 --> 0.13.1


- 2.0.200 -- 2019-05-13

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.20.1 --> 1.21.0


- 2.0.199 -- 2019-05-13

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.11.1 --> 0.13.0


- 2.0.198 -- 2019-05-13

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.18.1 --> 1.20.1


- 2.0.197 -- 2019-05-13

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.11.0 --> 0.11.1


- 2.0.196 -- 2019-05-13

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.10.0 --> 0.11.0


- 2.0.195 -- 2019-05-10

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager)  --> 1.0.0


- 2.0.194 -- 2019-05-10

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User)  --> 1.0.0


- 2.0.193 -- 2019-05-10

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.9.1 --> 0.10.0


- 2.0.192 -- 2019-05-10

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.9.0 --> 0.9.1


- 2.0.191 -- 2019-05-10

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.8.0 --> 0.9.0


- 2.0.190 -- 2019-05-10

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.18.0 --> 1.18.1


- 2.0.189 -- 2019-05-10

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.3.4 --> 1.3.5


- 2.0.188 -- 2019-05-10

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.3.3 --> 1.3.4
    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.7.0 --> 0.8.0


- 2.0.187 -- 2019-05-06

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.17.0 --> 1.18.0


- 2.0.186 -- 2019-05-06

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.16.0 --> 1.17.0


- 2.0.185 -- 2019-05-03

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.6.0 --> 0.7.0


- 2.0.184 -- 2019-05-03

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.5.0 --> 0.6.0


- 2.0.183 -- 2019-05-03

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 0.6.3 --> 0.6.4


- 2.0.182 -- 2019-05-03

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 1.4.0 --> 1.5.0


- 2.0.181 -- 2019-05-03

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.15.0 --> 1.16.0


- 2.0.180 -- 2019-05-03

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 0.6.2 --> 0.6.3


- 2.0.179 -- 2019-05-03

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 0.6.1 --> 0.6.2


- 2.0.178 -- 2019-05-03

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 0.6.0 --> 0.6.1


- 2.0.177 -- 2019-05-03

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 0.5.0 --> 0.6.0


- 2.0.176 -- 2019-05-03

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.10.0 --> 1.11.0


- 2.0.175 -- 2019-05-03

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.4.1 --> 0.5.0


- 2.0.174 -- 2019-05-03

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.14.1 --> 1.15.0


- 2.0.173 -- 2019-05-03

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.14.0 --> 1.14.1


- 2.0.172 -- 2019-05-03

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.13.0 --> 1.14.0


- 2.0.171 -- 2019-05-03

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.4.0 --> 0.4.1


- 2.0.170 -- 2019-05-03

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.3.0 --> 0.4.0


- 2.0.169 -- 2019-05-03

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.12.0 --> 1.13.0


- 2.0.168 -- 2019-05-03

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.2.0 --> 0.3.0


- 2.0.167 -- 2019-05-03

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.1.1 --> 0.2.0


- 2.0.166 -- 2019-05-03

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.11.0 --> 1.12.0


- 2.0.165 -- 2019-05-03

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.3.2 --> 1.3.3


- 2.0.164 -- 2019-05-03

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.2.0 --> 1.3.0


- 2.0.163 -- 2019-05-03

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.10.0 --> 1.11.0


- 2.0.162 -- 2019-05-02

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.1.0 --> 1.2.0


- 2.0.161 -- 2019-05-02

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.9.0 --> 1.10.0


- 2.0.160 -- 2019-05-02

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.8.0 --> 1.9.0


- 2.0.159 -- 2019-05-02

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.0.0 --> 1.1.0
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.9.0 --> 1.10.0


- 2.0.158 -- 2019-05-02

    - [Ling/Octopus](https://github.com/lingtalfi/Octopus) 1.3.0 --> 1.4.0


- 2.0.157 -- 2019-05-02

    - [Ling/Light](https://github.com/lingtalfi/Light) 1.0.0 --> 0.1.0


- 2.0.156 -- 2019-05-02

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 1.3.0 --> 1.4.0


- 2.0.155 -- 2019-05-02

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 1.2.0 --> 1.3.0


- 2.0.154 -- 2019-05-02

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.7.0 --> 1.8.0


- 2.0.153 -- 2019-05-02

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.1.0 --> 0.1.1


- 2.0.152 -- 2019-05-02

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.3.1 --> 1.3.2


- 2.0.151 -- 2019-05-02

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 0.0.0 --> 0.1.0


- 2.0.150 -- 2019-05-02

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.6.0 --> 1.7.0


- 2.0.149 -- 2019-05-01

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 0.4.0 --> 0.5.0


- 2.0.148 -- 2019-04-30

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.5.0 --> 1.6.0


- 2.0.147 -- 2019-04-30

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.16.2 --> 1.16.3


- 2.0.146 -- 2019-04-30

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.2.0 --> 1.3.0


- 2.0.145 -- 2019-04-30

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.4.0 --> 1.5.0


- 2.0.144 -- 2019-04-30

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.4.0 --> 1.5.0


- 2.0.143 -- 2019-04-30

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.3.0 --> 1.4.0


- 2.0.142 -- 2019-04-30

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.2.0 --> 1.3.0


- 2.0.141 -- 2019-04-30

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.1.0 --> 1.2.0
    - [Ling/Light_Kit_WebsiteBuilder](https://github.com/lingtalfi/Light_Kit_WebsiteBuilder)  --> 1.0.0


- 2.0.140 -- 2019-04-29

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.0.0 --> 1.1.0


- 2.0.139 -- 2019-04-29

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.16.1 --> 1.16.2


- 2.0.138 -- 2019-04-29

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 1.1.0 --> 1.2.0


- 2.0.137 -- 2019-04-29

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 0.3.0 --> 0.4.0


- 2.0.136 -- 2019-04-29

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 0.2.0 --> 0.3.0


- 2.0.135 -- 2019-04-29

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.6.7 --> 1.6.8


- 2.0.134 -- 2019-04-29

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 0.1.0 --> 0.2.0
    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.16.0 --> 1.16.1


- 2.0.133 -- 2019-04-26

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 0.0.0 --> 0.1.0


- 2.0.132 -- 2019-04-26

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.8.0 --> 1.9.0


- 2.0.131 -- 2019-04-26

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary)  --> 0.0.0


- 2.0.130 -- 2019-04-26

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo)  --> 0.0.0


- 2.0.129 -- 2019-04-26

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 1.0.0 --> 1.1.0


- 2.0.128 -- 2019-04-26

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.3.0 --> 1.4.0


- 2.0.127 -- 2019-04-25

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.7.0 --> 1.8.0


- 2.0.126 -- 2019-04-25

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.15.1 --> 1.16.0


- 2.0.125 -- 2019-04-25

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit)  --> 1.0.0


- 2.0.124 -- 2019-04-25

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.2.0 --> 1.3.0


- 2.0.123 -- 2019-04-25

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.4.1 --> 1.4.2


- 2.0.122 -- 2019-04-25

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.4.0 --> 1.4.1


- 2.0.121 -- 2019-04-25

    - [Ling/Kit_PrototypeWidget](https://github.com/lingtalfi/Kit_PrototypeWidget)  --> 1.0.0


- 2.0.120 -- 2019-04-25

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.3.0 --> 1.4.0


- 2.0.119 -- 2019-04-24

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget)  --> 1.0.0


- 2.0.118 -- 2019-04-24

    - [Ling/ZephyrTemplateEngine](https://github.com/lingtalfi/ZephyrTemplateEngine) 1.0.0 --> 1.1.0


- 2.0.117 -- 2019-04-24

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.17 --> 1.171


- 2.0.116 -- 2019-04-24

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.1.0 --> 1.2.0


- 2.0.115 -- 2019-04-24

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.0.0 --> 1.1.0


- 2.0.114 -- 2019-04-24

    - [Ling/Kit](https://github.com/lingtalfi/Kit)  --> 1.0.0


- 2.0.113 -- 2019-04-24

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools)  --> 1.0.0


- 2.0.112 -- 2019-04-18

    - [Ling/HashMap](https://github.com/lingtalfi/HashMap)  --> 1.0.0


- 2.0.111 -- 2019-04-18

    - [Ling/Deploy](https://github.com/lingtalfi/Deploy) 1.1.0 --> 1.1.1


- 2.0.110 -- 2019-04-18

    - [Ling/Octopus](https://github.com/lingtalfi/Octopus) 1.2.1 --> 1.3.0


- 2.0.109 -- 2019-04-18

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.0.0 --> 1.0.1


- 2.0.108 -- 2019-04-18

    - [Ling/Deploy](https://github.com/lingtalfi/Deploy) 1.0.0 --> 1.1.0


- 2.0.107 -- 2019-04-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.6.6 --> 1.6.7


- 2.0.106 -- 2019-04-18

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer)  --> 1.0.0


- 2.0.105 -- 2019-04-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.6.5 --> 1.6.6


- 2.0.104 -- 2019-04-18

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.6.1 --> 1.6.2


- 2.0.103 -- 2019-04-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.6.4 --> 1.6.5


- 2.0.102 -- 2019-04-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.6.3 --> 1.6.4


- 2.0.101 -- 2019-04-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.6.2 --> 1.6.3


- 2.0.100 -- 2019-04-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.6.1 --> 1.6.2


- 2.0.99 -- 2019-04-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.6.0 --> 1.6.1


- 2.0.98 -- 2019-04-17

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.5.0 --> 1.6.0


- 2.0.97 -- 2019-04-17

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.4.2 --> 1.5.0


- 2.0.96 -- 2019-04-17

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.4.1 --> 1.4.2


- 2.0.95 -- 2019-04-16

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.4.0 --> 1.4.1


- 2.0.94 -- 2019-04-16

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.3.0 --> 1.4.0


- 2.0.93 -- 2019-04-15

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.2.0 --> 1.3.0


- 2.0.92 -- 2019-04-15

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.1.0 --> 1.2.0


- 2.0.91 -- 2019-04-15

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.0.0 --> 1.1.0


- 2.0.90 -- 2019-04-12

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform)  --> 1.0.0


- 2.0.89 -- 2019-04-11

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools)  --> 1.0.0


- 2.0.88 -- 2019-04-10

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter)  --> 1.0.0


- 2.0.87 -- 2019-04-09

    - [Ling/Light_ZephyrTemplate](https://github.com/lingtalfi/Light_ZephyrTemplate)  --> 1.0.0


- 2.0.86 -- 2019-04-09

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.1.0 --> 1.2.0


- 2.0.85 -- 2019-04-09

    - [Ling/ZephyrTemplateEngine](https://github.com/lingtalfi/ZephyrTemplateEngine)  --> 1.0.0


- 2.0.84 -- 2019-04-09

    - [Ling/ZeusTemplateEngine](https://github.com/lingtalfi/ZeusTemplateEngine) 1.2.0 --> 1.3.0


- 2.0.83 -- 2019-04-09

    - [Ling/UniversalTemplateEngine](https://github.com/lingtalfi/UniversalTemplateEngine) 1.0.0 --> 1.1.0


- 2.0.82 -- 2019-04-09

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.2.1 --> 1.3.0


- 2.0.81 -- 2019-04-08

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.15.0 --> 1.15.1


- 2.0.80 -- 2019-04-08

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.0.0 --> 1.1.0
    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.14.0 --> 1.15.0


- 2.0.79 -- 2019-04-05

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.13.0 --> 1.14.0


- 2.0.78 -- 2019-04-05

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer)  --> 1.0.0


- 2.0.77 -- 2019-04-05

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.2.0 --> 1.2.1


- 2.0.76 -- 2019-04-05

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.1.0 --> 1.2.0


- 2.0.75 -- 2019-04-05

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.8.0 --> 1.9.0


- 2.0.74 -- 2019-04-05

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.7.1 --> 1.8.0


- 2.0.73 -- 2019-04-05

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.12.1 --> 1.13.0


- 2.0.72 -- 2019-04-05

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError)  --> 1.0.0


- 2.0.71 -- 2019-04-05

    - [Ling/Light](https://github.com/lingtalfi/Light)  --> 1.0.0


- 2.0.70 -- 2019-04-05

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.7.0 --> 1.7.1


- 2.0.69 -- 2019-04-05

    - [Ling/Octopus](https://github.com/lingtalfi/Octopus) 1.2.0 --> 1.2.1


- 2.0.68 -- 2019-04-04

    - [Ling/Octopus](https://github.com/lingtalfi/Octopus) 1.1.0 --> 1.2.0


- 2.0.67 -- 2019-04-04

    - [Ling/Deploy](https://github.com/lingtalfi/Deploy)  --> 1.0.0


- 2.0.66 -- 2019-04-04

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.6.0 --> 1.6.1


- 2.0.65 -- 2019-04-04

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.1.0 --> 1.2.0


- 2.0.64 -- 2019-04-04

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.169 --> 1.17


- 2.0.63 -- 2019-04-03

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.3.0 --> 1.3.1


- 2.0.62 -- 2019-04-03

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.12.0 --> 1.12.1


- 2.0.61 -- 2019-04-03

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.6.0 --> 1.7.0


- 2.0.60 -- 2019-04-03

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.2.2 --> 1.3.0


- 2.0.59 -- 2019-04-03

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.5.0 --> 1.6.0


- 2.0.58 -- 2019-04-03

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.11.3 --> 1.12.0


- 2.0.57 -- 2019-04-03

    - [Ling/EasyConsoleMenu](https://github.com/lingtalfi/EasyConsoleMenu)  --> 1.0.0


- 2.0.56 -- 2019-04-03

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.6.0 --> 1.7.0


- 2.0.55 -- 2019-04-03

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.168 --> 1.169


- 2.0.54 -- 2019-04-02

    - [Ling/KrankenStein](https://github.com/lingtalfi/KrankenStein)  --> 1.0.0


- 2.0.53 -- 2019-04-02

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.167 --> 1.168


- 2.0.52 -- 2019-04-02

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.2.1 --> 1.2.2


- 2.0.51 -- 2019-04-01

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.166 --> 1.167


- 2.0.50 -- 2019-04-01

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.165 --> 1.166


- 2.0.49 -- 2019-03-29

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.164 --> 1.165


- 2.0.48 -- 2019-03-28

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.163 --> 1.164


- 2.0.47 -- 2019-03-27

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.162 --> 1.163


- 2.0.46 -- 2019-03-26

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.11.0 --> 1.11.1


- 2.0.45 -- 2019-03-26

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.10.0 --> 1.11.0


- 2.0.44 -- 2019-03-26

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.9.0 --> 1.10.0


- 2.0.43 -- 2019-03-22

    - universe minor increment


- 2.0.42 -- 2019-03-21

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.161 --> 1.162


- 2.0.41 -- 2019-03-21

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.4.0 --> 1.5.0


- 2.0.40 -- 2019-03-21

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.7.0 --> 1.9.0


- 2.0.39 -- 2019-03-21

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.3.0 --> 1.4.0


- 2.0.38 -- 2019-03-21

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.2.0 --> 1.3.0


- 2.0.37 -- 2019-03-21

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.16 --> 1.161


- 2.0.36 -- 2019-03-21

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.159 --> 1.16


- 2.0.35 -- 2019-03-21

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.158 --> 1.159


- 2.0.34 -- 2019-03-21

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.9.0 --> 1.10.0


- 2.0.33 -- 2019-03-20

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.157 --> 1.158


- 2.0.32 -- 2019-03-20

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.8.0 --> 1.9.0


- 2.0.31 -- 2019-03-20

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.5.2 --> 1.6.0


- 2.0.30 -- 2019-03-20

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.156 --> 1.157


- 2.1.0 -- 2019-03-19

    - installer script now restore old configuration if found

- 2.0.29 -- 2019-03-19

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.1.0 --> 1.2.0


- 2.0.28 -- 2019-03-19

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.1.1 --> 1.2.1


- 2.0.27 -- 2019-03-19

    - universe minor increment


- 2.0.26 -- 2019-03-19

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.155 --> 1.156


- 2.0.25 -- 2019-03-18

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.5.0 --> 1.6.0


- 2.0.24 -- 2019-03-18

    - [Ling/ProjectInfo](https://github.com/lingtalfi/ProjectInfo)  --> 1.0.0


- 2.0.23 -- 2019-03-18

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.4.0 --> 1.5.0


- 2.0.22 -- 2019-03-18

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.6.0 --> 1.7.0


- 2.0.21 -- 2019-03-18

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.5.2 --> 1.6.0


- 2.0.20 -- 2019-03-18

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.3.3 --> 1.4.0


- 2.0.19 -- 2019-03-18

    - Ling/LingTalfi 1.3.2 --> 1.3.3


- 2.0.18 -- 2019-03-18

    - Ling/DirScanner 1.7.0 --> 1.8.0


- 2.0.17 -- 2019-03-14

    - Ling/LingTalfi 1.3.1 --> 1.3.2


- 2.0.16 -- 2019-03-14

    - Ling/UniverseTools 1.11.1 --> 1.11.3


- 2.0.15 -- 2019-03-14

    - Ling/SimpleCurl 1.0.1 --> 1.0.2


- 2.0.14 -- 2019-03-14

    - Ling/CliTools 1.5.1 --> 1.5.2


- 2.0.13 -- 2019-03-14

    - Ling/CliTools 1.5.0 --> 1.5.1


- 2.0.12 -- 2019-03-14

    - Ling/LingTalfi 1.3.0 --> 1.3.1


- 2.0.11 -- 2019-03-14

    - Ling/LingTalfi 1.2.0 --> 1.3.0


- 2.0.10 -- 2019-03-14

    - Ling/SimpleCurl 1.0.0 --> 1.0.1


- 2.0.9 -- 2019-03-14

    - Ling/SimpleCurl  --> 1.0.0


- 2.0.8 -- 2019-03-14

    - Ling/PlanetSitemap  --> 1.0.1


- 2.0.7 -- 2019-03-14

    - Ling/DocTools 1.5.1 --> 1.5.2
    - Ling/LingTalfi 1.1.1 --> 1.2.0


- 2.0.6 -- 2019-03-14

    - Ling/UniverseTools 1.11.0 --> 1.11.1


- 2.0.5 -- 2019-03-14

    - Ling/LingTalfi 1.1.0 --> 1.1.1


- 2.0.4 -- 2019-03-14

    - universe minor increment


- 2.0.3 -- 2019-03-14

    - Ling/LingTalfi 1.0.0 --> 1.1.0


- 2.0.2 -- 2019-03-14

    - Ling/Uni2 1.0.0 --> 1.1.0


- 2.0.1 -- 2019-03-14

    - Ling/CliTools 1.1.0 --> 1.5.0
    - Ling/DocTools 1.3.0 --> 1.5.1
    - Ling/LingTalfi  --> 1.0.0
    - Ling/Uni2  --> 1.0.0
    - Ling/UniverseTools 1.3.0 --> 1.11.0


- 2.0.0 -- 2019-03-12

    - second version based on Uni2


- 1.0.0 -- 2017-03-11

    - initial commit


