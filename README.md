# 股票数据对比系统
      此系统使用ThinkPHP框架搭建，选取了通联股票数据，新浪股票数据以及阿里云上西安网极股票数据进行展示，由于股票数太多，则此系统仅挑选了平安银行、南京公用、顺发恒业、北方稀土、航天信息、时代出版进行展示对比。

# 注意事项
      1、通联数据需要账户token，将你的token放在Application/Home/Controller下Index控制器文件中的wmCloudSharesApi()接口中，里面存在注释已经标注你的token位置；
      2、网极科技数据需要appcode,同样的在Application/Home/Controller下Index控制器文件中的aliYunSharesApi()