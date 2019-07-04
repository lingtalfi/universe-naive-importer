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


