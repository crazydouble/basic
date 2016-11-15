Yii2 高级模板，后台配置
===============================

### 作者微博

[http://weibo.com/CraZyDoubLe](http://weibo.com/CraZyDoubLe)

### 简介
后台基于Yii2框架开发,拥有登录,用户管理,管理员管理,RBAC,操作日志等公用功能.功能正在不断完善中~

### 功能

1. 基础功能：登录，登出，密码修改等常见的功能

2. 用户管理：包含前台用户的一些基本属性（手机号,邮箱,昵称,性别,省,市,头像,个人简介等）

3. 权限机制：角色、权限增删改查，以及给用户赋予角色权限

4. 操作日志：记录管理员所执行的所有操作（昵称,IP,浏览器,执行动作,修改项,修改时间等）

5. 二次开发：完全可以基于该系统做二次开发，开发一套适合自己的后台管理系统，节约权限控制以及部分基础功能开发的时间成本，后台系统开发的不二之选

###安装

#### 1. 安装Composer 不了解?点[这里](http://docs.phpcomposer.com/)
---

```
composer install
```

#### 1. 初始化
---

```
yii init
```

#### 3. 导入表结构(migration)
---

需先修改数据库配置信息(否则会报错)

- 导入数据库表

```
yii migrate 
```