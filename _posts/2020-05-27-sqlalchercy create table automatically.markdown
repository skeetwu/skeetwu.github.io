---
layout: post
title:  "sqlalchercy can not create table automatically"
date:   2020-05-27 11:14:40 +0800
tags: sqlalchercy 无法自动创建表
categories: Tech
---

按照教程书写python的定义表的model文件，正常情况下是没有问题，能自动映射成数据库里的表，但是有一种情况就是无法生成。

例如下面的代码的路径是，ssms/utils/db_tool.py

```py
# -*- coding: utf-8 -*-


from contextlib import contextmanager

from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker

from ssms.utils.db_setting import SSMS_DB_Base

SQLALCHEMY_DATABASE_URI = 'sqlite:///db/accounts.db'

engine = create_engine(SQLALCHEMY_DATABASE_URI, echo=True)  # Connect to database
# engine = create_engine(SQLALCHEMY_DATABASE_URI)  # Connect to database
SSMS_DB_Base.metadata.create_all(engine)  # Create models


@contextmanager
def session_scope():
    """Provide a transactional scope around a series of operations."""
    s = sessionmaker(bind=engine)()
    s.expire_on_commit = False
    try:
        yield s
        s.commit()
    except:
        s.rollback()
        raise
    finally:
        s.close()

```

所有的model的文件的路径是ssms/beans/*.py

然后就会发现，有些表可以映射，有些表无法映射，非常之奇怪。最后猜测是python的文件加载顺序导致的，所以在每个model和db_tool.py里加了一个print 命令打印点东西到控制台，证实在db_tool.py前加载的都可以映射，在后面加载的就没法映射的了，那么如何解呢？

在ssms/utils/__init__.py文件里全部import一遍所有的model，那么这样就能保证在ssms/utils/目录下，加载db_tool.py之前所有的model都被加载好了，这样就可以全部映射了。

亲测好用！

