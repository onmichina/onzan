onzan
=====hello word

one zan
#··························赞生的程序生涯
##记录工作中描写的代码
1. 用心去感悟代码的美妙
3. 小时候就想做一个科学家
4. 长大后没有好好学习
5. 后来的后来就学坏了
6. 天天就知道打电脑
7. 后来就和程序搭上的线
 
## 赞生博客
SITE: http://www.zan3.com

学习永无止境，看你耐心如何应对！
---
>#2014年2月20日 14:34:21
1.mysql -uroot -p
2.create database v5;
3.ues v5;
4.create table news(id int primary key auto_increment,title char(100),content text)charset utf8;
---简单的表创建成功

##目录说明
- 数字目录为课程，如1为第1课
- doc为文档资料
- hdphp为框架目录

---
>#2013-1-28日 第7课
1. 网站整站数据备份与还原操作
2. tag标签功能实现
3. 网站友情链接模块实现
 
---
>#2013-1-21日 第6课
1. 文章发表与编辑操作
2. 快速调用UEDITOR编辑器调用
3. 创建快捷的CMS标签（类似DEDE标签体系）

------
>#2013-1-17日 第5课
1. 栏目表设计
2. 网站无限级栏目
3. 文章表设计 
4. 扩展模型自动验证、自动完成实例操作
5. 使用HDJS完成自动Ajax提交

预习说明：
把HDJS手册都打一遍，把HDPHP中关于自动验证、自动完成的部分看一下

------

>#2013-1-10日 第4课
1. 使用HDJS快速完成自动验证
2. 项目的应用组部署
3. V5CMS后台登录操作
4. 作业：通过HDPHP结合HDJS(自动验证）完成CMS系统的登录操作

------
> #2013-1-3日 第3课
1. 隐藏index.php
2. URL伪静态设置
3. URL路由定义
4. 扩展模型的基本使用
5. 作业安排
```
1. 创建应用
2. 连接数据
3. 创建一个用户表
4. 实现路由策略：
localhost/v5/3/houdunwangxj => localhost/v5/3/index.php/User/show/username=houdunwangxj
```

####课前预习
1. 预习前2堂课讲的知识
2. 看一下后盾网论坛的正则表达式视频教程

#### 使用软件
- Wamp Navicat Sublime
- Navicat 下载地址： http://www.xiazaiba.com/html/1846.html

----
> #2013-12-27日 第2课
 
1. 连接数据库
2. 使用HDPHP模板引擎
3. 完成数据的CURD
4. 文章发表操作
5. 文章查询分页操作
6. 作业安排

------
> #2013-12-20日 第1课

##课程安排



####本节课程需要到软件
Wamp

```
下载地址：http://www.wampserver.com/en/
```

Sublime Text

```
下载地址：http://www.sublimetext.com/
```

GitHub for windows


```
1. 下载地址：http://windows.github.com/
```

GitHub for windows安装

```
1. 在github.com上注册帐号
2. 通过360软件管理等平台安装,microsoft.net framework 4.5
2. 下载软件http://windows.github.com/
3. 双击安装
4. 安装后启动github for windows
5. 点击log in,使用github帐号登录
```
MsysGit


```
下载地址：http://msysgit.googlecode.com/files/Git-1.8.4-preview20130916.exe
```

MarkdownPad

```
下载地址：http://www.markdownpad.com/
```
####Git介绍
1. Git是目前世界上最先进的分布式版本控制系统
2. 可以记录每一次我们的代码改动
3. 当我们想回到曾经的代码状态时，git会做到
4. 分支更快、更容易。
5. 支持离线工作；本地提交可以稍后提交到服务器上
6. 有别于svn，Git是分布式版本控制系统


####集中版本控制
* 集中式版本控制系统，版本库是集中存放在中央服务器的
* 先从中央服务器取得最新的版本，然后才可以工作
* 要再把自己的代码推送给中央服务器
* 集中式版本控制系统必须联网才能工作。

####分布式版本控制
* 分布式版本控制每个人的电脑上都是一个完整的版本库
* 不需要联网也可以进行版本控制
* 因为每个人电脑都有一套版本库，安全性更高
* 更方便快速的分支管理
 
####分支branch


如果有一个正在运行的项目比如hdphp,如果我们给项目增加一个新功能，如果每天都提交新代码，由于新功能的代码还没有写完，会造成原来正常运行的hdphp都不可以运行。
这时我们可以创建一个版本新分支，在这个新分支上工作。好处是不破坏master主分支。而且我们鼓励使用Git的分支功能。


####获得HDPHP项目
####使用GitHub for windows获得
1. 下载GitHub for windows(下载过程可能会中断，多试几次就可以了)
2. 打开网址https://github.com/houdunwangxj/hdphp
3. 点击“Clone in Desktop“”按钮,这时会自动通过git for windows 软件下载hdphp项目

####使用MsysGit
1. 下载安装MsysGit
2. 使用

####作业
1. 下载安装GitHub for windows
2. 通过GitHubforwindow 下载hdphp与v5
3. 通过hdphp创建admin应用与index应用
4. 创建属于你自己的项目（项目名称自己命名）

