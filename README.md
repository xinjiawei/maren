## 骂人一言

### 简单嘴臭,极致享受
> 对网友及其亲人的问候语，大约6万条。~~说脏话，骂人的一言api和调用页面~~
> 调用页面 https://cf.mb6.top/lib/api/index1.php 

### 魔改特点
整合了https://github.com/Oohuo/rubbish 和https://github.com/pokemonchw/Dirty 的记录，并且具有如下特性。做了数据分级，有
- 做了数据分级，普通等级`common`，礼貌用语`qiu`，骂娘等级`yang`(数量最多)，不加参数默认是`common`。调用示例 https://cf.mb6.top/lib/api/maren.php?catalog=yang
- api支持返回纯文本，`json`，`js`，不加参数默认返回纯文本。调用示例 https://cf.mb6.top/lib/api/maren.php?format=json
- api支持返回utf8,或者gbk2312，不加参数默认为utf8。调用示例 https://cf.mb6.top/lib/api/maren.php?charset=gbk2312
- 无数据库，无数据存储，只有三个文件
- qq应用和微信应用内拒绝打开，提示跳转到浏览器

> Github打包下载 `git clone https://github.com/xinjiawei/maren.git`
> php7以上
