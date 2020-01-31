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


