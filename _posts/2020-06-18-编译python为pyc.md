---
layout: post
title:  "python编译为pyc"
date:   2020-06-18 14:00:00 +0800
tags: python complie
categories: Tech
---



```bash
#递归编译当前目录下的所有code为pyc，-b表示在原位置生成，不放到pycache里
python3 -m compileall -b ./
#删除掉所有的py文件
find . -name “*.py” |xargs rm -rf
#删除掉换成文件
find . -name “pycache” |xargs rm -rf
```

