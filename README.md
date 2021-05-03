UniverseNaiveImporter
=========================
2017-03-11 --> 2021-03-16



Warning: although the development team still uses this in the background, 
you generally should consider using the [planet installer plugin](https://github.com/lingtalfi/Light_PlanetInstaller) instead to install your planets,
and consider the uni tool deprecated in general.






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

- 2.0.3619 -- 2021-05-03

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.6.6 --> 1.6.7


- 2.0.3618 -- 2021-05-03

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.11 --> 1.3.12


- 2.0.3617 -- 2021-05-03

    - [Ling/Light_LingHooks](https://github.com/lingtalfi/Light_LingHooks) 1.0.7 --> 1.0.8


- 2.0.3616 -- 2021-05-03

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.15 --> 1.6.16


- 2.0.3615 -- 2021-05-03

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.36 --> 0.12.37


- 2.0.3614 -- 2021-05-03

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.18.2 --> 1.18.3


- 2.0.3613 -- 2021-05-03

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.11 --> 1.2.12


- 2.0.3612 -- 2021-05-03

    - [Ling/Light_DebugTrace](https://github.com/lingtalfi/Light_DebugTrace) 1.0.9 --> 1.0.10


- 2.0.3611 -- 2021-05-03

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.22 --> 1.14.23


- 2.0.3610 -- 2021-05-03

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple) 1.2.7 --> 1.2.8


- 2.0.3609 -- 2021-05-03

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.2.3 --> 2.2.4


- 2.0.3608 -- 2021-05-03

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.8.9 --> 1.8.10


- 2.0.3607 -- 2021-05-03

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger) 1.0.10 --> 1.0.11
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.119 --> 1.0.120


- 2.0.3606 -- 2021-05-03

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.70.3 --> 0.70.4


- 2.0.3605 -- 2021-05-03

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.118 --> 1.0.119
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.24.0 --> 1.24.1


- 2.0.3604 -- 2021-05-03

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.27 --> 1.0.28


- 2.0.3603 -- 2021-05-03

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.21 --> 1.24.0


- 2.0.3602 -- 2021-05-03

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.16 --> 1.31.17


- 2.0.3601 -- 2021-05-03

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.15 --> 1.19.16


- 2.0.3600 -- 2021-05-03

    - [Ling/Light_SimpleHttpServer](https://github.com/lingtalfi/Light_SimpleHttpServer) 1.0.10 --> 1.0.11


- 2.0.3599 -- 2021-05-03

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.12 --> 2.0.13


- 2.0.3598 -- 2021-05-03

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.11 --> 1.5.12


- 2.0.3597 -- 2021-05-03

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.6.5 --> 1.6.6


- 2.0.3596 -- 2021-05-03

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.10 --> 1.3.11


- 2.0.3595 -- 2021-05-03

    - [Ling/Light_LingHooks](https://github.com/lingtalfi/Light_LingHooks) 1.0.6 --> 1.0.7


- 2.0.3594 -- 2021-05-03

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.14 --> 1.6.15


- 2.0.3593 -- 2021-05-03

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.35 --> 0.12.36


- 2.0.3592 -- 2021-05-03

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.18.1 --> 1.18.2


- 2.0.3591 -- 2021-05-03

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.10 --> 1.2.11


- 2.0.3590 -- 2021-05-03

    - [Ling/Light_DebugTrace](https://github.com/lingtalfi/Light_DebugTrace) 1.0.8 --> 1.0.9


- 2.0.3589 -- 2021-05-03

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.21 --> 1.14.22


- 2.0.3588 -- 2021-05-03

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple) 1.2.6 --> 1.2.7


- 2.0.3587 -- 2021-05-03

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.2.2 --> 2.2.3


- 2.0.3586 -- 2021-05-03

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.8.8 --> 1.8.9


- 2.0.3585 -- 2021-05-03

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger) 1.0.9 --> 1.0.10
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.117 --> 1.0.118


- 2.0.3584 -- 2021-05-03

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.70.2 --> 0.70.3
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.116 --> 1.0.117


- 2.0.3583 -- 2021-05-03

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.10.3 --> 1.10.4


- 2.0.3582 -- 2021-05-03

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.20 --> 1.23.21


- 2.0.3581 -- 2021-05-03

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.23 --> 1.28.24


- 2.0.3580 -- 2021-05-03

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.17 --> 1.31.18


- 2.0.3579 -- 2021-05-03

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.6.9 --> 1.6.10


- 2.0.3578 -- 2021-05-03

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.115 --> 1.0.116
    - [Ling/Light_FileWatcher](https://github.com/lingtalfi/Light_FileWatcher) 1.1.4 --> 1.1.5


- 2.0.3577 -- 2021-05-03

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.10.2 --> 1.10.3


- 2.0.3576 -- 2021-05-03

    - [Ling/Light_ErrorHandler](https://github.com/lingtalfi/Light_ErrorHandler) 1.0.9 --> 1.0.10


- 2.0.3575 -- 2021-05-03

    - [Ling/Light_EndRoutine_Debugger](https://github.com/lingtalfi/Light_EndRoutine_Debugger) 1.2.5 --> 1.2.6


- 2.0.3574 -- 2021-05-03

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.16 --> 1.2.17


- 2.0.3573 -- 2021-05-03

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.20 --> 1.14.21


- 2.0.3572 -- 2021-05-03

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.15 --> 1.31.16


- 2.0.3571 -- 2021-05-03

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.14 --> 1.19.15


- 2.0.3570 -- 2021-05-03

    - [Ling/Light_SimpleHttpServer](https://github.com/lingtalfi/Light_SimpleHttpServer) 1.0.9 --> 1.0.10


- 2.0.3569 -- 2021-05-03

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.11 --> 2.0.12


- 2.0.3568 -- 2021-05-03

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.10 --> 1.5.11


- 2.0.3567 -- 2021-05-03

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.6.4 --> 1.6.5


- 2.0.3566 -- 2021-05-03

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.9 --> 1.3.10


- 2.0.3565 -- 2021-05-03

    - [Ling/Light_LingHooks](https://github.com/lingtalfi/Light_LingHooks) 1.0.5 --> 1.0.6


- 2.0.3564 -- 2021-05-03

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.9 --> 1.2.10


- 2.0.3563 -- 2021-05-03

    - [Ling/Light_DebugTrace](https://github.com/lingtalfi/Light_DebugTrace) 1.0.7 --> 1.0.8


- 2.0.3562 -- 2021-05-03

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple) 1.2.5 --> 1.2.6


- 2.0.3561 -- 2021-05-03

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.8.7 --> 1.8.8


- 2.0.3560 -- 2021-05-03

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger) 1.0.8 --> 1.0.9
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.114 --> 1.0.115


- 2.0.3559 -- 2021-05-03

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.113 --> 1.0.114
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.26 --> 1.0.27


- 2.0.3558 -- 2021-05-03

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.112 --> 1.0.113
    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.19 --> 2.0.20


- 2.0.3557 -- 2021-05-03

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.111 --> 1.0.112
    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.11.7 --> 1.11.8


- 2.0.3556 -- 2021-05-03

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.70.1 --> 0.70.2


- 2.0.3555 -- 2021-05-03

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.110 --> 1.0.111
    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.19 --> 1.14.20


- 2.0.3554 -- 2021-05-03

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.109 --> 1.0.110
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.25 --> 1.0.26


- 2.0.3553 -- 2021-05-03

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.108 --> 1.0.109
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.24 --> 1.0.25


- 2.0.3552 -- 2021-05-03

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.107 --> 1.0.108
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.23 --> 1.0.24


- 2.0.3551 -- 2021-05-03

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.106 --> 1.0.107
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.22 --> 1.0.23


- 2.0.3550 -- 2021-05-03

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.105 --> 1.0.106
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.21 --> 1.0.22


- 2.0.3549 -- 2021-05-03

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.20 --> 1.0.21


- 2.0.3548 -- 2021-05-02

    - [Ling/Light_Kit_Admin_JimToolbox_PhpstormWidgetLinks](https://github.com/lingtalfi/Light_Kit_Admin_JimToolbox_PhpstormWidgetLinks)  --> 1.0.0


- 2.0.3547 -- 2021-05-02

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.34 --> 0.12.35


- 2.0.3546 -- 2021-05-02

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.13 --> 1.6.14


- 2.0.3545 -- 2021-05-02

    - [Ling/JimToolbox](https://github.com/lingtalfi/JimToolbox) 1.0.1 --> 1.0.2


- 2.0.3544 -- 2021-05-02

    - [Ling/UrlSmuggler](https://github.com/lingtalfi/UrlSmuggler)  --> 1.0.0


- 2.0.3543 -- 2021-05-02

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.12 --> 1.6.13


- 2.0.3542 -- 2021-05-02

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.104 --> 1.0.105
    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.11 --> 1.6.12


- 2.0.3541 -- 2021-05-01

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.311 --> 1.312
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.103 --> 1.0.104


- 2.0.3540 -- 2021-05-01

    - universe minor increment


- 2.0.3539 -- 2021-05-01

    - [Ling/JimToolbox](https://github.com/lingtalfi/JimToolbox) 1.0.0 --> 1.0.1


- 2.0.3538 -- 2021-05-01

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.2.6 --> 1.2.7


- 2.0.3537 -- 2021-05-01

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.2.5 --> 1.2.6


- 2.0.3536 -- 2021-04-15

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.11 --> 1.18.12


- 2.0.3535 -- 2021-04-15

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.30.7 --> 1.30.8


- 2.0.3534 -- 2021-04-15

    - [Ling/JimToolbox](https://github.com/lingtalfi/JimToolbox)  --> 1.0.0


- 2.0.3533 -- 2021-04-15

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.22 --> 1.28.23
    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.33 --> 0.12.34


- 2.0.3532 -- 2021-04-09

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.18.0 --> 1.18.1


- 2.0.3531 -- 2021-04-09

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.17.10 --> 1.18.0


- 2.0.3530 -- 2021-04-09

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.30.6 --> 1.30.7


- 2.0.3529 -- 2021-04-09

    - [Ling/Light_Kit_Editor](https://github.com/lingtalfi/Light_Kit_Editor) 0.1.2 --> 0.2.0


- 2.0.3528 -- 2021-04-09

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.15 --> 2.0.16


- 2.0.3527 -- 2021-04-09

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.14.0 --> 1.14.1


- 2.0.3526 -- 2021-04-09

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.30.5 --> 1.30.6


- 2.0.3525 -- 2021-04-08

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.17.9 --> 1.17.10


- 2.0.3524 -- 2021-04-08

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.30.4 --> 1.30.5


- 2.0.3523 -- 2021-04-08

    - [Ling/Kit_PrototypeWidget](https://github.com/lingtalfi/Kit_PrototypeWidget) 1.1.4 --> 1.1.5


- 2.0.3522 -- 2021-04-08

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.13.0 --> 1.14.0


- 2.0.3521 -- 2021-04-08

    - [Ling/Kit_PrototypeWidget](https://github.com/lingtalfi/Kit_PrototypeWidget) 1.1.3 --> 1.1.4


- 2.0.3520 -- 2021-04-08

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.12.6 --> 1.13.0


- 2.0.3519 -- 2021-04-06

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.15 --> 1.2.16


- 2.0.3518 -- 2021-04-06

    - [Ling/JumboExploder](https://github.com/lingtalfi/JumboExploder) 1.0.3 --> 1.0.4
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.102 --> 1.0.103


- 2.0.3517 -- 2021-04-06

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.31 --> 1.311


- 2.0.3516 -- 2021-04-06

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.33 --> 1.24.34


- 2.0.3515 -- 2021-04-06

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.2.1 --> 2.2.2


- 2.0.3514 -- 2021-04-05

    - [Ling/JFormCollect](https://github.com/lingtalfi/JFormCollect) 1.0.0 --> 1.0.1


- 2.0.3513 -- 2021-04-05

    - [Ling/JFormCollect](https://github.com/lingtalfi/JFormCollect)  --> 1.0.0


- 2.0.3512 -- 2021-04-05

    - [Ling/JSelectHide](https://github.com/lingtalfi/JSelectHide) 1.0.0 --> 1.0.1


- 2.0.3511 -- 2021-04-05

    - [Ling/JRadioHide](https://github.com/lingtalfi/JRadioHide) 1.0.1 --> 1.0.2


- 2.0.3510 -- 2021-04-05

    - [Ling/JSelectHide](https://github.com/lingtalfi/JSelectHide)  --> 1.0.0


- 2.0.3509 -- 2021-04-02

    - [Ling/JRadioHide](https://github.com/lingtalfi/JRadioHide) 1.0.0 --> 1.0.1


- 2.0.3508 -- 2021-04-02

    - [Ling/JRadioHide](https://github.com/lingtalfi/JRadioHide)  --> 1.0.0


- 2.0.3507 -- 2021-04-02

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.2.0 --> 2.2.1


- 2.0.3506 -- 2021-04-02

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.2.4 --> 1.2.5


- 2.0.3505 -- 2021-04-01

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.14 --> 1.3.0


- 2.0.3504 -- 2021-04-01

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.1.9 --> 2.2.0


- 2.0.3503 -- 2021-04-01

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.17.7 --> 1.17.9


- 2.0.3502 -- 2021-03-26

    - [Ling/ConditionResolver](https://github.com/lingtalfi/ConditionResolver) 1.1.3 --> 1.1.4


- 2.0.3501 -- 2021-03-26

    - [Ling/LogicalOperator](https://github.com/lingtalfi/LogicalOperator)  --> 1.0.0


- 2.0.3500 -- 2021-03-25

    - [Ling/RowsSortHelper](https://github.com/lingtalfi/RowsSortHelper)  --> 1.0.0


- 2.0.3499 -- 2021-03-25

    - [Ling/UrlFriendlyListHelper](https://github.com/lingtalfi/UrlFriendlyListHelper) 1.1.3 --> 1.1.4


- 2.0.3498 -- 2021-03-25

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.101 --> 1.0.102
    - [Ling/PaginationHelper](https://github.com/lingtalfi/PaginationHelper)  --> 1.0.0


- 2.0.3497 -- 2021-03-23

    - [Ling/CheapLogger](https://github.com/lingtalfi/CheapLogger) 1.0.5 --> 1.0.6


- 2.0.3496 -- 2021-03-23

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.14.9 --> 1.14.10
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.100 --> 1.0.101


- 2.0.3495 -- 2021-03-23

    - [Ling/CheapLogger](https://github.com/lingtalfi/CheapLogger) 1.0.4 --> 1.0.5


- 2.0.3494 -- 2021-03-23

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.11 --> 1.2.12


- 2.0.3493 -- 2021-03-23

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.14 --> 0.5.15


- 2.0.3492 -- 2021-03-23

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.14 --> 1.7.15


- 2.0.3491 -- 2021-03-23

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.13 --> 1.5.14


- 2.0.3490 -- 2021-03-23

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.11 --> 1.0.12


- 2.0.3489 -- 2021-03-23

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.32 --> 0.12.33


- 2.0.3488 -- 2021-03-23

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.21 --> 1.28.22


- 2.0.3487 -- 2021-03-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.99 --> 1.0.100
    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.14 --> 2.0.15


- 2.0.3486 -- 2021-03-22

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.10.1 --> 1.10.2


- 2.0.3485 -- 2021-03-22

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.20 --> 1.28.21


- 2.0.3484 -- 2021-03-22

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.98 --> 1.0.99
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.19 --> 1.23.20


- 2.0.3483 -- 2021-03-22

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.10.0 --> 1.10.1


- 2.0.3482 -- 2021-03-22

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.13 --> 1.19.14


- 2.0.3481 -- 2021-03-22

    - [Ling/Light_LingHooks](https://github.com/lingtalfi/Light_LingHooks) 1.0.4 --> 1.0.5


- 2.0.3480 -- 2021-03-22

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.10 --> 1.6.11


- 2.0.3479 -- 2021-03-22

    - [Ling/Light_DebugTrace](https://github.com/lingtalfi/Light_DebugTrace) 1.0.6 --> 1.0.7


- 2.0.3478 -- 2021-03-22

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger) 1.0.7 --> 1.0.8


- 2.0.3477 -- 2021-03-22

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.9 --> 1.5.10


- 2.0.3476 -- 2021-03-22

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.31 --> 0.12.32


- 2.0.3475 -- 2021-03-22

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.18 --> 1.14.19


- 2.0.3474 -- 2021-03-22

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.8 --> 1.2.9


- 2.0.3473 -- 2021-03-22

    - [Ling/Light_SimpleHttpServer](https://github.com/lingtalfi/Light_SimpleHttpServer) 1.0.8 --> 1.0.9


- 2.0.3472 -- 2021-03-22

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.7 --> 1.2.8


- 2.0.3471 -- 2021-03-22

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.10 --> 2.0.11


- 2.0.3470 -- 2021-03-22

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.97 --> 1.0.98
    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.30 --> 0.12.31


- 2.0.3469 -- 2021-03-22

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.96 --> 1.0.97
    - [Ling/SectionComment](https://github.com/lingtalfi/SectionComment) 1.0.0 --> 1.0.1


- 2.0.3468 -- 2021-03-19

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.9.10 --> 1.10.0


- 2.0.3467 -- 2021-03-19

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.95 --> 1.0.96
    - [Ling/SectionComment](https://github.com/lingtalfi/SectionComment)  --> 1.0.0


- 2.0.3466 -- 2021-03-19

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.309 --> 1.31


- 2.0.3465 -- 2021-03-19

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.32 --> 1.24.33


- 2.0.3464 -- 2021-03-19

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.31 --> 1.24.32


- 2.0.3463 -- 2021-03-19

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.30 --> 1.24.31


- 2.0.3462 -- 2021-03-19

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.9 --> 1.6.10


- 2.0.3461 -- 2021-03-19

    - [Ling/Light_DebugTrace](https://github.com/lingtalfi/Light_DebugTrace) 1.0.5 --> 1.0.6


- 2.0.3460 -- 2021-03-19

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.8 --> 1.5.9


- 2.0.3459 -- 2021-03-19

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.94 --> 1.0.95
    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.17 --> 1.14.18


- 2.0.3458 -- 2021-03-19

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.9.9 --> 1.9.10


- 2.0.3457 -- 2021-03-19

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger) 1.0.6 --> 1.0.7


- 2.0.3456 -- 2021-03-19

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.29 --> 0.12.30


- 2.0.3455 -- 2021-03-19

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.6 --> 1.2.7


- 2.0.3454 -- 2021-03-19

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.5 --> 1.2.6


- 2.0.3453 -- 2021-03-18

    - [Ling/Light_DebugTrace](https://github.com/lingtalfi/Light_DebugTrace) 1.0.4 --> 1.0.5


- 2.0.3452 -- 2021-03-18

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.7 --> 1.5.8


- 2.0.3451 -- 2021-03-18

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.16 --> 1.14.17


- 2.0.3450 -- 2021-03-18

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger) 1.0.5 --> 1.0.6


- 2.0.3449 -- 2021-03-18

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.18 --> 1.23.19


- 2.0.3448 -- 2021-03-18

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.28 --> 0.12.29


- 2.0.3447 -- 2021-03-18

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.93 --> 1.0.94
    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.27 --> 0.12.28


- 2.0.3446 -- 2021-03-18

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.9.8 --> 1.9.9


- 2.0.3445 -- 2021-03-18

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.19 --> 1.28.20


- 2.0.3444 -- 2021-03-18

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.92 --> 1.0.93
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.17 --> 1.23.18


- 2.0.3443 -- 2021-03-18

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.70.0 --> 0.70.1


- 2.0.3442 -- 2021-03-18

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.13 --> 0.5.14


- 2.0.3441 -- 2021-03-18

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.10 --> 1.2.11


- 2.0.3440 -- 2021-03-18

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.13 --> 1.7.14


- 2.0.3439 -- 2021-03-18

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.12 --> 1.5.13


- 2.0.3438 -- 2021-03-18

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.91 --> 1.0.92
    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.10 --> 1.0.11


- 2.0.3437 -- 2021-03-18

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.308 --> 1.309


- 2.0.3436 -- 2021-03-18

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.90 --> 1.0.91
    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.26 --> 0.12.27


- 2.0.3435 -- 2021-03-18

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.31 --> 1.22.32


- 2.0.3434 -- 2021-03-18

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.9 --> 1.2.10


- 2.0.3433 -- 2021-03-18

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.12 --> 0.5.13


- 2.0.3432 -- 2021-03-18

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.12 --> 1.7.13


- 2.0.3431 -- 2021-03-18

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.11 --> 1.5.12


- 2.0.3430 -- 2021-03-18

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.9 --> 1.0.10


- 2.0.3429 -- 2021-03-18

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.18 --> 1.28.19


- 2.0.3428 -- 2021-03-18

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.11 --> 1.7.12


- 2.0.3427 -- 2021-03-18

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.10 --> 1.5.11


- 2.0.3426 -- 2021-03-18

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.8 --> 1.0.9


- 2.0.3425 -- 2021-03-18

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.9.4 --> 2.0.0


- 2.0.3424 -- 2021-03-15

    - [Ling/Light_ZephyrTemplate](https://github.com/lingtalfi/Light_ZephyrTemplate) 1.2.3 --> 1.2.4


- 2.0.3423 -- 2021-03-15

    - [Ling/Light_Vars](https://github.com/lingtalfi/Light_Vars) 1.0.3 --> 1.0.4


- 2.0.3422 -- 2021-03-15

    - [Ling/Light_UserRowRestriction](https://github.com/lingtalfi/Light_UserRowRestriction) 1.3.4 --> 1.3.5


- 2.0.3421 -- 2021-03-15

    - [Ling/Light_UserPreferences](https://github.com/lingtalfi/Light_UserPreferences) 1.0.8 --> 1.0.9


- 2.0.3420 -- 2021-03-15

    - [Ling/Light_UserNotifications](https://github.com/lingtalfi/Light_UserNotifications) 1.0.8 --> 1.0.9


- 2.0.3419 -- 2021-03-15

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.5.6 --> 1.5.7


- 2.0.3418 -- 2021-03-15

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.14 --> 1.31.15


- 2.0.3417 -- 2021-03-15

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.12 --> 1.19.13


- 2.0.3416 -- 2021-03-15

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.8.9 --> 1.8.10


- 2.0.3415 -- 2021-03-15

    - [Ling/Light_Train](https://github.com/lingtalfi/Light_Train) 1.0.0 --> 1.0.1


- 2.0.3414 -- 2021-03-15

    - [Ling/Light_TaskScheduler](https://github.com/lingtalfi/Light_TaskScheduler) 1.1.7 --> 1.1.8


- 2.0.3413 -- 2021-03-15

    - [Ling/Light_TablePrefixInfo](https://github.com/lingtalfi/Light_TablePrefixInfo) 1.0.3 --> 1.0.4


- 2.0.3412 -- 2021-03-15

    - [Ling/Light_SpinKitHelper](https://github.com/lingtalfi/Light_SpinKitHelper) 1.0.6 --> 1.0.7


- 2.0.3411 -- 2021-03-15

    - [Ling/Light_SimpleHttpServer](https://github.com/lingtalfi/Light_SimpleHttpServer) 1.0.7 --> 1.0.8


- 2.0.3410 -- 2021-03-15

    - [Ling/Light_Router](https://github.com/lingtalfi/Light_Router) 1.0.3 --> 1.0.4


- 2.0.3409 -- 2021-03-15

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.11.4 --> 1.11.5


- 2.0.3408 -- 2021-03-15

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.13 --> 2.0.14


- 2.0.3407 -- 2021-03-15

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.9 --> 2.0.10


- 2.0.3406 -- 2021-03-15

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.16 --> 1.31.17


- 2.0.3405 -- 2021-03-15

    - [Ling/Light_QuickMailAlert](https://github.com/lingtalfi/Light_QuickMailAlert) 1.1.4 --> 1.1.5


- 2.0.3404 -- 2021-03-15

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.6 --> 1.5.7


- 2.0.3403 -- 2021-03-15

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.89 --> 1.0.90
    - [Ling/Light_PrerouteHub](https://github.com/lingtalfi/Light_PrerouteHub) 1.0.3 --> 1.0.4


- 2.0.3402 -- 2021-03-15

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.88 --> 1.0.89
    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.18 --> 2.0.19


- 2.0.3401 -- 2021-03-15

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.19 --> 1.0.20


- 2.0.3400 -- 2021-03-15

    - [Ling/Light_PasswordProtector](https://github.com/lingtalfi/Light_PasswordProtector) 1.0.4 --> 1.0.5


- 2.0.3399 -- 2021-03-15

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.3.8 --> 1.3.9


- 2.0.3398 -- 2021-03-15

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 3.0.7 --> 3.0.8


- 2.0.3397 -- 2021-03-15

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.8 --> 1.3.9


- 2.0.3396 -- 2021-03-15

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.87 --> 1.0.88
    - [Ling/Light_LoginNotifier](https://github.com/lingtalfi/Light_LoginNotifier) 1.0.9 --> 1.0.10


- 2.0.3395 -- 2021-03-15

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.11.6 --> 1.11.7


- 2.0.3394 -- 2021-03-15

    - [Ling/Light_LingHooks](https://github.com/lingtalfi/Light_LingHooks) 1.0.3 --> 1.0.4


- 2.0.3393 -- 2021-03-15

    - [Ling/Light_Kit_Editor](https://github.com/lingtalfi/Light_Kit_Editor) 0.1.1 --> 0.1.2


- 2.0.3392 -- 2021-03-15

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.8 --> 1.2.9


- 2.0.3391 -- 2021-03-15

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.11 --> 0.5.12


- 2.0.3390 -- 2021-03-15

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.10 --> 1.7.11


- 2.0.3389 -- 2021-03-15

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.9 --> 1.5.10


- 2.0.3388 -- 2021-03-15

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.7 --> 1.0.8


- 2.0.3387 -- 2021-03-15

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.13 --> 1.19.14


- 2.0.3386 -- 2021-03-15

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.8 --> 1.6.9


- 2.0.3385 -- 2021-03-15

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.25 --> 0.12.26


- 2.0.3384 -- 2021-03-15

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.17.6 --> 1.17.7


- 2.0.3383 -- 2021-03-15

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer) 1.3.3 --> 1.3.4


- 2.0.3382 -- 2021-03-15

    - [Ling/Light_HtmlPageCopilot](https://github.com/lingtalfi/Light_HtmlPageCopilot) 1.0.6 --> 1.0.7


- 2.0.3381 -- 2021-03-15

    - [Ling/Light_Flasher](https://github.com/lingtalfi/Light_Flasher) 1.3.3 --> 1.3.4


- 2.0.3380 -- 2021-03-15

    - [Ling/Light_FileWatcher](https://github.com/lingtalfi/Light_FileWatcher) 1.1.3 --> 1.1.4


- 2.0.3379 -- 2021-03-15

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.86 --> 1.0.87
    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.4 --> 1.2.5


- 2.0.3378 -- 2021-03-15

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.9.7 --> 1.9.8


- 2.0.3377 -- 2021-03-15

    - [Ling/Light_ErrorPop](https://github.com/lingtalfi/Light_ErrorPop) 1.0.5 --> 1.0.6


- 2.0.3376 -- 2021-03-15

    - [Ling/Light_ErrorHandler](https://github.com/lingtalfi/Light_ErrorHandler) 1.0.8 --> 1.0.9


- 2.0.3375 -- 2021-03-15

    - [Ling/Light_EndRoutine_Debugger](https://github.com/lingtalfi/Light_EndRoutine_Debugger) 1.2.4 --> 1.2.5


- 2.0.3374 -- 2021-03-15

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.3.6 --> 1.3.7


- 2.0.3373 -- 2021-03-15

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.17 --> 1.28.18


- 2.0.3372 -- 2021-03-15

    - [Ling/Light_DebugTrace](https://github.com/lingtalfi/Light_DebugTrace) 1.0.3 --> 1.0.4


- 2.0.3371 -- 2021-03-15

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.14 --> 1.2.15


- 2.0.3370 -- 2021-03-15

    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils) 1.1.9 --> 1.1.10


- 2.0.3369 -- 2021-03-15

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.12.5 --> 1.12.6


- 2.0.3368 -- 2021-03-15

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.15 --> 1.14.16


- 2.0.3367 -- 2021-03-15

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple) 1.2.4 --> 1.2.5


- 2.0.3366 -- 2021-03-15

    - [Ling/Light_CsrfSession](https://github.com/lingtalfi/Light_CsrfSession) 1.0.4 --> 1.0.5


- 2.0.3365 -- 2021-03-15

    - [Ling/Light_Csrf](https://github.com/lingtalfi/Light_Csrf) 1.0.5 --> 1.0.6


- 2.0.3364 -- 2021-03-15

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 2.0.4 --> 2.0.5


- 2.0.3363 -- 2021-03-15

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.85 --> 1.0.86
    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.13 --> 1.2.14


- 2.0.3362 -- 2021-03-15

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.21 --> 1.0.22


- 2.0.3361 -- 2021-03-15

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger) 1.0.4 --> 1.0.5


- 2.0.3360 -- 2021-03-15

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.13 --> 1.6.14


- 2.0.3359 -- 2021-03-15

    - [Ling/Light_Bullsheet](https://github.com/lingtalfi/Light_Bullsheet) 1.1.3 --> 1.1.4


- 2.0.3358 -- 2021-03-15

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.12 --> 1.29.13


- 2.0.3357 -- 2021-03-15

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.9.3 --> 1.9.4


- 2.0.3356 -- 2021-03-15

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.1.8 --> 2.1.9


- 2.0.3355 -- 2021-03-15

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger) 1.0.3 --> 1.0.4


- 2.0.3354 -- 2021-03-09

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.3.7 --> 1.3.8


- 2.0.3353 -- 2021-03-09

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.12 --> 1.2.13


- 2.0.3352 -- 2021-03-09

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.1.7 --> 2.1.8


- 2.0.3351 -- 2021-03-09

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.3.5 --> 1.3.6


- 2.0.3350 -- 2021-03-09

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.1.6 --> 2.1.7


- 2.0.3349 -- 2021-03-09

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.8.6 --> 1.8.7
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.84 --> 1.0.85


- 2.0.3348 -- 2021-03-09

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.32 --> 0.70.0


- 2.0.3347 -- 2021-03-09

    - [Ling/Light_Kit_Editor](https://github.com/lingtalfi/Light_Kit_Editor) 0.1.0 --> 0.1.1


- 2.0.3346 -- 2021-03-09

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.10 --> 1.18.11


- 2.0.3345 -- 2021-03-09

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.12 --> 1.19.13


- 2.0.3344 -- 2021-03-09

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.7 --> 1.6.8


- 2.0.3343 -- 2021-03-09

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.7 --> 1.2.8


- 2.0.3342 -- 2021-03-09

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.10 --> 0.5.11


- 2.0.3341 -- 2021-03-09

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.8 --> 1.5.9


- 2.0.3340 -- 2021-03-09

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.6 --> 1.0.7


- 2.0.3339 -- 2021-03-09

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.9 --> 1.7.10


- 2.0.3338 -- 2021-03-09

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.24 --> 0.12.25


- 2.0.3337 -- 2021-03-09

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.8 --> 1.7.9


- 2.0.3336 -- 2021-03-09

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.6 --> 1.2.7


- 2.0.3335 -- 2021-03-09

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 1.2.4 --> 1.2.5


- 2.0.3334 -- 2021-03-09

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.9 --> 1.18.10


- 2.0.3333 -- 2021-03-09

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 1.2.3 --> 1.2.4


- 2.0.3332 -- 2021-03-09

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.5 --> 1.5.6


- 2.0.3331 -- 2021-03-09

    - [Ling/Light_LoginNotifier](https://github.com/lingtalfi/Light_LoginNotifier) 1.0.8 --> 1.0.9


- 2.0.3330 -- 2021-03-09

    - [Ling/Light_QuickMailAlert](https://github.com/lingtalfi/Light_QuickMailAlert) 1.1.3 --> 1.1.4


- 2.0.3329 -- 2021-03-09

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.83 --> 1.0.84
    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.7 --> 1.3.8


- 2.0.3328 -- 2021-03-08

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.31 --> 0.69.32
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.82 --> 1.0.83


- 2.0.3327 -- 2021-03-08

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.30 --> 0.69.31


- 2.0.3326 -- 2021-03-08

    - [Ling/Light_Kit_Editor](https://github.com/lingtalfi/Light_Kit_Editor)  --> 0.1.0


- 2.0.3325 -- 2021-03-08

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.16 --> 1.23.17


- 2.0.3324 -- 2021-03-08

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.30.3 --> 1.30.4


- 2.0.3323 -- 2021-03-08

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.12.5 --> 1.12.6


- 2.0.3322 -- 2021-03-08

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.80 --> 1.0.82
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.15 --> 1.23.16


- 2.0.3321 -- 2021-03-08

    - [Ling/BumbleBee](https://github.com/lingtalfi/BumbleBee) 1.0.3 --> 1.0.4
    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.11.6 --> 1.11.7


- 2.0.3320 -- 2021-03-08

    - [Ling/Beauty](https://github.com/lingtalfi/Beauty) 1.4.5 --> 1.4.8
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.79 --> 1.0.80


- 2.0.3319 -- 2021-03-08

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.13.4 --> 1.13.5


- 2.0.3318 -- 2021-03-08

    - [Ling/PhpBeast](https://github.com/lingtalfi/PhpBeast) 1.4.4 --> 1.4.5


- 2.0.3317 -- 2021-03-08

    - [Ling/Dreamer](https://github.com/lingtalfi/Dreamer) 1.0.3 --> 1.0.4


- 2.0.3316 -- 2021-03-08

    - [Ling/PhpBeast](https://github.com/lingtalfi/PhpBeast) 1.4.3 --> 1.4.4


- 2.0.3315 -- 2021-03-05

    - [Ling/Beauty](https://github.com/lingtalfi/Beauty) 1.4.4 --> 1.4.5


- 2.0.3314 -- 2021-03-05

    - [Ling/Beauty](https://github.com/lingtalfi/Beauty) 1.4.3 --> 1.4.4
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.78 --> 1.0.79


- 2.0.3313 -- 2021-03-05

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.30 --> 1.22.31


- 2.0.3312 -- 2021-03-05

    - [Ling/Zoli](https://github.com/lingtalfi/Zoli) 1.4.2 --> 1.4.3


- 2.0.3311 -- 2021-03-05

    - [Ling/ZeusTemplateEngine](https://github.com/lingtalfi/ZeusTemplateEngine) 1.3.2 --> 1.3.3


- 2.0.3310 -- 2021-03-05

    - [Ling/ZephyrTemplateEngine](https://github.com/lingtalfi/ZephyrTemplateEngine) 1.1.4 --> 1.1.5


- 2.0.3309 -- 2021-03-05

    - [Ling/YouTubeUtils](https://github.com/lingtalfi/YouTubeUtils) 1.2.2 --> 1.2.3


- 2.0.3308 -- 2021-03-05

    - [Ling/XiaoApi](https://github.com/lingtalfi/XiaoApi) 2.2.6 --> 2.2.7


- 2.0.3307 -- 2021-03-05

    - [Ling/WrappedString](https://github.com/lingtalfi/WrappedString) 1.3.2 --> 1.3.3


- 2.0.3306 -- 2021-03-05

    - [Ling/WiseTool](https://github.com/lingtalfi/WiseTool) 1.2.2 --> 1.2.3


- 2.0.3305 -- 2021-03-05

    - [Ling/WebWizardTools](https://github.com/lingtalfi/WebWizardTools) 1.3.3 --> 1.3.4


- 2.0.3304 -- 2021-03-05

    - [Ling/WebBox](https://github.com/lingtalfi/WebBox) 1.0.3 --> 1.0.4


- 2.0.3303 -- 2021-03-05

    - [Ling/VideoSubtitles](https://github.com/lingtalfi/VideoSubtitles) 1.2.2 --> 1.2.3


- 2.0.3302 -- 2021-03-05

    - [Ling/VariableToString](https://github.com/lingtalfi/VariableToString) 1.1.2 --> 1.1.3


- 2.0.3301 -- 2021-03-05

    - [Ling/VSwitch](https://github.com/lingtalfi/VSwitch) 1.3.2 --> 1.3.3


- 2.0.3300 -- 2021-03-05

    - [Ling/UrlFriendlyListHelper](https://github.com/lingtalfi/UrlFriendlyListHelper) 1.1.2 --> 1.1.3


- 2.0.3299 -- 2021-03-05

    - [Ling/UploaderHandler](https://github.com/lingtalfi/UploaderHandler) 1.0.2 --> 1.0.3


- 2.0.3298 -- 2021-03-05

    - [Ling/Uploader](https://github.com/lingtalfi/Uploader) 1.0.2 --> 1.0.3


- 2.0.3297 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.77 --> 1.0.78
    - [Ling/Updf](https://github.com/lingtalfi/Updf) 1.2.5 --> 1.2.6


- 2.0.3296 -- 2021-03-05

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.29 --> 1.22.30


- 2.0.3295 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.76 --> 1.0.77
    - [Ling/UniversalTemplateEngine](https://github.com/lingtalfi/UniversalTemplateEngine) 1.1.2 --> 1.1.3


- 2.0.3294 -- 2021-03-05

    - [Ling/UniversalLogger](https://github.com/lingtalfi/UniversalLogger) 1.1.2 --> 1.1.3


- 2.0.3293 -- 2021-03-05

    - [Ling/UniqueNameGenerator](https://github.com/lingtalfi/UniqueNameGenerator) 1.1.2 --> 1.1.3


- 2.0.3292 -- 2021-03-05

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.11 --> 1.9.12


- 2.0.3291 -- 2021-03-05

    - [Ling/Umail](https://github.com/lingtalfi/Umail) 1.6.2 --> 1.6.3


- 2.0.3290 -- 2021-03-05

    - [Ling/UltimateUploadHandler](https://github.com/lingtalfi/UltimateUploadHandler) 1.2.2 --> 1.2.3


- 2.0.3289 -- 2021-03-05

    - [Ling/TreeListHelper](https://github.com/lingtalfi/TreeListHelper) 1.0.2 --> 1.0.3


- 2.0.3288 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.75 --> 1.0.76
    - [Ling/Tokens](https://github.com/lingtalfi/Tokens) 1.4.2 --> 1.4.3


- 2.0.3287 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.74 --> 1.0.75
    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.11.5 --> 1.11.6


- 2.0.3286 -- 2021-03-05

    - [Ling/Tiphaine](https://github.com/lingtalfi/Tiphaine) 1.0.2 --> 1.0.3


- 2.0.3285 -- 2021-03-05

    - [Ling/TinyBullsheeter](https://github.com/lingtalfi/TinyBullsheeter) 1.0.2 --> 1.0.3


- 2.0.3284 -- 2021-03-05

    - [Ling/TimeFileUtil](https://github.com/lingtalfi/TimeFileUtil) 1.0.2 --> 1.0.3


- 2.0.3283 -- 2021-03-05

    - [Ling/Tim](https://github.com/lingtalfi/Tim) 1.6.2 --> 1.6.3


- 2.0.3282 -- 2021-03-05

    - [Ling/ThumbnailTools](https://github.com/lingtalfi/ThumbnailTools) 1.3.3 --> 1.3.4


- 2.0.3281 -- 2021-03-05

    - [Ling/TheScientist](https://github.com/lingtalfi/TheScientist) 1.0.2 --> 1.0.3


- 2.0.3280 -- 2021-03-05

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.29 --> 1.24.30


- 2.0.3279 -- 2021-03-05

    - [Ling/TheAnarchist](https://github.com/lingtalfi/TheAnarchist) 1.0.2 --> 1.0.3


- 2.0.3278 -- 2021-03-05

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.11.5 --> 1.11.6


- 2.0.3277 -- 2021-03-05

    - [Ling/TabathaCache](https://github.com/lingtalfi/TabathaCache) 2.4.2 --> 2.4.3


- 2.0.3276 -- 2021-03-05

    - [Ling/SvgGridGenerator](https://github.com/lingtalfi/SvgGridGenerator) 1.0.2 --> 1.0.3


- 2.0.3275 -- 2021-03-05

    - [Ling/SvelteTemplateBuilder](https://github.com/lingtalfi/SvelteTemplateBuilder) 1.1.2 --> 1.1.3


- 2.0.3274 -- 2021-03-05

    - [Ling/SuspiciousException](https://github.com/lingtalfi/SuspiciousException) 1.0.2 --> 1.0.3


- 2.0.3273 -- 2021-03-05

    - [Ling/StringFormatter](https://github.com/lingtalfi/StringFormatter) 1.0.2 --> 1.0.3


- 2.0.3272 -- 2021-03-05

    - [Ling/StepFormBuilder](https://github.com/lingtalfi/StepFormBuilder) 1.1.2 --> 1.1.3


- 2.0.3271 -- 2021-03-05

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.13.7 --> 1.13.8


- 2.0.3270 -- 2021-03-05

    - [Ling/SqlQueryWrapper](https://github.com/lingtalfi/SqlQueryWrapper) 1.6.2 --> 1.6.3


- 2.0.3269 -- 2021-03-05

    - [Ling/SqlQuery](https://github.com/lingtalfi/SqlQuery) 1.10.5 --> 1.10.6


- 2.0.3268 -- 2021-03-05

    - [Ling/SokoForm](https://github.com/lingtalfi/SokoForm) 1.72.2 --> 1.72.3


- 2.0.3267 -- 2021-03-05

    - [Ling/SitemapSlicer](https://github.com/lingtalfi/SitemapSlicer) 1.0.2 --> 1.0.3


- 2.0.3266 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.73 --> 1.0.74
    - [Ling/SitemapBuilderBox](https://github.com/lingtalfi/SitemapBuilderBox) 1.0.2 --> 1.0.3


- 2.0.3265 -- 2021-03-05

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.16 --> 1.30.17


- 2.0.3264 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.72 --> 1.0.73
    - [Ling/SimpleCurl](https://github.com/lingtalfi/SimpleCurl) 1.0.5 --> 1.0.6


- 2.0.3263 -- 2021-03-05

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.6.4 --> 1.6.5


- 2.0.3262 -- 2021-03-05

    - [Ling/SequenceMatcher](https://github.com/lingtalfi/SequenceMatcher) 1.0.2 --> 1.0.3


- 2.0.3261 -- 2021-03-05

    - [Ling/SelectChain](https://github.com/lingtalfi/SelectChain) 1.0.2 --> 1.0.3


- 2.0.3260 -- 2021-03-05

    - [Ling/Select2](https://github.com/lingtalfi/Select2) 1.0.3 --> 1.0.4


- 2.0.3259 -- 2021-03-05

    - [Ling/SecureImageUploader](https://github.com/lingtalfi/SecureImageUploader) 1.0.2 --> 1.0.3


- 2.0.3258 -- 2021-03-05

    - [Ling/SaveOrm](https://github.com/lingtalfi/SaveOrm) 1.18.3 --> 1.18.4
    - [Ling/ScreenDebug](https://github.com/lingtalfi/ScreenDebug) 1.0.2 --> 1.0.3


- 2.0.3257 -- 2021-03-05

    - [Ling/SafeUploader](https://github.com/lingtalfi/SafeUploader) 1.2.2 --> 1.2.3


- 2.0.3256 -- 2021-03-05

    - [Ling/RssUtil](https://github.com/lingtalfi/RssUtil) 1.0.2 --> 1.0.3


- 2.0.3255 -- 2021-03-05

    - [Ling/RowsGeneratorWidget](https://github.com/lingtalfi/RowsGeneratorWidget) 1.0.2 --> 1.0.3


- 2.0.3254 -- 2021-03-05

    - [Ling/RowsGenerator](https://github.com/lingtalfi/RowsGenerator) 1.6.2 --> 1.6.3


- 2.0.3253 -- 2021-03-05

    - [Ling/Registry](https://github.com/lingtalfi/Registry) 1.0.2 --> 1.0.3


- 2.0.3252 -- 2021-03-05

    - [Ling/ReflectionRepresentation](https://github.com/lingtalfi/ReflectionRepresentation) 1.0.2 --> 1.0.3


- 2.0.3251 -- 2021-03-05

    - [Ling/Quoter](https://github.com/lingtalfi/Quoter) 1.4.2 --> 1.4.3


- 2.0.3250 -- 2021-03-05

    - [Ling/QuickPdo](https://github.com/lingtalfi/QuickPdo) 2.41.3 --> 2.41.4


- 2.0.3249 -- 2021-03-05

    - [Ling/QuickLog](https://github.com/lingtalfi/QuickLog) 1.0.2 --> 1.0.3


- 2.0.3248 -- 2021-03-05

    - [Ling/QuickForm](https://github.com/lingtalfi/QuickForm) 4.6.3 --> 4.6.4


- 2.0.3247 -- 2021-03-05

    - [Ling/QueryFilterBox](https://github.com/lingtalfi/QueryFilterBox) 1.6.2 --> 1.6.3


- 2.0.3246 -- 2021-03-05

    - [Ling/PublicException](https://github.com/lingtalfi/PublicException) 1.0.2 --> 1.0.3


- 2.0.3245 -- 2021-03-05

    - [Ling/ProjectInfo](https://github.com/lingtalfi/ProjectInfo) 1.0.3 --> 1.0.4


- 2.0.3244 -- 2021-03-05

    - [Ling/Program](https://github.com/lingtalfi/Program) 1.1.2 --> 1.1.3


- 2.0.3243 -- 2021-03-05

    - [Ling/Privilege](https://github.com/lingtalfi/Privilege) 1.2.2 --> 1.2.3


- 2.0.3242 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.71 --> 1.0.72
    - [Ling/PlanetSitemap](https://github.com/lingtalfi/PlanetSitemap) 1.0.4 --> 1.0.5


- 2.0.3241 -- 2021-03-05

    - [Ling/PhpUploadFileFix](https://github.com/lingtalfi/PhpUploadFileFix) 1.0.3 --> 1.0.4


- 2.0.3240 -- 2021-03-05

    - [Ling/PhpTemplate](https://github.com/lingtalfi/PhpTemplate) 1.0.2 --> 1.0.3


- 2.0.3239 -- 2021-03-05

    - [Ling/PhpTailer](https://github.com/lingtalfi/PhpTailer) 1.0.3 --> 1.0.4


- 2.0.3238 -- 2021-03-05

    - [Ling/PhpSpreadSheetTool](https://github.com/lingtalfi/PhpSpreadSheetTool) 1.0.5 --> 1.0.6


- 2.0.3237 -- 2021-03-05

    - [Ling/PhpFileValidator](https://github.com/lingtalfi/PhpFileValidator) 1.0.2 --> 1.0.3


- 2.0.3236 -- 2021-03-05

    - [Ling/PhpFile](https://github.com/lingtalfi/PhpFile) 1.1.2 --> 1.1.3


- 2.0.3235 -- 2021-03-05

    - [Ling/PhpExcelTool](https://github.com/lingtalfi/PhpExcelTool) 1.9.6 --> 1.9.7


- 2.0.3234 -- 2021-03-05

    - [Ling/PhpErrorName](https://github.com/lingtalfi/PhpErrorName) 1.0.2 --> 1.0.3


- 2.0.3233 -- 2021-03-05

    - [Ling/PhpBeast](https://github.com/lingtalfi/PhpBeast) 1.4.2 --> 1.4.3


- 2.0.3232 -- 2021-03-05

    - [Ling/PersistentRowCollection](https://github.com/lingtalfi/PersistentRowCollection) 1.0.2 --> 1.0.3


- 2.0.3231 -- 2021-03-05

    - [Ling/PermsHiker](https://github.com/lingtalfi/PermsHiker) 1.1.2 --> 1.1.3


- 2.0.3230 -- 2021-03-05

    - [Ling/Pea](https://github.com/lingtalfi/Pea) 1.2.2 --> 1.2.3


- 2.0.3229 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.70 --> 1.0.71
    - [Ling/ParseDown](https://github.com/lingtalfi/ParseDown) 1.0.2 --> 1.0.3


- 2.0.3228 -- 2021-03-05

    - [Ling/ParenthesisMirrorParser](https://github.com/lingtalfi/ParenthesisMirrorParser) 1.0.3 --> 1.0.4


- 2.0.3227 -- 2021-03-05

    - [Ling/ParentChild](https://github.com/lingtalfi/ParentChild) 1.0.2 --> 1.0.3


- 2.0.3226 -- 2021-03-05

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.10.2 --> 1.10.3


- 2.0.3225 -- 2021-03-05

    - [Ling/Panda_Headers](https://github.com/lingtalfi/Panda_Headers) 1.0.2 --> 1.0.3


- 2.0.3224 -- 2021-03-05

    - [Ling/Packer](https://github.com/lingtalfi/Packer) 1.2.2 --> 1.2.3


- 2.0.3223 -- 2021-03-05

    - [Ling/Output](https://github.com/lingtalfi/Output) 1.7.2 --> 1.7.3


- 2.0.3222 -- 2021-03-05

    - [Ling/Ornella](https://github.com/lingtalfi/Ornella) 1.0.2 --> 1.0.3


- 2.0.3221 -- 2021-03-05

    - [Ling/OrmTools](https://github.com/lingtalfi/OrmTools) 1.18.2 --> 1.18.3


- 2.0.3220 -- 2021-03-05

    - [Ling/Options](https://github.com/lingtalfi/Options) 1.1.2 --> 1.1.3


- 2.0.3219 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.69 --> 1.0.70
    - [Ling/OnTheFlyForm](https://github.com/lingtalfi/OnTheFlyForm) 2.19.2 --> 2.19.3


- 2.0.3218 -- 2021-03-05

    - [Ling/Octopus](https://github.com/lingtalfi/Octopus) 1.4.3 --> 1.4.4


- 2.0.3217 -- 2021-03-05

    - [Ling/Observer](https://github.com/lingtalfi/Observer) 1.0.2 --> 1.0.3


- 2.0.3216 -- 2021-03-05

    - [Ling/NumericKeyArray](https://github.com/lingtalfi/NumericKeyArray) 1.1.2 --> 1.1.3


- 2.0.3215 -- 2021-03-05

    - [Ling/Notifier](https://github.com/lingtalfi/Notifier) 1.0.2 --> 1.0.3


- 2.0.3214 -- 2021-03-05

    - [Ling/Notificator](https://github.com/lingtalfi/Notificator) 1.1.2 --> 1.1.3


- 2.0.3213 -- 2021-03-05

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.9.10 --> 1.9.11


- 2.0.3212 -- 2021-03-05

    - [Ling/NaturallySimpleXmlElement](https://github.com/lingtalfi/NaturallySimpleXmlElement) 1.0.2 --> 1.0.3


- 2.0.3211 -- 2021-03-05

    - [Ling/MysqlTabular](https://github.com/lingtalfi/MysqlTabular) 1.0.2 --> 1.0.3


- 2.0.3210 -- 2021-03-05

    - [Ling/MysqlCreateTableUtil](https://github.com/lingtalfi/MysqlCreateTableUtil) 1.0.4 --> 1.0.5


- 2.0.3209 -- 2021-03-05

    - [Ling/MySimpleXmlElement](https://github.com/lingtalfi/MySimpleXmlElement) 1.1.2 --> 1.1.3


- 2.0.3208 -- 2021-03-05

    - [Ling/Models](https://github.com/lingtalfi/Models) 1.26.2 --> 1.26.3


- 2.0.3207 -- 2021-03-05

    - [Ling/ModelRenderers](https://github.com/lingtalfi/ModelRenderers) 1.7.5 --> 1.7.6


- 2.0.3206 -- 2021-03-05

    - [Ling/MikeMagicTools](https://github.com/lingtalfi/MikeMagicTools) 1.1.2 --> 1.1.3


- 2.0.3205 -- 2021-03-05

    - [Ling/MethodInjector](https://github.com/lingtalfi/MethodInjector) 1.5.2 --> 1.5.3


- 2.0.3204 -- 2021-03-05

    - [Ling/Meredith](https://github.com/lingtalfi/Meredith) 3.1.2 --> 3.1.3


- 2.0.3203 -- 2021-03-05

    - [Ling/Lys](https://github.com/lingtalfi/Lys) 3.2.2 --> 3.2.3


- 2.0.3202 -- 2021-03-05

    - [Ling/Logger](https://github.com/lingtalfi/Logger) 1.4.2 --> 1.4.3


- 2.0.3201 -- 2021-03-05

    - [Ling/LogSlicer](https://github.com/lingtalfi/LogSlicer) 1.1.2 --> 1.1.3


- 2.0.3200 -- 2021-03-05

    - [Ling/Localys](https://github.com/lingtalfi/Localys) 1.9.2 --> 1.9.3


- 2.0.3199 -- 2021-03-05

    - [Ling/Loader](https://github.com/lingtalfi/Loader) 1.0.2 --> 1.0.3


- 2.0.3198 -- 2021-03-05

    - [Ling/ListParams](https://github.com/lingtalfi/ListParams) 1.10.6 --> 1.10.7


- 2.0.3197 -- 2021-03-05

    - [Ling/ListModifier](https://github.com/lingtalfi/ListModifier) 1.3.2 --> 1.3.3


- 2.0.3196 -- 2021-03-05

    - [Ling/Linker](https://github.com/lingtalfi/Linker) 1.0.2 --> 1.0.3


- 2.0.3195 -- 2021-03-05

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.14 --> 1.23.15


- 2.0.3194 -- 2021-03-05

    - [Ling/LinearFile](https://github.com/lingtalfi/LinearFile) 1.0.2 --> 1.0.3


- 2.0.3193 -- 2021-03-05

    - [Ling/Light_ZouUploader](https://github.com/lingtalfi/Light_ZouUploader) 1.1.3 --> 1.1.4


- 2.0.3192 -- 2021-03-05

    - [Ling/Light_ZephyrTemplate](https://github.com/lingtalfi/Light_ZephyrTemplate) 1.2.2 --> 1.2.3


- 2.0.3191 -- 2021-03-05

    - [Ling/Light_Vars](https://github.com/lingtalfi/Light_Vars) 1.0.2 --> 1.0.3


- 2.0.3190 -- 2021-03-05

    - [Ling/Light_UserRowRestriction](https://github.com/lingtalfi/Light_UserRowRestriction) 1.3.3 --> 1.3.4


- 2.0.3189 -- 2021-03-05

    - [Ling/Light_UserPreferences](https://github.com/lingtalfi/Light_UserPreferences) 1.0.7 --> 1.0.8


- 2.0.3188 -- 2021-03-05

    - [Ling/Light_UserNotifications](https://github.com/lingtalfi/Light_UserNotifications) 1.0.7 --> 1.0.8


- 2.0.3187 -- 2021-03-05

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.5.5 --> 1.5.6


- 2.0.3186 -- 2021-03-05

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.13 --> 1.31.14


- 2.0.3185 -- 2021-03-05

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.11 --> 1.19.12


- 2.0.3184 -- 2021-03-05

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.7.2 --> 1.7.3


- 2.0.3183 -- 2021-03-05

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.8.8 --> 1.8.9


- 2.0.3182 -- 2021-03-05

    - [Ling/Light_Train](https://github.com/lingtalfi/Light_Train)  --> 1.0.0


- 2.0.3181 -- 2021-03-05

    - [Ling/Light_TaskScheduler](https://github.com/lingtalfi/Light_TaskScheduler) 1.1.6 --> 1.1.7


- 2.0.3180 -- 2021-03-05

    - [Ling/Light_TablePrefixInfo](https://github.com/lingtalfi/Light_TablePrefixInfo) 1.0.2 --> 1.0.3


- 2.0.3179 -- 2021-03-05

    - [Ling/Light_SpinKitHelper](https://github.com/lingtalfi/Light_SpinKitHelper) 1.0.5 --> 1.0.6


- 2.0.3178 -- 2021-03-05

    - [Ling/Light_SimpleHttpServer](https://github.com/lingtalfi/Light_SimpleHttpServer) 1.0.6 --> 1.0.7


- 2.0.3177 -- 2021-03-05

    - [Ling/Light_Router](https://github.com/lingtalfi/Light_Router) 1.0.2 --> 1.0.3


- 2.0.3176 -- 2021-03-05

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.11.3 --> 1.11.4


- 2.0.3175 -- 2021-03-05

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.12 --> 2.0.13


- 2.0.3174 -- 2021-03-05

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.8 --> 2.0.9


- 2.0.3173 -- 2021-03-05

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.15 --> 1.31.16


- 2.0.3172 -- 2021-03-05

    - [Ling/Light_QuickMailAlert](https://github.com/lingtalfi/Light_QuickMailAlert) 1.1.2 --> 1.1.3


- 2.0.3171 -- 2021-03-05

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.4 --> 1.5.5


- 2.0.3170 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.68 --> 1.0.69
    - [Ling/Light_PrerouteHub](https://github.com/lingtalfi/Light_PrerouteHub) 1.0.2 --> 1.0.3


- 2.0.3169 -- 2021-03-05

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.17 --> 2.0.18


- 2.0.3168 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.67 --> 1.0.68
    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.6.3 --> 1.6.4


- 2.0.3167 -- 2021-03-05

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.18 --> 1.0.19


- 2.0.3166 -- 2021-03-05

    - [Ling/Light_PasswordProtector](https://github.com/lingtalfi/Light_PasswordProtector) 1.0.3 --> 1.0.4


- 2.0.3165 -- 2021-03-05

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.3.6 --> 1.3.7


- 2.0.3164 -- 2021-03-05

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 3.0.6 --> 3.0.7


- 2.0.3163 -- 2021-03-05

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.6 --> 1.3.7


- 2.0.3162 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.66 --> 1.0.67
    - [Ling/Light_LoginNotifier](https://github.com/lingtalfi/Light_LoginNotifier) 1.0.7 --> 1.0.8


- 2.0.3161 -- 2021-03-05

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.11.5 --> 1.11.6


- 2.0.3160 -- 2021-03-05

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.6.8 --> 1.6.9


- 2.0.3159 -- 2021-03-05

    - [Ling/Light_LingHooks](https://github.com/lingtalfi/Light_LingHooks) 1.0.2 --> 1.0.3


- 2.0.3158 -- 2021-03-05

    - [Ling/Light_LightInstance](https://github.com/lingtalfi/Light_LightInstance) 1.2.3 --> 1.2.4


- 2.0.3157 -- 2021-03-05

    - [Ling/Light_Kit_WebsiteBuilder](https://github.com/lingtalfi/Light_Kit_WebsiteBuilder) 1.0.3 --> 1.0.4


- 2.0.3156 -- 2021-03-05

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 1.2.2 --> 1.2.3


- 2.0.3155 -- 2021-03-05

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.8 --> 1.18.9


- 2.0.3154 -- 2021-03-05

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.5 --> 1.2.6


- 2.0.3153 -- 2021-03-05

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.9 --> 0.5.10


- 2.0.3152 -- 2021-03-05

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.7 --> 1.7.8


- 2.0.3151 -- 2021-03-05

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.7 --> 1.5.8


- 2.0.3150 -- 2021-03-05

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.5 --> 1.0.6


- 2.0.3149 -- 2021-03-05

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.11 --> 1.19.12


- 2.0.3148 -- 2021-03-05

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.6 --> 1.6.7


- 2.0.3147 -- 2021-03-05

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.23 --> 0.12.24


- 2.0.3146 -- 2021-03-05

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.17.5 --> 1.17.6


- 2.0.3145 -- 2021-03-05

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer) 1.3.2 --> 1.3.3


- 2.0.3144 -- 2021-03-05

    - [Ling/Light_HtmlPageCopilot](https://github.com/lingtalfi/Light_HtmlPageCopilot) 1.0.5 --> 1.0.6


- 2.0.3143 -- 2021-03-05

    - [Ling/Light_Flasher](https://github.com/lingtalfi/Light_Flasher) 1.3.2 --> 1.3.3


- 2.0.3142 -- 2021-03-05

    - [Ling/Light_Firewall](https://github.com/lingtalfi/Light_Firewall) 1.1.2 --> 1.1.3


- 2.0.3141 -- 2021-03-05

    - [Ling/Light_FileWatcher](https://github.com/lingtalfi/Light_FileWatcher) 1.1.2 --> 1.1.3


- 2.0.3140 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.65 --> 1.0.66
    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.3 --> 1.2.4


- 2.0.3139 -- 2021-03-05

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.9.6 --> 1.9.7


- 2.0.3138 -- 2021-03-05

    - [Ling/Light_ErrorPop](https://github.com/lingtalfi/Light_ErrorPop) 1.0.4 --> 1.0.5


- 2.0.3137 -- 2021-03-05

    - [Ling/Light_ErrorHandler](https://github.com/lingtalfi/Light_ErrorHandler) 1.0.7 --> 1.0.8


- 2.0.3136 -- 2021-03-05

    - [Ling/Light_EndRoutine_Debugger](https://github.com/lingtalfi/Light_EndRoutine_Debugger) 1.2.3 --> 1.2.4


- 2.0.3135 -- 2021-03-05

    - [Ling/Light_EndRoutine_CsrfPageCleaner](https://github.com/lingtalfi/Light_EndRoutine_CsrfPageCleaner) 1.4.2 --> 1.4.3


- 2.0.3134 -- 2021-03-05

    - [Ling/Light_EndRoutine](https://github.com/lingtalfi/Light_EndRoutine) 1.3.2 --> 1.3.3


- 2.0.3133 -- 2021-03-05

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.3.4 --> 1.3.5


- 2.0.3132 -- 2021-03-05

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.16 --> 1.28.17


- 2.0.3131 -- 2021-03-05

    - [Ling/Light_DebugTrace](https://github.com/lingtalfi/Light_DebugTrace) 1.0.2 --> 1.0.3


- 2.0.3130 -- 2021-03-05

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.13 --> 1.2.14


- 2.0.3129 -- 2021-03-05

    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils) 1.1.8 --> 1.1.9


- 2.0.3128 -- 2021-03-05

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.12.4 --> 1.12.5


- 2.0.3127 -- 2021-03-05

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.14 --> 1.14.15


- 2.0.3126 -- 2021-03-05

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple) 1.2.3 --> 1.2.4


- 2.0.3125 -- 2021-03-05

    - [Ling/Light_CsrfSession](https://github.com/lingtalfi/Light_CsrfSession) 1.0.3 --> 1.0.4


- 2.0.3124 -- 2021-03-05

    - [Ling/Light_Csrf](https://github.com/lingtalfi/Light_Csrf) 1.0.4 --> 1.0.5


- 2.0.3123 -- 2021-03-05

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 2.0.3 --> 2.0.4


- 2.0.3122 -- 2021-03-05

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.64 --> 1.0.65
    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.11 --> 1.2.12


- 2.0.3121 -- 2021-03-05

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.20 --> 1.0.21


- 2.0.3120 -- 2021-03-05

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.12 --> 1.6.13


- 2.0.3119 -- 2021-03-05

    - [Ling/Light_Bullsheet](https://github.com/lingtalfi/Light_Bullsheet) 1.1.2 --> 1.1.3


- 2.0.3118 -- 2021-03-05

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.11 --> 1.29.12


- 2.0.3117 -- 2021-03-05

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.9.2 --> 1.9.3


- 2.0.3116 -- 2021-03-05

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.1.5 --> 2.1.6


- 2.0.3115 -- 2021-03-05

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.8.5 --> 1.8.6


- 2.0.3114 -- 2021-03-05

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger) 1.0.2 --> 1.0.3
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.63 --> 1.0.64


- 2.0.3113 -- 2021-03-05

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.29 --> 0.69.30


- 2.0.3112 -- 2021-03-05

    - [Ling/Kwin](https://github.com/lingtalfi/Kwin) 1.0.4 --> 1.0.5


- 2.0.3111 -- 2021-03-05

    - [Ling/KrankenStein](https://github.com/lingtalfi/KrankenStein) 1.0.3 --> 1.0.4
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.62 --> 1.0.63


- 2.0.3110 -- 2021-03-05

    - [Ling/Komin](https://github.com/lingtalfi/Komin) 1.0.2 --> 1.0.3


- 2.0.3109 -- 2021-03-05

    - [Ling/Kit_PrototypeWidget](https://github.com/lingtalfi/Kit_PrototypeWidget) 1.1.2 --> 1.1.3


- 2.0.3108 -- 2021-03-05

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.30.2 --> 1.30.3


- 2.0.3107 -- 2021-03-05

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.12.4 --> 1.12.5


- 2.0.3106 -- 2021-03-05

    - [Ling/KaminosUtils](https://github.com/lingtalfi/KaminosUtils) 1.0.2 --> 1.0.3


- 2.0.3105 -- 2021-03-05

    - [Ling/KamilleWidgets](https://github.com/lingtalfi/KamilleWidgets) 1.0.2 --> 1.0.3


- 2.0.3104 -- 2021-03-05

    - [Ling/KamillePacker](https://github.com/lingtalfi/KamillePacker) 1.7.2 --> 1.7.3


- 2.0.3103 -- 2021-03-05

    - [Ling/KamilleEssentialTools](https://github.com/lingtalfi/KamilleEssentialTools) 1.0.2 --> 1.0.3


- 2.0.3102 -- 2021-03-05

    - [Ling/JumboExploder](https://github.com/lingtalfi/JumboExploder) 1.0.2 --> 1.0.3


- 2.0.3101 -- 2021-03-05

    - [Ling/JqueryUrlWithDropZone](https://github.com/lingtalfi/JqueryUrlWithDropZone) 1.0.2 --> 1.0.3


- 2.0.3100 -- 2021-03-05

    - [Ling/Jquery](https://github.com/lingtalfi/Jquery) 1.1.3 --> 1.1.4


- 2.0.3099 -- 2021-03-05

    - [Ling/Jin](https://github.com/lingtalfi/Jin) 1.0.3 --> 1.0.4


- 2.0.3098 -- 2021-03-05

    - [Ling/JSortableLists](https://github.com/lingtalfi/JSortableLists) 1.0.2 --> 1.0.3


- 2.0.3097 -- 2021-03-05

    - [Ling/JSortTable](https://github.com/lingtalfi/JSortTable) 1.0.2 --> 1.0.3


- 2.0.3096 -- 2021-03-05

    - [Ling/JRicAdminTableHelper](https://github.com/lingtalfi/JRicAdminTableHelper) 1.0.8 --> 1.0.9


- 2.0.3095 -- 2021-03-05

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.5.4 --> 1.5.5


- 2.0.3094 -- 2021-03-05

    - [Ling/JPostForm](https://github.com/lingtalfi/JPostForm) 1.0.2 --> 1.0.3


- 2.0.3093 -- 2021-03-05

    - [Ling/JInfiniteSlider](https://github.com/lingtalfi/JInfiniteSlider) 1.2.2 --> 1.2.3


- 2.0.3092 -- 2021-03-05

    - [Ling/JImageRotator](https://github.com/lingtalfi/JImageRotator) 1.1.3 --> 1.1.4


- 2.0.3091 -- 2021-03-05

    - [Ling/JGoodies](https://github.com/lingtalfi/JGoodies) 1.1.2 --> 1.1.3


- 2.0.3090 -- 2021-03-05

    - [Ling/JFullScreen](https://github.com/lingtalfi/JFullScreen) 1.0.2 --> 1.0.3


- 2.0.3089 -- 2021-03-05

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 3.0.7 --> 3.0.8


- 2.0.3088 -- 2021-03-05

    - [Ling/JDragSlider](https://github.com/lingtalfi/JDragSlider) 1.1.2 --> 1.1.3


- 2.0.3087 -- 2021-03-05

    - [Ling/JCsrfAction](https://github.com/lingtalfi/JCsrfAction) 1.0.3 --> 1.0.4


- 2.0.3086 -- 2021-03-05

    - [Ling/JCropperJs](https://github.com/lingtalfi/JCropperJs) 1.0.2 --> 1.0.3


- 2.0.3085 -- 2021-03-05

    - [Ling/JCookie](https://github.com/lingtalfi/JCookie) 1.0.2 --> 1.0.3


- 2.0.3084 -- 2021-03-05

    - [Ling/JChronometer](https://github.com/lingtalfi/JChronometer) 1.0.2 --> 1.0.3


- 2.0.3083 -- 2021-03-05

    - [Ling/JBootstrapAutocomplete](https://github.com/lingtalfi/JBootstrapAutocomplete) 1.1.2 --> 1.1.3


- 2.0.3082 -- 2021-03-05

    - [Ling/JBee](https://github.com/lingtalfi/JBee) 1.1.4 --> 1.1.5


- 2.0.3081 -- 2021-03-05

    - [Ling/JAjaxLoader](https://github.com/lingtalfi/JAjaxLoader) 1.4.2 --> 1.4.3


- 2.0.3080 -- 2021-03-05

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.2.3 --> 1.2.4


- 2.0.3079 -- 2021-03-05

    - [Ling/InstantLog](https://github.com/lingtalfi/InstantLog) 1.1.2 --> 1.1.3


- 2.0.3078 -- 2021-03-05

    - [Ling/Installer](https://github.com/lingtalfi/Installer) 1.2.4 --> 1.2.5


- 2.0.3077 -- 2021-03-05

    - [Ling/Ingenico](https://github.com/lingtalfi/Ingenico) 1.5.2 --> 1.5.3


- 2.0.3076 -- 2021-03-05

    - [Ling/IndentedLines](https://github.com/lingtalfi/IndentedLines) 1.2.2 --> 1.2.3


- 2.0.3075 -- 2021-03-05

    - [Ling/Icons](https://github.com/lingtalfi/Icons) 1.0.4 --> 1.0.5


- 2.0.3074 -- 2021-03-05

    - [Ling/HybridList](https://github.com/lingtalfi/HybridList) 1.17.3 --> 1.17.4


- 2.0.3073 -- 2021-03-05

    - [Ling/Http4All](https://github.com/lingtalfi/Http4All) 1.1.3 --> 1.1.4


- 2.0.3072 -- 2021-03-05

    - [Ling/HtmlTemplate](https://github.com/lingtalfi/HtmlTemplate) 3.4.2 --> 3.4.3


- 2.0.3071 -- 2021-03-05

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 2.2.2 --> 2.2.3


- 2.0.3070 -- 2021-03-05

    - [Ling/Here](https://github.com/lingtalfi/Here) 2.2.2 --> 2.2.3


- 2.0.3069 -- 2021-03-05

    - [Ling/HashMap](https://github.com/lingtalfi/HashMap) 1.0.3 --> 1.0.4


- 2.0.3068 -- 2021-03-05

    - [Ling/GuiAdminTable](https://github.com/lingtalfi/GuiAdminTable) 1.12.2 --> 1.12.3


- 2.0.3067 -- 2021-03-05

    - [Ling/GreekTodoList](https://github.com/lingtalfi/GreekTodoList) 1.4.2 --> 1.4.3


- 2.0.3066 -- 2021-03-05

    - [Ling/GormanJsonDecoder](https://github.com/lingtalfi/GormanJsonDecoder) 1.1.3 --> 1.1.4


- 2.0.3065 -- 2021-03-05

    - [Ling/GetRowsInterface](https://github.com/lingtalfi/GetRowsInterface) 1.0.2 --> 1.0.3


- 2.0.3064 -- 2021-03-05

    - [Ling/GetFileSize](https://github.com/lingtalfi/GetFileSize) 1.1.2 --> 1.1.3


- 2.0.3063 -- 2021-03-05

    - [Ling/FormTools](https://github.com/lingtalfi/FormTools) 1.7.2 --> 1.7.3


- 2.0.3062 -- 2021-03-05

    - [Ling/FormRenderer](https://github.com/lingtalfi/FormRenderer) 1.7.4 --> 1.7.5


- 2.0.3061 -- 2021-03-05

    - [Ling/FormModel](https://github.com/lingtalfi/FormModel) 1.5.2 --> 1.5.3


- 2.0.3060 -- 2021-03-05

    - [Ling/FontAwesome](https://github.com/lingtalfi/FontAwesome) 1.0.3 --> 1.0.4


- 2.0.3059 -- 2021-03-05

    - [Ling/FileDeletor](https://github.com/lingtalfi/FileDeletor) 1.0.2 --> 1.0.3


- 2.0.3058 -- 2021-03-05

    - [Ling/FileCreator](https://github.com/lingtalfi/FileCreator) 1.0.2 --> 1.0.3


- 2.0.3057 -- 2021-03-05

    - [Ling/FileCleaner](https://github.com/lingtalfi/FileCleaner) 1.1.2 --> 1.1.3


- 2.0.3056 -- 2021-03-05

    - [Ling/Ffmpeg](https://github.com/lingtalfi/Ffmpeg) 1.0.2 --> 1.0.3


- 2.0.3055 -- 2021-03-05

    - [Ling/Explorer](https://github.com/lingtalfi/Explorer) 1.2.2 --> 1.2.3


- 2.0.3054 -- 2021-03-05

    - [Ling/ExceptionCodes](https://github.com/lingtalfi/ExceptionCodes) 1.0.2 --> 1.0.3


- 2.0.3053 -- 2021-03-05

    - [Ling/Escaper](https://github.com/lingtalfi/Escaper) 1.4.2 --> 1.4.3


- 2.0.3052 -- 2021-03-05

    - [Ling/Ecp](https://github.com/lingtalfi/Ecp) 1.5.2 --> 1.5.3


- 2.0.3051 -- 2021-03-05

    - [Ling/EchartsWrapper](https://github.com/lingtalfi/EchartsWrapper) 1.3.2 --> 1.3.3


- 2.0.3050 -- 2021-03-05

    - [Ling/EasyConsoleMenu](https://github.com/lingtalfi/EasyConsoleMenu) 1.0.3 --> 1.0.4


- 2.0.3049 -- 2021-03-05

    - [Ling/Dreamer](https://github.com/lingtalfi/Dreamer) 1.0.2 --> 1.0.3


- 2.0.3048 -- 2021-03-05

    - [Ling/DotMenu](https://github.com/lingtalfi/DotMenu) 1.0.4 --> 1.0.5


- 2.0.3047 -- 2021-03-05

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.14.8 --> 1.14.9


- 2.0.3046 -- 2021-03-05

    - [Ling/Dispatcher](https://github.com/lingtalfi/Dispatcher) 1.0.2 --> 1.0.3


- 2.0.3045 -- 2021-03-05

    - [Ling/DirectoryCleaner](https://github.com/lingtalfi/DirectoryCleaner) 1.0.2 --> 1.0.3


- 2.0.3044 -- 2021-03-05

    - [Ling/DirTransformer](https://github.com/lingtalfi/DirTransformer) 1.4.2 --> 1.4.3
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.61 --> 1.0.62


- 2.0.3043 -- 2021-03-05

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.13.3 --> 1.13.4


- 2.0.3042 -- 2021-03-05

    - [Ling/Dir2Symlink](https://github.com/lingtalfi/Dir2Symlink) 1.2.2 --> 1.2.3


- 2.0.3041 -- 2021-03-05

    - [Ling/DerbyCache](https://github.com/lingtalfi/DerbyCache) 1.5.2 --> 1.5.3


- 2.0.3040 -- 2021-03-05

    - [Ling/Deploy](https://github.com/lingtalfi/Deploy) 1.1.4 --> 1.1.5


- 2.0.3039 -- 2021-03-05

    - [Ling/DebugLogger](https://github.com/lingtalfi/DebugLogger) 1.1.3 --> 1.1.4


- 2.0.3038 -- 2021-03-05

    - [Ling/DatePickerHelper](https://github.com/lingtalfi/DatePickerHelper) 1.1.2 --> 1.1.3


- 2.0.3037 -- 2021-03-05

    - [Ling/Dash2Array](https://github.com/lingtalfi/Dash2Array) 1.0.2 --> 1.0.3
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.60 --> 1.0.61


- 2.0.3036 -- 2021-03-05

    - [Ling/CyclicChainDetector](https://github.com/lingtalfi/CyclicChainDetector) 1.1.1 --> 1.1.2


- 2.0.3035 -- 2021-03-05

    - [Ling/Csv](https://github.com/lingtalfi/Csv) 1.3.3 --> 1.3.4


- 2.0.3034 -- 2021-03-05

    - [Ling/CrudWithFile](https://github.com/lingtalfi/CrudWithFile) 1.0.2 --> 1.0.3


- 2.0.3033 -- 2021-03-05

    - [Ling/CronTaskBot](https://github.com/lingtalfi/CronTaskBot) 1.0.2 --> 1.0.3
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.59 --> 1.0.60


- 2.0.3032 -- 2021-03-05

    - [Ling/CopyDir](https://github.com/lingtalfi/CopyDir) 1.3.2 --> 1.3.3


- 2.0.3031 -- 2021-03-05

    - [Ling/ConventionGuy](https://github.com/lingtalfi/ConventionGuy) 1.1.3 --> 1.1.4


- 2.0.3030 -- 2021-03-05

    - [Ling/ConsoleTool](https://github.com/lingtalfi/ConsoleTool) 1.0.2 --> 1.0.3


- 2.0.3029 -- 2021-03-05

    - [Ling/ConditionResolver](https://github.com/lingtalfi/ConditionResolver) 1.1.2 --> 1.1.3


- 2.0.3028 -- 2021-03-05

    - [Ling/CommandLineOutput](https://github.com/lingtalfi/CommandLineOutput) 1.0.2 --> 1.0.3


- 2.0.3027 -- 2021-03-05

    - [Ling/CommandLineManiac](https://github.com/lingtalfi/CommandLineManiac) 1.0.2 --> 1.0.3


- 2.0.3026 -- 2021-03-05

    - [Ling/CommandLineInput](https://github.com/lingtalfi/CommandLineInput) 1.2.2 --> 1.2.3


- 2.0.3025 -- 2021-03-05

    - [Ling/Colis](https://github.com/lingtalfi/Colis) 2.2.2 --> 2.2.3
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.58 --> 1.0.59


- 2.0.3024 -- 2021-03-05

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.25 --> 1.10.26
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.57 --> 1.0.58


- 2.0.3023 -- 2021-03-05

    - [Ling/ClassCreator](https://github.com/lingtalfi/ClassCreator) 1.0.3 --> 1.0.4
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.56 --> 1.0.57


- 2.0.3022 -- 2021-03-05

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.16.2 --> 1.16.3


- 2.0.3021 -- 2021-03-05

    - [Ling/Chronos](https://github.com/lingtalfi/Chronos) 1.0.2 --> 1.0.3


- 2.0.3020 -- 2021-03-05

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.4.2 --> 1.4.3


- 2.0.3019 -- 2021-03-05

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.12 --> 1.19.13


- 2.0.3018 -- 2021-03-05

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.6.7 --> 1.6.8


- 2.0.3017 -- 2021-03-05

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.36.6 --> 1.36.7
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.55 --> 1.0.56


- 2.0.3016 -- 2021-03-05

    - [Ling/CheapLogger](https://github.com/lingtalfi/CheapLogger) 1.0.3 --> 1.0.4


- 2.0.3015 -- 2021-03-05

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.5.3 --> 1.5.4
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.54 --> 1.0.55


- 2.0.3014 -- 2021-03-05

    - [Ling/BumbleBee](https://github.com/lingtalfi/BumbleBee) 1.0.2 --> 1.0.3


- 2.0.3013 -- 2021-03-05

    - [Ling/BullSheet](https://github.com/lingtalfi/BullSheet) 1.3.2 --> 1.3.3


- 2.0.3012 -- 2021-03-05

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.15.6 --> 1.15.7
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.53 --> 1.0.54


- 2.0.3011 -- 2021-03-05

    - [Ling/BeeFramework](https://github.com/lingtalfi/BeeFramework) 1.0.6 --> 1.0.7


- 2.0.3010 -- 2021-03-05

    - [Ling/Beauty](https://github.com/lingtalfi/Beauty) 1.4.2 --> 1.4.3


- 2.0.3009 -- 2021-03-05

    - [Ling/Bate](https://github.com/lingtalfi/Bate) 1.0.2 --> 1.0.3
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.52 --> 1.0.53


- 2.0.3008 -- 2021-03-05

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.307 --> 1.308


- 2.0.3007 -- 2021-03-05

    - [Ling/BashColorTool](https://github.com/lingtalfi/BashColorTool) 1.0.2 --> 1.0.3


- 2.0.3006 -- 2021-03-05

    - [Ling/BabyYamlDatabase](https://github.com/lingtalfi/BabyYamlDatabase) 1.0.4 --> 1.0.5
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.51 --> 1.0.52


- 2.0.3005 -- 2021-03-05

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.7.7 --> 1.7.8


- 2.0.3004 -- 2021-03-05

    - [Ling/BabyDash](https://github.com/lingtalfi/BabyDash) 1.1.10 --> 1.1.11


- 2.0.3003 -- 2021-03-05

    - [Ling/Authenticate](https://github.com/lingtalfi/Authenticate) 1.7.3 --> 1.7.4


- 2.0.3002 -- 2021-03-05

    - [Ling/AssetsList](https://github.com/lingtalfi/AssetsList) 1.0.2 --> 1.0.3


- 2.0.3001 -- 2021-03-05

    - [Ling/AssetLoader](https://github.com/lingtalfi/AssetLoader) 1.6.2 --> 1.6.3


- 2.0.3000 -- 2021-03-05

    - [Ling/ArrayVariableResolver](https://github.com/lingtalfi/ArrayVariableResolver) 1.2.3 --> 1.2.4


- 2.0.2999 -- 2021-03-05

    - [Ling/ArrayToTable](https://github.com/lingtalfi/ArrayToTable) 1.2.2 --> 1.2.3
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.50 --> 1.0.51


- 2.0.2998 -- 2021-03-05

    - [Ling/ArrayToString](https://github.com/lingtalfi/ArrayToString) 1.4.4 --> 1.4.5


- 2.0.2997 -- 2021-03-05

    - [Ling/ArrayStore](https://github.com/lingtalfi/ArrayStore) 1.1.2 --> 1.1.3


- 2.0.2996 -- 2021-03-05

    - [Ling/ArrayRefResolver](https://github.com/lingtalfi/ArrayRefResolver) 1.0.2 --> 1.0.3


- 2.0.2995 -- 2021-03-05

    - [Ling/ArrayExport](https://github.com/lingtalfi/ArrayExport) 1.1.2 --> 1.1.3


- 2.0.2994 -- 2021-03-05

    - [Ling/ArrayDiff](https://github.com/lingtalfi/ArrayDiff) 1.0.2 --> 1.0.3


- 2.0.2993 -- 2021-03-05

    - [Ling/ApplicationLog](https://github.com/lingtalfi/ApplicationLog) 1.0.2 --> 1.0.3


- 2.0.2992 -- 2021-03-05

    - [Ling/AjaxCommunicationProtocol](https://github.com/lingtalfi/AjaxCommunicationProtocol) 1.1.2 --> 1.1.3


- 2.0.2991 -- 2021-03-05

    - [Ling/AdminTable](https://github.com/lingtalfi/AdminTable) 1.6.9 --> 1.6.10


- 2.0.2990 -- 2021-03-02

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.12.3 --> 1.12.4


- 2.0.2989 -- 2021-03-02

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.17.4 --> 1.17.5


- 2.0.2988 -- 2021-03-02

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.49 --> 1.0.50
    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.5 --> 1.3.6


- 2.0.2987 -- 2021-03-01

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.17 --> 1.0.18


- 2.0.2986 -- 2021-03-01

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.7 --> 1.18.8


- 2.0.2985 -- 2021-03-01

    - [Ling/DotMenu](https://github.com/lingtalfi/DotMenu) 1.0.3 --> 1.0.4


- 2.0.2984 -- 2021-03-01

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.6 --> 1.5.7


- 2.0.2983 -- 2021-03-01

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.22 --> 0.12.23


- 2.0.2982 -- 2021-03-01

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.48 --> 1.0.49
    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.12 --> 1.31.13


- 2.0.2981 -- 2021-02-26

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.19 --> 1.0.20


- 2.0.2980 -- 2021-02-26

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.6 --> 1.18.7


- 2.0.2979 -- 2021-02-26

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.21 --> 0.12.22


- 2.0.2978 -- 2021-02-26

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.9.9 --> 1.9.10


- 2.0.2977 -- 2021-02-26

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.17.3 --> 1.17.4


- 2.0.2976 -- 2021-02-26

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.3.3 --> 1.3.4


- 2.0.2975 -- 2021-02-26

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.20 --> 0.12.21


- 2.0.2974 -- 2021-02-26

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.17.2 --> 1.17.3


- 2.0.2973 -- 2021-02-26

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.9.8 --> 1.9.9


- 2.0.2972 -- 2021-02-26

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.9.7 --> 1.9.8


- 2.0.2971 -- 2021-02-26

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.3.2 --> 1.3.3


- 2.0.2970 -- 2021-02-25

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.19 --> 0.12.20


- 2.0.2969 -- 2021-02-25

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.13 --> 1.23.14


- 2.0.2968 -- 2021-02-25

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.47 --> 1.0.48
    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.3.1 --> 1.3.2


- 2.0.2967 -- 2021-02-25

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.28 --> 0.69.29


- 2.0.2966 -- 2021-02-25

    - [Ling/Light_Vars](https://github.com/lingtalfi/Light_Vars) 1.0.1 --> 1.0.2


- 2.0.2965 -- 2021-02-25

    - [Ling/Light_Vars](https://github.com/lingtalfi/Light_Vars) 1.0.0 --> 1.0.1


- 2.0.2964 -- 2021-02-25

    - [Ling/Light_Vars](https://github.com/lingtalfi/Light_Vars)  --> 1.0.0


- 2.0.2963 -- 2021-02-25

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.46 --> 1.0.47
    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.3.0 --> 1.3.1


- 2.0.2962 -- 2021-02-25

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.45 --> 1.0.46
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.16 --> 1.0.17


- 2.0.2961 -- 2021-02-25

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.27 --> 0.69.28
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.44 --> 1.0.45


- 2.0.2960 -- 2021-02-25

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.26 --> 0.69.27


- 2.0.2959 -- 2021-02-25

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.18 --> 0.12.19


- 2.0.2958 -- 2021-02-25

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.43 --> 1.0.44
    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.15 --> 1.28.16


- 2.0.2957 -- 2021-02-25

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.16 --> 2.0.17


- 2.0.2956 -- 2021-02-25

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.10 --> 1.19.11


- 2.0.2955 -- 2021-02-25

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.10 --> 1.2.11


- 2.0.2954 -- 2021-02-25

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.17 --> 0.12.18


- 2.0.2953 -- 2021-02-25

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.12 --> 1.2.13


- 2.0.2952 -- 2021-02-25

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.42 --> 1.0.43
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.12 --> 1.23.13


- 2.0.2951 -- 2021-02-25

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.41 --> 1.0.42
    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.28 --> 1.22.29


- 2.0.2950 -- 2021-02-25

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.306 --> 1.307
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.40 --> 1.0.41


- 2.0.2949 -- 2021-02-25

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.39 --> 1.0.40
    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.27 --> 1.22.28


- 2.0.2948 -- 2021-02-25

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.305 --> 1.306
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.38 --> 1.0.39


- 2.0.2947 -- 2021-02-25

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.37 --> 1.0.38
    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.18 --> 1.0.19


- 2.0.2946 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.36 --> 1.0.37
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.15 --> 1.0.16


- 2.0.2945 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.35 --> 1.0.36
    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.17 --> 1.0.18


- 2.0.2944 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.34 --> 1.0.35
    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.16 --> 1.0.17


- 2.0.2943 -- 2021-02-23

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.14 --> 1.0.15


- 2.0.2942 -- 2021-02-23

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.10 --> 1.9.11


- 2.0.2941 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.33 --> 1.0.34
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.11 --> 1.23.12


- 2.0.2940 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.32 --> 1.0.33
    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.15 --> 2.0.16


- 2.0.2939 -- 2021-02-23

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.13 --> 1.0.14


- 2.0.2938 -- 2021-02-23

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.6.7 --> 1.6.8


- 2.0.2937 -- 2021-02-23

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.9 --> 1.19.10


- 2.0.2936 -- 2021-02-23

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.16 --> 0.12.17


- 2.0.2935 -- 2021-02-23

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.14 --> 1.28.15


- 2.0.2934 -- 2021-02-23

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.11 --> 1.2.12


- 2.0.2933 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.31 --> 1.0.32
    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.9 --> 1.2.10


- 2.0.2932 -- 2021-02-23

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.15 --> 1.0.16


- 2.0.2931 -- 2021-02-23

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.14.7 --> 1.14.8
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.30 --> 1.0.31


- 2.0.2930 -- 2021-02-23

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.26 --> 1.22.27


- 2.0.2929 -- 2021-02-23

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.10 --> 1.23.11


- 2.0.2928 -- 2021-02-23

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.9 --> 1.9.10


- 2.0.2927 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.29 --> 1.0.30
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.9 --> 1.23.10


- 2.0.2926 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.28 --> 1.0.29
    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.14 --> 2.0.15


- 2.0.2925 -- 2021-02-23

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.12 --> 1.0.13


- 2.0.2924 -- 2021-02-23

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.6.6 --> 1.6.7


- 2.0.2923 -- 2021-02-23

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.8 --> 1.19.9


- 2.0.2922 -- 2021-02-23

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.15 --> 0.12.16


- 2.0.2921 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.27 --> 1.0.28
    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.13 --> 1.28.14


- 2.0.2920 -- 2021-02-23

    - [Ling/ArrayToString](https://github.com/lingtalfi/ArrayToString) 1.4.3 --> 1.4.4
    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.10 --> 1.2.11


- 2.0.2919 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.26 --> 1.0.27
    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.8 --> 1.2.9


- 2.0.2918 -- 2021-02-23

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.14 --> 1.0.15


- 2.0.2917 -- 2021-02-23

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.14.4 --> 1.14.7
    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.13 --> 1.0.14
    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.7 --> 1.2.8
    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.9 --> 1.2.10
    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.12 --> 1.28.13
    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.14 --> 0.12.15
    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.7 --> 1.19.8
    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.6.5 --> 1.6.6
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.11 --> 1.0.12
    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.13 --> 2.0.14
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.8 --> 1.23.9
    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.8 --> 1.9.9


- 2.0.2916 -- 2021-02-23

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.15.5 --> 1.15.6
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.25 --> 1.0.26


- 2.0.2915 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.24 --> 1.0.25
    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.25 --> 1.22.26


- 2.0.2914 -- 2021-02-23

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.10 --> 1.0.11


- 2.0.2913 -- 2021-02-23

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.13 --> 1.14.14


- 2.0.2912 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.23 --> 1.0.24
    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.12 --> 1.14.13


- 2.0.2911 -- 2021-02-23

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.25 --> 0.69.26
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.22 --> 1.0.23


- 2.0.2910 -- 2021-02-23

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.24 --> 1.22.25


- 2.0.2909 -- 2021-02-23

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.8 --> 0.5.9


- 2.0.2908 -- 2021-02-23

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.6 --> 1.7.7


- 2.0.2907 -- 2021-02-23

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.6 --> 1.2.7


- 2.0.2906 -- 2021-02-23

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.7 --> 1.23.8


- 2.0.2905 -- 2021-02-23

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.5 --> 1.2.6


- 2.0.2904 -- 2021-02-23

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.4 --> 1.2.5


- 2.0.2903 -- 2021-02-23

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.1.4 --> 2.1.5


- 2.0.2902 -- 2021-02-23

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.13 --> 0.12.14


- 2.0.2901 -- 2021-02-23

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.12 --> 0.12.13


- 2.0.2900 -- 2021-02-23

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.21 --> 1.0.22
    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.2.5 --> 1.3.0


- 2.0.2899 -- 2021-02-23

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.24 --> 0.69.25
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.20 --> 1.0.21


- 2.0.2898 -- 2021-02-23

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.23 --> 0.69.24
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.19 --> 1.0.20
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.9 --> 1.0.10


- 2.0.2897 -- 2021-02-22

    - [Ling/Light_SpinKitHelper](https://github.com/lingtalfi/Light_SpinKitHelper) 1.0.4 --> 1.0.5


- 2.0.2896 -- 2021-02-22

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.11 --> 2.0.12


- 2.0.2895 -- 2021-02-22

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.10 --> 2.0.11


- 2.0.2894 -- 2021-02-22

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.9 --> 2.0.10


- 2.0.2893 -- 2021-02-22

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.11 --> 0.12.12


- 2.0.2892 -- 2021-02-22

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.10 --> 0.12.11


- 2.0.2891 -- 2021-02-22

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.3 --> 1.5.4


- 2.0.2890 -- 2021-02-22

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.15.4 --> 1.15.5


- 2.0.2889 -- 2021-02-22

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.8 --> 2.0.9


- 2.0.2888 -- 2021-02-22

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.18 --> 1.0.19
    - [Ling/Light_SpinKitHelper](https://github.com/lingtalfi/Light_SpinKitHelper) 1.0.3 --> 1.0.4


- 2.0.2887 -- 2021-02-22

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.22 --> 0.69.23
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.17 --> 1.0.18


- 2.0.2886 -- 2021-02-22

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.16 --> 1.0.17
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.8 --> 1.0.9


- 2.0.2885 -- 2021-02-19

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.8.4 --> 1.8.5
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.15 --> 1.0.16
    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.10 --> 1.29.11
    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.11 --> 1.6.12
    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.12 --> 1.0.13
    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 2.0.2 --> 2.0.3
    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.12.3 --> 1.12.4
    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils) 1.1.7 --> 1.1.8
    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.8 --> 1.2.9
    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.11 --> 1.28.12
    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.9 --> 0.12.10
    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.7 --> 0.5.8
    - [Ling/Light_LoginNotifier](https://github.com/lingtalfi/Light_LoginNotifier) 1.0.6 --> 1.0.7
    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.12 --> 2.0.13
    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.7 --> 2.0.8
    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.7 --> 2.0.8
    - [Ling/Light_TaskScheduler](https://github.com/lingtalfi/Light_TaskScheduler) 1.1.5 --> 1.1.6
    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.10 --> 1.19.11
    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.11 --> 1.31.12
    - [Ling/Light_UserNotifications](https://github.com/lingtalfi/Light_UserNotifications) 1.0.6 --> 1.0.7
    - [Ling/Light_UserPreferences](https://github.com/lingtalfi/Light_UserPreferences) 1.0.6 --> 1.0.7
    - [Ling/Light_UserRowRestriction](https://github.com/lingtalfi/Light_UserRowRestriction) 1.3.2 --> 1.3.3


- 2.0.2884 -- 2021-02-19

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.8.3 --> 1.8.4
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.7 --> 1.0.8


- 2.0.2883 -- 2021-02-19

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.6 --> 1.23.7


- 2.0.2882 -- 2021-02-19

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.14 --> 1.0.15
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.5 --> 1.23.6


- 2.0.2881 -- 2021-02-19

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.11 --> 1.0.12


- 2.0.2880 -- 2021-02-19

    - [Ling/Kwin](https://github.com/lingtalfi/Kwin) 1.0.3 --> 1.0.4


- 2.0.2879 -- 2021-02-19

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.13 --> 1.0.14
    - [Ling/Light_ErrorHandler](https://github.com/lingtalfi/Light_ErrorHandler) 1.0.6 --> 1.0.7


- 2.0.2878 -- 2021-02-18

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.12 --> 1.0.13
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.6 --> 1.0.7


- 2.0.2877 -- 2021-02-18

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.11 --> 1.0.12
    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.23 --> 1.22.24


- 2.0.2876 -- 2021-02-18

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.10 --> 1.0.11
    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.22 --> 1.22.23


- 2.0.2875 -- 2021-02-18

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.21 --> 1.22.22


- 2.0.2874 -- 2021-02-18

    - [Ling/Kwin](https://github.com/lingtalfi/Kwin) 1.0.2 --> 1.0.3


- 2.0.2873 -- 2021-02-18

    - [Ling/Kwin](https://github.com/lingtalfi/Kwin) 1.0.1 --> 1.0.2


- 2.0.2872 -- 2021-02-18

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.28 --> 1.24.29


- 2.0.2871 -- 2021-02-18

    - [Ling/Kwin](https://github.com/lingtalfi/Kwin) 1.0.0 --> 1.0.1


- 2.0.2870 -- 2021-02-18

    - [Ling/Kwin](https://github.com/lingtalfi/Kwin)  --> 1.0.0


- 2.0.2869 -- 2021-02-18

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.27 --> 1.24.28


- 2.0.2868 -- 2021-02-16

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.26 --> 1.24.27


- 2.0.2867 -- 2021-02-16

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.9 --> 1.0.10
    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.25 --> 1.24.26


- 2.0.2866 -- 2021-02-16

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.8 --> 1.0.9
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.4 --> 1.23.5
    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.20 --> 1.22.21


- 2.0.2865 -- 2021-02-15

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.21 --> 0.69.22


- 2.0.2864 -- 2021-02-15

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.7 --> 1.0.8
    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.11 --> 1.14.12


- 2.0.2863 -- 2021-02-15

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.10 --> 1.0.11


- 2.0.2862 -- 2021-02-15

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.9 --> 1.19.10


- 2.0.2861 -- 2021-02-15

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.6 --> 1.0.7
    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.10 --> 1.31.11


- 2.0.2860 -- 2021-02-15

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.304 --> 1.305
    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.5 --> 1.0.6


- 2.0.2859 -- 2021-02-15

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.4 --> 1.0.5
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.5 --> 1.0.6


- 2.0.2858 -- 2021-02-15

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.2 --> 1.0.4
    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.19 --> 1.22.20


- 2.0.2857 -- 2021-02-15

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.16 --> 1.22.19


- 2.0.2856 -- 2021-02-15

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.4 --> 1.0.5
    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.18 --> 1.22.16


- 2.0.2855 -- 2021-02-15

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.17 --> 1.22.18


- 2.0.2854 -- 2021-02-15

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.16 --> 1.22.17


- 2.0.2853 -- 2021-02-15

    - [Ling/ArrayToString](https://github.com/lingtalfi/ArrayToString) 1.4.2 --> 1.4.3


- 2.0.2852 -- 2021-02-12

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.15 --> 1.22.16


- 2.0.2851 -- 2021-02-12

    - [Ling/Light_ErrorHandler](https://github.com/lingtalfi/Light_ErrorHandler) 1.0.5 --> 1.0.6


- 2.0.2850 -- 2021-02-12

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.1 --> 1.0.2


- 2.0.2849 -- 2021-02-12

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.9 --> 1.0.10


- 2.0.2848 -- 2021-02-12

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.14 --> 1.22.15


- 2.0.2847 -- 2021-02-12

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.8 --> 1.0.9


- 2.0.2846 -- 2021-02-12

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.7 --> 1.0.8


- 2.0.2845 -- 2021-02-12

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate) 1.0.0 --> 1.0.1


- 2.0.2844 -- 2021-02-11

    - [Ling/Light_AppBoilerplate](https://github.com/lingtalfi/Light_AppBoilerplate)  --> 1.0.0
    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.3 --> 1.0.4


- 2.0.2843 -- 2021-02-11

    - [Ling/PhpUploadFileFix](https://github.com/lingtalfi/PhpUploadFileFix) 1.0.2 --> 1.0.3


- 2.0.2842 -- 2021-02-11

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.303 --> 1.304


- 2.0.2841 -- 2021-02-11

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.9 --> 1.31.10


- 2.0.2840 -- 2021-02-11

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.7 --> 1.2.8


- 2.0.2839 -- 2021-02-11

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.11 --> 2.0.12
    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.8 --> 1.31.9


- 2.0.2838 -- 2021-02-11

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.6 --> 1.2.7


- 2.0.2837 -- 2021-02-11

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.5 --> 1.0.7


- 2.0.2836 -- 2021-02-11

    - [Ling/Light_UserPreferences](https://github.com/lingtalfi/Light_UserPreferences) 1.0.5 --> 1.0.6


- 2.0.2835 -- 2021-02-11

    - [Ling/Light_UserNotifications](https://github.com/lingtalfi/Light_UserNotifications) 1.0.5 --> 1.0.6


- 2.0.2834 -- 2021-02-11

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.8 --> 1.19.9


- 2.0.2833 -- 2021-02-11

    - [Ling/Light_TaskScheduler](https://github.com/lingtalfi/Light_TaskScheduler) 1.1.4 --> 1.1.5


- 2.0.2832 -- 2021-02-11

    - [Ling/Light_LoginNotifier](https://github.com/lingtalfi/Light_LoginNotifier) 1.0.5 --> 1.0.6


- 2.0.2831 -- 2021-02-11

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.8 --> 0.12.9


- 2.0.2830 -- 2021-02-11

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.10 --> 2.0.11


- 2.0.2829 -- 2021-02-11

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.9 --> 2.0.10


- 2.0.2828 -- 2021-02-11

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.8 --> 2.0.9


- 2.0.2827 -- 2021-02-11

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.7 --> 1.31.8


- 2.0.2826 -- 2021-02-11

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.20 --> 0.69.21


- 2.0.2825 -- 2021-02-09

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.19 --> 0.69.20


- 2.0.2824 -- 2021-02-09

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.6.3 --> 1.6.4


- 2.0.2823 -- 2021-02-09

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.6.2 --> 1.6.3


- 2.0.2822 -- 2021-02-09

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.302 --> 1.303


- 2.0.2821 -- 2021-02-09

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.13 --> 1.22.14


- 2.0.2820 -- 2021-02-09

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.2 --> 1.0.3


- 2.0.2819 -- 2021-02-09

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.12 --> 1.22.13


- 2.0.2818 -- 2021-02-09

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.11 --> 1.22.12


- 2.0.2817 -- 2021-02-09

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.10 --> 1.22.11


- 2.0.2816 -- 2021-02-09

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.9 --> 1.22.10


- 2.0.2815 -- 2021-02-05

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.7.6 --> 1.7.7


- 2.0.2814 -- 2021-02-04

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.24 --> 1.24.25


- 2.0.2813 -- 2021-02-04

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.18 --> 0.69.19


- 2.0.2812 -- 2021-02-04

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.14.3 --> 1.14.4


- 2.0.2811 -- 2021-02-04

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.24 --> 1.10.25


- 2.0.2810 -- 2021-02-02

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.23 --> 1.10.24


- 2.0.2809 -- 2021-02-02

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.4 --> 1.0.5


- 2.0.2808 -- 2021-02-02

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.1 --> 1.0.2


- 2.0.2807 -- 2021-02-02

    - [Ling/BeeFramework](https://github.com/lingtalfi/BeeFramework) 1.0.5 --> 1.0.6


- 2.0.2806 -- 2021-02-02

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.22 --> 1.10.23


- 2.0.2805 -- 2021-02-02

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.20 --> 1.10.22


- 2.0.2804 -- 2021-02-02

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.19 --> 1.10.20


- 2.0.2803 -- 2021-02-02

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.7 --> 2.0.8


- 2.0.2802 -- 2021-02-02

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.11.4 --> 1.11.5


- 2.0.2801 -- 2021-02-02

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.14.2 --> 1.14.3


- 2.0.2800 -- 2021-02-01

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.7.5 --> 1.7.6


- 2.0.2799 -- 2021-01-29

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 1.0.0 --> 1.0.1


- 2.0.2798 -- 2021-01-29

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.4 --> 1.2.5


- 2.0.2797 -- 2021-01-29

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.6 --> 0.5.7


- 2.0.2796 -- 2021-01-29

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.7 --> 0.12.8


- 2.0.2795 -- 2021-01-29

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.5 --> 0.5.6


- 2.0.2794 -- 2021-01-29

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.7 --> 1.19.8


- 2.0.2793 -- 2021-01-29

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.5 --> 1.7.6


- 2.0.2792 -- 2021-01-29

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.5 --> 1.5.6


- 2.0.2791 -- 2021-01-29

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.4 --> 1.0.5


- 2.0.2790 -- 2021-01-29

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.6 --> 2.0.7


- 2.0.2789 -- 2021-01-29

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.6 --> 0.12.7


- 2.0.2788 -- 2021-01-29

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.5 --> 2.0.6


- 2.0.2787 -- 2021-01-29

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.6.4 --> 1.6.5


- 2.0.2786 -- 2021-01-28

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.5 --> 0.12.6


- 2.0.2785 -- 2021-01-28

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.4 --> 2.0.5


- 2.0.2784 -- 2021-01-28

    - [Ling/Light_UserPreferences](https://github.com/lingtalfi/Light_UserPreferences) 1.0.4 --> 1.0.5


- 2.0.2783 -- 2021-01-28

    - [Ling/Light_UserNotifications](https://github.com/lingtalfi/Light_UserNotifications) 1.0.4 --> 1.0.5


- 2.0.2782 -- 2021-01-28

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.6 --> 1.19.7


- 2.0.2781 -- 2021-01-28

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.3 --> 2.0.4


- 2.0.2780 -- 2021-01-28

    - [Ling/Light_TaskScheduler](https://github.com/lingtalfi/Light_TaskScheduler) 1.1.3 --> 1.1.4


- 2.0.2779 -- 2021-01-28

    - [Ling/Light_LoginNotifier](https://github.com/lingtalfi/Light_LoginNotifier) 1.0.4 --> 1.0.5


- 2.0.2778 -- 2021-01-28

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.6 --> 1.31.7


- 2.0.2777 -- 2021-01-28

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.2 --> 2.0.3


- 2.0.2776 -- 2021-01-28

    - [Ling/Light_UserPreferences](https://github.com/lingtalfi/Light_UserPreferences) 1.0.3 --> 1.0.4


- 2.0.2775 -- 2021-01-28

    - [Ling/Light_UserPreferences](https://github.com/lingtalfi/Light_UserPreferences) 1.0.2 --> 1.0.3


- 2.0.2774 -- 2021-01-26

    - [Ling/Light_LoginNotifier](https://github.com/lingtalfi/Light_LoginNotifier) 1.0.3 --> 1.0.4


- 2.0.2773 -- 2021-01-26

    - [Ling/Light_LoginNotifier](https://github.com/lingtalfi/Light_LoginNotifier) 1.0.2 --> 1.0.3


- 2.0.2772 -- 2021-01-26

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller) 0.0.1 --> 1.0.0


- 2.0.2771 -- 2021-01-26

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.3 --> 1.0.4


- 2.0.2770 -- 2021-01-26

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.8 --> 1.22.9


- 2.0.2769 -- 2021-01-26

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.301 --> 1.302


- 2.0.2768 -- 2021-01-26

    - [Ling/Light_TaskScheduler](https://github.com/lingtalfi/Light_TaskScheduler) 1.1.2 --> 1.1.3


- 2.0.2767 -- 2021-01-26

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.6.3 --> 1.6.4


- 2.0.2766 -- 2021-01-26

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.7 --> 1.22.8


- 2.0.2765 -- 2021-01-26

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.6 --> 1.22.7


- 2.0.2764 -- 2021-01-26

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.1 --> 2.0.2


- 2.0.2763 -- 2021-01-26

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.23 --> 1.24.24


- 2.0.2762 -- 2021-01-26

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 2.0.0 --> 2.0.1


- 2.0.2761 -- 2021-01-26

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.5 --> 1.22.6


- 2.0.2760 -- 2021-01-25

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.8.2 --> 2.0.0


- 2.0.2759 -- 2021-01-25

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.2 --> 1.0.3


- 2.0.2758 -- 2021-01-25

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.21 --> 1.24.23


- 2.0.2757 -- 2021-01-25

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.5 --> 1.2.6


- 2.0.2756 -- 2021-01-25

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.4 --> 1.2.5


- 2.0.2755 -- 2021-01-25

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.3 --> 1.2.4


- 2.0.2754 -- 2021-01-22

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.2 --> 1.2.3


- 2.0.2753 -- 2021-01-22

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.13.6 --> 1.13.7


- 2.0.2752 -- 2021-01-22

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.4 --> 1.22.5


- 2.0.2751 -- 2021-01-22

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.3 --> 1.22.4


- 2.0.2750 -- 2021-01-21

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.2 --> 1.22.3


- 2.0.2749 -- 2021-01-21

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.7 --> 1.9.8


- 2.0.2748 -- 2021-01-21

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.6 --> 1.9.7


- 2.0.2747 -- 2021-01-21

    - [Ling/CyclicChainDetector](https://github.com/lingtalfi/CyclicChainDetector) 1.1.0 --> 1.1.1


- 2.0.2746 -- 2021-01-21

    - [Ling/CyclicChainDetector](https://github.com/lingtalfi/CyclicChainDetector) 1.0.0 --> 1.1.0


- 2.0.2745 -- 2021-01-21

    - [Ling/CyclicChainDetector](https://github.com/lingtalfi/CyclicChainDetector)  --> 1.0.0


- 2.0.2744 -- 2021-01-19

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.1 --> 1.22.2


- 2.0.2743 -- 2021-01-19

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.22.0 --> 1.22.1


- 2.0.2742 -- 2021-01-18

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.15 --> 1.22.0


- 2.0.2741 -- 2021-01-15

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.1 --> 1.0.2


- 2.0.2740 -- 2021-01-14

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli) 1.0.0 --> 1.0.1


- 2.0.2739 -- 2021-01-14

    - [Ling/Light_Cli](https://github.com/lingtalfi/Light_Cli)  --> 1.0.0


- 2.0.2738 -- 2021-01-14

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.18 --> 1.10.19


- 2.0.2737 -- 2021-01-14

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.17 --> 1.10.18


- 2.0.2736 -- 2021-01-14

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.16 --> 1.10.17


- 2.0.2735 -- 2021-01-14

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.15 --> 1.10.16


- 2.0.2734 -- 2021-01-12

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.14 --> 1.10.15


- 2.0.2733 -- 2021-01-11

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.14 --> 1.21.15


- 2.0.2732 -- 2021-01-11

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.13 --> 1.21.14


- 2.0.2731 -- 2021-01-11

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.3 --> 1.301


- 2.0.2730 -- 2021-01-11

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.9.5 --> 1.9.6


- 2.0.2729 -- 2021-01-11

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.13 --> 1.10.14


- 2.0.2728 -- 2021-01-08

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.12 --> 1.10.13


- 2.0.2727 -- 2021-01-07

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.299 --> 1.3


- 2.0.2726 -- 2021-01-07

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.13.2 --> 1.13.3


- 2.0.2725 -- 2021-01-07

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.298 --> 1.299


- 2.0.2724 -- 2021-01-07

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.297 --> 1.298


- 2.0.2723 -- 2021-01-07

    - [Ling/ConventionGuy](https://github.com/lingtalfi/ConventionGuy) 1.1.2 --> 1.1.3


- 2.0.2722 -- 2021-01-07

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.11 --> 1.10.12


- 2.0.2721 -- 2021-01-05

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.10 --> 1.10.11


- 2.0.2720 -- 2021-01-05

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.9 --> 1.10.10


- 2.0.2719 -- 2021-01-05

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.12 --> 1.21.13


- 2.0.2718 -- 2021-01-05

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.11 --> 1.21.12


- 2.0.2717 -- 2020-12-31

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.8 --> 1.10.9


- 2.0.2716 -- 2020-12-31

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.296 --> 1.297


- 2.0.2715 -- 2020-12-28

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.10 --> 1.21.11


- 2.0.2714 -- 2020-12-17

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.9 --> 1.21.10


- 2.0.2713 -- 2020-12-16

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.295 --> 1.296


- 2.0.2712 -- 2020-12-14

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.8 --> 1.21.9


- 2.0.2711 -- 2020-12-14

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.7 --> 1.10.8


- 2.0.2710 -- 2020-12-14

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.6 --> 1.10.7


- 2.0.2709 -- 2020-12-14

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.294 --> 1.295


- 2.0.2708 -- 2020-12-11

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.293 --> 1.294


- 2.0.2707 -- 2020-12-10

    - [Ling/AdminTable](https://github.com/lingtalfi/AdminTable) 1.6.8 --> 1.6.9


- 2.0.2706 -- 2020-12-08

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.7 --> 1.21.8


- 2.0.2705 -- 2020-12-08

    - [Ling/Zoli](https://github.com/lingtalfi/Zoli) 1.4.1 --> 1.4.2


- 2.0.2704 -- 2020-12-08

    - [Ling/ZeusTemplateEngine](https://github.com/lingtalfi/ZeusTemplateEngine) 1.3.1 --> 1.3.2


- 2.0.2703 -- 2020-12-08

    - [Ling/ZephyrTemplateEngine](https://github.com/lingtalfi/ZephyrTemplateEngine) 1.1.3 --> 1.1.4


- 2.0.2702 -- 2020-12-08

    - [Ling/YouTubeUtils](https://github.com/lingtalfi/YouTubeUtils) 1.2.1 --> 1.2.2


- 2.0.2701 -- 2020-12-08

    - [Ling/XiaoApi](https://github.com/lingtalfi/XiaoApi) 2.2.5 --> 2.2.6


- 2.0.2700 -- 2020-12-08

    - [Ling/WrappedString](https://github.com/lingtalfi/WrappedString) 1.3.1 --> 1.3.2


- 2.0.2699 -- 2020-12-08

    - [Ling/WiseTool](https://github.com/lingtalfi/WiseTool) 1.2.1 --> 1.2.2


- 2.0.2698 -- 2020-12-08

    - [Ling/WebWizardTools](https://github.com/lingtalfi/WebWizardTools) 1.3.2 --> 1.3.3


- 2.0.2697 -- 2020-12-08

    - [Ling/WebBox](https://github.com/lingtalfi/WebBox) 1.0.2 --> 1.0.3


- 2.0.2696 -- 2020-12-08

    - [Ling/VideoSubtitles](https://github.com/lingtalfi/VideoSubtitles) 1.2.1 --> 1.2.2


- 2.0.2695 -- 2020-12-08

    - [Ling/VariableToString](https://github.com/lingtalfi/VariableToString) 1.1.1 --> 1.1.2


- 2.0.2694 -- 2020-12-08

    - [Ling/VSwitch](https://github.com/lingtalfi/VSwitch) 1.3.1 --> 1.3.2


- 2.0.2693 -- 2020-12-08

    - [Ling/UrlFriendlyListHelper](https://github.com/lingtalfi/UrlFriendlyListHelper) 1.1.1 --> 1.1.2


- 2.0.2692 -- 2020-12-08

    - [Ling/UploaderHandler](https://github.com/lingtalfi/UploaderHandler) 1.0.1 --> 1.0.2


- 2.0.2691 -- 2020-12-08

    - [Ling/Uploader](https://github.com/lingtalfi/Uploader) 1.0.1 --> 1.0.2


- 2.0.2690 -- 2020-12-08

    - [Ling/Updf](https://github.com/lingtalfi/Updf) 1.2.4 --> 1.2.5


- 2.0.2689 -- 2020-12-08

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.6 --> 1.21.7


- 2.0.2688 -- 2020-12-08

    - [Ling/UniversalTemplateEngine](https://github.com/lingtalfi/UniversalTemplateEngine) 1.1.1 --> 1.1.2


- 2.0.2687 -- 2020-12-08

    - [Ling/UniversalLogger](https://github.com/lingtalfi/UniversalLogger) 1.1.1 --> 1.1.2


- 2.0.2686 -- 2020-12-08

    - [Ling/UniqueNameGenerator](https://github.com/lingtalfi/UniqueNameGenerator) 1.1.1 --> 1.1.2


- 2.0.2685 -- 2020-12-08

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.5 --> 1.9.6


- 2.0.2684 -- 2020-12-08

    - [Ling/Umail](https://github.com/lingtalfi/Umail) 1.6.1 --> 1.6.2


- 2.0.2683 -- 2020-12-08

    - [Ling/UltimateUploadHandler](https://github.com/lingtalfi/UltimateUploadHandler) 1.2.1 --> 1.2.2


- 2.0.2682 -- 2020-12-08

    - [Ling/TreeListHelper](https://github.com/lingtalfi/TreeListHelper) 1.0.1 --> 1.0.2


- 2.0.2681 -- 2020-12-08

    - [Ling/Tokens](https://github.com/lingtalfi/Tokens) 1.4.1 --> 1.4.2


- 2.0.2680 -- 2020-12-08

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.11.3 --> 1.11.4


- 2.0.2679 -- 2020-12-08

    - [Ling/Tiphaine](https://github.com/lingtalfi/Tiphaine) 1.0.1 --> 1.0.2


- 2.0.2678 -- 2020-12-08

    - [Ling/TinyBullsheeter](https://github.com/lingtalfi/TinyBullsheeter) 1.0.1 --> 1.0.2


- 2.0.2677 -- 2020-12-08

    - [Ling/TimeFileUtil](https://github.com/lingtalfi/TimeFileUtil) 1.0.1 --> 1.0.2


- 2.0.2676 -- 2020-12-08

    - [Ling/Tim](https://github.com/lingtalfi/Tim) 1.6.1 --> 1.6.2


- 2.0.2675 -- 2020-12-08

    - [Ling/ThumbnailTools](https://github.com/lingtalfi/ThumbnailTools) 1.3.2 --> 1.3.3


- 2.0.2674 -- 2020-12-08

    - [Ling/TheScientist](https://github.com/lingtalfi/TheScientist) 1.0.1 --> 1.0.2


- 2.0.2673 -- 2020-12-08

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.20 --> 1.24.21


- 2.0.2672 -- 2020-12-08

    - [Ling/TheAnarchist](https://github.com/lingtalfi/TheAnarchist) 1.0.1 --> 1.0.2


- 2.0.2671 -- 2020-12-08

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.11.4 --> 1.11.5


- 2.0.2670 -- 2020-12-08

    - [Ling/TabathaCache](https://github.com/lingtalfi/TabathaCache) 2.4.1 --> 2.4.2


- 2.0.2669 -- 2020-12-08

    - [Ling/SvgGridGenerator](https://github.com/lingtalfi/SvgGridGenerator) 1.0.1 --> 1.0.2


- 2.0.2668 -- 2020-12-08

    - [Ling/SvelteTemplateBuilder](https://github.com/lingtalfi/SvelteTemplateBuilder) 1.1.1 --> 1.1.2


- 2.0.2667 -- 2020-12-08

    - [Ling/SuspiciousException](https://github.com/lingtalfi/SuspiciousException) 1.0.1 --> 1.0.2


- 2.0.2666 -- 2020-12-08

    - [Ling/StringFormatter](https://github.com/lingtalfi/StringFormatter) 1.0.1 --> 1.0.2


- 2.0.2665 -- 2020-12-08

    - [Ling/StepFormBuilder](https://github.com/lingtalfi/StepFormBuilder) 1.1.1 --> 1.1.2


- 2.0.2664 -- 2020-12-08

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.13.5 --> 1.13.6


- 2.0.2663 -- 2020-12-08

    - [Ling/SqlQueryWrapper](https://github.com/lingtalfi/SqlQueryWrapper) 1.6.1 --> 1.6.2


- 2.0.2662 -- 2020-12-08

    - [Ling/SqlQuery](https://github.com/lingtalfi/SqlQuery) 1.10.4 --> 1.10.5


- 2.0.2661 -- 2020-12-08

    - [Ling/SokoForm](https://github.com/lingtalfi/SokoForm) 1.72.1 --> 1.72.2


- 2.0.2660 -- 2020-12-08

    - [Ling/SitemapSlicer](https://github.com/lingtalfi/SitemapSlicer) 1.0.1 --> 1.0.2


- 2.0.2659 -- 2020-12-08

    - [Ling/SitemapBuilderBox](https://github.com/lingtalfi/SitemapBuilderBox) 1.0.1 --> 1.0.2


- 2.0.2658 -- 2020-12-08

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.15 --> 1.30.16


- 2.0.2657 -- 2020-12-08

    - [Ling/SimpleCurl](https://github.com/lingtalfi/SimpleCurl) 1.0.4 --> 1.0.5


- 2.0.2656 -- 2020-12-08

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.6.1 --> 1.6.2


- 2.0.2655 -- 2020-12-08

    - [Ling/SequenceMatcher](https://github.com/lingtalfi/SequenceMatcher) 1.0.1 --> 1.0.2


- 2.0.2654 -- 2020-12-08

    - [Ling/SelectChain](https://github.com/lingtalfi/SelectChain) 1.0.1 --> 1.0.2


- 2.0.2653 -- 2020-12-08

    - [Ling/Select2](https://github.com/lingtalfi/Select2) 1.0.2 --> 1.0.3


- 2.0.2652 -- 2020-12-08

    - [Ling/SecureImageUploader](https://github.com/lingtalfi/SecureImageUploader) 1.0.1 --> 1.0.2


- 2.0.2651 -- 2020-12-08

    - [Ling/SaveOrm](https://github.com/lingtalfi/SaveOrm) 1.18.2 --> 1.18.3
    - [Ling/ScreenDebug](https://github.com/lingtalfi/ScreenDebug) 1.0.1 --> 1.0.2


- 2.0.2650 -- 2020-12-08

    - [Ling/SafeUploader](https://github.com/lingtalfi/SafeUploader) 1.2.1 --> 1.2.2


- 2.0.2649 -- 2020-12-08

    - [Ling/RssUtil](https://github.com/lingtalfi/RssUtil) 1.0.1 --> 1.0.2


- 2.0.2648 -- 2020-12-08

    - [Ling/RowsGeneratorWidget](https://github.com/lingtalfi/RowsGeneratorWidget) 1.0.1 --> 1.0.2


- 2.0.2647 -- 2020-12-08

    - [Ling/RowsGenerator](https://github.com/lingtalfi/RowsGenerator) 1.6.1 --> 1.6.2


- 2.0.2646 -- 2020-12-08

    - [Ling/Registry](https://github.com/lingtalfi/Registry) 1.0.1 --> 1.0.2


- 2.0.2645 -- 2020-12-08

    - [Ling/ReflectionRepresentation](https://github.com/lingtalfi/ReflectionRepresentation) 1.0.1 --> 1.0.2


- 2.0.2644 -- 2020-12-08

    - [Ling/Quoter](https://github.com/lingtalfi/Quoter) 1.4.1 --> 1.4.2


- 2.0.2643 -- 2020-12-08

    - [Ling/QuickPdo](https://github.com/lingtalfi/QuickPdo) 2.41.2 --> 2.41.3


- 2.0.2642 -- 2020-12-08

    - [Ling/QuickLog](https://github.com/lingtalfi/QuickLog) 1.0.1 --> 1.0.2


- 2.0.2641 -- 2020-12-08

    - [Ling/QuickForm](https://github.com/lingtalfi/QuickForm) 4.6.2 --> 4.6.3


- 2.0.2640 -- 2020-12-08

    - [Ling/QueryFilterBox](https://github.com/lingtalfi/QueryFilterBox) 1.6.1 --> 1.6.2


- 2.0.2639 -- 2020-12-08

    - [Ling/PublicException](https://github.com/lingtalfi/PublicException) 1.0.1 --> 1.0.2


- 2.0.2638 -- 2020-12-08

    - [Ling/ProjectInfo](https://github.com/lingtalfi/ProjectInfo) 1.0.2 --> 1.0.3


- 2.0.2637 -- 2020-12-08

    - [Ling/Program](https://github.com/lingtalfi/Program) 1.1.1 --> 1.1.2


- 2.0.2636 -- 2020-12-08

    - [Ling/Privilege](https://github.com/lingtalfi/Privilege) 1.2.1 --> 1.2.2


- 2.0.2635 -- 2020-12-08

    - [Ling/PlanetSitemap](https://github.com/lingtalfi/PlanetSitemap) 1.0.3 --> 1.0.4


- 2.0.2634 -- 2020-12-08

    - [Ling/PhpUploadFileFix](https://github.com/lingtalfi/PhpUploadFileFix) 1.0.1 --> 1.0.2


- 2.0.2633 -- 2020-12-08

    - [Ling/PhpTemplate](https://github.com/lingtalfi/PhpTemplate) 1.0.1 --> 1.0.2


- 2.0.2632 -- 2020-12-08

    - [Ling/PhpTailer](https://github.com/lingtalfi/PhpTailer) 1.0.2 --> 1.0.3


- 2.0.2631 -- 2020-12-08

    - [Ling/PhpSpreadSheetTool](https://github.com/lingtalfi/PhpSpreadSheetTool) 1.0.4 --> 1.0.5


- 2.0.2630 -- 2020-12-08

    - [Ling/PhpFileValidator](https://github.com/lingtalfi/PhpFileValidator) 1.0.1 --> 1.0.2


- 2.0.2629 -- 2020-12-08

    - [Ling/PhpFile](https://github.com/lingtalfi/PhpFile) 1.1.1 --> 1.1.2


- 2.0.2628 -- 2020-12-08

    - [Ling/PhpExcelTool](https://github.com/lingtalfi/PhpExcelTool) 1.9.5 --> 1.9.6


- 2.0.2627 -- 2020-12-08

    - [Ling/PhpErrorName](https://github.com/lingtalfi/PhpErrorName) 1.0.1 --> 1.0.2


- 2.0.2626 -- 2020-12-08

    - [Ling/PhpBeast](https://github.com/lingtalfi/PhpBeast) 1.4.1 --> 1.4.2


- 2.0.2625 -- 2020-12-08

    - [Ling/PersistentRowCollection](https://github.com/lingtalfi/PersistentRowCollection) 1.0.1 --> 1.0.2


- 2.0.2624 -- 2020-12-08

    - [Ling/PermsHiker](https://github.com/lingtalfi/PermsHiker) 1.1.1 --> 1.1.2


- 2.0.2623 -- 2020-12-08

    - [Ling/Pea](https://github.com/lingtalfi/Pea) 1.2.1 --> 1.2.2


- 2.0.2622 -- 2020-12-08

    - [Ling/ParseDown](https://github.com/lingtalfi/ParseDown) 1.0.1 --> 1.0.2


- 2.0.2621 -- 2020-12-08

    - [Ling/ParenthesisMirrorParser](https://github.com/lingtalfi/ParenthesisMirrorParser) 1.0.2 --> 1.0.3


- 2.0.2620 -- 2020-12-08

    - [Ling/ParentChild](https://github.com/lingtalfi/ParentChild) 1.0.1 --> 1.0.2


- 2.0.2619 -- 2020-12-08

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.10.1 --> 1.10.2


- 2.0.2618 -- 2020-12-08

    - [Ling/Panda_Headers](https://github.com/lingtalfi/Panda_Headers) 1.0.1 --> 1.0.2


- 2.0.2617 -- 2020-12-08

    - [Ling/Packer](https://github.com/lingtalfi/Packer) 1.2.1 --> 1.2.2


- 2.0.2616 -- 2020-12-08

    - [Ling/Output](https://github.com/lingtalfi/Output) 1.7.1 --> 1.7.2


- 2.0.2615 -- 2020-12-08

    - [Ling/Ornella](https://github.com/lingtalfi/Ornella) 1.0.1 --> 1.0.2


- 2.0.2614 -- 2020-12-08

    - [Ling/OrmTools](https://github.com/lingtalfi/OrmTools) 1.18.1 --> 1.18.2


- 2.0.2613 -- 2020-12-08

    - [Ling/Options](https://github.com/lingtalfi/Options) 1.1.1 --> 1.1.2


- 2.0.2612 -- 2020-12-08

    - [Ling/OnTheFlyForm](https://github.com/lingtalfi/OnTheFlyForm) 2.19.1 --> 2.19.2


- 2.0.2611 -- 2020-12-08

    - [Ling/Octopus](https://github.com/lingtalfi/Octopus) 1.4.2 --> 1.4.3


- 2.0.2610 -- 2020-12-08

    - [Ling/Observer](https://github.com/lingtalfi/Observer) 1.0.1 --> 1.0.2


- 2.0.2609 -- 2020-12-08

    - [Ling/NumericKeyArray](https://github.com/lingtalfi/NumericKeyArray) 1.1.1 --> 1.1.2


- 2.0.2608 -- 2020-12-08

    - [Ling/Notifier](https://github.com/lingtalfi/Notifier) 1.0.1 --> 1.0.2


- 2.0.2607 -- 2020-12-08

    - [Ling/Notificator](https://github.com/lingtalfi/Notificator) 1.1.1 --> 1.1.2


- 2.0.2606 -- 2020-12-08

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.9.6 --> 1.9.7


- 2.0.2605 -- 2020-12-08

    - [Ling/NaturallySimpleXmlElement](https://github.com/lingtalfi/NaturallySimpleXmlElement) 1.0.1 --> 1.0.2


- 2.0.2604 -- 2020-12-08

    - [Ling/MysqlTabular](https://github.com/lingtalfi/MysqlTabular) 1.0.1 --> 1.0.2


- 2.0.2603 -- 2020-12-08

    - [Ling/MysqlCreateTableUtil](https://github.com/lingtalfi/MysqlCreateTableUtil) 1.0.3 --> 1.0.4


- 2.0.2602 -- 2020-12-08

    - [Ling/MySimpleXmlElement](https://github.com/lingtalfi/MySimpleXmlElement) 1.1.1 --> 1.1.2


- 2.0.2601 -- 2020-12-08

    - [Ling/Models](https://github.com/lingtalfi/Models) 1.26.1 --> 1.26.2


- 2.0.2600 -- 2020-12-08

    - [Ling/ModelRenderers](https://github.com/lingtalfi/ModelRenderers) 1.7.4 --> 1.7.5


- 2.0.2599 -- 2020-12-08

    - [Ling/MikeMagicTools](https://github.com/lingtalfi/MikeMagicTools) 1.1.1 --> 1.1.2


- 2.0.2598 -- 2020-12-08

    - [Ling/MethodInjector](https://github.com/lingtalfi/MethodInjector) 1.5.1 --> 1.5.2


- 2.0.2597 -- 2020-12-08

    - [Ling/Meredith](https://github.com/lingtalfi/Meredith) 3.1.1 --> 3.1.2


- 2.0.2596 -- 2020-12-08

    - [Ling/Lys](https://github.com/lingtalfi/Lys) 3.2.1 --> 3.2.2


- 2.0.2595 -- 2020-12-08

    - [Ling/Logger](https://github.com/lingtalfi/Logger) 1.4.1 --> 1.4.2


- 2.0.2594 -- 2020-12-08

    - [Ling/LogSlicer](https://github.com/lingtalfi/LogSlicer) 1.1.1 --> 1.1.2


- 2.0.2593 -- 2020-12-08

    - [Ling/Localys](https://github.com/lingtalfi/Localys) 1.9.1 --> 1.9.2


- 2.0.2592 -- 2020-12-08

    - [Ling/Loader](https://github.com/lingtalfi/Loader) 1.0.1 --> 1.0.2


- 2.0.2591 -- 2020-12-08

    - [Ling/ListParams](https://github.com/lingtalfi/ListParams) 1.10.5 --> 1.10.6


- 2.0.2590 -- 2020-12-08

    - [Ling/ListModifier](https://github.com/lingtalfi/ListModifier) 1.3.1 --> 1.3.2


- 2.0.2589 -- 2020-12-08

    - [Ling/Linker](https://github.com/lingtalfi/Linker) 1.0.1 --> 1.0.2


- 2.0.2588 -- 2020-12-08

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.3 --> 1.23.4


- 2.0.2587 -- 2020-12-08

    - [Ling/LinearFile](https://github.com/lingtalfi/LinearFile) 1.0.1 --> 1.0.2


- 2.0.2586 -- 2020-12-08

    - [Ling/Light_ZouUploader](https://github.com/lingtalfi/Light_ZouUploader) 1.1.2 --> 1.1.3


- 2.0.2585 -- 2020-12-08

    - [Ling/Light_ZephyrTemplate](https://github.com/lingtalfi/Light_ZephyrTemplate) 1.2.1 --> 1.2.2


- 2.0.2584 -- 2020-12-08

    - [Ling/Light_UserRowRestriction](https://github.com/lingtalfi/Light_UserRowRestriction) 1.3.1 --> 1.3.2


- 2.0.2583 -- 2020-12-08

    - [Ling/Light_UserPreferences](https://github.com/lingtalfi/Light_UserPreferences) 1.0.1 --> 1.0.2


- 2.0.2582 -- 2020-12-08

    - [Ling/Light_UserNotifications](https://github.com/lingtalfi/Light_UserNotifications) 1.0.3 --> 1.0.4


- 2.0.2581 -- 2020-12-08

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.5.4 --> 1.5.5


- 2.0.2580 -- 2020-12-08

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.5 --> 1.31.6


- 2.0.2579 -- 2020-12-08

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.5 --> 1.19.6


- 2.0.2578 -- 2020-12-08

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.7.1 --> 1.7.2


- 2.0.2577 -- 2020-12-08

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.8.7 --> 1.8.8


- 2.0.2576 -- 2020-12-08

    - [Ling/Light_TaskScheduler](https://github.com/lingtalfi/Light_TaskScheduler) 1.1.1 --> 1.1.2


- 2.0.2575 -- 2020-12-08

    - [Ling/Light_TablePrefixInfo](https://github.com/lingtalfi/Light_TablePrefixInfo) 1.0.1 --> 1.0.2


- 2.0.2574 -- 2020-12-08

    - [Ling/Light_SpinKitHelper](https://github.com/lingtalfi/Light_SpinKitHelper) 1.0.2 --> 1.0.3


- 2.0.2573 -- 2020-12-08

    - [Ling/Light_SimpleHttpServer](https://github.com/lingtalfi/Light_SimpleHttpServer) 1.0.5 --> 1.0.6


- 2.0.2572 -- 2020-12-08

    - [Ling/Light_Router](https://github.com/lingtalfi/Light_Router) 1.0.1 --> 1.0.2


- 2.0.2571 -- 2020-12-08

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.11.2 --> 1.11.3


- 2.0.2570 -- 2020-12-08

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.6 --> 2.0.7


- 2.0.2569 -- 2020-12-08

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.6 --> 2.0.7


- 2.0.2568 -- 2020-12-08

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.14 --> 1.31.15


- 2.0.2567 -- 2020-12-08

    - [Ling/Light_QuickMailAlert](https://github.com/lingtalfi/Light_QuickMailAlert) 1.1.1 --> 1.1.2


- 2.0.2566 -- 2020-12-08

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.2 --> 1.5.3


- 2.0.2565 -- 2020-12-08

    - [Ling/Light_PrerouteHub](https://github.com/lingtalfi/Light_PrerouteHub) 1.0.1 --> 1.0.2


- 2.0.2564 -- 2020-12-08

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.8.1 --> 1.8.2


- 2.0.2563 -- 2020-12-08

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.6.2 --> 1.6.3


- 2.0.2562 -- 2020-12-08

    - [Ling/Light_PlanetInstaller](https://github.com/lingtalfi/Light_PlanetInstaller)  --> 0.0.1


- 2.0.2561 -- 2020-12-08

    - [Ling/Light_PasswordProtector](https://github.com/lingtalfi/Light_PasswordProtector) 1.0.2 --> 1.0.3


- 2.0.2560 -- 2020-12-08

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.3.5 --> 1.3.6


- 2.0.2559 -- 2020-12-08

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 3.0.5 --> 3.0.6


- 2.0.2558 -- 2020-12-08

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.4 --> 1.3.5


- 2.0.2557 -- 2020-12-08

    - [Ling/Light_LoginNotifier](https://github.com/lingtalfi/Light_LoginNotifier) 1.0.1 --> 1.0.2


- 2.0.2556 -- 2020-12-08

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.11.4 --> 1.11.5


- 2.0.2555 -- 2020-12-08

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.6.2 --> 1.6.3


- 2.0.2554 -- 2020-12-08

    - [Ling/Light_LingHooks](https://github.com/lingtalfi/Light_LingHooks) 1.0.1 --> 1.0.2


- 2.0.2553 -- 2020-12-08

    - [Ling/Light_LightInstance](https://github.com/lingtalfi/Light_LightInstance) 1.2.2 --> 1.2.3


- 2.0.2552 -- 2020-12-08

    - [Ling/Light_Kit_WebsiteBuilder](https://github.com/lingtalfi/Light_Kit_WebsiteBuilder) 1.0.2 --> 1.0.3


- 2.0.2551 -- 2020-12-08

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 1.2.1 --> 1.2.2


- 2.0.2550 -- 2020-12-08

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.5 --> 1.18.6


- 2.0.2549 -- 2020-12-08

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.3 --> 1.2.4


- 2.0.2548 -- 2020-12-08

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.4 --> 0.5.5


- 2.0.2547 -- 2020-12-08

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.4 --> 1.7.5


- 2.0.2546 -- 2020-12-08

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.4 --> 1.5.5


- 2.0.2545 -- 2020-12-08

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.3 --> 1.0.4


- 2.0.2544 -- 2020-12-08

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.6 --> 1.19.7


- 2.0.2543 -- 2020-12-08

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.5 --> 1.6.6


- 2.0.2542 -- 2020-12-08

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.4 --> 0.12.5


- 2.0.2541 -- 2020-12-08

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.17.1 --> 1.17.2


- 2.0.2540 -- 2020-12-08

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer) 1.3.1 --> 1.3.2


- 2.0.2539 -- 2020-12-08

    - [Ling/Light_HtmlPageCopilot](https://github.com/lingtalfi/Light_HtmlPageCopilot) 1.0.4 --> 1.0.5


- 2.0.2538 -- 2020-12-08

    - [Ling/Light_Flasher](https://github.com/lingtalfi/Light_Flasher) 1.3.1 --> 1.3.2


- 2.0.2537 -- 2020-12-08

    - [Ling/Light_Firewall](https://github.com/lingtalfi/Light_Firewall) 1.1.1 --> 1.1.2


- 2.0.2536 -- 2020-12-08

    - [Ling/Light_FileWatcher](https://github.com/lingtalfi/Light_FileWatcher) 1.1.1 --> 1.1.2


- 2.0.2535 -- 2020-12-08

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.2 --> 1.2.3


- 2.0.2534 -- 2020-12-08

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.9.4 --> 1.9.5


- 2.0.2533 -- 2020-12-08

    - [Ling/Light_ErrorPop](https://github.com/lingtalfi/Light_ErrorPop) 1.0.3 --> 1.0.4


- 2.0.2532 -- 2020-12-08

    - [Ling/Light_ErrorHandler](https://github.com/lingtalfi/Light_ErrorHandler) 1.0.4 --> 1.0.5


- 2.0.2531 -- 2020-12-08

    - [Ling/Light_EndRoutine_Debugger](https://github.com/lingtalfi/Light_EndRoutine_Debugger) 1.2.2 --> 1.2.3


- 2.0.2530 -- 2020-12-08

    - [Ling/Light_EndRoutine_CsrfPageCleaner](https://github.com/lingtalfi/Light_EndRoutine_CsrfPageCleaner) 1.4.1 --> 1.4.2


- 2.0.2529 -- 2020-12-08

    - [Ling/Light_EndRoutine](https://github.com/lingtalfi/Light_EndRoutine) 1.3.1 --> 1.3.2


- 2.0.2528 -- 2020-12-08

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.2.4 --> 1.2.5


- 2.0.2527 -- 2020-12-08

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.10 --> 1.28.11


- 2.0.2526 -- 2020-12-08

    - [Ling/Light_DebugTrace](https://github.com/lingtalfi/Light_DebugTrace) 1.0.1 --> 1.0.2


- 2.0.2525 -- 2020-12-08

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.1 --> 1.2.2


- 2.0.2524 -- 2020-12-08

    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils) 1.1.6 --> 1.1.7


- 2.0.2523 -- 2020-12-08

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.12.2 --> 1.12.3


- 2.0.2522 -- 2020-12-08

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.10 --> 1.14.11


- 2.0.2521 -- 2020-12-08

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple) 1.2.2 --> 1.2.3


- 2.0.2520 -- 2020-12-08

    - [Ling/Light_CsrfSession](https://github.com/lingtalfi/Light_CsrfSession) 1.0.2 --> 1.0.3


- 2.0.2519 -- 2020-12-08

    - [Ling/Light_Csrf](https://github.com/lingtalfi/Light_Csrf) 1.0.3 --> 1.0.4


- 2.0.2518 -- 2020-12-08

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 2.0.1 --> 2.0.2


- 2.0.2517 -- 2020-12-08

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.3 --> 1.2.4


- 2.0.2516 -- 2020-12-08

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.10 --> 1.6.11


- 2.0.2515 -- 2020-12-08

    - [Ling/Light_Bullsheet](https://github.com/lingtalfi/Light_Bullsheet) 1.1.1 --> 1.1.2


- 2.0.2514 -- 2020-12-08

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.9 --> 1.29.10


- 2.0.2513 -- 2020-12-08

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.9.1 --> 1.9.2


- 2.0.2512 -- 2020-12-08

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.1.3 --> 2.1.4


- 2.0.2511 -- 2020-12-08

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.8.2 --> 1.8.3


- 2.0.2510 -- 2020-12-08

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger) 1.0.1 --> 1.0.2


- 2.0.2509 -- 2020-12-08

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.17 --> 0.69.18


- 2.0.2508 -- 2020-12-08

    - [Ling/Komin](https://github.com/lingtalfi/Komin) 1.0.1 --> 1.0.2
    - [Ling/KrankenStein](https://github.com/lingtalfi/KrankenStein) 1.0.2 --> 1.0.3


- 2.0.2507 -- 2020-12-08

    - [Ling/Kit_PrototypeWidget](https://github.com/lingtalfi/Kit_PrototypeWidget) 1.1.1 --> 1.1.2


- 2.0.2506 -- 2020-12-08

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.30.1 --> 1.30.2


- 2.0.2505 -- 2020-12-08

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.12.2 --> 1.12.3


- 2.0.2504 -- 2020-12-08

    - [Ling/KaminosUtils](https://github.com/lingtalfi/KaminosUtils) 1.0.1 --> 1.0.2


- 2.0.2503 -- 2020-12-08

    - [Ling/KamilleWidgets](https://github.com/lingtalfi/KamilleWidgets) 1.0.1 --> 1.0.2


- 2.0.2502 -- 2020-12-08

    - [Ling/KamillePacker](https://github.com/lingtalfi/KamillePacker) 1.7.1 --> 1.7.2


- 2.0.2501 -- 2020-12-08

    - [Ling/KamilleEssentialTools](https://github.com/lingtalfi/KamilleEssentialTools) 1.0.1 --> 1.0.2


- 2.0.2500 -- 2020-12-08

    - [Ling/JumboExploder](https://github.com/lingtalfi/JumboExploder) 1.0.1 --> 1.0.2


- 2.0.2499 -- 2020-12-08

    - [Ling/JqueryUrlWithDropZone](https://github.com/lingtalfi/JqueryUrlWithDropZone) 1.0.1 --> 1.0.2


- 2.0.2498 -- 2020-12-08

    - [Ling/Jquery](https://github.com/lingtalfi/Jquery) 1.1.2 --> 1.1.3


- 2.0.2497 -- 2020-12-08

    - [Ling/Jin](https://github.com/lingtalfi/Jin) 1.0.2 --> 1.0.3


- 2.0.2496 -- 2020-12-08

    - [Ling/JSortableLists](https://github.com/lingtalfi/JSortableLists) 1.0.1 --> 1.0.2


- 2.0.2495 -- 2020-12-08

    - [Ling/JSortTable](https://github.com/lingtalfi/JSortTable) 1.0.1 --> 1.0.2


- 2.0.2494 -- 2020-12-08

    - [Ling/JRicAdminTableHelper](https://github.com/lingtalfi/JRicAdminTableHelper) 1.0.7 --> 1.0.8


- 2.0.2493 -- 2020-12-08

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.5.3 --> 1.5.4


- 2.0.2492 -- 2020-12-08

    - [Ling/JPostForm](https://github.com/lingtalfi/JPostForm) 1.0.1 --> 1.0.2


- 2.0.2491 -- 2020-12-08

    - [Ling/JInfiniteSlider](https://github.com/lingtalfi/JInfiniteSlider) 1.2.1 --> 1.2.2


- 2.0.2490 -- 2020-12-08

    - [Ling/JImageRotator](https://github.com/lingtalfi/JImageRotator) 1.1.2 --> 1.1.3


- 2.0.2489 -- 2020-12-08

    - [Ling/JGoodies](https://github.com/lingtalfi/JGoodies) 1.1.1 --> 1.1.2


- 2.0.2488 -- 2020-12-08

    - [Ling/JFullScreen](https://github.com/lingtalfi/JFullScreen) 1.0.1 --> 1.0.2


- 2.0.2487 -- 2020-12-08

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 3.0.6 --> 3.0.7


- 2.0.2486 -- 2020-12-08

    - [Ling/JDragSlider](https://github.com/lingtalfi/JDragSlider) 1.1.1 --> 1.1.2


- 2.0.2485 -- 2020-12-08

    - [Ling/JCsrfAction](https://github.com/lingtalfi/JCsrfAction) 1.0.2 --> 1.0.3


- 2.0.2484 -- 2020-12-08

    - [Ling/JCropperJs](https://github.com/lingtalfi/JCropperJs) 1.0.1 --> 1.0.2


- 2.0.2483 -- 2020-12-08

    - [Ling/JCookie](https://github.com/lingtalfi/JCookie) 1.0.1 --> 1.0.2


- 2.0.2482 -- 2020-12-08

    - [Ling/JChronometer](https://github.com/lingtalfi/JChronometer) 1.0.1 --> 1.0.2


- 2.0.2481 -- 2020-12-08

    - [Ling/JBootstrapAutocomplete](https://github.com/lingtalfi/JBootstrapAutocomplete) 1.1.1 --> 1.1.2


- 2.0.2480 -- 2020-12-08

    - [Ling/JBee](https://github.com/lingtalfi/JBee) 1.1.3 --> 1.1.4


- 2.0.2479 -- 2020-12-08

    - [Ling/JAjaxLoader](https://github.com/lingtalfi/JAjaxLoader) 1.4.1 --> 1.4.2


- 2.0.2478 -- 2020-12-08

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.2.2 --> 1.2.3


- 2.0.2477 -- 2020-12-08

    - [Ling/InstantLog](https://github.com/lingtalfi/InstantLog) 1.1.1 --> 1.1.2


- 2.0.2476 -- 2020-12-08

    - [Ling/Installer](https://github.com/lingtalfi/Installer) 1.2.3 --> 1.2.4


- 2.0.2475 -- 2020-12-08

    - [Ling/Ingenico](https://github.com/lingtalfi/Ingenico) 1.5.1 --> 1.5.2


- 2.0.2474 -- 2020-12-08

    - [Ling/IndentedLines](https://github.com/lingtalfi/IndentedLines) 1.2.1 --> 1.2.2


- 2.0.2473 -- 2020-12-08

    - [Ling/Icons](https://github.com/lingtalfi/Icons) 1.0.3 --> 1.0.4


- 2.0.2472 -- 2020-12-08

    - [Ling/HybridList](https://github.com/lingtalfi/HybridList) 1.17.2 --> 1.17.3


- 2.0.2471 -- 2020-12-08

    - [Ling/Http4All](https://github.com/lingtalfi/Http4All) 1.1.2 --> 1.1.3


- 2.0.2470 -- 2020-12-08

    - [Ling/HtmlTemplate](https://github.com/lingtalfi/HtmlTemplate) 3.4.1 --> 3.4.2


- 2.0.2469 -- 2020-12-08

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 2.2.1 --> 2.2.2


- 2.0.2468 -- 2020-12-08

    - [Ling/Here](https://github.com/lingtalfi/Here) 2.2.1 --> 2.2.2


- 2.0.2467 -- 2020-12-08

    - [Ling/HashMap](https://github.com/lingtalfi/HashMap) 1.0.2 --> 1.0.3


- 2.0.2466 -- 2020-12-08

    - [Ling/GuiAdminTable](https://github.com/lingtalfi/GuiAdminTable) 1.12.1 --> 1.12.2


- 2.0.2465 -- 2020-12-08

    - [Ling/GreekTodoList](https://github.com/lingtalfi/GreekTodoList) 1.4.1 --> 1.4.2


- 2.0.2464 -- 2020-12-08

    - [Ling/GormanJsonDecoder](https://github.com/lingtalfi/GormanJsonDecoder) 1.1.2 --> 1.1.3


- 2.0.2463 -- 2020-12-08

    - [Ling/GetRowsInterface](https://github.com/lingtalfi/GetRowsInterface) 1.0.1 --> 1.0.2


- 2.0.2462 -- 2020-12-08

    - [Ling/GetFileSize](https://github.com/lingtalfi/GetFileSize) 1.1.1 --> 1.1.2


- 2.0.2461 -- 2020-12-08

    - [Ling/FormTools](https://github.com/lingtalfi/FormTools) 1.7.1 --> 1.7.2


- 2.0.2460 -- 2020-12-08

    - [Ling/FormRenderer](https://github.com/lingtalfi/FormRenderer) 1.7.3 --> 1.7.4


- 2.0.2459 -- 2020-12-08

    - [Ling/FormModel](https://github.com/lingtalfi/FormModel) 1.5.1 --> 1.5.2


- 2.0.2458 -- 2020-12-08

    - [Ling/FontAwesome](https://github.com/lingtalfi/FontAwesome) 1.0.2 --> 1.0.3


- 2.0.2457 -- 2020-12-08

    - [Ling/FileDeletor](https://github.com/lingtalfi/FileDeletor) 1.0.1 --> 1.0.2


- 2.0.2456 -- 2020-12-08

    - [Ling/FileCreator](https://github.com/lingtalfi/FileCreator) 1.0.1 --> 1.0.2


- 2.0.2455 -- 2020-12-08

    - [Ling/FileCleaner](https://github.com/lingtalfi/FileCleaner) 1.1.1 --> 1.1.2


- 2.0.2454 -- 2020-12-08

    - [Ling/Ffmpeg](https://github.com/lingtalfi/Ffmpeg) 1.0.1 --> 1.0.2


- 2.0.2453 -- 2020-12-08

    - [Ling/Explorer](https://github.com/lingtalfi/Explorer) 1.2.1 --> 1.2.2


- 2.0.2452 -- 2020-12-08

    - [Ling/ExceptionCodes](https://github.com/lingtalfi/ExceptionCodes) 1.0.1 --> 1.0.2


- 2.0.2451 -- 2020-12-08

    - [Ling/Escaper](https://github.com/lingtalfi/Escaper) 1.4.1 --> 1.4.2


- 2.0.2450 -- 2020-12-08

    - [Ling/Ecp](https://github.com/lingtalfi/Ecp) 1.5.1 --> 1.5.2


- 2.0.2449 -- 2020-12-08

    - [Ling/EchartsWrapper](https://github.com/lingtalfi/EchartsWrapper) 1.3.1 --> 1.3.2


- 2.0.2448 -- 2020-12-08

    - [Ling/EasyConsoleMenu](https://github.com/lingtalfi/EasyConsoleMenu) 1.0.2 --> 1.0.3


- 2.0.2447 -- 2020-12-08

    - [Ling/Dreamer](https://github.com/lingtalfi/Dreamer) 1.0.1 --> 1.0.2


- 2.0.2446 -- 2020-12-08

    - [Ling/DotMenu](https://github.com/lingtalfi/DotMenu) 1.0.2 --> 1.0.3


- 2.0.2445 -- 2020-12-08

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.14.1 --> 1.14.2


- 2.0.2444 -- 2020-12-08

    - [Ling/Dispatcher](https://github.com/lingtalfi/Dispatcher) 1.0.1 --> 1.0.2


- 2.0.2443 -- 2020-12-08

    - [Ling/DirectoryCleaner](https://github.com/lingtalfi/DirectoryCleaner) 1.0.1 --> 1.0.2


- 2.0.2442 -- 2020-12-08

    - [Ling/DirTransformer](https://github.com/lingtalfi/DirTransformer) 1.4.1 --> 1.4.2


- 2.0.2441 -- 2020-12-08

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.13.1 --> 1.13.2


- 2.0.2440 -- 2020-12-08

    - [Ling/Dir2Symlink](https://github.com/lingtalfi/Dir2Symlink) 1.2.1 --> 1.2.2


- 2.0.2439 -- 2020-12-08

    - [Ling/DerbyCache](https://github.com/lingtalfi/DerbyCache) 1.5.1 --> 1.5.2


- 2.0.2438 -- 2020-12-08

    - [Ling/Deploy](https://github.com/lingtalfi/Deploy) 1.1.3 --> 1.1.4


- 2.0.2437 -- 2020-12-08

    - [Ling/DebugLogger](https://github.com/lingtalfi/DebugLogger) 1.1.2 --> 1.1.3


- 2.0.2436 -- 2020-12-08

    - [Ling/DatePickerHelper](https://github.com/lingtalfi/DatePickerHelper) 1.1.1 --> 1.1.2


- 2.0.2435 -- 2020-12-08

    - [Ling/Dash2Array](https://github.com/lingtalfi/Dash2Array) 1.0.1 --> 1.0.2


- 2.0.2434 -- 2020-12-08

    - [Ling/Csv](https://github.com/lingtalfi/Csv) 1.3.2 --> 1.3.3


- 2.0.2433 -- 2020-12-08

    - [Ling/CrudWithFile](https://github.com/lingtalfi/CrudWithFile) 1.0.1 --> 1.0.2


- 2.0.2432 -- 2020-12-08

    - [Ling/CronTaskBot](https://github.com/lingtalfi/CronTaskBot) 1.0.1 --> 1.0.2


- 2.0.2431 -- 2020-12-08

    - [Ling/CopyDir](https://github.com/lingtalfi/CopyDir) 1.3.1 --> 1.3.2


- 2.0.2430 -- 2020-12-08

    - [Ling/ConventionGuy](https://github.com/lingtalfi/ConventionGuy) 1.1.1 --> 1.1.2


- 2.0.2429 -- 2020-12-08

    - [Ling/ConsoleTool](https://github.com/lingtalfi/ConsoleTool) 1.0.1 --> 1.0.2


- 2.0.2428 -- 2020-12-08

    - [Ling/ConditionResolver](https://github.com/lingtalfi/ConditionResolver) 1.1.1 --> 1.1.2


- 2.0.2427 -- 2020-12-08

    - [Ling/CommandLineOutput](https://github.com/lingtalfi/CommandLineOutput) 1.0.1 --> 1.0.2


- 2.0.2426 -- 2020-12-08

    - [Ling/CommandLineManiac](https://github.com/lingtalfi/CommandLineManiac) 1.0.1 --> 1.0.2


- 2.0.2425 -- 2020-12-08

    - [Ling/CommandLineInput](https://github.com/lingtalfi/CommandLineInput) 1.2.1 --> 1.2.2


- 2.0.2424 -- 2020-12-08

    - [Ling/Colis](https://github.com/lingtalfi/Colis) 2.2.1 --> 2.2.2


- 2.0.2423 -- 2020-12-08

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.5 --> 1.10.6


- 2.0.2422 -- 2020-12-08

    - [Ling/ClassCreator](https://github.com/lingtalfi/ClassCreator) 1.0.2 --> 1.0.3


- 2.0.2421 -- 2020-12-08

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.16.1 --> 1.16.2


- 2.0.2420 -- 2020-12-08

    - [Ling/Chronos](https://github.com/lingtalfi/Chronos) 1.0.1 --> 1.0.2


- 2.0.2419 -- 2020-12-08

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.4.1 --> 1.4.2


- 2.0.2418 -- 2020-12-08

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.11 --> 1.19.12


- 2.0.2417 -- 2020-12-08

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.6.6 --> 1.6.7


- 2.0.2416 -- 2020-12-08

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.36.5 --> 1.36.6


- 2.0.2415 -- 2020-12-08

    - [Ling/CheapLogger](https://github.com/lingtalfi/CheapLogger) 1.0.2 --> 1.0.3


- 2.0.2414 -- 2020-12-08

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.5.2 --> 1.5.3


- 2.0.2413 -- 2020-12-08

    - [Ling/BumbleBee](https://github.com/lingtalfi/BumbleBee) 1.0.1 --> 1.0.2


- 2.0.2412 -- 2020-12-08

    - [Ling/BullSheet](https://github.com/lingtalfi/BullSheet) 1.3.1 --> 1.3.2


- 2.0.2411 -- 2020-12-08

    - [Ling/BeeFramework](https://github.com/lingtalfi/BeeFramework) 1.0.4 --> 1.0.5
    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.15.3 --> 1.15.4


- 2.0.2410 -- 2020-12-08

    - [Ling/Beauty](https://github.com/lingtalfi/Beauty) 1.4.1 --> 1.4.2


- 2.0.2409 -- 2020-12-08

    - [Ling/Bate](https://github.com/lingtalfi/Bate) 1.0.1 --> 1.0.2


- 2.0.2408 -- 2020-12-08

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.292 --> 1.293


- 2.0.2407 -- 2020-12-08

    - [Ling/BashColorTool](https://github.com/lingtalfi/BashColorTool) 1.0.1 --> 1.0.2


- 2.0.2406 -- 2020-12-08

    - [Ling/BabyYamlDatabase](https://github.com/lingtalfi/BabyYamlDatabase) 1.0.3 --> 1.0.4


- 2.0.2405 -- 2020-12-08

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.7.4 --> 1.7.5


- 2.0.2404 -- 2020-12-08

    - [Ling/BabyDash](https://github.com/lingtalfi/BabyDash) 1.1.9 --> 1.1.10


- 2.0.2403 -- 2020-12-08

    - [Ling/Authenticate](https://github.com/lingtalfi/Authenticate) 1.7.2 --> 1.7.3


- 2.0.2402 -- 2020-12-08

    - [Ling/AssetsList](https://github.com/lingtalfi/AssetsList) 1.0.1 --> 1.0.2


- 2.0.2401 -- 2020-12-08

    - [Ling/AssetLoader](https://github.com/lingtalfi/AssetLoader) 1.6.1 --> 1.6.2


- 2.0.2400 -- 2020-12-08

    - [Ling/ArrayVariableResolver](https://github.com/lingtalfi/ArrayVariableResolver) 1.2.2 --> 1.2.3


- 2.0.2399 -- 2020-12-08

    - [Ling/ArrayToTable](https://github.com/lingtalfi/ArrayToTable) 1.2.1 --> 1.2.2


- 2.0.2398 -- 2020-12-08

    - [Ling/ArrayToString](https://github.com/lingtalfi/ArrayToString) 1.4.1 --> 1.4.2


- 2.0.2397 -- 2020-12-08

    - [Ling/ArrayStore](https://github.com/lingtalfi/ArrayStore) 1.1.1 --> 1.1.2


- 2.0.2396 -- 2020-12-08

    - [Ling/ArrayRefResolver](https://github.com/lingtalfi/ArrayRefResolver) 1.0.1 --> 1.0.2


- 2.0.2395 -- 2020-12-08

    - [Ling/ArrayExport](https://github.com/lingtalfi/ArrayExport) 1.1.1 --> 1.1.2


- 2.0.2394 -- 2020-12-08

    - [Ling/ArrayDiff](https://github.com/lingtalfi/ArrayDiff) 1.0.1 --> 1.0.2


- 2.0.2393 -- 2020-12-08

    - [Ling/ApplicationLog](https://github.com/lingtalfi/ApplicationLog) 1.0.1 --> 1.0.2


- 2.0.2392 -- 2020-12-08

    - [Ling/AjaxCommunicationProtocol](https://github.com/lingtalfi/AjaxCommunicationProtocol) 1.1.1 --> 1.1.2


- 2.0.2391 -- 2020-12-08

    - [Ling/AdminTable](https://github.com/lingtalfi/AdminTable) 1.6.7 --> 1.6.8


- 2.0.2390 -- 2020-12-08

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.29 --> 1.292
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.2 --> 1.23.3


- 2.0.2389 -- 2020-12-07

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.289 --> 1.29


- 2.0.2388 -- 2020-12-04

    - [Ling/Zoli](https://github.com/lingtalfi/Zoli) 1.4.0 --> 1.4.1


- 2.0.2387 -- 2020-12-04

    - [Ling/ZeusTemplateEngine](https://github.com/lingtalfi/ZeusTemplateEngine) 1.3.0 --> 1.3.1


- 2.0.2386 -- 2020-12-04

    - [Ling/ZephyrTemplateEngine](https://github.com/lingtalfi/ZephyrTemplateEngine) 1.1.2 --> 1.1.3


- 2.0.2385 -- 2020-12-04

    - [Ling/YouTubeUtils](https://github.com/lingtalfi/YouTubeUtils) 1.2.0 --> 1.2.1


- 2.0.2384 -- 2020-12-04

    - [Ling/XiaoApi](https://github.com/lingtalfi/XiaoApi) 2.2.4 --> 2.2.5


- 2.0.2383 -- 2020-12-04

    - [Ling/WrappedString](https://github.com/lingtalfi/WrappedString) 1.3.0 --> 1.3.1


- 2.0.2382 -- 2020-12-04

    - [Ling/WiseTool](https://github.com/lingtalfi/WiseTool) 1.2.0 --> 1.2.1


- 2.0.2381 -- 2020-12-04

    - [Ling/WebWizardTools](https://github.com/lingtalfi/WebWizardTools) 1.3.1 --> 1.3.2


- 2.0.2380 -- 2020-12-04

    - [Ling/WebBox](https://github.com/lingtalfi/WebBox) 1.0.1 --> 1.0.2


- 2.0.2379 -- 2020-12-04

    - [Ling/VideoSubtitles](https://github.com/lingtalfi/VideoSubtitles) 1.2.0 --> 1.2.1


- 2.0.2378 -- 2020-12-04

    - [Ling/VariableToString](https://github.com/lingtalfi/VariableToString) 1.1.0 --> 1.1.1


- 2.0.2377 -- 2020-12-04

    - [Ling/VSwitch](https://github.com/lingtalfi/VSwitch) 1.3.0 --> 1.3.1


- 2.0.2376 -- 2020-12-04

    - [Ling/UrlFriendlyListHelper](https://github.com/lingtalfi/UrlFriendlyListHelper) 1.1.0 --> 1.1.1


- 2.0.2375 -- 2020-12-04

    - [Ling/UploaderHandler](https://github.com/lingtalfi/UploaderHandler) 1.0.0 --> 1.0.1


- 2.0.2374 -- 2020-12-04

    - [Ling/Uploader](https://github.com/lingtalfi/Uploader) 1.0.0 --> 1.0.1


- 2.0.2373 -- 2020-12-04

    - [Ling/Updf](https://github.com/lingtalfi/Updf) 1.2.3 --> 1.2.4


- 2.0.2372 -- 2020-12-04

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.5 --> 1.21.6


- 2.0.2371 -- 2020-12-04

    - [Ling/UniversalTemplateEngine](https://github.com/lingtalfi/UniversalTemplateEngine) 1.1.0 --> 1.1.1


- 2.0.2370 -- 2020-12-04

    - [Ling/UniversalLogger](https://github.com/lingtalfi/UniversalLogger) 1.1.0 --> 1.1.1


- 2.0.2369 -- 2020-12-04

    - [Ling/UniqueNameGenerator](https://github.com/lingtalfi/UniqueNameGenerator) 1.1.0 --> 1.1.1


- 2.0.2368 -- 2020-12-04

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.4 --> 1.9.5


- 2.0.2367 -- 2020-12-04

    - [Ling/Umail](https://github.com/lingtalfi/Umail) 1.6.0 --> 1.6.1


- 2.0.2366 -- 2020-12-04

    - [Ling/UltimateUploadHandler](https://github.com/lingtalfi/UltimateUploadHandler) 1.2.0 --> 1.2.1


- 2.0.2365 -- 2020-12-04

    - [Ling/TreeListHelper](https://github.com/lingtalfi/TreeListHelper) 1.0.0 --> 1.0.1


- 2.0.2364 -- 2020-12-04

    - [Ling/Tokens](https://github.com/lingtalfi/Tokens) 1.4.0 --> 1.4.1


- 2.0.2363 -- 2020-12-04

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.11.2 --> 1.11.3


- 2.0.2362 -- 2020-12-04

    - [Ling/Tiphaine](https://github.com/lingtalfi/Tiphaine) 1.0.0 --> 1.0.1


- 2.0.2361 -- 2020-12-04

    - [Ling/TinyBullsheeter](https://github.com/lingtalfi/TinyBullsheeter) 1.0.0 --> 1.0.1


- 2.0.2360 -- 2020-12-04

    - [Ling/TimeFileUtil](https://github.com/lingtalfi/TimeFileUtil) 1.0.0 --> 1.0.1


- 2.0.2359 -- 2020-12-04

    - [Ling/Tim](https://github.com/lingtalfi/Tim) 1.6.0 --> 1.6.1


- 2.0.2358 -- 2020-12-04

    - [Ling/ThumbnailTools](https://github.com/lingtalfi/ThumbnailTools) 1.3.1 --> 1.3.2


- 2.0.2357 -- 2020-12-04

    - [Ling/TheScientist](https://github.com/lingtalfi/TheScientist) 1.0.0 --> 1.0.1


- 2.0.2356 -- 2020-12-04

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.19 --> 1.24.20


- 2.0.2355 -- 2020-12-04

    - [Ling/TheAnarchist](https://github.com/lingtalfi/TheAnarchist) 1.0.0 --> 1.0.1


- 2.0.2354 -- 2020-12-04

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.11.3 --> 1.11.4


- 2.0.2353 -- 2020-12-04

    - [Ling/TabathaCache](https://github.com/lingtalfi/TabathaCache) 2.4.0 --> 2.4.1


- 2.0.2352 -- 2020-12-04

    - [Ling/SvgGridGenerator](https://github.com/lingtalfi/SvgGridGenerator) 1.0.0 --> 1.0.1


- 2.0.2351 -- 2020-12-04

    - [Ling/SvelteTemplateBuilder](https://github.com/lingtalfi/SvelteTemplateBuilder) 1.1.0 --> 1.1.1


- 2.0.2350 -- 2020-12-04

    - [Ling/SuspiciousException](https://github.com/lingtalfi/SuspiciousException) 1.0.0 --> 1.0.1


- 2.0.2349 -- 2020-12-04

    - [Ling/StringFormatter](https://github.com/lingtalfi/StringFormatter) 1.0.0 --> 1.0.1


- 2.0.2348 -- 2020-12-04

    - [Ling/StepFormBuilder](https://github.com/lingtalfi/StepFormBuilder) 1.1.0 --> 1.1.1


- 2.0.2347 -- 2020-12-04

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.13.4 --> 1.13.5


- 2.0.2346 -- 2020-12-04

    - [Ling/SqlQueryWrapper](https://github.com/lingtalfi/SqlQueryWrapper) 1.6.0 --> 1.6.1


- 2.0.2345 -- 2020-12-04

    - [Ling/SqlQuery](https://github.com/lingtalfi/SqlQuery) 1.10.3 --> 1.10.4


- 2.0.2344 -- 2020-12-04

    - [Ling/SokoForm](https://github.com/lingtalfi/SokoForm) 1.72.0 --> 1.72.1


- 2.0.2343 -- 2020-12-04

    - [Ling/SitemapSlicer](https://github.com/lingtalfi/SitemapSlicer) 1.0.0 --> 1.0.1


- 2.0.2342 -- 2020-12-04

    - [Ling/SitemapBuilderBox](https://github.com/lingtalfi/SitemapBuilderBox) 1.0.0 --> 1.0.1


- 2.0.2341 -- 2020-12-04

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.14 --> 1.30.15


- 2.0.2340 -- 2020-12-04

    - [Ling/SimpleCurl](https://github.com/lingtalfi/SimpleCurl) 1.0.3 --> 1.0.4


- 2.0.2339 -- 2020-12-04

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.6.0 --> 1.6.1


- 2.0.2338 -- 2020-12-04

    - [Ling/SequenceMatcher](https://github.com/lingtalfi/SequenceMatcher) 1.0.0 --> 1.0.1


- 2.0.2337 -- 2020-12-04

    - [Ling/SelectChain](https://github.com/lingtalfi/SelectChain) 1.0.0 --> 1.0.1


- 2.0.2336 -- 2020-12-04

    - [Ling/Select2](https://github.com/lingtalfi/Select2) 1.0.1 --> 1.0.2


- 2.0.2335 -- 2020-12-04

    - [Ling/SecureImageUploader](https://github.com/lingtalfi/SecureImageUploader) 1.0.0 --> 1.0.1


- 2.0.2334 -- 2020-12-04

    - [Ling/SaveOrm](https://github.com/lingtalfi/SaveOrm) 1.18.1 --> 1.18.2
    - [Ling/ScreenDebug](https://github.com/lingtalfi/ScreenDebug) 1.0.0 --> 1.0.1


- 2.0.2333 -- 2020-12-04

    - [Ling/SafeUploader](https://github.com/lingtalfi/SafeUploader) 1.2.0 --> 1.2.1


- 2.0.2332 -- 2020-12-04

    - [Ling/RssUtil](https://github.com/lingtalfi/RssUtil) 1.0.0 --> 1.0.1


- 2.0.2331 -- 2020-12-04

    - [Ling/RowsGeneratorWidget](https://github.com/lingtalfi/RowsGeneratorWidget) 1.0.0 --> 1.0.1


- 2.0.2330 -- 2020-12-04

    - [Ling/RowsGenerator](https://github.com/lingtalfi/RowsGenerator) 1.6.0 --> 1.6.1


- 2.0.2329 -- 2020-12-04

    - [Ling/Registry](https://github.com/lingtalfi/Registry) 1.0.0 --> 1.0.1


- 2.0.2328 -- 2020-12-04

    - [Ling/ReflectionRepresentation](https://github.com/lingtalfi/ReflectionRepresentation) 1.0.0 --> 1.0.1


- 2.0.2327 -- 2020-12-04

    - [Ling/Quoter](https://github.com/lingtalfi/Quoter) 1.4.0 --> 1.4.1


- 2.0.2326 -- 2020-12-04

    - [Ling/QuickPdo](https://github.com/lingtalfi/QuickPdo) 2.41.1 --> 2.41.2


- 2.0.2325 -- 2020-12-04

    - [Ling/QuickLog](https://github.com/lingtalfi/QuickLog) 1.0.0 --> 1.0.1


- 2.0.2324 -- 2020-12-04

    - [Ling/QuickForm](https://github.com/lingtalfi/QuickForm) 4.6.1 --> 4.6.2


- 2.0.2323 -- 2020-12-04

    - [Ling/QueryFilterBox](https://github.com/lingtalfi/QueryFilterBox) 1.6.0 --> 1.6.1


- 2.0.2322 -- 2020-12-04

    - [Ling/PublicException](https://github.com/lingtalfi/PublicException) 1.0.0 --> 1.0.1


- 2.0.2321 -- 2020-12-04

    - [Ling/ProjectInfo](https://github.com/lingtalfi/ProjectInfo) 1.0.1 --> 1.0.2


- 2.0.2320 -- 2020-12-04

    - [Ling/Program](https://github.com/lingtalfi/Program) 1.1.0 --> 1.1.1


- 2.0.2319 -- 2020-12-04

    - [Ling/Privilege](https://github.com/lingtalfi/Privilege) 1.2.0 --> 1.2.1


- 2.0.2318 -- 2020-12-04

    - [Ling/PlanetSitemap](https://github.com/lingtalfi/PlanetSitemap) 1.0.2 --> 1.0.3


- 2.0.2317 -- 2020-12-04

    - [Ling/PhpUploadFileFix](https://github.com/lingtalfi/PhpUploadFileFix) 1.0.0 --> 1.0.1


- 2.0.2316 -- 2020-12-04

    - [Ling/PhpTemplate](https://github.com/lingtalfi/PhpTemplate) 1.0.0 --> 1.0.1


- 2.0.2315 -- 2020-12-04

    - [Ling/PhpTailer](https://github.com/lingtalfi/PhpTailer) 1.0.1 --> 1.0.2


- 2.0.2314 -- 2020-12-04

    - [Ling/PhpSpreadSheetTool](https://github.com/lingtalfi/PhpSpreadSheetTool) 1.0.3 --> 1.0.4


- 2.0.2313 -- 2020-12-04

    - [Ling/PhpFileValidator](https://github.com/lingtalfi/PhpFileValidator) 1.0.0 --> 1.0.1


- 2.0.2312 -- 2020-12-04

    - [Ling/PhpFile](https://github.com/lingtalfi/PhpFile) 1.1.0 --> 1.1.1


- 2.0.2311 -- 2020-12-04

    - [Ling/PhpExcelTool](https://github.com/lingtalfi/PhpExcelTool) 1.9.4 --> 1.9.5


- 2.0.2310 -- 2020-12-04

    - [Ling/PhpErrorName](https://github.com/lingtalfi/PhpErrorName) 1.0.0 --> 1.0.1


- 2.0.2309 -- 2020-12-04

    - [Ling/PhpBeast](https://github.com/lingtalfi/PhpBeast) 1.4.0 --> 1.4.1


- 2.0.2308 -- 2020-12-04

    - [Ling/PersistentRowCollection](https://github.com/lingtalfi/PersistentRowCollection) 1.0.0 --> 1.0.1


- 2.0.2307 -- 2020-12-04

    - [Ling/PermsHiker](https://github.com/lingtalfi/PermsHiker) 1.1.0 --> 1.1.1


- 2.0.2306 -- 2020-12-04

    - [Ling/Pea](https://github.com/lingtalfi/Pea) 1.2.0 --> 1.2.1


- 2.0.2305 -- 2020-12-04

    - [Ling/ParseDown](https://github.com/lingtalfi/ParseDown) 1.0.0 --> 1.0.1


- 2.0.2304 -- 2020-12-04

    - [Ling/ParenthesisMirrorParser](https://github.com/lingtalfi/ParenthesisMirrorParser) 1.0.1 --> 1.0.2


- 2.0.2303 -- 2020-12-04

    - [Ling/ParentChild](https://github.com/lingtalfi/ParentChild) 1.0.0 --> 1.0.1


- 2.0.2302 -- 2020-12-04

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.10.0 --> 1.10.1


- 2.0.2301 -- 2020-12-04

    - [Ling/Panda_Headers](https://github.com/lingtalfi/Panda_Headers) 1.0.0 --> 1.0.1


- 2.0.2300 -- 2020-12-04

    - [Ling/Packer](https://github.com/lingtalfi/Packer) 1.2.0 --> 1.2.1


- 2.0.2299 -- 2020-12-04

    - [Ling/Output](https://github.com/lingtalfi/Output) 1.7.0 --> 1.7.1


- 2.0.2298 -- 2020-12-04

    - [Ling/Ornella](https://github.com/lingtalfi/Ornella) 1.0.0 --> 1.0.1


- 2.0.2297 -- 2020-12-04

    - [Ling/OrmTools](https://github.com/lingtalfi/OrmTools) 1.18.0 --> 1.18.1


- 2.0.2296 -- 2020-12-04

    - [Ling/Options](https://github.com/lingtalfi/Options) 1.1.0 --> 1.1.1


- 2.0.2295 -- 2020-12-04

    - [Ling/OnTheFlyForm](https://github.com/lingtalfi/OnTheFlyForm) 2.19.0 --> 2.19.1


- 2.0.2294 -- 2020-12-04

    - [Ling/Octopus](https://github.com/lingtalfi/Octopus) 1.4.1 --> 1.4.2


- 2.0.2293 -- 2020-12-04

    - [Ling/Observer](https://github.com/lingtalfi/Observer) 1.0.0 --> 1.0.1


- 2.0.2292 -- 2020-12-04

    - [Ling/NumericKeyArray](https://github.com/lingtalfi/NumericKeyArray) 1.1.0 --> 1.1.1


- 2.0.2291 -- 2020-12-04

    - [Ling/Notifier](https://github.com/lingtalfi/Notifier) 1.0.0 --> 1.0.1


- 2.0.2290 -- 2020-12-04

    - [Ling/Notificator](https://github.com/lingtalfi/Notificator) 1.1.0 --> 1.1.1


- 2.0.2289 -- 2020-12-04

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.9.5 --> 1.9.6


- 2.0.2288 -- 2020-12-04

    - [Ling/NaturallySimpleXmlElement](https://github.com/lingtalfi/NaturallySimpleXmlElement) 1.0.0 --> 1.0.1


- 2.0.2287 -- 2020-12-04

    - [Ling/MysqlTabular](https://github.com/lingtalfi/MysqlTabular) 1.0.0 --> 1.0.1


- 2.0.2286 -- 2020-12-04

    - [Ling/MysqlCreateTableUtil](https://github.com/lingtalfi/MysqlCreateTableUtil) 1.0.2 --> 1.0.3


- 2.0.2285 -- 2020-12-04

    - [Ling/MySimpleXmlElement](https://github.com/lingtalfi/MySimpleXmlElement) 1.1.0 --> 1.1.1


- 2.0.2284 -- 2020-12-04

    - [Ling/Models](https://github.com/lingtalfi/Models) 1.26.0 --> 1.26.1


- 2.0.2283 -- 2020-12-04

    - [Ling/ModelRenderers](https://github.com/lingtalfi/ModelRenderers) 1.7.3 --> 1.7.4


- 2.0.2282 -- 2020-12-04

    - [Ling/MikeMagicTools](https://github.com/lingtalfi/MikeMagicTools) 1.1.0 --> 1.1.1


- 2.0.2281 -- 2020-12-04

    - [Ling/MethodInjector](https://github.com/lingtalfi/MethodInjector) 1.5.0 --> 1.5.1


- 2.0.2280 -- 2020-12-04

    - [Ling/Meredith](https://github.com/lingtalfi/Meredith) 3.1.0 --> 3.1.1


- 2.0.2279 -- 2020-12-04

    - [Ling/Lys](https://github.com/lingtalfi/Lys) 3.2.0 --> 3.2.1


- 2.0.2278 -- 2020-12-04

    - [Ling/Logger](https://github.com/lingtalfi/Logger) 1.4.0 --> 1.4.1


- 2.0.2277 -- 2020-12-04

    - [Ling/LogSlicer](https://github.com/lingtalfi/LogSlicer) 1.1.0 --> 1.1.1


- 2.0.2276 -- 2020-12-04

    - [Ling/Localys](https://github.com/lingtalfi/Localys) 1.9.0 --> 1.9.1


- 2.0.2275 -- 2020-12-04

    - [Ling/Loader](https://github.com/lingtalfi/Loader) 1.0.0 --> 1.0.1


- 2.0.2274 -- 2020-12-04

    - [Ling/ListParams](https://github.com/lingtalfi/ListParams) 1.10.4 --> 1.10.5


- 2.0.2273 -- 2020-12-04

    - [Ling/ListModifier](https://github.com/lingtalfi/ListModifier) 1.3.0 --> 1.3.1


- 2.0.2272 -- 2020-12-04

    - [Ling/Linker](https://github.com/lingtalfi/Linker) 1.0.0 --> 1.0.1


- 2.0.2271 -- 2020-12-04

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.1 --> 1.23.2


- 2.0.2270 -- 2020-12-04

    - [Ling/LinearFile](https://github.com/lingtalfi/LinearFile) 1.0.0 --> 1.0.1


- 2.0.2269 -- 2020-12-04

    - [Ling/Light_ZouUploader](https://github.com/lingtalfi/Light_ZouUploader) 1.1.1 --> 1.1.2


- 2.0.2268 -- 2020-12-04

    - [Ling/Light_ZephyrTemplate](https://github.com/lingtalfi/Light_ZephyrTemplate) 1.2.0 --> 1.2.1


- 2.0.2267 -- 2020-12-04

    - [Ling/Light_UserRowRestriction](https://github.com/lingtalfi/Light_UserRowRestriction) 1.3.0 --> 1.3.1


- 2.0.2266 -- 2020-12-04

    - [Ling/Light_UserPreferences](https://github.com/lingtalfi/Light_UserPreferences) 1.0.0 --> 1.0.1


- 2.0.2265 -- 2020-12-04

    - [Ling/Light_UserNotifications](https://github.com/lingtalfi/Light_UserNotifications) 1.0.2 --> 1.0.3


- 2.0.2264 -- 2020-12-04

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.5.3 --> 1.5.4


- 2.0.2263 -- 2020-12-04

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.4 --> 1.31.5


- 2.0.2262 -- 2020-12-04

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.4 --> 1.19.5


- 2.0.2261 -- 2020-12-04

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.7.0 --> 1.7.1


- 2.0.2260 -- 2020-12-04

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.8.6 --> 1.8.7


- 2.0.2259 -- 2020-12-04

    - [Ling/Light_TaskScheduler](https://github.com/lingtalfi/Light_TaskScheduler) 1.1.0 --> 1.1.1


- 2.0.2258 -- 2020-12-04

    - [Ling/Light_TablePrefixInfo](https://github.com/lingtalfi/Light_TablePrefixInfo) 1.0.0 --> 1.0.1


- 2.0.2257 -- 2020-12-04

    - [Ling/Light_SpinKitHelper](https://github.com/lingtalfi/Light_SpinKitHelper) 1.0.1 --> 1.0.2


- 2.0.2256 -- 2020-12-04

    - [Ling/Light_SimpleHttpServer](https://github.com/lingtalfi/Light_SimpleHttpServer) 1.0.4 --> 1.0.5


- 2.0.2255 -- 2020-12-04

    - [Ling/Light_Router](https://github.com/lingtalfi/Light_Router) 1.0.0 --> 1.0.1


- 2.0.2254 -- 2020-12-04

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.11.1 --> 1.11.2


- 2.0.2253 -- 2020-12-04

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.5 --> 2.0.6


- 2.0.2252 -- 2020-12-04

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.5 --> 2.0.6


- 2.0.2251 -- 2020-12-04

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.13 --> 1.31.14


- 2.0.2250 -- 2020-12-04

    - [Ling/Light_QuickMailAlert](https://github.com/lingtalfi/Light_QuickMailAlert) 1.1.0 --> 1.1.1


- 2.0.2249 -- 2020-12-04

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.1 --> 1.5.2


- 2.0.2248 -- 2020-12-04

    - [Ling/Light_PrerouteHub](https://github.com/lingtalfi/Light_PrerouteHub) 1.0.0 --> 1.0.1


- 2.0.2247 -- 2020-12-04

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.8.0 --> 1.8.1


- 2.0.2246 -- 2020-12-04

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.6.1 --> 1.6.2


- 2.0.2245 -- 2020-12-04

    - [Ling/Light_PasswordProtector](https://github.com/lingtalfi/Light_PasswordProtector) 1.0.1 --> 1.0.2


- 2.0.2244 -- 2020-12-04

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.3.4 --> 1.3.5


- 2.0.2243 -- 2020-12-04

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 3.0.4 --> 3.0.5


- 2.0.2242 -- 2020-12-04

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.3 --> 1.3.4


- 2.0.2241 -- 2020-12-04

    - [Ling/Light_LoginNotifier](https://github.com/lingtalfi/Light_LoginNotifier) 1.0.0 --> 1.0.1


- 2.0.2240 -- 2020-12-04

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.11.3 --> 1.11.4


- 2.0.2239 -- 2020-12-04

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.6.1 --> 1.6.2


- 2.0.2238 -- 2020-12-04

    - [Ling/Light_LingHooks](https://github.com/lingtalfi/Light_LingHooks) 1.0.0 --> 1.0.1


- 2.0.2237 -- 2020-12-04

    - [Ling/Light_LightInstance](https://github.com/lingtalfi/Light_LightInstance) 1.2.1 --> 1.2.2


- 2.0.2236 -- 2020-12-04

    - [Ling/Light_Kit_WebsiteBuilder](https://github.com/lingtalfi/Light_Kit_WebsiteBuilder) 1.0.1 --> 1.0.2


- 2.0.2235 -- 2020-12-04

    - [Ling/Light_Kit_Demo](https://github.com/lingtalfi/Light_Kit_Demo) 1.2.0 --> 1.2.1


- 2.0.2234 -- 2020-12-04

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.4 --> 1.18.5


- 2.0.2233 -- 2020-12-04

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.2 --> 1.2.3


- 2.0.2232 -- 2020-12-04

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.3 --> 0.5.4


- 2.0.2231 -- 2020-12-04

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.3 --> 1.7.4


- 2.0.2230 -- 2020-12-04

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.3 --> 1.5.4


- 2.0.2229 -- 2020-12-04

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.2 --> 1.0.3


- 2.0.2228 -- 2020-12-04

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.5 --> 1.19.6


- 2.0.2227 -- 2020-12-04

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.4 --> 1.6.5


- 2.0.2226 -- 2020-12-04

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.3 --> 0.12.4


- 2.0.2225 -- 2020-12-04

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.17.0 --> 1.17.1


- 2.0.2224 -- 2020-12-04

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer) 1.3.0 --> 1.3.1


- 2.0.2223 -- 2020-12-04

    - [Ling/Light_HtmlPageCopilot](https://github.com/lingtalfi/Light_HtmlPageCopilot) 1.0.3 --> 1.0.4


- 2.0.2222 -- 2020-12-04

    - [Ling/Light_Flasher](https://github.com/lingtalfi/Light_Flasher) 1.3.0 --> 1.3.1


- 2.0.2221 -- 2020-12-04

    - [Ling/Light_Firewall](https://github.com/lingtalfi/Light_Firewall) 1.1.0 --> 1.1.1


- 2.0.2220 -- 2020-12-04

    - [Ling/Light_FileWatcher](https://github.com/lingtalfi/Light_FileWatcher) 1.1.0 --> 1.1.1


- 2.0.2219 -- 2020-12-04

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.1 --> 1.2.2


- 2.0.2218 -- 2020-12-04

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.9.3 --> 1.9.4


- 2.0.2217 -- 2020-12-04

    - [Ling/Light_ErrorPop](https://github.com/lingtalfi/Light_ErrorPop) 1.0.2 --> 1.0.3


- 2.0.2216 -- 2020-12-04

    - [Ling/Light_ErrorHandler](https://github.com/lingtalfi/Light_ErrorHandler) 1.0.3 --> 1.0.4


- 2.0.2215 -- 2020-12-04

    - [Ling/Light_EndRoutine_Debugger](https://github.com/lingtalfi/Light_EndRoutine_Debugger) 1.2.1 --> 1.2.2


- 2.0.2214 -- 2020-12-04

    - [Ling/Light_EndRoutine_CsrfPageCleaner](https://github.com/lingtalfi/Light_EndRoutine_CsrfPageCleaner) 1.4.0 --> 1.4.1


- 2.0.2213 -- 2020-12-04

    - [Ling/Light_EndRoutine](https://github.com/lingtalfi/Light_EndRoutine) 1.3.0 --> 1.3.1


- 2.0.2212 -- 2020-12-04

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.2.3 --> 1.2.4


- 2.0.2211 -- 2020-12-04

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.9 --> 1.28.10


- 2.0.2210 -- 2020-12-04

    - [Ling/Light_DebugTrace](https://github.com/lingtalfi/Light_DebugTrace) 1.0.0 --> 1.0.1


- 2.0.2209 -- 2020-12-04

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.2.0 --> 1.2.1


- 2.0.2208 -- 2020-12-04

    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils) 1.1.5 --> 1.1.6


- 2.0.2207 -- 2020-12-04

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.12.1 --> 1.12.2


- 2.0.2206 -- 2020-12-04

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.9 --> 1.14.10


- 2.0.2205 -- 2020-12-04

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple) 1.2.1 --> 1.2.2


- 2.0.2204 -- 2020-12-04

    - [Ling/Light_CsrfSession](https://github.com/lingtalfi/Light_CsrfSession) 1.0.1 --> 1.0.2


- 2.0.2203 -- 2020-12-04

    - [Ling/Light_Csrf](https://github.com/lingtalfi/Light_Csrf) 1.0.2 --> 1.0.3


- 2.0.2202 -- 2020-12-04

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 2.0.0 --> 2.0.1


- 2.0.2201 -- 2020-12-04

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.2 --> 1.2.3


- 2.0.2200 -- 2020-12-04

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.9 --> 1.6.10


- 2.0.2199 -- 2020-12-04

    - [Ling/Light_Bullsheet](https://github.com/lingtalfi/Light_Bullsheet) 1.1.0 --> 1.1.1


- 2.0.2198 -- 2020-12-04

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.8 --> 1.29.9


- 2.0.2197 -- 2020-12-04

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.9.0 --> 1.9.1


- 2.0.2196 -- 2020-12-04

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.1.2 --> 2.1.3


- 2.0.2195 -- 2020-12-04

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.8.1 --> 1.8.2


- 2.0.2194 -- 2020-12-04

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger) 1.0.0 --> 1.0.1


- 2.0.2193 -- 2020-12-04

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.16 --> 0.69.17


- 2.0.2192 -- 2020-12-04

    - [Ling/Komin](https://github.com/lingtalfi/Komin) 1.0.0 --> 1.0.1
    - [Ling/KrankenStein](https://github.com/lingtalfi/KrankenStein) 1.0.1 --> 1.0.2


- 2.0.2191 -- 2020-12-04

    - [Ling/Kit_PrototypeWidget](https://github.com/lingtalfi/Kit_PrototypeWidget) 1.1.0 --> 1.1.1


- 2.0.2190 -- 2020-12-04

    - [Ling/Kit_PicassoWidget](https://github.com/lingtalfi/Kit_PicassoWidget) 1.30.0 --> 1.30.1


- 2.0.2189 -- 2020-12-04

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.12.1 --> 1.12.2


- 2.0.2188 -- 2020-12-04

    - [Ling/KaminosUtils](https://github.com/lingtalfi/KaminosUtils) 1.0.0 --> 1.0.1


- 2.0.2187 -- 2020-12-04

    - [Ling/KamilleWidgets](https://github.com/lingtalfi/KamilleWidgets) 1.0.0 --> 1.0.1


- 2.0.2186 -- 2020-12-04

    - [Ling/KamillePacker](https://github.com/lingtalfi/KamillePacker) 1.7.0 --> 1.7.1


- 2.0.2185 -- 2020-12-04

    - [Ling/KamilleEssentialTools](https://github.com/lingtalfi/KamilleEssentialTools) 1.0.0 --> 1.0.1


- 2.0.2184 -- 2020-12-04

    - [Ling/JumboExploder](https://github.com/lingtalfi/JumboExploder) 1.0.0 --> 1.0.1


- 2.0.2183 -- 2020-12-04

    - [Ling/JqueryUrlWithDropZone](https://github.com/lingtalfi/JqueryUrlWithDropZone) 1.0.0 --> 1.0.1


- 2.0.2182 -- 2020-12-04

    - [Ling/Jquery](https://github.com/lingtalfi/Jquery) 1.1.1 --> 1.1.2


- 2.0.2181 -- 2020-12-04

    - [Ling/Jin](https://github.com/lingtalfi/Jin) 1.0.1 --> 1.0.2


- 2.0.2180 -- 2020-12-04

    - [Ling/JSortableLists](https://github.com/lingtalfi/JSortableLists) 1.0.0 --> 1.0.1


- 2.0.2179 -- 2020-12-04

    - [Ling/JSortTable](https://github.com/lingtalfi/JSortTable) 1.0.0 --> 1.0.1


- 2.0.2178 -- 2020-12-04

    - [Ling/JRicAdminTableHelper](https://github.com/lingtalfi/JRicAdminTableHelper) 1.0.6 --> 1.0.7


- 2.0.2177 -- 2020-12-04

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.5.2 --> 1.5.3


- 2.0.2176 -- 2020-12-04

    - [Ling/JPostForm](https://github.com/lingtalfi/JPostForm) 1.0.0 --> 1.0.1


- 2.0.2175 -- 2020-12-04

    - [Ling/JInfiniteSlider](https://github.com/lingtalfi/JInfiniteSlider) 1.2.0 --> 1.2.1


- 2.0.2174 -- 2020-12-04

    - [Ling/JImageRotator](https://github.com/lingtalfi/JImageRotator) 1.1.1 --> 1.1.2


- 2.0.2173 -- 2020-12-04

    - [Ling/JGoodies](https://github.com/lingtalfi/JGoodies) 1.1.0 --> 1.1.1


- 2.0.2172 -- 2020-12-04

    - [Ling/JFullScreen](https://github.com/lingtalfi/JFullScreen) 1.0.0 --> 1.0.1


- 2.0.2171 -- 2020-12-04

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 3.0.5 --> 3.0.6


- 2.0.2170 -- 2020-12-04

    - [Ling/JDragSlider](https://github.com/lingtalfi/JDragSlider) 1.1.0 --> 1.1.1


- 2.0.2169 -- 2020-12-04

    - [Ling/JCsrfAction](https://github.com/lingtalfi/JCsrfAction) 1.0.1 --> 1.0.2


- 2.0.2168 -- 2020-12-04

    - [Ling/JCropperJs](https://github.com/lingtalfi/JCropperJs) 1.0.0 --> 1.0.1


- 2.0.2167 -- 2020-12-04

    - [Ling/JCookie](https://github.com/lingtalfi/JCookie) 1.0.0 --> 1.0.1


- 2.0.2166 -- 2020-12-04

    - [Ling/JChronometer](https://github.com/lingtalfi/JChronometer) 1.0.0 --> 1.0.1


- 2.0.2165 -- 2020-12-04

    - [Ling/JBootstrapAutocomplete](https://github.com/lingtalfi/JBootstrapAutocomplete) 1.1.0 --> 1.1.1


- 2.0.2164 -- 2020-12-04

    - [Ling/JBee](https://github.com/lingtalfi/JBee) 1.1.2 --> 1.1.3


- 2.0.2163 -- 2020-12-04

    - [Ling/JAjaxLoader](https://github.com/lingtalfi/JAjaxLoader) 1.4.0 --> 1.4.1


- 2.0.2162 -- 2020-12-04

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.2.1 --> 1.2.2


- 2.0.2161 -- 2020-12-04

    - [Ling/InstantLog](https://github.com/lingtalfi/InstantLog) 1.1.0 --> 1.1.1


- 2.0.2160 -- 2020-12-04

    - [Ling/Installer](https://github.com/lingtalfi/Installer) 1.2.2 --> 1.2.3


- 2.0.2159 -- 2020-12-04

    - [Ling/Ingenico](https://github.com/lingtalfi/Ingenico) 1.5.0 --> 1.5.1


- 2.0.2158 -- 2020-12-04

    - [Ling/IndentedLines](https://github.com/lingtalfi/IndentedLines) 1.2.0 --> 1.2.1


- 2.0.2157 -- 2020-12-04

    - [Ling/Icons](https://github.com/lingtalfi/Icons) 1.0.2 --> 1.0.3


- 2.0.2156 -- 2020-12-04

    - [Ling/HybridList](https://github.com/lingtalfi/HybridList) 1.17.1 --> 1.17.2


- 2.0.2155 -- 2020-12-04

    - [Ling/Http4All](https://github.com/lingtalfi/Http4All) 1.1.1 --> 1.1.2


- 2.0.2154 -- 2020-12-04

    - [Ling/HtmlTemplate](https://github.com/lingtalfi/HtmlTemplate) 3.4.0 --> 3.4.1


- 2.0.2153 -- 2020-12-04

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 2.2.0 --> 2.2.1


- 2.0.2152 -- 2020-12-04

    - [Ling/Here](https://github.com/lingtalfi/Here) 2.2.0 --> 2.2.1


- 2.0.2151 -- 2020-12-04

    - [Ling/HashMap](https://github.com/lingtalfi/HashMap) 1.0.1 --> 1.0.2


- 2.0.2150 -- 2020-12-04

    - [Ling/GuiAdminTable](https://github.com/lingtalfi/GuiAdminTable) 1.12.0 --> 1.12.1


- 2.0.2149 -- 2020-12-04

    - [Ling/GreekTodoList](https://github.com/lingtalfi/GreekTodoList) 1.4.0 --> 1.4.1


- 2.0.2148 -- 2020-12-04

    - [Ling/GormanJsonDecoder](https://github.com/lingtalfi/GormanJsonDecoder) 1.1.1 --> 1.1.2


- 2.0.2147 -- 2020-12-04

    - [Ling/GetRowsInterface](https://github.com/lingtalfi/GetRowsInterface) 1.0.0 --> 1.0.1


- 2.0.2146 -- 2020-12-04

    - [Ling/GetFileSize](https://github.com/lingtalfi/GetFileSize) 1.1.0 --> 1.1.1


- 2.0.2145 -- 2020-12-04

    - [Ling/FormTools](https://github.com/lingtalfi/FormTools) 1.7.0 --> 1.7.1


- 2.0.2144 -- 2020-12-04

    - [Ling/FormRenderer](https://github.com/lingtalfi/FormRenderer) 1.7.2 --> 1.7.3


- 2.0.2143 -- 2020-12-04

    - [Ling/FormModel](https://github.com/lingtalfi/FormModel) 1.5.0 --> 1.5.1


- 2.0.2142 -- 2020-12-04

    - [Ling/FontAwesome](https://github.com/lingtalfi/FontAwesome) 1.0.1 --> 1.0.2


- 2.0.2141 -- 2020-12-04

    - [Ling/FileDeletor](https://github.com/lingtalfi/FileDeletor) 1.0.0 --> 1.0.1


- 2.0.2140 -- 2020-12-04

    - [Ling/FileCreator](https://github.com/lingtalfi/FileCreator) 1.0.0 --> 1.0.1


- 2.0.2139 -- 2020-12-04

    - [Ling/FileCleaner](https://github.com/lingtalfi/FileCleaner) 1.1.0 --> 1.1.1


- 2.0.2138 -- 2020-12-04

    - [Ling/Ffmpeg](https://github.com/lingtalfi/Ffmpeg) 1.0.0 --> 1.0.1


- 2.0.2137 -- 2020-12-04

    - [Ling/Explorer](https://github.com/lingtalfi/Explorer) 1.2.0 --> 1.2.1


- 2.0.2136 -- 2020-12-04

    - [Ling/ExceptionCodes](https://github.com/lingtalfi/ExceptionCodes) 1.0.0 --> 1.0.1


- 2.0.2135 -- 2020-12-04

    - [Ling/Escaper](https://github.com/lingtalfi/Escaper) 1.4.0 --> 1.4.1


- 2.0.2134 -- 2020-12-04

    - [Ling/Ecp](https://github.com/lingtalfi/Ecp) 1.5.0 --> 1.5.1


- 2.0.2133 -- 2020-12-04

    - [Ling/EchartsWrapper](https://github.com/lingtalfi/EchartsWrapper) 1.3.0 --> 1.3.1


- 2.0.2132 -- 2020-12-04

    - [Ling/EasyConsoleMenu](https://github.com/lingtalfi/EasyConsoleMenu) 1.0.1 --> 1.0.2


- 2.0.2131 -- 2020-12-04

    - [Ling/Dreamer](https://github.com/lingtalfi/Dreamer) 1.0.0 --> 1.0.1


- 2.0.2130 -- 2020-12-04

    - [Ling/DotMenu](https://github.com/lingtalfi/DotMenu) 1.0.1 --> 1.0.2


- 2.0.2129 -- 2020-12-04

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.14.0 --> 1.14.1


- 2.0.2128 -- 2020-12-04

    - [Ling/Dispatcher](https://github.com/lingtalfi/Dispatcher) 1.0.0 --> 1.0.1


- 2.0.2127 -- 2020-12-04

    - [Ling/DirectoryCleaner](https://github.com/lingtalfi/DirectoryCleaner) 1.0.0 --> 1.0.1


- 2.0.2126 -- 2020-12-04

    - [Ling/DirTransformer](https://github.com/lingtalfi/DirTransformer) 1.4.0 --> 1.4.1


- 2.0.2125 -- 2020-12-04

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.13.0 --> 1.13.1


- 2.0.2124 -- 2020-12-04

    - [Ling/Dir2Symlink](https://github.com/lingtalfi/Dir2Symlink) 1.2.0 --> 1.2.1


- 2.0.2123 -- 2020-12-04

    - [Ling/DerbyCache](https://github.com/lingtalfi/DerbyCache) 1.5.0 --> 1.5.1


- 2.0.2122 -- 2020-12-04

    - [Ling/Deploy](https://github.com/lingtalfi/Deploy) 1.1.2 --> 1.1.3


- 2.0.2121 -- 2020-12-04

    - [Ling/DebugLogger](https://github.com/lingtalfi/DebugLogger) 1.1.1 --> 1.1.2


- 2.0.2120 -- 2020-12-04

    - [Ling/DatePickerHelper](https://github.com/lingtalfi/DatePickerHelper) 1.1.0 --> 1.1.1


- 2.0.2119 -- 2020-12-04

    - [Ling/Dash2Array](https://github.com/lingtalfi/Dash2Array) 1.0.0 --> 1.0.1


- 2.0.2118 -- 2020-12-04

    - [Ling/Csv](https://github.com/lingtalfi/Csv) 1.3.1 --> 1.3.2


- 2.0.2117 -- 2020-12-04

    - [Ling/CrudWithFile](https://github.com/lingtalfi/CrudWithFile) 1.0.0 --> 1.0.1


- 2.0.2116 -- 2020-12-04

    - [Ling/CronTaskBot](https://github.com/lingtalfi/CronTaskBot) 1.0.0 --> 1.0.1


- 2.0.2115 -- 2020-12-04

    - [Ling/CopyDir](https://github.com/lingtalfi/CopyDir) 1.3.0 --> 1.3.1


- 2.0.2114 -- 2020-12-04

    - [Ling/ConventionGuy](https://github.com/lingtalfi/ConventionGuy) 1.1.0 --> 1.1.1


- 2.0.2113 -- 2020-12-04

    - [Ling/ConsoleTool](https://github.com/lingtalfi/ConsoleTool) 1.0.0 --> 1.0.1


- 2.0.2112 -- 2020-12-04

    - [Ling/ConditionResolver](https://github.com/lingtalfi/ConditionResolver) 1.1.0 --> 1.1.1


- 2.0.2111 -- 2020-12-04

    - [Ling/CommandLineOutput](https://github.com/lingtalfi/CommandLineOutput) 1.0.0 --> 1.0.1


- 2.0.2110 -- 2020-12-04

    - [Ling/CommandLineManiac](https://github.com/lingtalfi/CommandLineManiac) 1.0.0 --> 1.0.1


- 2.0.2109 -- 2020-12-04

    - [Ling/CommandLineInput](https://github.com/lingtalfi/CommandLineInput) 1.2.0 --> 1.2.1


- 2.0.2108 -- 2020-12-04

    - [Ling/Colis](https://github.com/lingtalfi/Colis) 2.2.0 --> 2.2.1


- 2.0.2107 -- 2020-12-04

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.4 --> 1.10.5


- 2.0.2106 -- 2020-12-04

    - [Ling/ClassCreator](https://github.com/lingtalfi/ClassCreator) 1.0.1 --> 1.0.2


- 2.0.2105 -- 2020-12-04

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.16.0 --> 1.16.1


- 2.0.2104 -- 2020-12-04

    - [Ling/Chronos](https://github.com/lingtalfi/Chronos) 1.0.0 --> 1.0.1


- 2.0.2103 -- 2020-12-04

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.4.0 --> 1.4.1


- 2.0.2102 -- 2020-12-04

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.10 --> 1.19.11


- 2.0.2101 -- 2020-12-04

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.6.5 --> 1.6.6


- 2.0.2100 -- 2020-12-04

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.36.4 --> 1.36.5


- 2.0.2099 -- 2020-12-04

    - [Ling/CheapLogger](https://github.com/lingtalfi/CheapLogger) 1.0.1 --> 1.0.2


- 2.0.2098 -- 2020-12-04

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.5.1 --> 1.5.2


- 2.0.2097 -- 2020-12-04

    - [Ling/BumbleBee](https://github.com/lingtalfi/BumbleBee) 1.0.0 --> 1.0.1


- 2.0.2096 -- 2020-12-04

    - [Ling/BullSheet](https://github.com/lingtalfi/BullSheet) 1.3.0 --> 1.3.1


- 2.0.2095 -- 2020-12-04

    - [Ling/BeeFramework](https://github.com/lingtalfi/BeeFramework) 1.0.3 --> 1.0.4
    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.15.2 --> 1.15.3


- 2.0.2094 -- 2020-12-04

    - [Ling/Beauty](https://github.com/lingtalfi/Beauty) 1.4.0 --> 1.4.1


- 2.0.2093 -- 2020-12-04

    - [Ling/Bate](https://github.com/lingtalfi/Bate) 1.0.0 --> 1.0.1


- 2.0.2092 -- 2020-12-04

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.288 --> 1.289


- 2.0.2091 -- 2020-12-04

    - [Ling/BashColorTool](https://github.com/lingtalfi/BashColorTool) 1.0.0 --> 1.0.1


- 2.0.2090 -- 2020-12-04

    - [Ling/BabyYamlDatabase](https://github.com/lingtalfi/BabyYamlDatabase) 1.0.2 --> 1.0.3


- 2.0.2089 -- 2020-12-04

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.7.3 --> 1.7.4


- 2.0.2088 -- 2020-12-04

    - [Ling/BabyDash](https://github.com/lingtalfi/BabyDash) 1.1.8 --> 1.1.9


- 2.0.2087 -- 2020-12-04

    - [Ling/Authenticate](https://github.com/lingtalfi/Authenticate) 1.7.1 --> 1.7.2


- 2.0.2086 -- 2020-12-04

    - [Ling/AssetsList](https://github.com/lingtalfi/AssetsList) 1.0.0 --> 1.0.1


- 2.0.2085 -- 2020-12-04

    - [Ling/AssetLoader](https://github.com/lingtalfi/AssetLoader) 1.6.0 --> 1.6.1


- 2.0.2084 -- 2020-12-04

    - [Ling/ArrayVariableResolver](https://github.com/lingtalfi/ArrayVariableResolver) 1.2.1 --> 1.2.2


- 2.0.2083 -- 2020-12-04

    - [Ling/ArrayToTable](https://github.com/lingtalfi/ArrayToTable) 1.2.0 --> 1.2.1


- 2.0.2082 -- 2020-12-04

    - [Ling/ArrayToString](https://github.com/lingtalfi/ArrayToString) 1.4.0 --> 1.4.1


- 2.0.2081 -- 2020-12-04

    - [Ling/ArrayStore](https://github.com/lingtalfi/ArrayStore) 1.1.0 --> 1.1.1


- 2.0.2080 -- 2020-12-04

    - [Ling/ArrayRefResolver](https://github.com/lingtalfi/ArrayRefResolver) 1.0.0 --> 1.0.1


- 2.0.2079 -- 2020-12-04

    - [Ling/ArrayExport](https://github.com/lingtalfi/ArrayExport) 1.1.0 --> 1.1.1


- 2.0.2078 -- 2020-12-04

    - [Ling/ArrayDiff](https://github.com/lingtalfi/ArrayDiff) 1.0.0 --> 1.0.1


- 2.0.2077 -- 2020-12-04

    - [Ling/ApplicationLog](https://github.com/lingtalfi/ApplicationLog) 1.0.0 --> 1.0.1


- 2.0.2076 -- 2020-12-04

    - [Ling/AjaxCommunicationProtocol](https://github.com/lingtalfi/AjaxCommunicationProtocol) 1.1.0 --> 1.1.1


- 2.0.2075 -- 2020-12-04

    - [Ling/AdminTable](https://github.com/lingtalfi/AdminTable) 1.6.6 --> 1.6.7


- 2.0.2074 -- 2020-12-04

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.4 --> 1.21.5


- 2.0.2073 -- 2020-12-04

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.3 --> 1.10.4


- 2.0.2072 -- 2020-12-04

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.2 --> 1.10.3


- 2.0.2071 -- 2020-12-03

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.3 --> 1.21.4


- 2.0.2070 -- 2020-12-03

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.287 --> 1.288


- 2.0.2069 -- 2020-12-03

    - [Ling/CliTools](https://github.com/lingtalfi/CliTools) 1.10.1 --> 1.10.2


- 2.0.2068 -- 2020-12-03

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.23.0 --> 1.23.1


- 2.0.2067 -- 2020-12-03

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.8 --> 1.28.9


- 2.0.2066 -- 2020-12-03

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.15 --> 0.69.16


- 2.0.2065 -- 2020-12-03

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.14 --> 0.69.15


- 2.0.2064 -- 2020-12-03

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.3.3 --> 1.3.4


- 2.0.2063 -- 2020-12-03

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.13 --> 0.69.14


- 2.0.2062 -- 2020-12-01

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.1 --> 1.2.2


- 2.0.2061 -- 2020-12-01

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.2 --> 0.5.3


- 2.0.2060 -- 2020-12-01

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.2 --> 1.5.3


- 2.0.2059 -- 2020-12-01

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.1 --> 1.0.2


- 2.0.2058 -- 2020-12-01

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.2 --> 0.12.3


- 2.0.2057 -- 2020-12-01

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.7.2 --> 1.7.3


- 2.0.2056 -- 2020-12-01

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.7 --> 1.28.8


- 2.0.2055 -- 2020-12-01

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.4 --> 1.19.5


- 2.0.2054 -- 2020-12-01

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.12 --> 1.31.13


- 2.0.2053 -- 2020-12-01

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.11 --> 1.31.12


- 2.0.2052 -- 2020-12-01

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.10 --> 1.31.11


- 2.0.2051 -- 2020-12-01

    - [Ling/Light_TablePrefixInfo](https://github.com/lingtalfi/Light_TablePrefixInfo)  --> 1.0.0


- 2.0.2050 -- 2020-12-01

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.6 --> 1.28.7


- 2.0.2049 -- 2020-12-01

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.5 --> 1.28.6


- 2.0.2048 -- 2020-12-01

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.1 --> 1.2.2


- 2.0.2047 -- 2020-12-01

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.9 --> 1.19.10


- 2.0.2046 -- 2020-12-01

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.8 --> 1.19.9


- 2.0.2045 -- 2020-12-01

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.4 --> 2.0.5


- 2.0.2044 -- 2020-12-01

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.36.3 --> 1.36.4


- 2.0.2043 -- 2020-12-01

    - [Ling/Octopus](https://github.com/lingtalfi/Octopus) 1.4.0 --> 1.4.1


- 2.0.2042 -- 2020-12-01

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.2.2 --> 1.2.3


- 2.0.2041 -- 2020-12-01

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.3 --> 1.18.4


- 2.0.2040 -- 2020-12-01

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.286 --> 1.287


- 2.0.2039 -- 2020-11-30

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier) 1.0.0 --> 1.0.1


- 2.0.2038 -- 2020-11-30

    - [Ling/Light_Kit_Admin_LoginNotifier](https://github.com/lingtalfi/Light_Kit_Admin_LoginNotifier)  --> 1.0.0


- 2.0.2037 -- 2020-11-30

    - [Ling/Light_LoginNotifier](https://github.com/lingtalfi/Light_LoginNotifier)  --> 1.0.0


- 2.0.2036 -- 2020-11-30

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.2 --> 1.3.3


- 2.0.2035 -- 2020-11-30

    - [Ling/Light_ErrorPop](https://github.com/lingtalfi/Light_ErrorPop) 1.0.1 --> 1.0.2


- 2.0.2034 -- 2020-11-30

    - [Ling/Light_ErrorHandler](https://github.com/lingtalfi/Light_ErrorHandler) 1.0.2 --> 1.0.3


- 2.0.2033 -- 2020-11-30

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.1 --> 1.3.2


- 2.0.2032 -- 2020-11-30

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.9.2 --> 1.9.3


- 2.0.2031 -- 2020-11-30

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.3.0 --> 1.3.1


- 2.0.2030 -- 2020-11-30

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.11.2 --> 1.11.3


- 2.0.2029 -- 2020-11-30

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.18 --> 1.24.19


- 2.0.2028 -- 2020-11-27

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.4 --> 1.28.5


- 2.0.2027 -- 2020-11-27

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.3 --> 1.28.4


- 2.0.2026 -- 2020-11-27

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.9.1 --> 1.9.2


- 2.0.2025 -- 2020-11-27

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.285 --> 1.286


- 2.0.2024 -- 2020-11-27

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.2 --> 1.18.3


- 2.0.2023 -- 2020-11-27

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.1 --> 1.18.2


- 2.0.2022 -- 2020-11-27

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.1 --> 1.5.2


- 2.0.2021 -- 2020-11-27

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.9 --> 1.31.10


- 2.0.2020 -- 2020-11-27

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.13.3 --> 1.13.4


- 2.0.2019 -- 2020-11-27

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.12.0 --> 1.12.1


- 2.0.2018 -- 2020-11-27

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.18.0 --> 1.18.1


- 2.0.2017 -- 2020-11-27

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.2 --> 1.28.3


- 2.0.2016 -- 2020-11-27

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.2.0 --> 1.2.1


- 2.0.2015 -- 2020-11-27

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.1 --> 0.5.2


- 2.0.2014 -- 2020-11-27

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.6.0 --> 1.7.2


- 2.0.2013 -- 2020-11-27

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.5.0 --> 1.5.1


- 2.0.2012 -- 2020-11-27

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.1 --> 0.12.2


- 2.0.2011 -- 2020-11-27

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.16.0 --> 1.17.0


- 2.0.2010 -- 2020-11-27

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.12 --> 0.69.13


- 2.0.2009 -- 2020-11-26

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.3 --> 1.19.4


- 2.0.2008 -- 2020-11-26

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.11 --> 0.69.12


- 2.0.2007 -- 2020-11-26

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.5.0 --> 0.5.1


- 2.0.2006 -- 2020-11-26

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.3 --> 2.0.4


- 2.0.2005 -- 2020-11-26

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.17 --> 1.24.18


- 2.0.2004 -- 2020-11-26

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.1 --> 1.28.2


- 2.0.2003 -- 2020-11-24

    - [Ling/JBee](https://github.com/lingtalfi/JBee) 1.1.1 --> 1.1.2


- 2.0.2002 -- 2020-11-24

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.284 --> 1.285


- 2.0.2001 -- 2020-11-24

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.15.1 --> 1.15.2


- 2.0.2000 -- 2020-11-24

    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils) 1.1.4 --> 1.1.5


- 2.0.1999 -- 2020-11-24

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.283 --> 1.284


- 2.0.1998 -- 2020-11-24

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.15.0 --> 1.15.1


- 2.0.1997 -- 2020-11-24

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.282 --> 1.283


- 2.0.1996 -- 2020-11-23

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.12.0 --> 0.12.1


- 2.0.1995 -- 2020-11-23

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.28.0 --> 1.28.1


- 2.0.1994 -- 2020-11-23

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.8 --> 1.31.9


- 2.0.1993 -- 2020-11-23

    - [Ling/WebWizardTools](https://github.com/lingtalfi/WebWizardTools) 1.3.0 --> 1.3.1


- 2.0.1992 -- 2020-11-20

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.6.4 --> 1.6.5


- 2.0.1991 -- 2020-11-20

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.6.3 --> 1.6.4


- 2.0.1990 -- 2020-11-20

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.8 --> 1.6.9


- 2.0.1989 -- 2020-11-20

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.7 --> 1.6.8


- 2.0.1988 -- 2020-11-20

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.6 --> 1.6.7


- 2.0.1987 -- 2020-11-20

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.16 --> 1.24.17


- 2.0.1986 -- 2020-11-20

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.3 --> 1.19.4


- 2.0.1985 -- 2020-11-20

    - [Ling/Light_SimpleHttpServer](https://github.com/lingtalfi/Light_SimpleHttpServer)  --> 1.0.4


- 2.0.1984 -- 2020-11-20

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.8 --> 1.14.9


- 2.0.1983 -- 2020-11-20

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.281 --> 1.282


- 2.0.1982 -- 2020-11-20

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.7 --> 1.14.8


- 2.0.1981 -- 2020-11-20

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.28 --> 1.281


- 2.0.1980 -- 2020-11-20

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.6 --> 1.14.7


- 2.0.1979 -- 2020-11-20

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.5 --> 1.14.6


- 2.0.1978 -- 2020-11-20

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.4 --> 1.14.5


- 2.0.1977 -- 2020-11-20

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.3 --> 1.14.4


- 2.0.1976 -- 2020-11-19

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.5 --> 1.6.6
    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.15 --> 1.24.16


- 2.0.1975 -- 2020-11-19

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.14 --> 1.24.15


- 2.0.1974 -- 2020-11-19

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.13 --> 1.24.14


- 2.0.1973 -- 2020-11-17

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.4 --> 2.0.5


- 2.0.1972 -- 2020-11-17

    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils) 1.1.3 --> 1.1.4


- 2.0.1971 -- 2020-11-17

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.279 --> 1.28


- 2.0.1970 -- 2020-11-17

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.2 --> 1.21.3


- 2.0.1969 -- 2020-11-17

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.1 --> 1.21.2


- 2.0.1968 -- 2020-11-17

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.13 --> 1.30.14


- 2.0.1967 -- 2020-11-17

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.3 --> 2.0.4


- 2.0.1966 -- 2020-11-17

    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils) 1.1.2 --> 1.1.3


- 2.0.1965 -- 2020-11-17

    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils) 1.1.1 --> 1.1.2


- 2.0.1964 -- 2020-11-16

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.12 --> 1.30.13


- 2.0.1963 -- 2020-11-16

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.2 --> 1.14.3


- 2.0.1962 -- 2020-11-13

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.2 --> 2.0.3


- 2.0.1961 -- 2020-11-13

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.12 --> 1.24.13


- 2.0.1960 -- 2020-11-13

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.11 --> 1.24.12


- 2.0.1959 -- 2020-11-13

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.1 --> 2.0.2


- 2.0.1958 -- 2020-11-13

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 2.0.0 --> 2.0.1


- 2.0.1957 -- 2020-11-12

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.7 --> 1.31.8


- 2.0.1956 -- 2020-11-12

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.2 --> 1.19.3


- 2.0.1955 -- 2020-11-12

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.11 --> 1.30.12


- 2.0.1954 -- 2020-11-12

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.1 --> 1.19.2


- 2.0.1953 -- 2020-11-10

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.10 --> 1.30.11


- 2.0.1952 -- 2020-11-10

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.19.0 --> 1.19.1


- 2.0.1951 -- 2020-11-10

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.36.2 --> 1.36.3


- 2.0.1950 -- 2020-11-10

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.10 --> 0.69.11


- 2.0.1949 -- 2020-11-09

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.6.2 --> 1.6.3


- 2.0.1948 -- 2020-11-09

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.9 --> 1.30.10


- 2.0.1947 -- 2020-11-09

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.18.1 --> 1.19.0


- 2.0.1946 -- 2020-11-09

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.22.0 --> 1.23.0


- 2.0.1945 -- 2020-11-09

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.7 --> 1.29.8


- 2.0.1944 -- 2020-11-09

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.3 --> 1.31.4


- 2.0.1943 -- 2020-11-09

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.2 --> 1.31.3


- 2.0.1942 -- 2020-11-09

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.1 --> 1.31.2


- 2.0.1941 -- 2020-11-09

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.31.0 --> 1.31.1


- 2.0.1940 -- 2020-11-09

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 3.0.4 --> 3.0.5


- 2.0.1939 -- 2020-11-09

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.10 --> 1.24.11


- 2.0.1938 -- 2020-11-09

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.9 --> 1.24.10


- 2.0.1937 -- 2020-11-06

    - [Ling/PhpExcelTool](https://github.com/lingtalfi/PhpExcelTool) 1.9.3 --> 1.9.4


- 2.0.1936 -- 2020-11-06

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.8.5 --> 1.8.6


- 2.0.1935 -- 2020-11-06

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.8.0 --> 1.8.1


- 2.0.1934 -- 2020-11-06

    - [Ling/Jin](https://github.com/lingtalfi/Jin) 1.0.0 --> 1.0.1


- 2.0.1933 -- 2020-11-06

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.278 --> 1.279


- 2.0.1932 -- 2020-11-06

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 3.0.3 --> 3.0.4


- 2.0.1931 -- 2020-11-06

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.1 --> 1.14.2


- 2.0.1930 -- 2020-11-06

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.14.0 --> 1.14.1


- 2.0.1929 -- 2020-11-06

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.8 --> 1.30.9


- 2.0.1928 -- 2020-11-06

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.7 --> 1.30.8


- 2.0.1927 -- 2020-11-06

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.11.1 --> 1.11.2


- 2.0.1926 -- 2020-11-06

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.9.0 --> 1.9.1


- 2.0.1925 -- 2020-11-06

    - [Ling/CheapLogger](https://github.com/lingtalfi/CheapLogger) 1.0.0 --> 1.0.1


- 2.0.1924 -- 2020-11-05

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.2.0 --> 1.2.1


- 2.0.1923 -- 2020-11-05

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.6 --> 1.29.7


- 2.0.1922 -- 2020-11-03

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.5 --> 1.29.6


- 2.0.1921 -- 2020-11-03

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.4 --> 1.29.5


- 2.0.1920 -- 2020-10-30

    - [Ling/Light_HttpError](https://github.com/lingtalfi/Light_HttpError) 1.0.2 --> 1.0.3


- 2.0.1919 -- 2020-10-30

    - [Ling/Light_HttpError](https://github.com/lingtalfi/Light_HttpError) 1.0.1 --> 1.0.2


- 2.0.1918 -- 2020-10-30

    - [Ling/ExceptionCodes](https://github.com/lingtalfi/ExceptionCodes)  --> 1.0.0


- 2.0.1917 -- 2020-10-30

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.6 --> 1.30.7


- 2.0.1916 -- 2020-10-30

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.277 --> 1.278


- 2.0.1915 -- 2020-10-30

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.3 --> 1.29.4


- 2.0.1914 -- 2020-10-30

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 3.0.2 --> 3.0.3


- 2.0.1913 -- 2020-10-30

    - [Ling/Light_HttpError](https://github.com/lingtalfi/Light_HttpError) 1.0.0 --> 1.0.1


- 2.0.1912 -- 2020-10-30

    - [Ling/Light_HttpError](https://github.com/lingtalfi/Light_HttpError)  --> 1.0.0


- 2.0.1911 -- 2020-10-29

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 3.0.1 --> 3.0.2


- 2.0.1910 -- 2020-10-29

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.8 --> 1.24.9


- 2.0.1909 -- 2020-10-29

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.7 --> 1.24.8


- 2.0.1908 -- 2020-10-27

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.276 --> 1.277


- 2.0.1907 -- 2020-10-23

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.275 --> 1.276


- 2.0.1906 -- 2020-10-23

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.9.4 --> 1.9.5


- 2.0.1905 -- 2020-10-23

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.9.3 --> 1.9.4


- 2.0.1904 -- 2020-10-23

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.274 --> 1.275


- 2.0.1903 -- 2020-10-23

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.8.4 --> 1.8.5


- 2.0.1902 -- 2020-10-20

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.273 --> 1.274


- 2.0.1901 -- 2020-10-20

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.8.3 --> 1.8.4


- 2.0.1900 -- 2020-10-20

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.8.2 --> 1.8.3


- 2.0.1899 -- 2020-10-19

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.8.1 --> 1.8.2


- 2.0.1898 -- 2020-10-19

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.272 --> 1.273


- 2.0.1897 -- 2020-10-19

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.5 --> 1.30.6


- 2.0.1896 -- 2020-10-16

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.4 --> 1.30.5


- 2.0.1895 -- 2020-10-16

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.2 --> 1.29.3


- 2.0.1894 -- 2020-10-15

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.6 --> 1.24.7


- 2.0.1893 -- 2020-10-15

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.3.2 --> 1.3.3


- 2.0.1892 -- 2020-10-13

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.9 --> 0.69.10


- 2.0.1891 -- 2020-10-06

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.9.2 --> 1.9.3


- 2.0.1890 -- 2020-10-05

    - [Ling/ParenthesisMirrorParser](https://github.com/lingtalfi/ParenthesisMirrorParser) 1.0.0 --> 1.0.1


- 2.0.1889 -- 2020-10-05

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.8 --> 0.69.9


- 2.0.1888 -- 2020-10-05

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.7 --> 0.69.8


- 2.0.1887 -- 2020-10-05

    - [Ling/ParenthesisMirrorParser](https://github.com/lingtalfi/ParenthesisMirrorParser)  --> 1.0.0


- 2.0.1886 -- 2020-10-05

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 3.0.0 --> 3.0.1


- 2.0.1885 -- 2020-10-05

    - [Ling/JBee](https://github.com/lingtalfi/JBee) 1.1.0 --> 1.1.1


- 2.0.1884 -- 2020-10-02

    - [Ling/GormanJsonDecoder](https://github.com/lingtalfi/GormanJsonDecoder) 1.1.0 --> 1.1.1


- 2.0.1883 -- 2020-10-02

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.3.1 --> 1.3.2


- 2.0.1882 -- 2020-10-01

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.7 --> 1.19.8


- 2.0.1881 -- 2020-10-01

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.8.0 --> 1.8.1


- 2.0.1880 -- 2020-10-01

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.5 --> 1.24.6


- 2.0.1879 -- 2020-09-29

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.6 --> 1.19.7


- 2.0.1878 -- 2020-09-28

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.4 --> 1.24.5


- 2.0.1877 -- 2020-09-25

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.6.1 --> 1.6.2


- 2.0.1876 -- 2020-09-25

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.4 --> 1.6.5


- 2.0.1875 -- 2020-09-25

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.5 --> 1.19.6


- 2.0.1874 -- 2020-09-25

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.4 --> 1.19.5


- 2.0.1873 -- 2020-09-24

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.3.0 --> 1.3.1


- 2.0.1872 -- 2020-09-22

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.6.0 --> 1.6.1


- 2.0.1871 -- 2020-09-22

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.3 --> 1.19.4


- 2.0.1870 -- 2020-09-22

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.36.1 --> 1.36.2


- 2.0.1869 -- 2020-09-22

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.3 --> 1.24.4


- 2.0.1868 -- 2020-09-22

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.2 --> 1.24.3


- 2.0.1867 -- 2020-09-22

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.1 --> 1.24.2


- 2.0.1866 -- 2020-09-22

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.24.0 --> 1.24.1


- 2.0.1865 -- 2020-09-22

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.23.0 --> 1.24.0


- 2.0.1864 -- 2020-09-22

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.2 --> 1.19.3


- 2.0.1863 -- 2020-09-21

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.2 --> 2.0.3


- 2.0.1862 -- 2020-09-21

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.2.10 --> 1.3.0


- 2.0.1861 -- 2020-09-21

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.2.9 --> 1.2.10


- 2.0.1860 -- 2020-09-18

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.2 --> 1.19.3


- 2.0.1859 -- 2020-09-18

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.6 --> 1.31.7


- 2.0.1858 -- 2020-09-18

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.5 --> 1.31.6


- 2.0.1857 -- 2020-09-18

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.4 --> 1.31.5


- 2.0.1856 -- 2020-09-18

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.2.8 --> 1.2.9


- 2.0.1855 -- 2020-09-18

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.9.1 --> 1.9.2


- 2.0.1854 -- 2020-09-18

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.27.0 --> 1.28.0


- 2.0.1853 -- 2020-09-18

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.1 --> 1.19.2


- 2.0.1852 -- 2020-09-18

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.19.0 --> 1.19.1


- 2.0.1851 -- 2020-09-18

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.3 --> 1.31.4


- 2.0.1850 -- 2020-09-18

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.3 --> 1.6.4


- 2.0.1849 -- 2020-09-18

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.1 --> 2.0.2


- 2.0.1848 -- 2020-09-17

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.19.1 --> 1.19.2


- 2.0.1847 -- 2020-09-17

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.3 --> 1.30.4


- 2.0.1846 -- 2020-09-17

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.36.0 --> 1.36.1


- 2.0.1845 -- 2020-09-17

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.18.0 --> 1.19.0


- 2.0.1844 -- 2020-09-17

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.2 --> 1.31.3


- 2.0.1843 -- 2020-09-17

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.1 --> 1.31.2


- 2.0.1842 -- 2020-09-17

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.31.0 --> 1.31.1


- 2.0.1841 -- 2020-09-17

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.23.2 --> 1.23.0


- 2.0.1840 -- 2020-09-15

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.30.3 --> 1.31.0


- 2.0.1839 -- 2020-09-15

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.2.7 --> 1.2.8


- 2.0.1838 -- 2020-09-15

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 2.0.0 --> 2.0.1


- 2.0.1837 -- 2020-09-15

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.18.0 --> 2.0.0


- 2.0.1836 -- 2020-09-15

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 3.0.3 --> 3.0.4


- 2.0.1835 -- 2020-09-14

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.2.6 --> 1.2.7


- 2.0.1834 -- 2020-09-14

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.2.5 --> 1.2.6


- 2.0.1833 -- 2020-09-14

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.2 --> 1.6.3


- 2.0.1832 -- 2020-09-14

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.2.4 --> 1.2.5


- 2.0.1831 -- 2020-09-14

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.1 --> 1.6.2


- 2.0.1830 -- 2020-09-14

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.2.3 --> 1.2.4


- 2.0.1829 -- 2020-09-14

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.6.0 --> 1.6.1


- 2.0.1828 -- 2020-09-14

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.2.1 --> 1.2.3


- 2.0.1827 -- 2020-09-14

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.18.0 --> 1.19.1


- 2.0.1826 -- 2020-09-14

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.35.1 --> 1.36.0


- 2.0.1825 -- 2020-09-14

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.35.0 --> 1.35.1


- 2.0.1824 -- 2020-09-14

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.5.0 --> 1.6.0


- 2.0.1823 -- 2020-09-14

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.13.2 --> 1.13.3


- 2.0.1822 -- 2020-09-14

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.5.2 --> 1.5.3


- 2.0.1821 -- 2020-09-11

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.5.1 --> 1.5.2


- 2.0.1820 -- 2020-09-11

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.13.1 --> 1.13.2


- 2.0.1819 -- 2020-09-11

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.12.0 --> 1.13.1


- 2.0.1818 -- 2020-09-11

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.6 --> 0.69.7


- 2.0.1817 -- 2020-09-11

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.13.9 --> 1.14.0


- 2.0.1816 -- 2020-09-11

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.23.1 --> 1.23.2


- 2.0.1815 -- 2020-09-11

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.23.0 --> 1.23.1


- 2.0.1814 -- 2020-09-11

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.22.0 --> 1.23.0


- 2.0.1813 -- 2020-09-11

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.11.0 --> 1.12.0


- 2.0.1812 -- 2020-09-08

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.5 --> 0.69.6


- 2.0.1811 -- 2020-09-08

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.271 --> 1.272


- 2.0.1810 -- 2020-09-08

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.34.3 --> 1.35.0


- 2.0.1809 -- 2020-09-08

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 3.0.2 --> 3.0.3


- 2.0.1808 -- 2020-09-08

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.27 --> 1.271


- 2.0.1807 -- 2020-09-08

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.269 --> 1.27


- 2.0.1806 -- 2020-09-07

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.21.2 --> 1.22.0


- 2.0.1805 -- 2020-09-07

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.34.2 --> 1.34.3


- 2.0.1804 -- 2020-09-04

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.17.2 --> 1.18.0


- 2.0.1803 -- 2020-09-04

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.26.0 --> 1.27.0


- 2.0.1802 -- 2020-09-03

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.17.1 --> 1.17.2


- 2.0.1801 -- 2020-09-03

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.30.2 --> 1.30.3


- 2.0.1800 -- 2020-09-03

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.30.1 --> 1.30.2


- 2.0.1799 -- 2020-09-03

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.30.0 --> 1.30.1


- 2.0.1798 -- 2020-09-03

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.29.0 --> 1.30.0


- 2.0.1797 -- 2020-09-03

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.14.1 --> 1.15.0


- 2.0.1796 -- 2020-09-03

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.41.0 --> 2.0.0


- 2.0.1795 -- 2020-09-03

    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils) 1.1.0 --> 1.1.1


- 2.0.1794 -- 2020-09-01

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.1 --> 1.29.2


- 2.0.1793 -- 2020-09-01

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.21.1 --> 1.21.2


- 2.0.1792 -- 2020-09-01

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.21.0 --> 1.21.1


- 2.0.1791 -- 2020-08-31

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.18.0 --> 1.18.1


- 2.0.1790 -- 2020-08-31

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.29.0 --> 1.29.1


- 2.0.1789 -- 2020-08-31

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.2 --> 1.30.3


- 2.0.1788 -- 2020-08-31

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.21.0 --> 1.22.0


- 2.0.1787 -- 2020-08-28

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.1.0 --> 1.2.0


- 2.0.1786 -- 2020-08-28

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.4.0 --> 0.5.0


- 2.0.1785 -- 2020-08-28

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.4.0 --> 1.5.0


- 2.0.1784 -- 2020-08-28

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.25.0 --> 1.26.0


- 2.0.1783 -- 2020-08-28

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 1.8.0 --> 2.0.0


- 2.0.1782 -- 2020-08-28

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 1.7.0 --> 1.8.0


- 2.0.1781 -- 2020-08-28

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.13.0 --> 1.14.0


- 2.0.1780 -- 2020-08-25

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.2.0 --> 1.2.1


- 2.0.1779 -- 2020-08-24

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.1.0 --> 1.2.0


- 2.0.1778 -- 2020-08-24

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.268 --> 1.269


- 2.0.1777 -- 2020-08-24

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.0.1 --> 1.1.0


- 2.0.1776 -- 2020-08-21

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.40.0 --> 1.41.0


- 2.0.1775 -- 2020-08-21

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.24.0 --> 1.25.0


- 2.0.1774 -- 2020-08-21

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences) 1.0.0 --> 1.1.0


- 2.0.1773 -- 2020-08-21

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.3.0 --> 0.4.0


- 2.0.1772 -- 2020-08-21

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.5.1 --> 1.6.0


- 2.0.1771 -- 2020-08-21

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.3.0 --> 1.4.0


- 2.0.1770 -- 2020-08-21

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.11.0 --> 0.12.0


- 2.0.1769 -- 2020-08-21

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 3.0.1 --> 3.0.2


- 2.0.1768 -- 2020-08-21

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 3.0.0 --> 3.0.1


- 2.0.1767 -- 2020-08-21

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 2.6.1 --> 3.0.0


- 2.0.1766 -- 2020-08-21

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.4 --> 0.69.5


- 2.0.1765 -- 2020-08-21

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.1.1 --> 2.1.2


- 2.0.1764 -- 2020-08-21

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget) 1.0.0 --> 1.0.1


- 2.0.1763 -- 2020-08-21

    - [Ling/Light_Nugget](https://github.com/lingtalfi/Light_Nugget)  --> 1.0.0


- 2.0.1762 -- 2020-08-21

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.3 --> 0.69.4


- 2.0.1761 -- 2020-08-21

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.2 --> 0.69.3


- 2.0.1760 -- 2020-08-21

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.1 --> 0.69.2


- 2.0.1759 -- 2020-08-20

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.39.0 --> 1.40.0


- 2.0.1758 -- 2020-08-20

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.9.0 --> 1.10.0


- 2.0.1757 -- 2020-08-20

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.38.0 --> 1.39.0


- 2.0.1756 -- 2020-08-20

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.8.0 --> 1.9.0


- 2.0.1755 -- 2020-08-20

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.37.2 --> 1.38.0


- 2.0.1754 -- 2020-08-20

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.37.1 --> 1.37.2


- 2.0.1753 -- 2020-08-18

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.23.1 --> 1.24.0


- 2.0.1752 -- 2020-08-18

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.28.0 --> 1.29.0


- 2.0.1751 -- 2020-08-18

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.17.0 --> 1.17.1


- 2.0.1750 -- 2020-08-18

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.27.0 --> 1.28.0


- 2.0.1749 -- 2020-08-18

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.15.0 --> 1.16.0


- 2.0.1748 -- 2020-08-18

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.14.0 --> 1.15.0


- 2.0.1747 -- 2020-08-18

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.13.0 --> 1.14.0


- 2.0.1746 -- 2020-08-18

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.267 --> 1.268


- 2.0.1745 -- 2020-08-18

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.23.0 --> 1.23.1


- 2.0.1744 -- 2020-08-18

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.20.0 --> 1.21.0


- 2.0.1743 -- 2020-08-18

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.12.0 --> 1.13.0
    - [Ling/Light_LingHooks](https://github.com/lingtalfi/Light_LingHooks)  --> 1.0.0


- 2.0.1742 -- 2020-08-17

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.5.2 --> 1.6.0


- 2.0.1741 -- 2020-08-17

    - [Ling/Light_UserNotifications](https://github.com/lingtalfi/Light_UserNotifications) 1.0.1 --> 1.0.2


- 2.0.1740 -- 2020-08-17

    - [Ling/Light_QuickMailAlert](https://github.com/lingtalfi/Light_QuickMailAlert) 1.0.0 --> 1.1.0


- 2.0.1739 -- 2020-08-17

    - [Ling/Light_UserNotifications](https://github.com/lingtalfi/Light_UserNotifications) 1.0.0 --> 1.0.1


- 2.0.1738 -- 2020-08-17

    - [Ling/Light_UserNotifications](https://github.com/lingtalfi/Light_UserNotifications)  --> 1.0.0


- 2.0.1737 -- 2020-08-17

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.69.0 --> 0.69.1


- 2.0.1736 -- 2020-08-17

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.2.0 --> 1.3.0


- 2.0.1735 -- 2020-08-17

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.8.0 --> 1.9.0


- 2.0.1734 -- 2020-08-14

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.68.0 --> 0.69.0


- 2.0.1733 -- 2020-08-14

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.67.0 --> 0.68.0


- 2.0.1732 -- 2020-08-14

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.66.4 --> 0.67.0


- 2.0.1731 -- 2020-08-14

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.19.0 --> 1.20.0


- 2.0.1730 -- 2020-08-14

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.22.1 --> 1.23.0


- 2.0.1729 -- 2020-08-14

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.1.0 --> 1.2.0


- 2.0.1728 -- 2020-08-14

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.7.0 --> 1.8.0


- 2.0.1727 -- 2020-08-14

    - [Ling/Light_QuickMailAlert](https://github.com/lingtalfi/Light_QuickMailAlert)  --> 1.0.0


- 2.0.1726 -- 2020-08-14

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.0.1 --> 1.1.0


- 2.0.1725 -- 2020-08-14

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.2.0 --> 1.3.0


- 2.0.1724 -- 2020-08-14

    - [Ling/Light_TaskScheduler](https://github.com/lingtalfi/Light_TaskScheduler) 1.0.0 --> 1.1.0


- 2.0.1723 -- 2020-08-13

    - [Ling/Light_Kit_Admin_UserPreferences](https://github.com/lingtalfi/Light_Kit_Admin_UserPreferences)  --> 1.0.0


- 2.0.1722 -- 2020-08-13

    - [Ling/Light_UserPreferences](https://github.com/lingtalfi/Light_UserPreferences)  --> 1.0.0


- 2.0.1721 -- 2020-08-13

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.34.1 --> 1.34.2


- 2.0.1720 -- 2020-08-13

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.28.1 --> 1.29.0


- 2.0.1719 -- 2020-08-13

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.34.0 --> 1.34.1


- 2.0.1718 -- 2020-08-13

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.33.1 --> 1.34.0


- 2.0.1717 -- 2020-08-11

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.33.0 --> 1.33.1


- 2.0.1716 -- 2020-08-11

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.17.0 --> 1.18.0


- 2.0.1715 -- 2020-08-11

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.32.1 --> 1.33.0


- 2.0.1714 -- 2020-08-11

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.3.0 --> 1.4.0


- 2.0.1713 -- 2020-08-11

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.16.0 --> 1.17.0


- 2.0.1712 -- 2020-08-11

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.32.0 --> 1.32.1


- 2.0.1711 -- 2020-08-11

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.31.0 --> 1.32.0


- 2.0.1710 -- 2020-08-11

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.2.3 --> 1.3.0


- 2.0.1709 -- 2020-08-11

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.15.0 --> 1.16.0


- 2.0.1708 -- 2020-08-11

    - [Ling/JBee](https://github.com/lingtalfi/JBee) 1.0.1 --> 1.1.0


- 2.0.1707 -- 2020-08-11

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.30.0 --> 1.31.0


- 2.0.1706 -- 2020-08-11

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.22.0 --> 1.22.1


- 2.0.1705 -- 2020-08-11

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.1.1 --> 1.2.0


- 2.0.1704 -- 2020-08-10

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.28.0 --> 1.28.1


- 2.0.1703 -- 2020-08-10

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.21.0 --> 1.22.0


- 2.0.1702 -- 2020-08-10

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.21.0 --> 1.21.1


- 2.0.1701 -- 2020-08-10

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.17.2 --> 1.18.0


- 2.0.1700 -- 2020-08-10

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.12.0 --> 1.12.1


- 2.0.1699 -- 2020-08-10

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.20.2 --> 1.21.0


- 2.0.1698 -- 2020-08-10

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.8.0 --> 1.9.0


- 2.0.1697 -- 2020-08-10

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.7.0 --> 1.8.0


- 2.0.1696 -- 2020-08-10

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.17.1 --> 1.18.0


- 2.0.1695 -- 2020-08-10

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.20.0 --> 1.21.0


- 2.0.1694 -- 2020-08-10

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.20.1 --> 1.20.2


- 2.0.1693 -- 2020-08-10

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.20.0 --> 1.20.1


- 2.0.1692 -- 2020-08-07

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.6.0 --> 1.6.1


- 2.0.1691 -- 2020-08-07

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.2.0 --> 0.3.0


- 2.0.1690 -- 2020-08-07

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.5.0 --> 1.5.1


- 2.0.1689 -- 2020-08-07

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.4.0 --> 1.5.0


- 2.0.1688 -- 2020-08-07

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.1.0 --> 1.2.0


- 2.0.1687 -- 2020-08-07

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.10.0 --> 0.11.0


- 2.0.1686 -- 2020-08-07

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.37.0 --> 1.37.1


- 2.0.1685 -- 2020-08-07

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.17.0 --> 1.17.1


- 2.0.1684 -- 2020-08-07

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.16.0 --> 1.17.0


- 2.0.1683 -- 2020-08-07

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.16.0 --> 1.17.0


- 2.0.1682 -- 2020-08-07

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.9.0 --> 0.10.0


- 2.0.1681 -- 2020-08-07

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase) 0.1.0 --> 0.2.0


- 2.0.1680 -- 2020-08-07

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.3.0 --> 1.4.0


- 2.0.1679 -- 2020-08-07

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.19.0 --> 1.20.0


- 2.0.1678 -- 2020-08-07

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.8.0 --> 0.9.0


- 2.0.1677 -- 2020-08-07

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.0.1 --> 1.1.0


- 2.0.1676 -- 2020-08-07

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.5.0 --> 1.6.0


- 2.0.1675 -- 2020-08-07

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.36.1 --> 1.37.0


- 2.0.1674 -- 2020-08-07

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.20.1 --> 1.21.0


- 2.0.1673 -- 2020-08-06

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.36.0 --> 1.36.1


- 2.0.1672 -- 2020-08-06

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.35.0 --> 1.36.0


- 2.0.1671 -- 2020-08-06

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.34.2 --> 1.35.0


- 2.0.1670 -- 2020-08-06

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.66.3 --> 0.66.4


- 2.0.1669 -- 2020-08-06

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.66.2 --> 0.66.3


- 2.0.1668 -- 2020-08-06

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.18.1 --> 1.19.0


- 2.0.1667 -- 2020-08-04

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.266 --> 1.267


- 2.0.1666 -- 2020-08-04

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.18.0 --> 1.18.1


- 2.0.1665 -- 2020-08-04

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.17.1 --> 1.18.0


- 2.0.1664 -- 2020-08-04

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.26.0 --> 1.27.0


- 2.0.1663 -- 2020-08-04

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.7.0 --> 0.8.0


- 2.0.1662 -- 2020-08-03

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.66.1 --> 0.66.2


- 2.0.1661 -- 2020-08-03

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.66.0 --> 0.66.1


- 2.0.1660 -- 2020-08-03

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.15.1 --> 1.16.0


- 2.0.1659 -- 2020-08-03

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.25.1 --> 1.26.0


- 2.0.1658 -- 2020-08-03

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.17.0 --> 1.17.1


- 2.0.1657 -- 2020-07-31

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.16.1 --> 1.17.0


- 2.0.1656 -- 2020-07-31

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.16.0 --> 1.16.1


- 2.0.1655 -- 2020-07-31

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.15.1 --> 1.16.0


- 2.0.1654 -- 2020-07-31

    - [Ling/JBee](https://github.com/lingtalfi/JBee) 1.0.0 --> 1.0.1


- 2.0.1653 -- 2020-07-31

    - [Ling/JBee](https://github.com/lingtalfi/JBee)  --> 1.0.0


- 2.0.1652 -- 2020-07-31

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.15.0 --> 1.15.1


- 2.0.1651 -- 2020-07-31

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler) 1.0.0 --> 1.0.1


- 2.0.1650 -- 2020-07-31

    - [Ling/Light_Kit_Admin_TaskScheduler](https://github.com/lingtalfi/Light_Kit_Admin_TaskScheduler)  --> 1.0.0


- 2.0.1649 -- 2020-07-31

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.25.0 --> 1.25.1


- 2.0.1648 -- 2020-07-31

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.14.0 --> 1.15.0


- 2.0.1647 -- 2020-07-31

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.7.0 --> 1.8.0


- 2.0.1646 -- 2020-07-31

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.265 --> 1.266


- 2.0.1645 -- 2020-07-31

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.4.0 --> 1.5.0


- 2.0.1644 -- 2020-07-31

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.6.0 --> 1.7.0


- 2.0.1643 -- 2020-07-31

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.13.0 --> 1.14.0


- 2.0.1642 -- 2020-07-30

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.12.0 --> 1.13.0


- 2.0.1641 -- 2020-07-30

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.12.0 --> 1.13.0


- 2.0.1640 -- 2020-07-30

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.3.1 --> 1.4.0


- 2.0.1639 -- 2020-07-30

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.3.0 --> 1.3.1


- 2.0.1638 -- 2020-07-30

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.2.2 --> 1.3.0


- 2.0.1637 -- 2020-07-30

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.11.1 --> 1.12.0


- 2.0.1636 -- 2020-07-30

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.11.0 --> 1.11.1


- 2.0.1635 -- 2020-07-30

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.10.0 --> 1.11.0


- 2.0.1634 -- 2020-07-30

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.5.0 --> 1.6.0


- 2.0.1633 -- 2020-07-30

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.4.1 --> 1.5.0


- 2.0.1632 -- 2020-07-30

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.2.1 --> 1.2.2


- 2.0.1631 -- 2020-07-30

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.2.0 --> 1.2.1


- 2.0.1630 -- 2020-07-30

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.9.0 --> 1.10.0


- 2.0.1629 -- 2020-07-28

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.1.1 --> 1.2.0


- 2.0.1628 -- 2020-07-28

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.8.5 --> 1.9.0


- 2.0.1627 -- 2020-07-28

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.1.0 --> 1.1.1


- 2.0.1626 -- 2020-07-28

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.11.0 --> 1.12.0


- 2.0.1625 -- 2020-07-28

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.11.1 --> 1.11.2


- 2.0.1624 -- 2020-07-28

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.11.0 --> 1.11.1


- 2.0.1623 -- 2020-07-28

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.10.0 --> 1.11.0


- 2.0.1622 -- 2020-07-28

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.264 --> 1.265


- 2.0.1621 -- 2020-07-28

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService) 1.0.0 --> 1.1.0


- 2.0.1620 -- 2020-07-28

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.65.0 --> 0.66.0


- 2.0.1619 -- 2020-07-28

    - [Ling/Light_LingStandardService](https://github.com/lingtalfi/Light_LingStandardService)  --> 1.0.0


- 2.0.1618 -- 2020-07-27

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.8.4 --> 1.8.5


- 2.0.1617 -- 2020-07-27

    - [Ling/Light_TaskScheduler](https://github.com/lingtalfi/Light_TaskScheduler)  --> 1.0.0


- 2.0.1616 -- 2020-07-27

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.8.3 --> 1.8.4


- 2.0.1615 -- 2020-07-27

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer) 1.0.0 --> 1.0.1


- 2.0.1614 -- 2020-07-27

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.263 --> 1.264


- 2.0.1613 -- 2020-07-27

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.27.2 --> 1.28.0


- 2.0.1612 -- 2020-07-27

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.1 --> 1.30.2


- 2.0.1611 -- 2020-07-27

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.30.0 --> 1.30.1


- 2.0.1610 -- 2020-07-27

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.29.1 --> 1.30.0


- 2.0.1609 -- 2020-07-27

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.29.0 --> 1.29.1


- 2.0.1608 -- 2020-07-27

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.28.0 --> 1.29.0


- 2.0.1607 -- 2020-07-27

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.8.2 --> 1.8.3


- 2.0.1606 -- 2020-07-27

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.262 --> 1.263


- 2.0.1605 -- 2020-07-24

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.8.1 --> 1.8.2


- 2.0.1604 -- 2020-07-24

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.8.0 --> 1.8.1


- 2.0.1603 -- 2020-07-24

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.7.0 --> 1.8.0


- 2.0.1602 -- 2020-07-24

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.261 --> 1.262


- 2.0.1601 -- 2020-07-24

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.26 --> 1.261


- 2.0.1600 -- 2020-07-24

    - [Ling/WebWizardTools](https://github.com/lingtalfi/WebWizardTools) 1.2.0 --> 1.3.0


- 2.0.1599 -- 2020-07-24

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.10.0 --> 1.11.0


- 2.0.1598 -- 2020-07-23

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.6.0 --> 1.7.0


- 2.0.1597 -- 2020-07-23

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.5.0 --> 1.6.0


- 2.0.1596 -- 2020-07-23

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.9.0 --> 1.10.0


- 2.0.1595 -- 2020-07-23

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.9.0 --> 1.10.0


- 2.0.1594 -- 2020-07-23

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.259 --> 1.26


- 2.0.1593 -- 2020-07-23

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.8.1 --> 1.9.0


- 2.0.1592 -- 2020-07-23

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.8.0 --> 1.8.1


- 2.0.1591 -- 2020-07-23

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.7.1 --> 1.8.0


- 2.0.1590 -- 2020-07-21

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.7.0 --> 1.7.1


- 2.0.1589 -- 2020-07-21

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.258 --> 1.259


- 2.0.1588 -- 2020-07-21

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.34.1 --> 1.34.2


- 2.0.1587 -- 2020-07-21

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.30.0 --> 1.31.0


- 2.0.1586 -- 2020-07-21

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.4.0 --> 1.5.0


- 2.0.1585 -- 2020-07-21

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.19.0 --> 1.20.0


- 2.0.1584 -- 2020-07-21

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.27.1 --> 1.27.2


- 2.0.1583 -- 2020-07-21

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.4.0 --> 1.4.1


- 2.0.1582 -- 2020-07-21

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.3.0 --> 1.4.0


- 2.0.1581 -- 2020-07-21

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.8.2 --> 1.9.0


- 2.0.1580 -- 2020-07-20

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.257 --> 1.258


- 2.0.1579 -- 2020-07-17

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.7.2 --> 1.7.3


- 2.0.1578 -- 2020-07-17

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.7.0 --> 1.7.2


- 2.0.1577 -- 2020-07-17

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.7.1 --> 1.7.0


- 2.0.1576 -- 2020-07-17

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.7.0 --> 1.7.1


- 2.0.1575 -- 2020-07-17

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.6.1 --> 1.7.0


- 2.0.1574 -- 2020-07-17

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.6.0 --> 1.6.1


- 2.0.1573 -- 2020-07-17

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.8.1 --> 1.8.2



- 2.0.1572 -- 2020-07-16

    - universe minor increment


- 2.0.1571 -- 2020-07-10

    - [Ling/ClassCooker](https://github.com/lingtalfi/ClassCooker) 1.7.0 --> 1.8.0


- 2.0.1570 -- 2020-07-10

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.6.0 --> 1.7.0


- 2.0.1569 -- 2020-07-10

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.5.0 --> 1.6.0


- 2.0.1568 -- 2020-07-10

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.18.0 --> 1.19.0


- 2.0.1567 -- 2020-07-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.256 --> 1.257


- 2.0.1566 -- 2020-07-10

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.4.0 --> 1.5.0


- 2.0.1565 -- 2020-07-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.255 --> 1.256


- 2.0.1564 -- 2020-07-10

    - [Ling/TokenFun](https://github.com/lingtalfi/TokenFun) 1.3.0 --> 1.4.0


- 2.0.1563 -- 2020-07-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.254 --> 1.255


- 2.0.1562 -- 2020-07-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.253 --> 1.254


- 2.0.1561 -- 2020-07-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.252 --> 1.253


- 2.0.1560 -- 2020-07-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.251 --> 1.252


- 2.0.1559 -- 2020-07-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.25 --> 1.251


- 2.0.1558 -- 2020-07-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.249 --> 1.25


- 2.0.1557 -- 2020-07-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.248 --> 1.249


- 2.0.1556 -- 2020-07-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.247 --> 1.248


- 2.0.1555 -- 2020-07-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.246 --> 1.247


- 2.0.1554 -- 2020-07-09

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.245 --> 1.246


- 2.0.1553 -- 2020-07-09

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.244 --> 1.245


- 2.0.1552 -- 2020-07-09

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.243 --> 1.244


- 2.0.1551 -- 2020-07-09

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.2.1 --> 1.3.0


- 2.0.1550 -- 2020-07-09

    - [Ling/WebWizardTools](https://github.com/lingtalfi/WebWizardTools) 1.1.0 --> 1.2.0


- 2.0.1549 -- 2020-07-09

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.20.0 --> 1.20.1


- 2.0.1548 -- 2020-07-09

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.19.1 --> 1.20.0


- 2.0.1547 -- 2020-07-09

    - [Ling/WebWizardTools](https://github.com/lingtalfi/WebWizardTools) 1.0.0 --> 1.1.0


- 2.0.1546 -- 2020-07-07

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.2.0 --> 1.2.1


- 2.0.1545 -- 2020-07-07

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.1.0 --> 1.2.0


- 2.0.1544 -- 2020-07-07

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.11.0 --> 1.12.0


- 2.0.1543 -- 2020-07-07

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.24.1 --> 1.25.0


- 2.0.1542 -- 2020-07-07

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.10.0 --> 1.11.0


- 2.0.1541 -- 2020-07-07

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.6.0 --> 0.7.0


- 2.0.1540 -- 2020-07-07

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.15.0 --> 1.16.0


- 2.0.1539 -- 2020-07-06

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.1.0 --> 2.1.1


- 2.0.1538 -- 2020-07-06

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.0.1 --> 2.1.0


- 2.0.1537 -- 2020-07-06

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.63.2 --> 0.65.0


- 2.0.1536 -- 2020-07-06

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.15.0 --> 1.15.1


- 2.0.1535 -- 2020-07-06

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.24.0 --> 1.24.1


- 2.0.1534 -- 2020-07-06

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.14.0 --> 1.14.1


- 2.0.1533 -- 2020-07-06

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.13.1 --> 1.14.0


- 2.0.1532 -- 2020-07-06

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.23.2 --> 1.24.0


- 2.0.1531 -- 2020-07-06

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.34.0 --> 1.34.1


- 2.0.1530 -- 2020-07-06

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.33.0 --> 1.34.0


- 2.0.1529 -- 2020-07-06

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.14.0 --> 1.15.0


- 2.0.1528 -- 2020-07-06

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.14.0 --> 1.15.0


- 2.0.1527 -- 2020-07-06

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 2.6.0 --> 2.6.1


- 2.0.1526 -- 2020-07-06

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard) 1.0.0 --> 1.1.0


- 2.0.1525 -- 2020-07-06

    - [Ling/WebWizardTools](https://github.com/lingtalfi/WebWizardTools)  --> 1.0.0


- 2.0.1524 -- 2020-07-03

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.27.0 --> 1.27.1


- 2.0.1523 -- 2020-07-03

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.26.0 --> 1.27.0


- 2.0.1522 -- 2020-07-03

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.242 --> 1.243


- 2.0.1521 -- 2020-07-03

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.241 --> 1.242


- 2.0.1520 -- 2020-07-03

    - [Ling/ConventionGuy](https://github.com/lingtalfi/ConventionGuy) 1.0.0 --> 1.1.0


- 2.0.1519 -- 2020-07-03

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.24 --> 1.241


- 2.0.1518 -- 2020-07-03

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.17.1 --> 1.18.0


- 2.0.1517 -- 2020-07-03

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 2.5.0 --> 2.6.0


- 2.0.1516 -- 2020-07-02

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.23.1 --> 1.23.2


- 2.0.1515 -- 2020-07-02

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.23.0 --> 1.23.1


- 2.0.1514 -- 2020-07-02

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.22.0 --> 1.23.0


- 2.0.1513 -- 2020-07-02

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.239 --> 1.24


- 2.0.1512 -- 2020-07-02

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.13.1 --> 1.14.0


- 2.0.1511 -- 2020-07-02

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.6.0 --> 1.7.0


- 2.0.1510 -- 2020-07-02

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.5.2 --> 1.6.0


- 2.0.1509 -- 2020-07-02

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.2.0 --> 1.2.1


- 2.0.1508 -- 2020-06-30

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.13.0 --> 1.13.1


- 2.0.1507 -- 2020-06-30

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.12.0 --> 1.13.0


- 2.0.1506 -- 2020-06-30

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.21.0 --> 1.22.0


- 2.0.1505 -- 2020-06-30

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.20.0 --> 1.21.0


- 2.0.1504 -- 2020-06-30

    - [Ling/Light_DeveloperWizard](https://github.com/lingtalfi/Light_DeveloperWizard)  --> 1.0.0


- 2.0.1503 -- 2020-06-30

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.17.0 --> 1.17.1


- 2.0.1502 -- 2020-06-30

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.16.0 --> 1.17.0


- 2.0.1501 -- 2020-06-30

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.14.0 --> 1.16.0


- 2.0.1500 -- 2020-06-29

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.13.8 --> 1.13.9


- 2.0.1499 -- 2020-06-29

    - [Ling/Light_Mailer](https://github.com/lingtalfi/Light_Mailer)  --> 1.0.0
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.18.0 --> 1.19.0


- 2.0.1498 -- 2020-06-29

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.238 --> 1.239


- 2.0.1497 -- 2020-06-29

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.237 --> 1.238


- 2.0.1496 -- 2020-06-26

    - [Ling/Umail](https://github.com/lingtalfi/Umail) 1.5.0 --> 1.6.0


- 2.0.1495 -- 2020-06-26

    - [Ling/Light_FileWatcher](https://github.com/lingtalfi/Light_FileWatcher) 1.0.0 --> 1.1.0


- 2.0.1494 -- 2020-06-26

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.6.0 --> 1.7.0


- 2.0.1493 -- 2020-06-25

    - [Ling/Umail](https://github.com/lingtalfi/Umail) 1.4.0 --> 1.5.0


- 2.0.1492 -- 2020-06-25

    - [Ling/Updf](https://github.com/lingtalfi/Updf) 1.2.1 --> 1.2.3


- 2.0.1491 -- 2020-06-25

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.3 --> 1.9.4


- 2.0.1490 -- 2020-06-25

    - [Ling/Uni2](https://github.com/lingtalfi/Uni2) 1.9.2 --> 1.9.3


- 2.0.1489 -- 2020-06-25

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.19.0 --> 1.19.1
    - [Ling/Updf](https://github.com/lingtalfi/Updf)  --> 1.2.1


- 2.0.1488 -- 2020-06-25

    - [Ling/Light_DebugTrace](https://github.com/lingtalfi/Light_DebugTrace)  --> 1.0.0


- 2.0.1487 -- 2020-06-25

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.3 --> 1.6.4


- 2.0.1486 -- 2020-06-25

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.5.0 --> 1.6.0


- 2.0.1485 -- 2020-06-25

    - [Ling/Light_Kit_Admin_UserDatabase](https://github.com/lingtalfi/Light_Kit_Admin_UserDatabase)  --> 0.1.0


- 2.0.1484 -- 2020-06-25

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.29.0 --> 1.30.0


- 2.0.1483 -- 2020-06-25

    - [Ling/Light_FileWatcher](https://github.com/lingtalfi/Light_FileWatcher)  --> 1.0.0


- 2.0.1482 -- 2020-06-23

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.17.0 --> 1.18.0


- 2.0.1481 -- 2020-06-23

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.5.0 --> 0.6.0


- 2.0.1480 -- 2020-06-23

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.2.0 --> 1.3.0


- 2.0.1479 -- 2020-06-23

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.3.0 --> 1.4.0


- 2.0.1478 -- 2020-06-22

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.1.0 --> 1.1.1


- 2.0.1477 -- 2020-06-22

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer) 1.0.0 --> 1.1.0


- 2.0.1476 -- 2020-06-19

    - [Ling/Light_DbSynchronizer](https://github.com/lingtalfi/Light_DbSynchronizer)  --> 1.0.0


- 2.0.1475 -- 2020-06-19

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.27.0 --> 1.28.0


- 2.0.1474 -- 2020-06-18

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.11.0 --> 1.11.1


- 2.0.1473 -- 2020-06-18

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.10.0 --> 1.11.0


- 2.0.1472 -- 2020-06-18

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.9.0 --> 1.10.0


- 2.0.1471 -- 2020-06-16

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.9.0 --> 1.10.0


- 2.0.1470 -- 2020-06-12

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.8.2 --> 1.9.0


- 2.0.1469 -- 2020-06-12

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.26.1 --> 1.27.0


- 2.0.1468 -- 2020-06-11

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.26.0 --> 1.26.1


- 2.0.1467 -- 2020-06-11

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.8.1 --> 1.8.2


- 2.0.1466 -- 2020-06-11

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.236 --> 1.237


- 2.0.1465 -- 2020-06-11

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.25.0 --> 1.26.0


- 2.0.1464 -- 2020-06-11

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.235 --> 1.236


- 2.0.1463 -- 2020-06-11

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.8.0 --> 1.8.1


- 2.0.1462 -- 2020-06-11

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.24.0 --> 1.25.0


- 2.0.1461 -- 2020-06-11

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.23.1 --> 1.24.0


- 2.0.1460 -- 2020-06-11

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.7.0 --> 1.8.0


- 2.0.1459 -- 2020-06-09

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.6.0 --> 1.7.0


- 2.0.1458 -- 2020-06-09

    - [Ling/ArrayDiff](https://github.com/lingtalfi/ArrayDiff)  --> 1.0.0


- 2.0.1457 -- 2020-06-09

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.5.0 --> 1.6.0


- 2.0.1456 -- 2020-06-09

    - [Ling/JumboExploder](https://github.com/lingtalfi/JumboExploder)  --> 1.0.0


- 2.0.1455 -- 2020-06-08

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.234 --> 1.235


- 2.0.1454 -- 2020-06-08

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.233 --> 1.234


- 2.0.1453 -- 2020-06-08

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.6.6 --> 1.7.0


- 2.0.1452 -- 2020-06-08

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.28.2 --> 1.29.0


- 2.0.1451 -- 2020-06-08

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.25.0 --> 1.26.0


- 2.0.1450 -- 2020-06-08

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.24.1 --> 1.25.0


- 2.0.1449 -- 2020-06-08

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.24.0 --> 1.24.1


- 2.0.1448 -- 2020-06-04

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.17.1 --> 1.17.2


- 2.0.1447 -- 2020-06-04

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.16.0 --> 1.17.1


- 2.0.1446 -- 2020-06-04

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.4.1 --> 0.5.0


- 2.0.1445 -- 2020-06-04

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 1.6.0 --> 1.7.0


- 2.0.1444 -- 2020-06-04

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.4.2 --> 1.5.0


- 2.0.1443 -- 2020-06-04

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.1.0 --> 1.2.0


- 2.0.1442 -- 2020-06-04

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.16.0 --> 1.17.0


- 2.0.1441 -- 2020-06-04

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.7.0 --> 1.8.0


- 2.0.1440 -- 2020-06-04

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 2.0.0 --> 2.0.1


- 2.0.1439 -- 2020-06-04

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.32.0 --> 1.33.0


- 2.0.1438 -- 2020-06-04

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.15.2 --> 1.16.0


- 2.0.1437 -- 2020-06-04

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.10.0 --> 2.0.0


- 2.0.1436 -- 2020-06-04

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.5.0 --> 1.6.0


- 2.0.1435 -- 2020-06-04

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.5.0 --> 1.5.1


- 2.0.1434 -- 2020-06-04

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.6.5 --> 1.6.6


- 2.0.1433 -- 2020-06-04

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 2.2.2 --> 3.0.0


- 2.0.1432 -- 2020-06-02

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.23.0 --> 1.23.1


- 2.0.1431 -- 2020-06-02

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.12.0 --> 1.13.0


- 2.0.1430 -- 2020-06-02

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.22.0 --> 1.23.0


- 2.0.1429 -- 2020-06-02

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.11.0 --> 1.12.0


- 2.0.1428 -- 2020-06-02

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.21.0 --> 1.22.0


- 2.0.1427 -- 2020-06-02

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.20.0 --> 1.21.0


- 2.0.1426 -- 2020-06-02

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.232 --> 1.233


- 2.0.1425 -- 2020-06-02

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.23.0 --> 1.24.0


- 2.0.1424 -- 2020-06-01

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.11.2 --> 1.11.3


- 2.0.1423 -- 2020-06-01

    - [Ling/Light_ErrorHandler](https://github.com/lingtalfi/Light_ErrorHandler) 1.0.1 --> 1.0.2


- 2.0.1422 -- 2020-06-01

    - [Ling/Light_ErrorPop](https://github.com/lingtalfi/Light_ErrorPop) 1.0.0 --> 1.0.1


- 2.0.1421 -- 2020-06-01

    - [Ling/Light_ErrorPop](https://github.com/lingtalfi/Light_ErrorPop)  --> 1.0.0


- 2.0.1420 -- 2020-06-01

    - [Ling/Light_ErrorHandler](https://github.com/lingtalfi/Light_ErrorHandler) 1.0.0 --> 1.0.1


- 2.0.1419 -- 2020-06-01

    - [Ling/Light_ErrorHandler](https://github.com/lingtalfi/Light_ErrorHandler)  --> 1.0.0


- 2.0.1418 -- 2020-06-01

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.17.0 --> 1.18.0


- 2.0.1417 -- 2020-06-01

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.231 --> 1.232


- 2.0.1416 -- 2020-06-01

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.23 --> 1.231


- 2.0.1415 -- 2020-06-01

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.63.1 --> 0.63.2


- 2.0.1414 -- 2020-06-01

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.8.2 --> 1.9.0


- 2.0.1413 -- 2020-06-01

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.29.0 --> 1.30.0


- 2.0.1412 -- 2020-06-01

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.28.0 --> 1.29.0


- 2.0.1411 -- 2020-05-28

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 2.1.1 --> 2.2.0


- 2.0.1410 -- 2020-05-28

    - [Ling/GormanJsonDecoder](https://github.com/lingtalfi/GormanJsonDecoder) 1.0.1 --> 1.1.0


- 2.0.1409 -- 2020-05-28

    - [Ling/GormanJsonDecoder](https://github.com/lingtalfi/GormanJsonDecoder) 1.0.0 --> 1.0.1


- 2.0.1408 -- 2020-05-28

    - [Ling/GormanJsonDecoder](https://github.com/lingtalfi/GormanJsonDecoder)  --> 1.0.0


- 2.0.1407 -- 2020-05-28

    - [Ling/Select2](https://github.com/lingtalfi/Select2) 1.0.0 --> 1.0.1


- 2.0.1406 -- 2020-05-28

    - [Ling/Select2](https://github.com/lingtalfi/Select2)  --> 1.0.0


- 2.0.1405 -- 2020-05-28

    - [Ling/Jquery](https://github.com/lingtalfi/Jquery) 1.1.0 --> 1.1.1


- 2.0.1404 -- 2020-05-28

    - [Ling/FontAwesome](https://github.com/lingtalfi/FontAwesome) 1.0.0 --> 1.0.1


- 2.0.1403 -- 2020-05-28

    - [Ling/Jquery](https://github.com/lingtalfi/Jquery) 1.0.0 --> 1.1.0


- 2.0.1402 -- 2020-05-28

    - [Ling/FontAwesome](https://github.com/lingtalfi/FontAwesome)  --> 1.0.0


- 2.0.1401 -- 2020-05-28

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.13.7 --> 1.13.8


- 2.0.1400 -- 2020-05-28

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.22.0 --> 1.23.0


- 2.0.1399 -- 2020-05-26

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.7.1 --> 1.8.0


- 2.0.1398 -- 2020-05-25

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.7.0 --> 1.7.1


- 2.0.1397 -- 2020-05-22

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.11.1 --> 1.11.2


- 2.0.1396 -- 2020-05-21

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.11.0 --> 1.11.1


- 2.0.1395 -- 2020-05-21

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.21.0 --> 1.22.0


- 2.0.1394 -- 2020-05-21

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.19.0 --> 1.20.0


- 2.0.1393 -- 2020-05-21

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.20.0 --> 1.21.0


- 2.0.1392 -- 2020-05-21

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.19.1 --> 1.20.0


- 2.0.1391 -- 2020-05-20

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.10.1 --> 1.11.0


- 2.0.1390 -- 2020-05-19

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.10.0 --> 1.10.1


- 2.0.1389 -- 2020-05-19

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.9.0 --> 1.10.0


- 2.0.1388 -- 2020-05-19

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.8.0 --> 1.9.0


- 2.0.1387 -- 2020-05-19

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.7.0 --> 1.8.0


- 2.0.1386 -- 2020-05-15

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.6.0 --> 1.7.0


- 2.0.1385 -- 2020-05-15

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.6.1 --> 1.7.0


- 2.0.1384 -- 2020-05-14

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.6.0 --> 1.6.1


- 2.0.1383 -- 2020-05-14

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.5.0 --> 1.6.0


- 2.0.1382 -- 2020-05-14

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.5.0 --> 1.6.0


- 2.0.1381 -- 2020-05-14

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.4.2 --> 1.5.0


- 2.0.1380 -- 2020-05-13

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.4.1 --> 1.4.2


- 2.0.1379 -- 2020-05-13

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.4.0 --> 1.4.1


- 2.0.1378 -- 2020-05-13

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.229 --> 1.23


- 2.0.1377 -- 2020-05-13

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.3.0 --> 1.4.0


- 2.0.1376 -- 2020-05-13

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.2.2 --> 1.3.0


- 2.0.1375 -- 2020-05-13

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.2.1 --> 1.2.2


- 2.0.1374 -- 2020-05-12

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.13.0 --> 1.14.0


- 2.0.1373 -- 2020-05-11

    - [Ling/SvelteTemplateBuilder](https://github.com/lingtalfi/SvelteTemplateBuilder) 1.0.0 --> 1.1.0


- 2.0.1372 -- 2020-05-08

    - [Ling/SvelteTemplateBuilder](https://github.com/lingtalfi/SvelteTemplateBuilder)  --> 1.0.0


- 2.0.1371 -- 2020-05-05

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.12.0 --> 1.13.0


- 2.0.1370 -- 2020-04-20

    - [Ling/Light_ZouUploader](https://github.com/lingtalfi/Light_ZouUploader) 1.1.0 --> 1.1.1


- 2.0.1369 -- 2020-04-20

    - [Ling/Light_ZouUploader](https://github.com/lingtalfi/Light_ZouUploader) 1.0.0 --> 1.1.0


- 2.0.1368 -- 2020-04-20

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.2.0 --> 1.2.1


- 2.0.1367 -- 2020-04-20

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.228 --> 1.229


- 2.0.1366 -- 2020-04-20

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.1.1 --> 1.2.0


- 2.0.1365 -- 2020-04-20

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.0.1 --> 1.1.1


- 2.0.1364 -- 2020-04-20

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.227 --> 1.228


- 2.0.1363 -- 2020-04-17

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.4.0 --> 1.5.0


- 2.0.1362 -- 2020-04-17

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.63.0 --> 0.63.1


- 2.0.1361 -- 2020-04-17

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.3.0 --> 1.4.0


- 2.0.1360 -- 2020-04-17

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem) 1.0.0 --> 1.0.1


- 2.0.1359 -- 2020-04-17

    - [Ling/TemporaryVirtualFileSystem](https://github.com/lingtalfi/TemporaryVirtualFileSystem)  --> 1.0.0


- 2.0.1358 -- 2020-04-17

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.62.1 --> 0.63.0


- 2.0.1357 -- 2020-04-17

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.13.6 --> 1.13.7


- 2.0.1356 -- 2020-04-15

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.16.0 --> 1.17.0


- 2.0.1355 -- 2020-04-14

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.2.0 --> 1.3.0


- 2.0.1354 -- 2020-04-14

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.226 --> 1.227


- 2.0.1353 -- 2020-04-14

    - [Ling/Light_ZouUploader](https://github.com/lingtalfi/Light_ZouUploader)  --> 1.0.0


- 2.0.1352 -- 2020-04-13

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.11.1 --> 1.12.0


- 2.0.1351 -- 2020-04-13

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.1.0 --> 1.2.0


- 2.0.1350 -- 2020-04-13

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems) 1.0.0 --> 1.1.0


- 2.0.1349 -- 2020-04-13

    - [Ling/Light_UploadGems](https://github.com/lingtalfi/Light_UploadGems)  --> 1.0.0


- 2.0.1348 -- 2020-04-13

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.15.0 --> 1.16.0


- 2.0.1347 -- 2020-04-13

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.14.1 --> 1.15.0


- 2.0.1346 -- 2020-04-13

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.225 --> 1.226


- 2.0.1345 -- 2020-04-13

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.224 --> 1.225


- 2.0.1344 -- 2020-04-10

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.62.0 --> 0.62.1


- 2.0.1343 -- 2020-04-10

    - [Ling/PhpFileValidator](https://github.com/lingtalfi/PhpFileValidator)  --> 1.0.0


- 2.0.1342 -- 2020-04-10

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.61.0 --> 0.62.0


- 2.0.1341 -- 2020-04-10

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.60.0 --> 0.61.0


- 2.0.1340 -- 2020-04-10

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.59.0 --> 0.60.0


- 2.0.1339 -- 2020-04-07

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.223 --> 1.224


- 2.0.1338 -- 2020-04-06

    - universe minor increment


- 2.0.1337 -- 2020-04-06

    - [Ling/Panda_Headers](https://github.com/lingtalfi/Panda_Headers)  --> 1.0.0


- 2.0.1336 -- 2020-04-06

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.58.0 --> 0.59.0


- 2.0.1335 -- 2020-03-26

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.4.0 --> 1.5.0


- 2.0.1334 -- 2020-03-26

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.28.1 --> 1.28.2


- 2.0.1333 -- 2020-03-26

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.6.4 --> 1.6.5


- 2.0.1332 -- 2020-03-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.27.0 --> 1.28.0


- 2.0.1331 -- 2020-03-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.26.0 --> 1.27.0


- 2.0.1330 -- 2020-03-11

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.14.2 --> 1.15.0


- 2.0.1329 -- 2020-03-10

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.57.1 --> 0.58.0


- 2.0.1328 -- 2020-03-10

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.28.0 --> 1.28.1


- 2.0.1327 -- 2020-03-10

    - [Ling/Light_Bullsheet](https://github.com/lingtalfi/Light_Bullsheet) 1.0.3 --> 1.1.0


- 2.0.1326 -- 2020-03-10

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.13.0 --> 1.13.1


- 2.0.1325 -- 2020-03-10

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.19.1 --> 1.20.0


- 2.0.1324 -- 2020-03-10

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 1.5.1 --> 1.6.0


- 2.0.1323 -- 2020-03-10

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.11.0 --> 1.12.0


- 2.0.1322 -- 2020-03-10

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.13.1 --> 1.14.0


- 2.0.1321 -- 2020-03-10

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.1.0 --> 1.2.0


- 2.0.1320 -- 2020-03-10

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.15.0 --> 1.16.0


- 2.0.1319 -- 2020-03-10

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.31.0 --> 1.32.0


- 2.0.1318 -- 2020-03-10

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 2.4.0 --> 2.5.0


- 2.0.1317 -- 2020-03-10

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.10.0 --> 1.11.0


- 2.0.1316 -- 2020-03-10

    - [Ling/Light_UserRowRestriction](https://github.com/lingtalfi/Light_UserRowRestriction) 1.2.0 --> 1.3.0


- 2.0.1315 -- 2020-03-10

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.18.0 --> 1.19.0


- 2.0.1314 -- 2020-03-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.222 --> 1.223


- 2.0.1313 -- 2020-03-05

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData) 1.0.0 --> 1.1.0


- 2.0.1312 -- 2020-03-05

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.12.2 --> 1.13.0


- 2.0.1311 -- 2020-03-05

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.30.2 --> 1.31.0


- 2.0.1310 -- 2020-03-05

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.14.0 --> 1.15.0


- 2.0.1309 -- 2020-03-05

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.10.0 --> 1.11.0


- 2.0.1308 -- 2020-03-05

    - [Ling/Light_UserRowRestriction](https://github.com/lingtalfi/Light_UserRowRestriction) 1.1.0 --> 1.2.0


- 2.0.1307 -- 2020-03-03

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.19.0 --> 1.19.1


- 2.0.1306 -- 2020-03-03

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.2.0 --> 1.3.0


- 2.0.1305 -- 2020-03-03

    - [Ling/Light_UserRowRestriction](https://github.com/lingtalfi/Light_UserRowRestriction) 1.0.2 --> 1.1.0


- 2.0.1304 -- 2020-03-03

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.9.3 --> 1.10.0


- 2.0.1303 -- 2020-03-03

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.17.0 --> 1.18.0


- 2.0.1302 -- 2020-03-03

    - [Ling/Light_UserRowRestriction](https://github.com/lingtalfi/Light_UserRowRestriction) 1.0.1 --> 1.0.2


- 2.0.1301 -- 2020-03-03

    - [Ling/Light_UserRowRestriction](https://github.com/lingtalfi/Light_UserRowRestriction) 1.0.0 --> 1.0.1


- 2.0.1300 -- 2020-03-03

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.9.2 --> 1.9.3


- 2.0.1299 -- 2020-03-03

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.9.1 --> 1.9.2


- 2.0.1298 -- 2020-03-03

    - [Ling/Light_UserRowRestriction](https://github.com/lingtalfi/Light_UserRowRestriction)  --> 1.0.0


- 2.0.1297 -- 2020-03-03

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.9.0 --> 1.9.1


- 2.0.1296 -- 2020-03-02

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 2.3.1 --> 2.4.0


- 2.0.1295 -- 2020-03-02

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.8.1 --> 1.9.0


- 2.0.1294 -- 2020-03-02

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.8.0 --> 1.8.1


- 2.0.1293 -- 2020-03-02

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.7.1 --> 1.8.0


- 2.0.1292 -- 2020-03-02

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.13.5 --> 1.13.6


- 2.0.1291 -- 2020-03-02

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.221 --> 1.222


- 2.0.1290 -- 2020-02-28

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.11.0 --> 1.11.1


- 2.0.1289 -- 2020-02-28

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.10.2 --> 1.11.0


- 2.0.1288 -- 2020-02-28

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.5.1 --> 1.5.2


- 2.0.1287 -- 2020-02-28

    - [Ling/Light_Kit_Admin_UserData](https://github.com/lingtalfi/Light_Kit_Admin_UserData)  --> 1.0.0


- 2.0.1286 -- 2020-02-28

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.9.0 --> 1.10.0


- 2.0.1285 -- 2020-02-28

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.18.2 --> 1.19.0


- 2.0.1284 -- 2020-02-28

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.30.1 --> 1.30.2


- 2.0.1283 -- 2020-02-28

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.4.0 --> 1.5.0


- 2.0.1282 -- 2020-02-28

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.13.0 --> 1.13.1


- 2.0.1281 -- 2020-02-27

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 1.5.0 --> 1.5.1


- 2.0.1280 -- 2020-02-27

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.14.1 --> 1.14.2


- 2.0.1279 -- 2020-02-27

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.14.0 --> 1.14.1


- 2.0.1278 -- 2020-02-26

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.5.0 --> 1.5.1


- 2.0.1277 -- 2020-02-26

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.7.0 --> 1.8.0


- 2.0.1276 -- 2020-02-26

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.18.1 --> 1.18.2


- 2.0.1275 -- 2020-02-26

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.18.0 --> 1.18.1


- 2.0.1274 -- 2020-02-26

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.8.0 --> 1.9.0


- 2.0.1273 -- 2020-02-26

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.7.0 --> 1.8.0


- 2.0.1272 -- 2020-02-26

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.17.0 --> 1.18.0


- 2.0.1271 -- 2020-02-25

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.6.0 --> 1.7.0


- 2.0.1270 -- 2020-02-25

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.13.0 --> 1.14.0


- 2.0.1269 -- 2020-02-25

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.1.0 --> 1.2.0


- 2.0.1268 -- 2020-02-25

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) 1.0.0 --> 1.1.0


- 2.0.1267 -- 2020-02-25

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.12.1 --> 1.13.0


- 2.0.1266 -- 2020-02-25

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.6.3 --> 1.6.4


- 2.0.1265 -- 2020-02-25

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.15.1 --> 1.15.2


- 2.0.1264 -- 2020-02-25

    - [Ling/Light_BMenu](https://github.com/lingtalfi/Light_BMenu) 1.4.0 --> 1.5.0


- 2.0.1263 -- 2020-02-25

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.13.4 --> 1.13.5


- 2.0.1262 -- 2020-02-24

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.57.0 --> 0.57.1


- 2.0.1261 -- 2020-02-24

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.12.0 --> 1.12.1


- 2.0.1260 -- 2020-02-24

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 2.2.1 --> 2.2.2


- 2.0.1259 -- 2020-02-24

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 2.2.0 --> 2.2.1


- 2.0.1258 -- 2020-02-24

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.4.1 --> 1.5.0


- 2.0.1257 -- 2020-02-24

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 2.1.2 --> 2.2.0


- 2.0.1256 -- 2020-02-24

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 2.1.1 --> 2.1.2


- 2.0.1255 -- 2020-02-24

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 2.1.0 --> 2.1.1


- 2.0.1254 -- 2020-02-24

    - [Ling/JCropperJs](https://github.com/lingtalfi/JCropperJs)  --> 1.0.0


- 2.0.1253 -- 2020-02-21

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.25.0 --> 1.26.0


- 2.0.1252 -- 2020-02-21

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 2.0.1 --> 2.1.0


- 2.0.1251 -- 2020-02-21

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.11.0 --> 1.12.0


- 2.0.1250 -- 2020-02-21

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.6.3 --> 1.7.0


- 2.0.1249 -- 2020-02-13

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.56.0 --> 0.57.0


- 2.0.1248 -- 2020-02-13

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.19.0 --> 1.19.1


- 2.0.1247 -- 2020-02-13

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.18.0 --> 1.19.0


- 2.0.1246 -- 2020-02-13

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.3.0 --> 1.4.0


- 2.0.1245 -- 2020-02-13

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.10.0 --> 1.11.0


- 2.0.1244 -- 2020-02-13

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.16.0 --> 1.17.0


- 2.0.1243 -- 2020-02-12

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.15.3 --> 1.16.0


- 2.0.1242 -- 2020-02-07

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.22 --> 1.221


- 2.0.1241 -- 2020-02-07

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.27.0 --> 1.28.0


- 2.0.1240 -- 2020-02-07

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.15.2 --> 1.15.3


- 2.0.1239 -- 2020-02-07

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.26.0 --> 1.27.0


- 2.0.1238 -- 2020-02-07

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.25.0 --> 1.26.0


- 2.0.1237 -- 2020-02-07

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.55.0 --> 0.56.0


- 2.0.1236 -- 2020-02-07

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.6.0 --> 1.6.1


- 2.0.1235 -- 2020-02-07

    - [Ling/Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller)  --> 1.0.0


- 2.0.1234 -- 2020-02-06

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.5.0 --> 1.6.0


- 2.0.1233 -- 2020-02-06

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.4.0 --> 1.5.0


- 2.0.1232 -- 2020-02-06

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.15.1 --> 1.15.2


- 2.0.1231 -- 2020-02-06

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.24.0 --> 1.25.0


- 2.0.1230 -- 2020-02-06

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.17.0 --> 1.18.0


- 2.0.1229 -- 2020-02-06

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.15.0 --> 1.15.1


- 2.0.1228 -- 2020-02-06

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.14.0 --> 1.15.0


- 2.0.1227 -- 2020-02-05

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.23.0 --> 1.24.0


- 2.0.1226 -- 2020-02-05

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.16.0 --> 1.17.0


- 2.0.1225 -- 2020-02-05

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.13.2 --> 1.14.0


- 2.0.1224 -- 2020-02-05

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.13.1 --> 1.13.2


- 2.0.1223 -- 2020-02-05

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.15.0 --> 1.16.0


- 2.0.1222 -- 2020-02-04

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.22.2 --> 1.23.0


- 2.0.1221 -- 2020-02-04

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.14.1 --> 1.15.0


- 2.0.1220 -- 2020-02-04

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.14.0 --> 1.14.1


- 2.0.1219 -- 2020-02-04

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.13.0 --> 1.14.0


- 2.0.1218 -- 2020-02-04

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.12.0 --> 1.13.0


- 2.0.1217 -- 2020-02-04

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.11.2 --> 1.12.0


- 2.0.1216 -- 2020-02-03

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.2.2 --> 1.3.0


- 2.0.1215 -- 2020-02-03

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.13.0 --> 1.13.1


- 2.0.1214 -- 2020-02-03

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.12.0 --> 1.13.0


- 2.0.1213 -- 2020-02-03

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.9.0 --> 1.10.0


- 2.0.1212 -- 2020-02-03

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.11.0 --> 1.12.0


- 2.0.1211 -- 2020-01-31

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.2.1 --> 1.2.2


- 2.0.1210 -- 2020-01-31

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.2.0 --> 1.2.1


- 2.0.1209 -- 2020-01-31

    - [Ling/SqlWizard](https://github.com/lingtalfi/SqlWizard) 1.1.0 --> 1.2.0


- 2.0.1208 -- 2020-01-31

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.22.1 --> 1.22.2


- 2.0.1207 -- 2020-01-31

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.22.0 --> 1.22.1


- 2.0.1206 -- 2020-01-31

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.11.1 --> 1.11.2


- 2.0.1205 -- 2020-01-31

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.54.0 --> 0.55.0


- 2.0.1204 -- 2020-01-31

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.21.0 --> 1.22.0


- 2.0.1203 -- 2020-01-31

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.3.0 --> 1.4.0


- 2.0.1202 -- 2020-01-31

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.53.0 --> 0.54.0


- 2.0.1201 -- 2020-01-31

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.20.5 --> 1.21.0


- 2.0.1200 -- 2020-01-31

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.219 --> 1.22


- 2.0.1199 -- 2020-01-31

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.20.4 --> 1.20.5


- 2.0.1198 -- 2020-01-31

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.20.3 --> 1.20.4


- 2.0.1197 -- 2020-01-31

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.218 --> 1.219


- 2.0.1196 -- 2020-01-24

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 2.0.0 --> 2.0.1


- 2.0.1195 -- 2020-01-24

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 1.2.2 --> 2.0.0


- 2.0.1194 -- 2020-01-20

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.52.0 --> 0.53.0


- 2.0.1193 -- 2020-01-10

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.6.2 --> 1.6.3


- 2.0.1192 -- 2020-01-10

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.6.1 --> 1.6.2


- 2.0.1191 -- 2020-01-10

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.4.0 --> 1.4.1


- 2.0.1190 -- 2020-01-09

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.13.2 --> 1.14.0


- 2.0.1189 -- 2020-01-08

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.8.1 --> 1.8.2


- 2.0.1188 -- 2020-01-08

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.4.1 --> 1.5.0


- 2.0.1187 -- 2020-01-08

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.8.0 --> 1.8.1


- 2.0.1186 -- 2020-01-08

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.10.1 --> 1.10.2


- 2.0.1185 -- 2019-12-20

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.20.2 --> 1.20.3


- 2.0.1184 -- 2019-12-20

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.10.0 --> 1.11.0


- 2.0.1183 -- 2019-12-20

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.11.0 --> 1.11.1


- 2.0.1182 -- 2019-12-20

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 2.3.0 --> 2.3.1


- 2.0.1181 -- 2019-12-20

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.7.0 --> 1.7.1


- 2.0.1180 -- 2019-12-20

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 2.2.0 --> 2.3.0


- 2.0.1179 -- 2019-12-20

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.6.0 --> 1.7.0


- 2.0.1178 -- 2019-12-20

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.5.2 --> 1.6.0


- 2.0.1177 -- 2019-12-20

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 2.1.0 --> 2.2.0


- 2.0.1176 -- 2019-12-20

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.2 --> 1.6.3


- 2.0.1175 -- 2019-12-20

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.30.0 --> 1.30.1


- 2.0.1174 -- 2019-12-20

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.1 --> 1.6.2


- 2.0.1173 -- 2019-12-20

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.217 --> 1.218


- 2.0.1172 -- 2019-12-20

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.3.0 --> 1.4.0


- 2.0.1171 -- 2019-12-20

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.20.1 --> 1.20.2


- 2.0.1170 -- 2019-12-19

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.6.0 --> 1.6.1


- 2.0.1169 -- 2019-12-19

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.20.0 --> 1.20.1


- 2.0.1168 -- 2019-12-19

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.5.1 --> 1.5.2


- 2.0.1167 -- 2019-12-19

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.5.0 --> 1.6.0


- 2.0.1166 -- 2019-12-19

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.4.0 --> 1.4.1


- 2.0.1165 -- 2019-12-19

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.3.0 --> 1.4.0


- 2.0.1164 -- 2019-12-19

    - [Ling/Light_EndRoutine_CsrfPageCleaner](https://github.com/lingtalfi/Light_EndRoutine_CsrfPageCleaner) 1.3.1 --> 1.4.0


- 2.0.1163 -- 2019-12-19

    - [Ling/Light_EndRoutine_Debugger](https://github.com/lingtalfi/Light_EndRoutine_Debugger) 1.2.0 --> 1.2.1


- 2.0.1162 -- 2019-12-19

    - [Ling/Light_EndRoutine_Debugger](https://github.com/lingtalfi/Light_EndRoutine_Debugger) 1.1.0 --> 1.2.0


- 2.0.1161 -- 2019-12-19

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.2.0 --> 1.3.0


- 2.0.1160 -- 2019-12-19

    - [Ling/Light_EndRoutine](https://github.com/lingtalfi/Light_EndRoutine) 1.2.0 --> 1.3.0


- 2.0.1159 -- 2019-12-19

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.50.0 --> 0.52.0


- 2.0.1158 -- 2019-12-19

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.19.5 --> 1.20.0


- 2.0.1157 -- 2019-12-19

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.19.4 --> 1.19.5


- 2.0.1156 -- 2019-12-19

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.5.0 --> 1.5.1


- 2.0.1155 -- 2019-12-19

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.19.3 --> 1.19.4


- 2.0.1154 -- 2019-12-19

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.19.2 --> 1.19.3


- 2.0.1153 -- 2019-12-19

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.19.1 --> 1.19.2


- 2.0.1152 -- 2019-12-19

    - [Ling/CheapLogger](https://github.com/lingtalfi/CheapLogger)  --> 1.0.0


- 2.0.1151 -- 2019-12-19

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.19.0 --> 1.19.1


- 2.0.1150 -- 2019-12-19

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.18.1 --> 1.19.0


- 2.0.1149 -- 2019-12-19

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.10.0 --> 1.11.0


- 2.0.1148 -- 2019-12-19

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 2.0.1 --> 2.1.0


- 2.0.1147 -- 2019-12-19

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.4.1 --> 1.5.0


- 2.0.1146 -- 2019-12-18

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.29.0 --> 1.30.0


- 2.0.1145 -- 2019-12-18

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.5.2 --> 1.6.0


- 2.0.1144 -- 2019-12-18

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.12.0 --> 1.13.0


- 2.0.1143 -- 2019-12-18

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 1.4.0 --> 1.5.0


- 2.0.1142 -- 2019-12-18

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.9.1 --> 1.10.0


- 2.0.1141 -- 2019-12-18

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.16.0 --> 1.17.0


- 2.0.1140 -- 2019-12-18

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.9.3 --> 1.10.0


- 2.0.1139 -- 2019-12-18

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 2.0.0 --> 2.0.1


- 2.0.1138 -- 2019-12-18

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 1.1.2 --> 2.0.0


- 2.0.1137 -- 2019-12-18

    - [Ling/Light_UserManager](https://github.com/lingtalfi/Light_UserManager) 1.2.1 --> 1.3.0


- 2.0.1136 -- 2019-12-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.18.0 --> 1.18.1


- 2.0.1135 -- 2019-12-17

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.6.2 --> 1.6.3


- 2.0.1134 -- 2019-12-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.17.0 --> 1.18.0


- 2.0.1133 -- 2019-12-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.16.1 --> 1.17.0


- 2.0.1132 -- 2019-12-17

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.9.2 --> 1.9.3


- 2.0.1131 -- 2019-12-17

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.9.1 --> 1.9.2


- 2.0.1130 -- 2019-12-17

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.9.0 --> 1.9.1


- 2.0.1129 -- 2019-12-17

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.4.0 --> 1.4.1


- 2.0.1128 -- 2019-12-17

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.8.2 --> 1.9.0


- 2.0.1127 -- 2019-12-17

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.4.0 --> 0.4.1


- 2.0.1126 -- 2019-12-17

    - [Ling/Light_LightInstance](https://github.com/lingtalfi/Light_LightInstance) 1.2.0 --> 1.2.1


- 2.0.1125 -- 2019-12-17

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.11.0 --> 1.11.1


- 2.0.1124 -- 2019-12-17

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.9.0 --> 1.9.1


- 2.0.1123 -- 2019-12-17

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.2.1 --> 1.2.2


- 2.0.1122 -- 2019-12-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.16.0 --> 1.16.1


- 2.0.1121 -- 2019-12-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.15.0 --> 1.16.0


- 2.0.1120 -- 2019-12-17

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.8.0 --> 1.9.0


- 2.0.1119 -- 2019-12-17

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.10.0 --> 1.11.0


- 2.0.1118 -- 2019-12-17

    - [Ling/Light_LightInstance](https://github.com/lingtalfi/Light_LightInstance) 1.1.0 --> 1.2.0


- 2.0.1117 -- 2019-12-17

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.4.0 --> 1.5.0


- 2.0.1116 -- 2019-12-17

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.3.0 --> 0.4.0


- 2.0.1115 -- 2019-12-17

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.2.0 --> 1.2.1


- 2.0.1114 -- 2019-12-17

    - [Ling/Light_EasyRoute](https://github.com/lingtalfi/Light_EasyRoute) 1.1.0 --> 1.2.0


- 2.0.1113 -- 2019-12-16

    - [Ling/Light_Initializer](https://github.com/lingtalfi/Light_Initializer) 1.2.2 --> 1.3.0


- 2.0.1112 -- 2019-12-16

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.13.3 --> 1.13.4


- 2.0.1111 -- 2019-12-16

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.11.0 --> 1.12.0


- 2.0.1110 -- 2019-12-16

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.15.0 --> 1.16.0


- 2.0.1109 -- 2019-12-16

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.1.0 --> 1.2.0


- 2.0.1108 -- 2019-12-16

    - [Ling/Light_LightInstance](https://github.com/lingtalfi/Light_LightInstance) 1.0.2 --> 1.1.0


- 2.0.1107 -- 2019-12-16

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.49.0 --> 0.50.0


- 2.0.1106 -- 2019-12-16

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.48.0 --> 0.49.0


- 2.0.1105 -- 2019-12-16

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.14.0 --> 1.15.0


- 2.0.1104 -- 2019-12-16

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.13.0 --> 1.14.0


- 2.0.1103 -- 2019-12-16

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.12.4 --> 1.13.0


- 2.0.1102 -- 2019-12-16

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.8.1 --> 1.8.2


- 2.0.1101 -- 2019-12-16

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 1.3.0 --> 1.4.0


- 2.0.1100 -- 2019-12-16

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.3.0 --> 1.4.0


- 2.0.1099 -- 2019-12-16

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.10.2 --> 1.11.0


- 2.0.1098 -- 2019-12-13

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.10.0 --> 1.10.1


- 2.0.1097 -- 2019-12-13

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.13.2 --> 1.13.3


- 2.0.1096 -- 2019-12-13

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.13.1 --> 1.13.2


- 2.0.1095 -- 2019-12-13

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.13.0 --> 1.13.1


- 2.0.1094 -- 2019-12-13

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.13.1 --> 1.13.2


- 2.0.1093 -- 2019-12-13

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.12.0 --> 1.13.0


- 2.0.1092 -- 2019-12-12

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 2.1.0 --> 2.1.1


- 2.0.1091 -- 2019-12-12

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.9.2 --> 1.10.0


- 2.0.1090 -- 2019-12-12

    - [Ling/Light_404Logger](https://github.com/lingtalfi/Light_404Logger)  --> 1.0.0


- 2.0.1089 -- 2019-12-12

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.47.0 --> 0.48.0


- 2.0.1088 -- 2019-12-12

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.5.0 --> 1.5.1


- 2.0.1087 -- 2019-12-12

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.7.2 --> 1.8.0


- 2.0.1086 -- 2019-12-12

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.7.1 --> 1.7.2


- 2.0.1085 -- 2019-12-11

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.7.0 --> 1.7.1


- 2.0.1084 -- 2019-12-11

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.6.0 --> 1.7.0


- 2.0.1083 -- 2019-12-10

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.10.0 --> 1.11.0


- 2.0.1082 -- 2019-12-10

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.14.0 --> 1.15.0


- 2.0.1081 -- 2019-12-10

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.216 --> 1.217


- 2.0.1080 -- 2019-12-10

    - [Ling/JPostForm](https://github.com/lingtalfi/JPostForm)  --> 1.0.0


- 2.0.1079 -- 2019-12-09

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.15.0 --> 1.16.0


- 2.0.1078 -- 2019-12-09

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple) 1.2.0 --> 1.2.1


- 2.0.1077 -- 2019-12-09

    - [Ling/Light_Csrf](https://github.com/lingtalfi/Light_Csrf) 1.0.1 --> 1.0.2


- 2.0.1076 -- 2019-12-09

    - [Ling/Light_CsrfSession](https://github.com/lingtalfi/Light_CsrfSession) 1.0.0 --> 1.0.1


- 2.0.1075 -- 2019-12-09

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.9.1 --> 1.9.2


- 2.0.1074 -- 2019-12-09

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.9.0 --> 1.9.1


- 2.0.1073 -- 2019-12-09

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.46.0 --> 0.47.0


- 2.0.1072 -- 2019-12-09

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.8.1 --> 1.9.0


- 2.0.1071 -- 2019-12-09

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.5.1 --> 1.5.2


- 2.0.1070 -- 2019-12-09

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.215 --> 1.216


- 2.0.1069 -- 2019-12-09

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.5.0 --> 1.5.1


- 2.0.1068 -- 2019-12-09

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.214 --> 1.215


- 2.0.1067 -- 2019-12-09

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.4.1 --> 1.4.2


- 2.0.1066 -- 2019-12-09

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.5.1 --> 1.5.2


- 2.0.1064 -- 2019-12-09

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.10.1 --> 1.10.2


- 2.0.1063 -- 2019-12-09

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.11.0 --> 1.12.0


- 2.0.1062 -- 2019-12-06

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.10.0 --> 1.11.0


- 2.0.1061 -- 2019-12-06

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.24.1 --> 1.25.0


- 2.0.1060 -- 2019-12-06

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.9.0 --> 1.10.0


- 2.0.1059 -- 2019-12-06

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.24.0 --> 1.24.1


- 2.0.1058 -- 2019-12-06

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.23.3 --> 1.24.0


- 2.0.1057 -- 2019-12-06

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.8.0 --> 1.9.0


- 2.0.1056 -- 2019-12-06

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.23.2 --> 1.23.3


- 2.0.1055 -- 2019-12-06

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.23.1 --> 1.23.2


- 2.0.1054 -- 2019-12-06

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.23.0 --> 1.23.1


- 2.0.1053 -- 2019-12-06

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.22.0 --> 1.23.0


- 2.0.1052 -- 2019-12-06

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.10.0 --> 1.10.1


- 2.0.1051 -- 2019-12-06

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 1.2.0 --> 1.3.0


- 2.0.1050 -- 2019-12-06

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.2.0 --> 0.3.0
    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.9.2 --> 1.10.0


- 2.0.1049 -- 2019-12-06

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.4.0 --> 1.4.1


- 2.0.1048 -- 2019-12-06

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.14.0 --> 1.15.0


- 2.0.1047 -- 2019-12-06

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.9.0 --> 1.10.0


- 2.0.1046 -- 2019-12-06

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.3.1 --> 1.4.0


- 2.0.1045 -- 2019-12-06

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.3.0 --> 1.4.0


- 2.0.1044 -- 2019-12-06

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 1.1.0 --> 1.2.0


- 2.0.1043 -- 2019-12-06

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.8.0 --> 1.8.1


- 2.0.1042 -- 2019-12-05

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.21.0 --> 1.22.0


- 2.0.1041 -- 2019-12-05

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.20.2 --> 1.21.0


- 2.0.1040 -- 2019-12-05

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.7.6 --> 1.8.0


- 2.0.1039 -- 2019-12-05

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.9.0 --> 1.9.1


- 2.0.1038 -- 2019-12-05

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.8.0 --> 1.9.0


- 2.0.1037 -- 2019-12-05

    - [Ling/JSortableLists](https://github.com/lingtalfi/JSortableLists)  --> 1.0.0


- 2.0.1036 -- 2019-12-05

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.3.0 --> 1.3.1


- 2.0.1035 -- 2019-12-04

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.13.0 --> 1.14.0


- 2.0.1034 -- 2019-12-04

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.7.0 --> 1.8.0


- 2.0.1033 -- 2019-12-04

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.2.2 --> 1.3.0


- 2.0.1032 -- 2019-12-03

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.20.1 --> 1.20.2


- 2.0.1031 -- 2019-12-03

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.12.0 --> 1.13.0


- 2.0.1030 -- 2019-12-03

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.8.0 --> 1.9.0


- 2.0.1029 -- 2019-12-03

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 1.0.1 --> 1.1.0


- 2.0.1028 -- 2019-12-03

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.7.5 --> 1.7.6


- 2.0.1027 -- 2019-12-03

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.7.4 --> 1.7.5


- 2.0.1026 -- 2019-12-03

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.9.1 --> 1.9.2


- 2.0.1025 -- 2019-12-03

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.7.3 --> 1.7.4


- 2.0.1024 -- 2019-12-03

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.7.2 --> 1.7.3


- 2.0.1023 -- 2019-12-03

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.7.1 --> 1.7.2


- 2.0.1022 -- 2019-12-03

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.7.0 --> 1.7.1


- 2.0.1021 -- 2019-12-03

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.6.0 --> 1.7.0


- 2.0.1020 -- 2019-12-02

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.11.0 --> 1.12.0


- 2.0.1019 -- 2019-12-02

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.2.1 --> 1.2.2


- 2.0.1018 -- 2019-12-02

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.9.0 --> 1.9.1


- 2.0.1017 -- 2019-12-02

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.2.0 --> 1.2.1


- 2.0.1016 -- 2019-11-29

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.4.1 --> 1.5.0


- 2.0.1015 -- 2019-11-29

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.7.0 --> 1.8.0


- 2.0.1014 -- 2019-11-29

    - [Ling/Light_Flasher](https://github.com/lingtalfi/Light_Flasher) 1.2.0 --> 1.3.0


- 2.0.1013 -- 2019-11-28

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.9.0 --> 1.10.0


- 2.0.1012 -- 2019-11-28

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.4.0 --> 1.4.1


- 2.0.1011 -- 2019-11-28

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.10.0 --> 1.11.0


- 2.0.1010 -- 2019-11-28

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.0.1 --> 1.1.0


- 2.0.1009 -- 2019-11-28

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.3.0 --> 1.4.0


- 2.0.1008 -- 2019-11-28

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.6.0 --> 1.7.0


- 2.0.1007 -- 2019-11-28

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud) 1.0.0 --> 1.0.1


- 2.0.1006 -- 2019-11-28

    - [Ling/Light_Crud](https://github.com/lingtalfi/Light_Crud)  --> 1.0.0


- 2.0.1005 -- 2019-11-27

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.28.0 --> 1.29.0


- 2.0.1004 -- 2019-11-27

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.3.0 --> 1.4.0


- 2.0.1003 -- 2019-11-27

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.1.0 --> 1.2.0


- 2.0.1002 -- 2019-11-27

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.6.0 --> 1.6.1


- 2.0.1001 -- 2019-11-27

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.5.0 --> 1.6.0


- 2.0.1000 -- 2019-11-27

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.2.1 --> 1.3.0


- 2.0.999 -- 2019-11-27

    - [Ling/Light_CsrfSession](https://github.com/lingtalfi/Light_CsrfSession)  --> 1.0.0


- 2.0.998 -- 2019-11-27

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.5.0 --> 1.6.0


- 2.0.997 -- 2019-11-25

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.2.1 --> 1.3.0


- 2.0.996 -- 2019-11-25

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.5.0 --> 1.6.0


- 2.0.995 -- 2019-11-25

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.4.0 --> 1.5.0


- 2.0.994 -- 2019-11-25

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.3.0 --> 1.4.0


- 2.0.993 -- 2019-11-25

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.20.0 --> 1.20.1


- 2.0.992 -- 2019-11-25

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.6.1 --> 1.7.0


- 2.0.991 -- 2019-11-25

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.19.3 --> 1.20.0


- 2.0.990 -- 2019-11-25

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.4.0 --> 1.5.0


- 2.0.989 -- 2019-11-25

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.19.2 --> 1.19.3


- 2.0.988 -- 2019-11-25

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.2.0 --> 1.2.1


- 2.0.987 -- 2019-11-25

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.1.1 --> 1.2.0


- 2.0.986 -- 2019-11-25

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.13.0 --> 1.14.0


- 2.0.985 -- 2019-11-25

    - [Ling/Kit](https://github.com/lingtalfi/Kit) 1.11.1 --> 1.12.0


- 2.0.984 -- 2019-11-25

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.2.0 --> 1.2.1


- 2.0.983 -- 2019-11-25

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.4.0 --> 1.5.0


- 2.0.982 -- 2019-11-25

    - [Ling/Light_HtmlPageCopilot](https://github.com/lingtalfi/Light_HtmlPageCopilot) 1.0.2 --> 1.0.3


- 2.0.981 -- 2019-11-25

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader) 1.2.1 --> 1.2.2


- 2.0.980 -- 2019-11-25

    - [Ling/JFileUploader](https://github.com/lingtalfi/JFileUploader)  --> 1.2.1


- 2.0.979 -- 2019-11-22

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.2.1 --> 1.3.0


- 2.0.978 -- 2019-11-20

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.27.1 --> 1.28.0


- 2.0.977 -- 2019-11-20

    - [Ling/BabyYaml](https://github.com/lingtalfi/BabyYaml) 1.4.0 --> 1.4.1


- 2.0.976 -- 2019-11-19

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.2.0 --> 1.2.1


- 2.0.975 -- 2019-11-19

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.27.0 --> 1.27.1


- 2.0.974 -- 2019-11-19

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.26.0 --> 1.27.0


- 2.0.973 -- 2019-11-19

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.25.2 --> 1.26.0


- 2.0.972 -- 2019-11-19

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.25.1 --> 1.25.2


- 2.0.971 -- 2019-11-19

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.1.0 --> 1.2.0


- 2.0.970 -- 2019-11-19

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.7.3 --> 1.8.0


- 2.0.969 -- 2019-11-19

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.9.1 --> 1.10.0


- 2.0.968 -- 2019-11-19

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.1.0 --> 1.2.0


- 2.0.967 -- 2019-11-19

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension) 1.0.0 --> 1.1.0


- 2.0.966 -- 2019-11-19

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.1.0 --> 1.1.1


- 2.0.965 -- 2019-11-19

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.25.0 --> 1.25.1


- 2.0.964 -- 2019-11-19

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.8.0 --> 1.9.0


- 2.0.963 -- 2019-11-19

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.24.1 --> 1.25.0


- 2.0.962 -- 2019-11-19

    - [Ling/Light_Firewall](https://github.com/lingtalfi/Light_Firewall) 1.0.0 --> 1.1.0


- 2.0.961 -- 2019-11-19

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.7.2 --> 1.8.0


- 2.0.960 -- 2019-11-19

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.9.0 --> 1.10.0


- 2.0.959 -- 2019-11-19

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.45.0 --> 0.46.0


- 2.0.958 -- 2019-11-19

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.44.0 --> 0.45.0


- 2.0.957 -- 2019-11-18

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.6.0 --> 1.6.1


- 2.0.956 -- 2019-11-18

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.5.0 --> 1.6.0


- 2.0.955 -- 2019-11-18

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.2.0 --> 1.3.0


- 2.0.954 -- 2019-11-18

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.0.2 --> 1.1.0


- 2.0.953 -- 2019-11-18

    - [Ling/Light_ChloroformExtension](https://github.com/lingtalfi/Light_ChloroformExtension)  --> 1.0.0


- 2.0.952 -- 2019-11-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.19.1 --> 1.19.2


- 2.0.951 -- 2019-11-18

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.4.1 --> 1.5.0


- 2.0.950 -- 2019-11-18

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.2.0 --> 1.3.0


- 2.0.949 -- 2019-11-18

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.12.1 --> 1.12.2


- 2.0.948 -- 2019-11-15

    - [Ling/JBootstrapAutocomplete](https://github.com/lingtalfi/JBootstrapAutocomplete) 1.0.2 --> 1.1.0


- 2.0.947 -- 2019-11-15

    - [Ling/JBootstrapAutocomplete](https://github.com/lingtalfi/JBootstrapAutocomplete) 1.0.1 --> 1.0.2


- 2.0.946 -- 2019-11-15

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.19.0 --> 1.19.1


- 2.0.945 -- 2019-11-15

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.12.0 --> 1.12.1


- 2.0.944 -- 2019-11-15

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.7.0 --> 1.8.0


- 2.0.943 -- 2019-11-15

    - [Ling/JBootstrapAutocomplete](https://github.com/lingtalfi/JBootstrapAutocomplete) 1.0.0 --> 1.0.1


- 2.0.942 -- 2019-11-15

    - [Ling/JBootstrapAutocomplete](https://github.com/lingtalfi/JBootstrapAutocomplete)  --> 1.0.0


- 2.0.941 -- 2019-11-14

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.0.1 --> 1.1.0


- 2.0.940 -- 2019-11-14

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.9.0 --> 1.9.1


- 2.0.939 -- 2019-11-14

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.213 --> 1.214


- 2.0.938 -- 2019-11-13

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.8.0 --> 1.9.0


- 2.0.937 -- 2019-11-13

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.8.1 --> 1.9.0


- 2.0.936 -- 2019-11-13

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.8.0 --> 1.8.1


- 2.0.935 -- 2019-11-13

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.7.0 --> 1.8.0


- 2.0.934 -- 2019-11-13

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.6.0 --> 1.7.0


- 2.0.933 -- 2019-11-13

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.8.5 --> 1.9.0


- 2.0.932 -- 2019-11-13

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.24.0 --> 1.24.1


- 2.0.931 -- 2019-11-13

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.23.0 --> 1.24.0


- 2.0.930 -- 2019-11-12

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.5.1 --> 1.5.2


- 2.0.929 -- 2019-11-12

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.11.0 --> 1.12.0


- 2.0.928 -- 2019-11-12

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.22.1 --> 1.23.0


- 2.0.927 -- 2019-11-12

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.22.0 --> 1.22.1


- 2.0.926 -- 2019-11-12

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.21.0 --> 1.22.0


- 2.0.925 -- 2019-11-12

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.10.0 --> 1.11.0


- 2.0.924 -- 2019-11-12

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.20.0 --> 1.21.0


- 2.0.923 -- 2019-11-12

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.19.0 --> 1.20.0


- 2.0.922 -- 2019-11-12

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.8.0 --> 1.9.0


- 2.0.921 -- 2019-11-12

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.1.0 --> 1.2.0


- 2.0.920 -- 2019-11-12

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler) 1.0.0 --> 1.0.1


- 2.0.919 -- 2019-11-11

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.9.1 --> 1.10.0


- 2.0.918 -- 2019-11-11

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.6.0 --> 1.7.0


- 2.0.917 -- 2019-11-11

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.18.2 --> 1.19.0


- 2.0.916 -- 2019-11-11

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.5.0 --> 1.6.0


- 2.0.915 -- 2019-11-11

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.18.1 --> 1.18.2


- 2.0.914 -- 2019-11-11

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.18.0 --> 1.18.1


- 2.0.913 -- 2019-11-11

    - [Ling/Light_ExceptionHandler](https://github.com/lingtalfi/Light_ExceptionHandler)  --> 1.0.0


- 2.0.912 -- 2019-11-11

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.3.0 --> 1.4.0


- 2.0.911 -- 2019-11-11

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.43.0 --> 0.44.0


- 2.0.910 -- 2019-11-11

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.5.0 --> 1.6.0


- 2.0.909 -- 2019-11-11

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.42.0 --> 0.43.0


- 2.0.908 -- 2019-11-11

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events) 1.0.0 --> 1.1.0


- 2.0.907 -- 2019-11-11

    - [Ling/Light_ZephyrTemplate](https://github.com/lingtalfi/Light_ZephyrTemplate) 1.1.1 --> 1.2.0


- 2.0.906 -- 2019-11-11

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.7.2 --> 1.8.0


- 2.0.905 -- 2019-11-11

    - [Ling/Light_PrettyError](https://github.com/lingtalfi/Light_PrettyError) 1.4.2 --> 1.5.0


- 2.0.904 -- 2019-11-11

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.41.0 --> 0.42.0


- 2.0.903 -- 2019-11-11

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.6.0 --> 1.7.0


- 2.0.902 -- 2019-11-08

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.1.1 --> 1.2.0


- 2.0.901 -- 2019-11-08

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.1.0 --> 1.1.1


- 2.0.900 -- 2019-11-08

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace) 1.0.0 --> 1.1.0


- 2.0.899 -- 2019-11-08

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple) 1.1.1 --> 1.2.0


- 2.0.898 -- 2019-11-08

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple) 1.1.0 --> 1.1.1


- 2.0.897 -- 2019-11-08

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple) 1.0.0 --> 1.1.0


- 2.0.896 -- 2019-11-08

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.40.1 --> 0.41.0


- 2.0.895 -- 2019-11-08

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.13.0 --> 1.13.1


- 2.0.894 -- 2019-11-07

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.9.0 --> 1.9.1


- 2.0.893 -- 2019-11-07

    - [Ling/Light_Kit_Admin_DebugTrace](https://github.com/lingtalfi/Light_Kit_Admin_DebugTrace)  --> 1.0.0


- 2.0.892 -- 2019-11-07

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.12.2 --> 1.13.0


- 2.0.891 -- 2019-11-07

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.40.0 --> 0.40.1


- 2.0.890 -- 2019-11-07

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.15.0 --> 1.15.1


- 2.0.889 -- 2019-11-07

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.17.3 --> 1.18.0


- 2.0.888 -- 2019-11-07

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.2.0 --> 1.3.0


- 2.0.887 -- 2019-11-07

    - [Ling/Light_Csrf](https://github.com/lingtalfi/Light_Csrf) 1.0.0 --> 1.0.1


- 2.0.886 -- 2019-11-07

    - [Ling/Light_CsrfSimple](https://github.com/lingtalfi/Light_CsrfSimple)  --> 1.0.0


- 2.0.885 -- 2019-11-07

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.39.0 --> 0.40.0


- 2.0.884 -- 2019-11-07

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.38.0 --> 0.39.0


- 2.0.883 -- 2019-11-07

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.7.1 --> 1.7.2


- 2.0.882 -- 2019-11-06

    - [Ling/SicTools](https://github.com/lingtalfi/SicTools) 1.4.5 --> 1.5.0


- 2.0.881 -- 2019-11-06

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.37.0 --> 0.38.0


- 2.0.880 -- 2019-11-06

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.36.0 --> 0.37.0


- 2.0.879 -- 2019-11-06

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.35.0 --> 0.36.0


- 2.0.878 -- 2019-11-06

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.5.0 --> 1.5.1


- 2.0.877 -- 2019-11-06

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator) 1.0.0 --> 1.0.1


- 2.0.876 -- 2019-11-06

    - [Ling/Light_Kit_Admin_Generator](https://github.com/lingtalfi/Light_Kit_Admin_Generator)  --> 1.0.0


- 2.0.875 -- 2019-11-06

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin) 0.1.0 --> 0.2.0


- 2.0.874 -- 2019-11-06

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.7.0 --> 1.8.0


- 2.0.873 -- 2019-11-06

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.17.2 --> 1.17.3


- 2.0.872 -- 2019-11-06

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.6.0 --> 1.7.0


- 2.0.871 -- 2019-11-05

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.5.0 --> 1.6.0


- 2.0.870 -- 2019-11-05

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.1.0 --> 1.2.0


- 2.0.869 -- 2019-11-05

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.4.1 --> 1.5.0


- 2.0.868 -- 2019-11-05

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.4.0 --> 1.4.1


- 2.0.867 -- 2019-11-05

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.3.1 --> 1.4.0


- 2.0.866 -- 2019-11-05

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.212 --> 1.213


- 2.0.865 -- 2019-11-05

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.3.0 --> 1.3.1


- 2.0.864 -- 2019-11-05

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.17.1 --> 1.17.2


- 2.0.863 -- 2019-11-05

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.7.0 --> 1.7.1


- 2.0.862 -- 2019-11-05

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.0.1 --> 1.1.0


- 2.0.861 -- 2019-11-04

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.2.0 --> 1.3.0


- 2.0.860 -- 2019-11-04

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.1.0 --> 1.2.0


- 2.0.859 -- 2019-11-04

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.5.0 --> 1.6.0


- 2.0.858 -- 2019-11-04

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.8.4 --> 1.8.5


- 2.0.857 -- 2019-11-04

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.7.2 --> 1.7.3


- 2.0.856 -- 2019-11-04

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.211 --> 1.212


- 2.0.855 -- 2019-11-04

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.7.1 --> 1.7.2


- 2.0.854 -- 2019-11-01

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.0.4 --> 1.1.0


- 2.0.853 -- 2019-11-01

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.18.0 --> 1.19.0


- 2.0.852 -- 2019-11-01

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.17.0 --> 1.17.1


- 2.0.851 -- 2019-11-01

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.17.2 --> 1.18.0


- 2.0.850 -- 2019-10-31

    - [Ling/ArrayVariableResolver](https://github.com/lingtalfi/ArrayVariableResolver) 1.2.0 --> 1.2.1


- 2.0.849 -- 2019-10-31

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.8.0 --> 1.8.1


- 2.0.848 -- 2019-10-31

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.1.0 --> 1.2.0


- 2.0.847 -- 2019-10-31

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.21 --> 1.211


- 2.0.846 -- 2019-10-31

    - [Ling/Light_Events](https://github.com/lingtalfi/Light_Events)  --> 1.0.0


- 2.0.845 -- 2019-10-31

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.6.0 --> 1.7.0


- 2.0.844 -- 2019-10-31

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.7.2 --> 1.8.0


- 2.0.843 -- 2019-10-30

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.5.0 --> 1.6.0


- 2.0.842 -- 2019-10-30

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.7.1 --> 1.7.2


- 2.0.841 -- 2019-10-30

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.7.0 --> 1.7.1


- 2.0.840 -- 2019-10-30

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.6.0 --> 1.7.0


- 2.0.839 -- 2019-10-30

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.12.3 --> 1.12.4


- 2.0.838 -- 2019-10-30

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.12.2 --> 1.12.3


- 2.0.837 -- 2019-10-30

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.12.1 --> 1.12.2


- 2.0.836 -- 2019-10-30

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.5.1 --> 1.6.0


- 2.0.835 -- 2019-10-30

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.0.2 --> 1.1.0


- 2.0.834 -- 2019-10-30

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.16.1 --> 1.17.0


- 2.0.833 -- 2019-10-30

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 1.1.1 --> 1.1.2


- 2.0.832 -- 2019-10-29

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.14.1 --> 1.15.0


- 2.0.831 -- 2019-10-29

    - [Ling/Light_Kit](https://github.com/lingtalfi/Light_Kit) 1.12.1 --> 1.12.2


- 2.0.830 -- 2019-10-29

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.14.0 --> 1.14.1


- 2.0.829 -- 2019-10-29

    - [Ling/Light_Kit_BootstrapWidgetLibrary](https://github.com/lingtalfi/Light_Kit_BootstrapWidgetLibrary) 1.13.2 --> 1.14.0


- 2.0.828 -- 2019-10-28

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.16.0 --> 1.16.1


- 2.0.827 -- 2019-10-28

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.15.0 --> 1.16.0


- 2.0.826 -- 2019-10-28

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.34.0 --> 0.35.0


- 2.0.825 -- 2019-10-28

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.33.0 --> 0.34.0


- 2.0.824 -- 2019-10-28

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub) 1.0.0 --> 1.0.1


- 2.0.823 -- 2019-10-28

    - [Ling/Light_ControllerHub](https://github.com/lingtalfi/Light_ControllerHub)  --> 1.0.0


- 2.0.822 -- 2019-10-28

    - [Ling/Light_LightInstance](https://github.com/lingtalfi/Light_LightInstance) 1.0.0 --> 1.0.2


- 2.0.821 -- 2019-10-28

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.32.0 --> 0.33.0


- 2.0.820 -- 2019-10-28

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.209 --> 1.21


- 2.0.819 -- 2019-10-28

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.31.0 --> 0.32.0


- 2.0.818 -- 2019-10-28

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.30.0 --> 0.31.0


- 2.0.817 -- 2019-10-28

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.29.0 --> 0.30.0


- 2.0.816 -- 2019-10-28

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.28.0 --> 0.29.0


- 2.0.815 -- 2019-10-28

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.14.2 --> 1.15.0


- 2.0.814 -- 2019-10-28

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.8.0 --> 1.9.0


- 2.0.813 -- 2019-10-25

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.0.1 --> 1.0.2


- 2.0.812 -- 2019-10-25

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator) 1.0.0 --> 1.0.1


- 2.0.811 -- 2019-10-25

    - [Ling/Light_Kit_Admin](https://github.com/lingtalfi/Light_Kit_Admin)  --> 0.1.0


- 2.0.810 -- 2019-10-25

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.14.0 --> 1.14.1


- 2.0.809 -- 2019-10-25

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.13.1 --> 1.14.0


- 2.0.808 -- 2019-10-25

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.12.3 --> 1.13.0


- 2.0.807 -- 2019-10-24

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.4.0 --> 1.4.1


- 2.0.806 -- 2019-10-24

    - [Ling/Chloroform_HydrogenRenderer](https://github.com/lingtalfi/Chloroform_HydrogenRenderer) 1.2.2 --> 1.2.3


- 2.0.805 -- 2019-10-24

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.0.1 --> 1.0.2


- 2.0.804 -- 2019-10-24

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.17.1 --> 1.17.2


- 2.0.803 -- 2019-10-24

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.0.3 --> 1.0.4


- 2.0.802 -- 2019-10-24

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.14.1 --> 1.14.2


- 2.0.801 -- 2019-10-24

    - [Ling/Light_RealGenerator](https://github.com/lingtalfi/Light_RealGenerator)  --> 1.0.0


- 2.0.800 -- 2019-10-24

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.0.2 --> 1.0.3


- 2.0.799 -- 2019-10-24

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.0.1 --> 1.0.2


- 2.0.798 -- 2019-10-24

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.27.2 --> 0.28.0


- 2.0.797 -- 2019-10-24

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.4.0 --> 1.5.0


- 2.0.796 -- 2019-10-23

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.7.1 --> 1.7.2


- 2.0.795 -- 2019-10-23

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.27.1 --> 0.27.2


- 2.0.794 -- 2019-10-23

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.4.1 --> 1.5.0


- 2.0.793 -- 2019-10-23

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.5.0 --> 1.5.1


- 2.0.792 -- 2019-10-23

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.4.1 --> 1.5.0


- 2.0.791 -- 2019-10-23

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.3.0 --> 1.4.0


- 2.0.790 -- 2019-10-22

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.17.0 --> 1.17.1


- 2.0.789 -- 2019-10-22

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.12.1 --> 1.12.3


- 2.0.788 -- 2019-10-22

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.16.0 --> 1.17.0


- 2.0.787 -- 2019-10-22

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.15.0 --> 1.16.0


- 2.0.786 -- 2019-10-22

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.14.2 --> 1.15.0


- 2.0.785 -- 2019-10-21

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.3.0 --> 1.1.0


- 2.0.784 -- 2019-10-21

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.3.1 --> 1.4.0


- 2.0.783 -- 2019-10-21

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.4.0 --> 1.4.1


- 2.0.782 -- 2019-10-21

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.3.1 --> 1.4.0


- 2.0.781 -- 2019-10-21

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.14.1 --> 1.14.2


- 2.0.780 -- 2019-10-21

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.7.0 --> 1.7.1


- 2.0.779 -- 2019-10-21

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.208 --> 1.209


- 2.0.778 -- 2019-10-21

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.3.0 --> 1.3.1


- 2.0.777 -- 2019-10-21

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.27.0 --> 0.27.1


- 2.0.776 -- 2019-10-21

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.14.0 --> 1.14.1


- 2.0.775 -- 2019-10-21

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform) 1.0.0 --> 1.0.1


- 2.0.774 -- 2019-10-21

    - [Ling/Light_Realform](https://github.com/lingtalfi/Light_Realform)  --> 1.0.0


- 2.0.773 -- 2019-10-21

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer) 1.0.0 --> 1.0.1


- 2.0.772 -- 2019-10-21

    - [Ling/Chloroform_HeliumLightRenderer](https://github.com/lingtalfi/Chloroform_HeliumLightRenderer)  --> 1.0.0


- 2.0.771 -- 2019-10-18

    - [Ling/Light_HtmlPageCopilot](https://github.com/lingtalfi/Light_HtmlPageCopilot) 1.0.1 --> 1.0.2


- 2.0.770 -- 2019-10-18

    - [Ling/Light_HtmlPageCopilot](https://github.com/lingtalfi/Light_HtmlPageCopilot) 1.0.0 --> 1.0.1


- 2.0.769 -- 2019-10-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.14.0 --> 1.14.1


- 2.0.768 -- 2019-10-18

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.13.1 --> 1.14.0


- 2.0.767 -- 2019-10-18

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.3.0 --> 1.4.0


- 2.0.766 -- 2019-10-17

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.2.1 --> 1.3.0


- 2.0.765 -- 2019-10-17

    - [Ling/ThumbnailTools](https://github.com/lingtalfi/ThumbnailTools) 1.3.0 --> 1.3.1


- 2.0.764 -- 2019-10-17

    - [Ling/ThumbnailTools](https://github.com/lingtalfi/ThumbnailTools) 1.2.2 --> 1.3.0


- 2.0.763 -- 2019-10-17

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.2.0 --> 1.3.0


- 2.0.762 -- 2019-10-17

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.1.0 --> 1.2.0


- 2.0.761 -- 2019-10-17

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.3.0 --> 1.3.1


- 2.0.760 -- 2019-10-17

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData) 1.0.0 --> 1.1.0


- 2.0.759 -- 2019-10-17

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.26.0 --> 0.27.0


- 2.0.758 -- 2019-10-17

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.4.0 --> 1.4.1


- 2.0.757 -- 2019-10-17

    - [Ling/Light_ReverseRouter](https://github.com/lingtalfi/Light_ReverseRouter) 1.6.0 --> 1.7.0


- 2.0.756 -- 2019-10-17

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.25.1 --> 0.26.0


- 2.0.755 -- 2019-10-17

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.25.0 --> 0.25.1


- 2.0.754 -- 2019-10-17

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.3.0 --> 1.4.0


- 2.0.753 -- 2019-10-17

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.24.0 --> 0.25.0


- 2.0.752 -- 2019-10-17

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.4.2 --> 1.5.0


- 2.0.751 -- 2019-10-17

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.12.0 --> 1.12.1


- 2.0.750 -- 2019-10-17

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.4.1 --> 1.4.2


- 2.0.749 -- 2019-10-17

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.4.0 --> 1.4.1


- 2.0.748 -- 2019-10-17

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.207 --> 1.208


- 2.0.747 -- 2019-10-17

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.2.2 --> 1.3.0


- 2.0.746 -- 2019-10-17

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.13.0 --> 1.13.1


- 2.0.745 -- 2019-10-16

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.206 --> 1.207


- 2.0.744 -- 2019-10-16

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.23.1 --> 0.24.0


- 2.0.743 -- 2019-10-16

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.2.1 --> 1.2.2


- 2.0.742 -- 2019-10-16

    - [Ling/Chloroform_HeliumRenderer](https://github.com/lingtalfi/Chloroform_HeliumRenderer) 1.2.0 --> 1.3.0


- 2.0.741 -- 2019-10-16

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.12.1 --> 1.13.0


- 2.0.740 -- 2019-10-16

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.2.0 --> 1.2.1


- 2.0.739 -- 2019-10-16

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.205 --> 1.206


- 2.0.738 -- 2019-10-16

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.1.1 --> 1.2.0


- 2.0.737 -- 2019-10-16

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.204 --> 1.205


- 2.0.736 -- 2019-10-11

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.7.3 --> 1.8.0


- 2.0.735 -- 2019-10-11

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.4.1 --> 1.5.0


- 2.0.734 -- 2019-10-11

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.13.3 --> 1.14.0


- 2.0.733 -- 2019-10-10

    - [Ling/SqlQuery](https://github.com/lingtalfi/SqlQuery) 1.10.2 --> 1.10.3


- 2.0.732 -- 2019-10-10

    - [Ling/SqlQuery](https://github.com/lingtalfi/SqlQuery) 1.10.1 --> 1.10.2


- 2.0.731 -- 2019-10-09

    - [Ling/ParametrizedSqlQuery](https://github.com/lingtalfi/ParametrizedSqlQuery) 1.4.0 --> 1.4.1


- 2.0.730 -- 2019-10-09

    - [Ling/PhpSpreadSheetTool](https://github.com/lingtalfi/PhpSpreadSheetTool) 1.0.2 --> 1.0.3


- 2.0.729 -- 2019-10-09

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.13.2 --> 1.13.3


- 2.0.728 -- 2019-10-09

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.203 --> 1.204


- 2.0.727 -- 2019-10-09

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.23.0 --> 0.23.1


- 2.0.726 -- 2019-10-09

    - [Ling/Light_LightInstance](https://github.com/lingtalfi/Light_LightInstance)  --> 1.0.0


- 2.0.725 -- 2019-10-08

    - [Ling/PhpSpreadSheetTool](https://github.com/lingtalfi/PhpSpreadSheetTool) 1.0.1 --> 1.0.2


- 2.0.724 -- 2019-10-08

    - [Ling/PhpExcelTool](https://github.com/lingtalfi/PhpExcelTool) 1.9.2 --> 1.9.3


- 2.0.723 -- 2019-10-08

    - [Ling/PhpSpreadSheetTool](https://github.com/lingtalfi/PhpSpreadSheetTool) 1.0.0 --> 1.0.1


- 2.0.722 -- 2019-10-08

    - [Ling/PhpSpreadSheetTool](https://github.com/lingtalfi/PhpSpreadSheetTool)  --> 1.0.0


- 2.0.721 -- 2019-10-08

    - [Ling/PhpExcelTool](https://github.com/lingtalfi/PhpExcelTool) 1.9.1 --> 1.9.2


- 2.0.720 -- 2019-10-08

    - [Ling/PhpExcelTool](https://github.com/lingtalfi/PhpExcelTool) 1.9.0 --> 1.9.1
    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.18.0 --> 1.19.0


- 2.0.719 -- 2019-10-08

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.11.0 --> 1.12.0


- 2.0.718 -- 2019-10-08

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.17.0 --> 1.18.0


- 2.0.717 -- 2019-10-07

    - [Ling/Csv](https://github.com/lingtalfi/Csv) 1.3.0 --> 1.3.1


- 2.0.716 -- 2019-10-07

    - [Ling/Csv](https://github.com/lingtalfi/Csv) 1.2.1 --> 1.3.0


- 2.0.715 -- 2019-10-07

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.202 --> 1.203


- 2.0.714 -- 2019-10-07

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.13.1 --> 1.13.2


- 2.0.713 -- 2019-10-07

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.7.2 --> 1.7.3


- 2.0.712 -- 2019-10-04

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.7.1 --> 1.7.2


- 2.0.711 -- 2019-10-04

    - [Ling/JRicAdminTableHelper](https://github.com/lingtalfi/JRicAdminTableHelper) 1.0.5 --> 1.0.6


- 2.0.710 -- 2019-10-04

    - [Ling/DirScanner](https://github.com/lingtalfi/DirScanner) 1.11.2 --> 1.12.0


- 2.0.709 -- 2019-10-04

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.2.0 --> 1.3.0


- 2.0.708 -- 2019-10-04

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.8.3 --> 1.8.4


- 2.0.707 -- 2019-10-04

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.7.0 --> 1.7.1


- 2.0.706 -- 2019-10-04

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.8.2 --> 1.8.3


- 2.0.705 -- 2019-10-04

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.12.0 --> 1.12.1


- 2.0.704 -- 2019-10-03

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.2.0 --> 1.3.0


- 2.0.703 -- 2019-10-03

    - [Ling/Light_PasswordProtector](https://github.com/lingtalfi/Light_PasswordProtector) 1.0.0 --> 1.0.1


- 2.0.702 -- 2019-10-03

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.201 --> 1.202


- 2.0.701 -- 2019-10-03

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.11.9 --> 1.12.0


- 2.0.700 -- 2019-10-03

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.1.0 --> 1.1.1


- 2.0.699 -- 2019-10-03

    - [Ling/TheBar](https://github.com/lingtalfi/TheBar) 1.0.0 --> 1.1.0


- 2.0.698 -- 2019-10-01

    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils) 1.0.0 --> 1.1.0


- 2.0.697 -- 2019-10-01

    - [Ling/Light_DatabaseUtils](https://github.com/lingtalfi/Light_DatabaseUtils)  --> 1.0.0


- 2.0.696 -- 2019-10-01

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.13.0 --> 1.13.1


- 2.0.695 -- 2019-10-01

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.2 --> 1.201


- 2.0.694 -- 2019-10-01

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.6.1 --> 1.7.0


- 2.0.693 -- 2019-10-01

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.12.2 --> 1.13.0


- 2.0.692 -- 2019-10-01

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.12.1 --> 1.12.2


- 2.0.691 -- 2019-10-01

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.12.0 --> 1.12.1


- 2.0.690 -- 2019-10-01

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.11.0 --> 1.12.0


- 2.0.689 -- 2019-10-01

    - [Ling/DocTools](https://github.com/lingtalfi/DocTools) 1.10.2 --> 1.11.0


- 2.0.688 -- 2019-10-01

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.199 --> 1.2


- 2.0.687 -- 2019-10-01

    - [Ling/Light_EndRoutine_CsrfPageCleaner](https://github.com/lingtalfi/Light_EndRoutine_CsrfPageCleaner) 1.3.0 --> 1.3.1


- 2.0.686 -- 2019-10-01

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.22.0 --> 0.23.0


- 2.0.685 -- 2019-09-30

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.5.0 --> 1.6.0


- 2.0.684 -- 2019-09-30

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.21.0 --> 0.22.0


- 2.0.683 -- 2019-09-30

    - [Ling/Light_EndRoutine_CsrfPageCleaner](https://github.com/lingtalfi/Light_EndRoutine_CsrfPageCleaner) 1.2.0 --> 1.3.0


- 2.0.682 -- 2019-09-30

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.20.0 --> 0.21.0


- 2.0.681 -- 2019-09-27

    - [Ling/Light_UserData](https://github.com/lingtalfi/Light_UserData)  --> 1.0.0


- 2.0.680 -- 2019-09-27

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.10.3 --> 1.11.0


- 2.0.679 -- 2019-09-27

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 1.1.0 --> 1.1.1


- 2.0.678 -- 2019-09-27

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission) 1.0.0 --> 1.1.0


- 2.0.677 -- 2019-09-26

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.4.0 --> 1.5.0


- 2.0.676 -- 2019-09-26

    - [Ling/Light_MicroPermission](https://github.com/lingtalfi/Light_MicroPermission)  --> 1.0.0


- 2.0.675 -- 2019-09-26

    - [Ling/Light_Bullsheet](https://github.com/lingtalfi/Light_Bullsheet) 1.0.2 --> 1.0.3


- 2.0.674 -- 2019-09-26

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.11.8 --> 1.11.9


- 2.0.673 -- 2019-09-26

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.198 --> 1.199


- 2.0.672 -- 2019-09-26

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.7.0 --> 1.7.1


- 2.0.671 -- 2019-09-26

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.10.2 --> 1.10.3


- 2.0.670 -- 2019-09-26

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.13.0 --> 1.13.1


- 2.0.669 -- 2019-09-26

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.10.1 --> 1.10.2


- 2.0.668 -- 2019-09-26

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.10.0 --> 1.10.1


- 2.0.667 -- 2019-09-26

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.9.0 --> 1.10.0


- 2.0.666 -- 2019-09-26

    - [Ling/HtmlPageTools](https://github.com/lingtalfi/HtmlPageTools) 2.0.1 --> 2.1.0


- 2.0.665 -- 2019-09-25

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.6.0 --> 1.7.0


- 2.0.664 -- 2019-09-25

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.8.0 --> 1.9.0


- 2.0.663 -- 2019-09-25

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.0.3 --> 1.1.0


- 2.0.662 -- 2019-09-25

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.4.2 --> 1.5.0


- 2.0.661 -- 2019-09-25

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.7.0 --> 1.8.0


- 2.0.660 -- 2019-09-25

    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.12.0 --> 1.13.0


- 2.0.659 -- 2019-09-25

    - [Ling/JSortTable](https://github.com/lingtalfi/JSortTable)  --> 1.0.0


- 2.0.658 -- 2019-09-24

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.3.0 --> 1.4.0


- 2.0.657 -- 2019-09-24

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.2.0 --> 1.3.0


- 2.0.656 -- 2019-09-24

    - [Ling/AjaxCommunicationProtocol](https://github.com/lingtalfi/AjaxCommunicationProtocol) 1.0.1 --> 1.1.0


- 2.0.655 -- 2019-09-24

    - [Ling/Light_EndRoutine_CsrfPageCleaner](https://github.com/lingtalfi/Light_EndRoutine_CsrfPageCleaner) 1.1.1 --> 1.2.0


- 2.0.654 -- 2019-09-24

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.19.0 --> 0.20.0


- 2.0.653 -- 2019-09-24

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.18.0 --> 0.19.0


- 2.0.652 -- 2019-09-24

    - [Ling/Light_Logger](https://github.com/lingtalfi/Light_Logger) 1.3.0 --> 1.4.0


- 2.0.651 -- 2019-09-24

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.17.0 --> 0.18.0


- 2.0.650 -- 2019-09-24

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.0.2 --> 1.0.3
    - [Ling/LingTalfi](https://github.com/lingtalfi/LingTalfi) 1.11.5 --> 1.12.0


- 2.0.649 -- 2019-09-24

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.16.0 --> 0.17.0


- 2.0.648 -- 2019-09-23

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.5.0 --> 1.6.0
    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.4.1 --> 1.4.2


- 2.0.647 -- 2019-09-23

    - [Ling/JRicAdminTableHelper](https://github.com/lingtalfi/JRicAdminTableHelper) 1.0.4 --> 1.0.5


- 2.0.646 -- 2019-09-23

    - universe minor increment


- 2.0.645 -- 2019-09-23

    - [Ling/UniverseTools](https://github.com/lingtalfi/UniverseTools) 1.16.4 --> 1.17.0


- 2.0.644 -- 2019-09-23

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.6.0 --> 1.6.1


- 2.0.643 -- 2019-09-23

    - [Ling/JRicAdminTableHelper](https://github.com/lingtalfi/JRicAdminTableHelper) 1.0.3 --> 1.0.4


- 2.0.642 -- 2019-09-23

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.0.1 --> 1.0.2


- 2.0.641 -- 2019-09-23

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.4.0 --> 1.4.1


- 2.0.640 -- 2019-09-23

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep) 1.0.0 --> 1.0.1


- 2.0.639 -- 2019-09-23

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.5.3 --> 1.6.0


- 2.0.638 -- 2019-09-23

    - [Ling/JAcpHep](https://github.com/lingtalfi/JAcpHep)  --> 1.0.0


- 2.0.637 -- 2019-09-23

    - [Ling/JCsrfAction](https://github.com/lingtalfi/JCsrfAction) 1.0.0 --> 1.0.1


- 2.0.636 -- 2019-09-23

    - [Ling/JRicAdminTableHelper](https://github.com/lingtalfi/JRicAdminTableHelper) 1.0.2 --> 1.0.3


- 2.0.635 -- 2019-09-23

    - universe minor increment


- 2.0.634 -- 2019-09-23

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.3.0 --> 1.4.0


- 2.0.633 -- 2019-09-23

    - [Ling/JResponsiveTableHelper](https://github.com/lingtalfi/JResponsiveTableHelper) 1.2.0 --> 1.3.0


- 2.0.632 -- 2019-09-23

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.5.2 --> 1.5.3


- 2.0.631 -- 2019-09-23

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.197 --> 1.198


- 2.0.630 -- 2019-09-23

    - [Ling/Light_EndRoutine_Debugger](https://github.com/lingtalfi/Light_EndRoutine_Debugger) 1.0.0 --> 1.1.0


- 2.0.629 -- 2019-09-20

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.5.0 --> 1.5.1


- 2.0.628 -- 2019-09-20

    - [Ling/Light_AjaxFileUploadManager](https://github.com/lingtalfi/Light_AjaxFileUploadManager) 1.2.0 --> 1.2.1


- 2.0.627 -- 2019-09-20

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.12.0 --> 1.12.1


- 2.0.626 -- 2019-09-20

    - [Ling/Chloroform](https://github.com/lingtalfi/Chloroform) 1.11.0 --> 1.12.0


- 2.0.625 -- 2019-09-20

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.15.0 --> 0.16.0


- 2.0.624 -- 2019-09-20

    - [Ling/Light_EndRoutine_Debugger](https://github.com/lingtalfi/Light_EndRoutine_Debugger)  --> 1.0.0


- 2.0.623 -- 2019-09-20

    - [Ling/Light_EndRoutine_CsrfPageCleaner](https://github.com/lingtalfi/Light_EndRoutine_CsrfPageCleaner) 1.1.0 --> 1.1.1


- 2.0.622 -- 2019-09-20

    - [Ling/Light_EndRoutine_CsrfPageCleaner](https://github.com/lingtalfi/Light_EndRoutine_CsrfPageCleaner) 1.0.0 --> 1.1.0


- 2.0.621 -- 2019-09-20

    - [Ling/Light_EndRoutine](https://github.com/lingtalfi/Light_EndRoutine) 1.1.0 --> 1.2.0


- 2.0.620 -- 2019-09-20

    - [Ling/Light_EndRoutine](https://github.com/lingtalfi/Light_EndRoutine) 1.0.0 --> 1.1.0


- 2.0.619 -- 2019-09-20

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.4.0 --> 1.5.0


- 2.0.618 -- 2019-09-20

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.3.0 --> 1.4.0


- 2.0.617 -- 2019-09-20

    - [Ling/Light_Router](https://github.com/lingtalfi/Light_Router)  --> 1.0.0


- 2.0.616 -- 2019-09-20

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.14.0 --> 0.15.0


- 2.0.615 -- 2019-09-20

    - [Ling/Light_Csrf](https://github.com/lingtalfi/Light_Csrf)  --> 1.0.0


- 2.0.614 -- 2019-09-20

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.4.1 --> 1.5.0


- 2.0.613 -- 2019-09-20

    - [Ling/CSRFTools](https://github.com/lingtalfi/CSRFTools) 1.2.1 --> 1.3.0


- 2.0.612 -- 2019-09-19

    - [Ling/Light_EndRoutine_CsrfPageCleaner](https://github.com/lingtalfi/Light_EndRoutine_CsrfPageCleaner)  --> 1.0.0


- 2.0.611 -- 2019-09-19

    - [Ling/Light](https://github.com/lingtalfi/Light) 0.13.2 --> 0.14.0


- 2.0.610 -- 2019-09-19

    - [Ling/Light_EndRoutine](https://github.com/lingtalfi/Light_EndRoutine)  --> 1.0.0


- 2.0.609 -- 2019-09-19

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.1.2 --> 1.2.0


- 2.0.608 -- 2019-09-19

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.1.1 --> 1.1.2


- 2.0.607 -- 2019-09-19

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.1.0 --> 1.1.1


- 2.0.606 -- 2019-09-19

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.0.2 --> 1.1.0


- 2.0.605 -- 2019-09-19

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.0.1 --> 1.0.2


- 2.0.604 -- 2019-09-19

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler) 1.0.0 --> 1.0.1


- 2.0.603 -- 2019-09-19

    - [Ling/Light_AjaxHandler](https://github.com/lingtalfi/Light_AjaxHandler)  --> 1.0.0


- 2.0.602 -- 2019-09-19

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.6.5 --> 1.7.0


- 2.0.601 -- 2019-09-19

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.5.1 --> 1.5.2


- 2.0.600 -- 2019-09-18

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.196 --> 1.197


- 2.0.599 -- 2019-09-18

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.5.0 --> 1.5.1


- 2.0.598 -- 2019-09-18

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.4.2 --> 1.5.0


- 2.0.597 -- 2019-09-18

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.195 --> 1.196


- 2.0.596 -- 2019-09-18

    - [Ling/Bootstrap4AdminTable](https://github.com/lingtalfi/Bootstrap4AdminTable) 1.4.0 --> 1.4.1


- 2.0.595 -- 2019-09-18

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.6.4 --> 1.6.5


- 2.0.594 -- 2019-09-18

    - [Ling/JCsrfAction](https://github.com/lingtalfi/JCsrfAction)  --> 1.0.0


- 2.0.593 -- 2019-09-18

    - [Ling/AjaxCommunicationProtocol](https://github.com/lingtalfi/AjaxCommunicationProtocol) 1.0.0 --> 1.0.1


- 2.0.592 -- 2019-09-18

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.4.1 --> 1.4.2


- 2.0.591 -- 2019-09-18

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.4.0 --> 1.4.1


- 2.0.590 -- 2019-09-18

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.2.0 --> 1.4.0


- 2.0.589 -- 2019-09-18

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.6.3 --> 1.6.4


- 2.0.588 -- 2019-09-18

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.8.1 --> 1.8.2


- 2.0.587 -- 2019-09-18

    - [Ling/ArrayVariableResolver](https://github.com/lingtalfi/ArrayVariableResolver) 1.1.2 --> 1.2.0


- 2.0.586 -- 2019-09-18

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.6.1 --> 1.6.2


- 2.0.585 -- 2019-09-18

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.11.7 --> 1.11.8


- 2.0.584 -- 2019-09-18

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.8.0 --> 1.8.1


- 2.0.583 -- 2019-09-18

    - [Ling/Light_PluginDatabaseInstaller](https://github.com/lingtalfi/Light_PluginDatabaseInstaller) 1.1.2 --> 1.2.0


- 2.0.582 -- 2019-09-17

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.194 --> 1.195


- 2.0.581 -- 2019-09-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.11.6 --> 1.11.7


- 2.0.580 -- 2019-09-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.11.5 --> 1.11.6


- 2.0.579 -- 2019-09-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.11.4 --> 1.11.5


- 2.0.578 -- 2019-09-17

    - [Ling/Light_Database](https://github.com/lingtalfi/Light_Database) 1.2.0 --> 1.2.1


- 2.0.577 -- 2019-09-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.11.3 --> 1.11.4


- 2.0.576 -- 2019-09-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.11.2 --> 1.11.3


- 2.0.575 -- 2019-09-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.11.1 --> 1.11.2


- 2.0.574 -- 2019-09-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.11.0 --> 1.11.1


- 2.0.573 -- 2019-09-17

    - [Ling/Light_UserDatabase](https://github.com/lingtalfi/Light_UserDatabase) 1.9.1 --> 1.11.0


- 2.0.572 -- 2019-09-17

    - [Ling/Bat](https://github.com/lingtalfi/Bat) 1.193 --> 1.194


- 2.0.571 -- 2019-09-16

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.1.1 --> 1.2.0


- 2.0.570 -- 2019-09-16

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.1.0 --> 1.1.1


- 2.0.569 -- 2019-09-16

    - [Ling/BabyYamlDatabase](https://github.com/lingtalfi/BabyYamlDatabase) 1.0.1 --> 1.0.2


- 2.0.568 -- 2019-09-16

    - [Ling/BabyYamlDatabase](https://github.com/lingtalfi/BabyYamlDatabase) 1.0.0 --> 1.0.1


- 2.0.567 -- 2019-09-16

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.0.7 --> 1.1.0


- 2.0.566 -- 2019-09-16

    - [Ling/BabyYamlDatabase](https://github.com/lingtalfi/BabyYamlDatabase)  --> 1.0.0


- 2.0.565 -- 2019-09-16

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.6.2 --> 1.6.3


- 2.0.564 -- 2019-09-16

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.1.0 --> 1.2.0


- 2.0.563 -- 2019-09-13

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.0.6 --> 1.0.7


- 2.0.562 -- 2019-09-13

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.0.5 --> 1.0.6


- 2.0.561 -- 2019-09-13

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.0.4 --> 1.0.5


- 2.0.560 -- 2019-09-13

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.0.3 --> 1.0.4


- 2.0.559 -- 2019-09-13

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.0.2 --> 1.0.3


- 2.0.558 -- 2019-09-13

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.0.1 --> 1.0.2


- 2.0.557 -- 2019-09-13

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator) 1.0.0 --> 1.0.1


- 2.0.556 -- 2019-09-13

    - [Ling/Light_BreezeGenerator](https://github.com/lingtalfi/Light_BreezeGenerator)  --> 1.0.0


- 2.0.555 -- 2019-09-12

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.2.0 --> 1.3.0


- 2.0.554 -- 2019-09-12

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.7.0 --> 1.8.0


- 2.0.553 -- 2019-09-12

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.1.0 --> 1.2.0


- 2.0.552 -- 2019-09-12

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.6.0 --> 1.7.0


- 2.0.551 -- 2019-09-12

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.0.3 --> 1.1.0


- 2.0.550 -- 2019-09-12

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.0.2 --> 1.0.3


- 2.0.549 -- 2019-09-12

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.5.0 --> 1.6.0


- 2.0.548 -- 2019-09-12

    - [Ling/Light_Realist](https://github.com/lingtalfi/Light_Realist) 1.6.1 --> 1.6.2


- 2.0.547 -- 2019-09-12

    - [Ling/NotationFan](https://github.com/lingtalfi/NotationFan) 1.0.1 --> 1.1.0


- 2.0.546 -- 2019-09-12

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.0.1 --> 1.0.2


- 2.0.545 -- 2019-09-12

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo) 1.0.0 --> 1.0.1


- 2.0.544 -- 2019-09-12

    - [Ling/Light_DatabaseInfo](https://github.com/lingtalfi/Light_DatabaseInfo)  --> 1.0.0


- 2.0.543 -- 2019-09-12

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.4.0 --> 1.5.0


- 2.0.542 -- 2019-09-12

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.3.0 --> 1.4.0


- 2.0.541 -- 2019-09-12

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.2.1 --> 1.3.0


- 2.0.540 -- 2019-09-12

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.2.0 --> 1.2.1


- 2.0.539 -- 2019-09-12

    - [Ling/SimplePdoWrapper](https://github.com/lingtalfi/SimplePdoWrapper) 1.1.1 --> 1.2.0


- 2.0.538 -- 2019-09-11

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.6.0 --> 1.6.1


- 2.0.537 -- 2019-09-11

    - [Ling/Light_User](https://github.com/lingtalfi/Light_User) 1.5.1 --> 1.6.0


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


