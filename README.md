## 骂人一言

> 骂人的一言api和调用页面

### 魔改特点

整合了https://github.com/Oohuo/rubbish 和https://github.com/pokemonchw/Dirty 的记录，并且具有如下特性。做了数据分级，有
- 做了数据分级，普通等级`common`，礼貌用语`qiu`，骂娘等级`yang`。示例 https://act.jiawei.xin:10086/lib/api/maren.php?catalog=yang
- api支持返回纯文本，json，js，默认返回纯文本
- api支持返回utf8,或者gbk2312，默认为utf8
- 无数据库，无数据存储，只有三个文件
- qq应用和微信应用内拒绝打开，提示跳转到浏览器

> Github打包下载 `git clone https://github.com/xinjiawei/maren.git`

