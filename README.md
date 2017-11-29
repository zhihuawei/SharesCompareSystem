# 股票数据对比系统

此系统使用ThinkPHP框架搭建，选取了通联股票数据，新浪股票数据以及阿里云上西安网极股票数据进行展示，由于股票数太多，则此系统仅挑选了平安银行、南京公用、顺发恒业、北方稀土、航天信息、时代出版进行展示对比。


# 注意事项

1、通联数据需要账户token，将你的token放在Application/Home/Controller下Index控制器文件中的wmCloudSharesApi()接口中，里面存在注释已经标注你的token位置；

2、网极科技数据需要appcode,同样的在Application/Home/Controller下Index控制器文件中的aliYunSharesApi()接口中，已标注好位置，appcode的获取方法可以访问：[https://market.aliyun.com/products/57000002/cmapi022297.html?spm=5176.2020520132.101.6.yDGEm1#sku=yuncode1629700000](https://market.aliyun.com/products/57000002/cmapi022297.html?spm=5176.2020520132.101.6.yDGEm1#sku=yuncode1629700000)；

3、新浪股票数据是免费的，故不需要其他的什么设置；

4、三个股票数据我设置的都是每秒进行请求刷新，如要修改，可在Application/Home/View/Index文件夹下的模板进行定时器的修改。

# 效果图

![输入图片说明](https://gitee.com/uploads/images/2017/1129/164210_3bb56805_880238.png "12345678.png")