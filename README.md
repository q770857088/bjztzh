


# Company-Website

[![](https://img.shields.io/badge/release%20date-2018--01--25-lightgray.svg)](https://github.com/FantasticLBP/Company-Website) [![Build status](https://img.shields.io/badge/building-passing-brightgreen.svg)](https://github.com/FantasticLBP/Company-Website) [![Gitter](https://img.shields.io/badge/chat-weibo-orange.svg)](https://weibo.com/3194053975/profile?rightmod=1&wvr=6&mod=personinfo)

企业官方网站Pro版

![](https://github.com/FantasticLBP/Company-Website/raw/master/snapshot/1.png)




## 特色

- :gem: **响应式布局**: 使用了BootStarp作为UI基础
- :triangular_ruler: **跨平台**: PHP作为后端开发语言
- :rocket: **安全**: PDO、关键信息配合数据加密操作
- :iphone: **响应式布局**: 使用了BootStarp作为UI基础
- :art: **UI美观大方**: 自己设计的UI，简洁大方
- :globe_with_meridians: **前后端分离**: 前后端分离，前端通过接口访问并处理数据
- :gear: **REST风格的API**: 自己基于PDO封装的数据库操作类以及数据处理类，方便滴制作出REST风格的API


## 封装代码

```
//数据操作
 <?php
//header('content-type:text/html;charset=utf-8');
class PdoMySQL{
	public static $config=array();//设置连接参数，配置信息
	public static $link=null;//保存连接标识符
	public static $pconnect=false;//是否开启长连接
	public static $dbVersion=null;//保存数据库版本
	public static $connected=false;//是否连接成功
	public static $PDOStatement=null;//保存PDOStatement对象
	public static $queryStr=null;//保存最后执行的操作
	public static $error=null;//报错错误信息
	public static $lastInsertId=null;//保存上一步插入操作产生AUTO_INCREMENT
	public static $numRows=0;//上一步操作产生受影响的记录的条数
	/**
	 * 连接PDO
	 * @param string $dbConfig
	 * @return boolean
	 */
	public function __construct($dbConfig=''){
		if(!class_exists("PDO")){
			self::throw_exception('不支持PDO，请先开启');
		}
		if(!is_array($dbConfig)){
			$dbConfig=array(
					'hostname'=>DB_HOST,
					'username'=>DB_USER,
					'password'=>DB_PWD,
					'database'=>DB_NAME,
					'hostport'=>DB_PORT,
					'dbms'=>DB_TYPE,
					'dsn'=>DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME
			);
		}
		if(empty($dbConfig['hostname']))self::throw_exception('没有定义数据库配置，请先定义');
		self::$config=$dbConfig;
		if(empty(self::$config['params']))self::$config['params']=array();
		if(!isset(self::$link)){
			$configs=self::$config;
			if(self::$pconnect){
				//开启长连接，添加到配置数组中
				$configs['params'][constant("PDO::ATTR_PERSISTENT")]=true;
			}
			try{
				self::$link=new PDO($configs['dsn'],$configs['username'],$configs['password'],$configs['params']);
			}catch(PDOException $e){
				self::throw_exception($e->getMessage());
			}
			if(!self::$link){
				self::throw_exception('PDO连接错误');
				return false;
			}
			self::$link->exec('SET NAMES '.DB_CHARSET);
			self::$dbVersion=self::$link->getAttribute(constant("PDO::ATTR_SERVER_VERSION"));
			self::$connected=true;
			unset($configs);
		}
	}

	/**
	 * 得到所有记录
	 * @param string $sql
	 * @return unknown
	 */
	public static function getAll($sql=null){
		if($sql!=null){
			self::query($sql);
		}
		$result=self::$PDOStatement->fetchAll(constant("PDO::FETCH_ASSOC"));
		return $result;
	}
	/**
	 * 得到结果集中的一条记录
	 * @param string $sql
	 * @return mixed
	 */
	public static function getRow($sql=null){
		if($sql!=null){
			self::query($sql);
		}
		$result=self::$PDOStatement->fetch(constant("PDO::FETCH_ASSOC"));
		return $result;
	}
	/**
	 * 根据主键查找记录
	 * @param string $tabName
	 * @param int $priId
	 * @param string $fields
	 * @return mixed
	 */
	public static function findById($tabName,$priId,$fields='*'){
		$sql='SELECT %s FROM %s WHERE id=%d';
		return self::getRow(sprintf($sql,self::parseFields($fields),$tabName,$priId));
	}
  ...
  
  //接口制作
  <?php

class Response {
    const JSON = "json";
    /**
     * 按综合方式输出通信数据
     * @param integer $code 状态码
     * @param string $message 提示信息
     * @param array $data 数据
     * @param string $type 数据类型
     * return string
     */
    public static function show($code, $message = '', $data = array(), $type = self::JSON) {
        if(!is_numeric($code)) {
            return '';
        }
        //$type = isset($_GET['format']) ? $_GET['format'] : self::JSON;
        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data,
        );

        if($type == 'json') {
            self::json($code, $message, $data);
            exit;
        } elseif($type == 'array') {
            var_dump($result);
        } elseif($type == 'xml') {
            self::xmlEncode($code, $message, $data);
            exit;
        } else {
            // TODO
        }
    }
    /**
     * 按json方式输出通信数据
     * @param integer $code 状态码
     * @param string $message 提示信息
     * @param array $data 数据
     * return string
     */
    public static function json($code, $message = '', $data = array()) {

        if(!is_numeric($code)) {
            return '';
        }

        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data
        );

        echo json_encode($result);
        exit;
    }

    /**
     * 按xml方式输出通信数据
     * @param integer $code 状态码
     * @param string $message 提示信息
     * @param array $data 数据
     * return string
     */
    public static function xmlEncode($code, $message, $data = array()) {
        if(!is_numeric($code)) {
            return '';
        }

        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data,
        );

        header("Content-Type:text/xml");
        $xml = "<?xml version='1.0' encoding='UTF-8'?>\n";
        $xml .= "<root>\n";

        $xml .= self::xmlToEncode($result);

        $xml .= "</root>";
        echo $xml;
    }

    public static function xmlToEncode($data) {

        $xml = $attr = "";
        foreach($data as $key => $value) {
            if(is_numeric($key)) {
                $attr = " id='{$key}'";
                $key = "item";
            }
            $xml .= "<{$key}{$attr}>";
            $xml .= is_array($value) ? self::xmlToEncode($value) : $value;
            $xml .= "</{$key}>\n";
        }
        return $xml;
    }
}
?>
```


## 使用

```
1、下载或者clone工程到本地
2、修改数据库配置文件 config.php 
3、新建数据库 **db_cro**
4、将数据表导入并执行
5、预览查看效果并修改成自己需要的版本
```


## 主要功能

```
1、用户注册，填写邮箱 -> 登录邮箱点击链接激活账号 -> 登录
2、查看官网信息。具备多设备适配、图片预览
3、查看产品，根据不同检索条件查找，下单
4、完善收货地址
5、查看订单
6、公司招聘信息、FQA、位置、公司新闻、行业新闻、联系我们等诸多功能
8、前端网站界面均可在后端可视化界面操作配置
```

## 演示视频

[演示视频](https://weibo.com/tv/v/HlPeb7gr8?fid=1034:4352016257099164)


## 联系
如果觉得项目对你有帮助，请给个star。代码部分开源，如果用于商业用途或者技术咨询服务，想获取全部代码请联系本人。
技术领域包括：iOS、Web、爬虫、反爬虫等领域。如果想要个人成长交流或者技术交流也可以联系我（虽然本人也是一名low比 iOS资深工程师）。

- 微信：704568245
- [新浪微博](http://weibo.com/u/3194053975)
- QQ技术交流群：515066271
- 近期本人的邮箱收到腾讯发给我一些邮件，大体意思是我的邮件没有发出去。我想做一些声明，这个原因肯定是大家下载了我的项目代码使用了通过邮件激活账号的功能，由于之前在代码中使用的是我本人的QQ邮箱账号和密码，但是最近我修改了我的密码，所以你们发送邮件是失败的。所以你们应该在配置信息里面进行修改。



## BTW

如果觉得项目对你有帮助，请给个star。代码部分开源，如果用于商业用途或者技术咨询服务，想获取全部代码请联系本人微信：704568245。


## 交流

如果你也是大前端路上的一名修行者,可以加入微信群一起交流.

![微信群](https://raw.githubusercontent.com/FantasticLBP/knowledge-kit/master/assets/wechat_group.jpg)

