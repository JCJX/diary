<?php
/*
php变量，变量名必须以字母或者下划线开头，如果以数字开头是不对的，变量名可以保护汉字，比如$name名字，
变量不能有空格，变量单词可以用下划线分割，或者以大写字母开头比如 $myApple，俗称骆驼式命名法（也称驼峰命名法），
变量是区分大小写的，所以大小写不同的相同变量为两个变量，$号定义变量 字符串用""包围 整形直接输入数字
首先定义一个变量叫myage,然后进行输出变量

$myAge =20;
echo "我的年龄是";
echo $myAge ;
echo '<hr/>';


var_dump可以把自定义的变量的数据类型给打印出来，以下输出了结果，为int（整形）

var_dump($myAge);
echo '<hr/>';


使用memory_get_usage来获取当前php消耗的内存（不同的变量输出的内存都不相同）

echo $m1 = memory_get_usage(); //初始化消耗的内存
echo "<br />";
$var_string ="学习";//字符串
echo $m2 = memory_get_usage()-$m1; //字符串消耗的内存
echo "学习两字消耗的内存<br />";
$n =123;//整形
echo $m3 = memory_get_usage()-$m1-$m2; //整形消耗的内存
echo "<br />";
$f =123.00;//浮点型
echo $m4 = memory_get_usage()-$m1-$m2-$m3; //浮点型消耗的内存和整形相等
echo "<br />";
$var_array =array("123");//数组
echo $m5 = memory_get_usage()-$m1-$m2-$m3-$m4; //数组消耗的内存
echo '<hr/>'



变量可以进行重新定义，以下的例子就把字符串变数字

$myAge ="二十";
var_dump($myAge);
echo "<br/>";
$myAge =20;
var_dump($myAge);
echo "<br/>";




布尔值的判断，如果在语句中出现判断，则转换的输出标量为布尔型

$HisAge =20;
$myAge =20;
$compare = ($HisAge == $myAge);
echo $compare;
echo "<br />";
var_dump($compare);//判断不等于，结果为false



整型（integer）：类似于常见的整数。它可以用十进制、八进制、十六进制指定。
十进制就是日常使用的数字；八进制，数字前必须加上“0”(这个0是阿拉伯数字0，可不是
英文字母“欧”哦)；十六进制，数字前必须加“0x”如下输出整型的类别

$integ1 =40;
echo $integ1;
echo "<br />";
$integ2 =-40;
echo $integ2;
echo "<br />";
$integ3 =040;
echo $integ3;
echo "<br />";
$integ4 =0x40;
echo $integ4;
echo "<br />";



浮点型可以用小数点和科学计数法来表示（计数法的E和e大小写都可以），如$cells =4.40   $cells =44.0e3
$cells=4.0E-10

$cells1=4.40;
echo $cells1;
echo "<br />";
$cells2=44.0e3;
echo $cells2;
echo "<br />";
$cells3=4.0E-3;
echo $cells3;
echo "<br />";


字符串可以以单引号形式、双引号形式和Heredoc结构形式来定义。

$str_age1 = '他今年20岁';
$str_age2 ="他今年18岁";
echo $str_age1;
echo "<br />";
echo $str_age2;


字符串单引号内可以嵌入双引号，双引号内也能嵌入单引号，也能插入转义符\
$str_string1 ='甲问:"你学PHP？"';
$str_string2 ="乙毫不犹豫地回答：'当然是！'";
$str_string3 ='甲问:\'能告诉我网址吗？\'';
$str_string4 ="乙答道:\"www.123456.win\"";
echo $str_string1;
echo "<br />";
echo $str_string2;
echo "<br />";
echo $str_string3;
echo "<br />";
echo $str_string4;
echo "<br />";


当双引号中包含变量时，变量会与双引号中的内容连接在一起；
当单引号中包含变量时，变量会被当做字符串输出。（在单引号中变量会转换为字符串）

$love = "I love you!";
$string1 = "我,$love";
$string2 = '我,$love';
echo $string1;
echo "<br />";
echo $string2;


变量字符串过长可以用Heredoc结构形式的方法来解决该问题，首先使用定界符表示字符串（<<<），
接着在“<<<“之后提供一个标识符MHY，然后是字符串，最后以提供的这个标识符结束字符串

$string1=<<<MHY
我有一只小毛驴，我从来也不骑。
有一天我心血来潮，骑着去赶集。
我手里拿着小皮鞭，我心里正得意。
不知怎么哗啦啦啦啦，我摔了一身泥.
MHY;
echo $string1;


资源是由专门的函数来建立和使用的，例如打开文件、数据连接、图形画布。我们可以对资
源进行操作（创建、使用和释放）。任何资源，在不需要的时候应该被及时释放。如果我们
忘记了释放资源，系统自动启用垃圾回收机制，在页面执行完毕后回收资源，以避免内存被消耗殆尽。
$a = fopen("打开文件根目录","r");//打开文件

$b = fgets($a);//读取文件中的内容

$c = fclose($a);//关闭文件
首先采用“fopen”函数打开文件，得到返回值的就是资源类型。

$file_handle = fopen("unload/t.txt","r");
if ($file_handle){
    //接着采用while循环（后面语言结构语句中的循环结构会详细介绍）一行行地读取文件，然后输出每行的文字
    while (!feof($file_handle)) { //判断是否到最后一行
        $line = fgets($file_handle); //读取一行文本
        echo $line; //输出一行文本
        echo "<br />"; //换行
    }
}
fclose($file_handle);//关闭文件


php空类型，null对大小写不敏感，null类型取值只有一个，表示该变量没有值，，当被赋值为NULL，
或者尚未被赋值，或者被unset()，这三种情况下变量被认为是NULL，以下情况输出的值全为NULL。

error_reporting(0);//禁止限时php警告
$mhy;
var_dump($mhy);
$mhy1 =null;
var_dump($mhy1);
$mhy2 =NULL;
var_dump($mhy2);
$mhy3 ="这里是字符";
unset($mhy3);
var_dump($mhy3);

常量：
常量可以理解为值不变的量（如圆周率）；或者是常量值被定义后，在脚本的其他任何地方都不可以被改变。
PHP中的常量分为自定义常量和系统常量
自定义常量是根据我们开发的需要，而定义的常量，它通过使用PHP中的函数define()定义。
下面定义一个常量

$ass ="PIGU";//变量ass=PIGU
define("PI",4.44);//define PI的值为4.44
define($ass,4.44);//define ass的值为4.44
echo PI;//输出常量PI为4.44
echo "<br />";
echo PIGU;//输出常量PIGU为4.44



常量主要功效是可以避免重复定义，篡改变量值。在我们进行团队开发时，或者代码量很大的时候，
对于一些第一次定义后不改变的量，如果我们使用变量，在不知情的情况下，使用同一变量名时，
变量值就会被替换掉，从而会引发服务器执行错误的任务。
此外，使用常量还能提高代码的可维护性。如果由于某些原因，常量的值需要变更时候，
我们只需要修改一个地方。例如在做计算中，起初我们取圆周率为3.14，于是很多计算中
我们都使用3.14进行计算，当要求计算精度提高，圆周率需要取3.142的时候，我们不得不
修改所有使用3.14的代码，倘若代码量比较多时，不仅工作量大，还可能遗漏。
利用常量进行计算

define("PI",4.44);
$bi=3;
echo "污值为：".(PI*$bi*$bi)."<br />";
echo "激活度: ".(2*PI*$bi)."<br />";//常量可以用来作为任何运算中的单位



常量取值 ，使用该函数 mixed constant(string constant_name)示例如下

$p="";
//定义圆周率的两种取值
define("PI1",3.14);
define("PI2",3.142);
//定义值的精度
$height = "中";
//根据精度返回常量名，将常量变成了一个可变的常量
if($height == "中"){
    $p = "PI1";
}else if($height == "低"){
	$p = "PI2";
}
$r=1;
$area=constant($p)*$r*$r;//constant($p)顺利取出常量的值
echo $area;//输出值


defined()函数可以帮助我们判断一个常量是否已经定义
它只有参数constant_name，指的是要获取常量的名称，若存在则返回布尔类型true，
否则返回布尔类型false

define("PI1",3.14);//定义了一个常量
$p = "PI1";//变量赋值
$is1 = defined($p);//判断常量是否被定义
$is2 =defined("PI2");//判断常量是否被定义
var_dump($is1);//输出类型结果
var_dump($is2);//输出类型结果


运算符学习，在变量中可以使用各种算术运算符来进行计算

$english = 110; //英语成绩
$math= 118; //数学成绩
$biological = 80; //生物成绩
$physical = 90; //物理成绩
$sum = $english+$math+$biological+$physical;
$avg = $sum / 4;
$x = $math - $english;
$x2 = $english * $english;
echo "总分:".$sum."<br />";
echo "平均分:".$avg."<br />";
echo "数学比英语高的分数:".$x."<br />";
echo "英语成绩的平方:".$x2."<br />";


赋值运算符“=”：把右边表达式的值赋
给左边的运算数。它将右边表达式值复制一份，交给左边的运算数
。换而言之，首先给左边的运算数申请了一块内存，然后把复制的值放到这个内存中。
“&”：引用赋值，意味着两个变量都指向同一个数据。它将使两个变量共享一
块内存，如果这个内存存储的数据变了，那么两个变量的值都会发生变化

$a= "我的第一个变量";
$b= "我的第二个变量";
$b =$a;
$c =&$a;
echo $b."<br />";//$b是$a复制的值，之后$a怎么变，$b都不变化。$c和$a指向同一个内存，$a变化，对应内存值也变化，$c也变化。
echo $c."<br />";


比较运算符
==和===，区别在于是否严格等于，!=和！===，区别也在于是否严格不等于
重点：（1）全等要数值上等而且数据类型上也要等，1 === “1”是错误的。
（2）非全等，就是在数值上不等于或者类型上不等于，或者两者上都不等于
就返回true，即两者有一种不相等就是非全等。等于、非全等、全等。
== 等于
=== 全等
!= 不等
<> 不等
!== 非全等
> 大于
< 小于
<= 小于等于
>= 大于等于


(“?:”)三元运算符也是一个比较运算符，对于表达式(expr1)?(expr2):(expr3)，
如果expr1的值为true，则此表达式的值为expr2，否则为expr3

$a = 78;//成绩
$b= $a >=80?"及格":"不及格";
echo $b;


逻辑运算符
And(逻辑与），都为TRUE，返回TRUE
Or（逻辑或），任一为TRUE，返回TRUE（or只要满足一个条件以上即可条件成立，xor只能有一个条件满足时，条件才成立；）
Xor（逻辑异或），有且仅有一个为TRUE，返回TRUE
!（逻辑非），将true变false，将false变true
&&（逻辑与），都为TRUE，返回TRUE
1、逻辑与：要求所有人都投票同意，才会通过某协议；
2、逻辑或：只要求一个人投票同意就行；
3、逻辑异或：只能有且只能有一个人投票同意；
4、逻辑非：某个人要反对，但是通过逻辑非，使其反对无效

$a = TRUE; //A同意
	$b = TRUE; //B同意
	$c = FALSE; //C反对
	$d = FALSE; //D反对
	//咱顺便复习下三元运算符
	echo ($a and $b)?"通过":"不通过";
	echo "<br />";
	echo ($a or $c)?"通过":"不通过";
	echo "<br />";
	echo ($a xor $c xor $d)?"通过":"不痛过";
	echo "<br />";
  echo !$c?"通过":"不通过";
	echo "<br />";
	echo $a && $d ?"通过":"不通过";
	echo "<br />";
  echo $b || $c || $d?"通过":"不通过";


连接运算符(“.”)：它返回将右参数附加到左参数后面所得的字符串。
连接赋值运算符(“.=”)：它将右边参数附加到左边的参数后。
$a = "先生";
  $tip=$a.",您在学习PHP！";
  $b = "东边日出西边雨";
  $b .="道是无晴却有晴";
	$c = "东边日出西边雨";
  $c = $c."道是无晴却有晴";
	echo  $tip."<br />";
	echo  $b."<br />";
	echo  $c."<br />";


PHP中的错误控制运算符PHP中提供了一个错误控制运算符“@”，对于一些可能会在运行过程中出
错的表达式时，我们不希望出错的时候给客户显示错误信息，这样对用户不友好。于是，可以
将@放置在一个PHP表达式之前，该表达式可能产生的任何错误信息都被忽略掉；
如果激活了track_error（这个玩意在php.ini中设置）特性，表达式所产生的任何错误
信息都被存放在变量$php_errormsg中，此变量在每次出错时都会被覆盖，所以如果想用它的话必须尽早检查。
需要注意的是：错误控制前缀“@”不会屏蔽解析错误的信息，不能把它放在函数或类的定
义之前，也不能用于条件结构例如if和foreach等.

$conn=@mysql_connect("localhost","username","password");
 echo "出错了，错误原因是：数据库连接失败".$php_errormsg;//以上就是可以自定义错误信息的返回结果


 php的取模运算，取模=取余数，使用%号来进行取模，如下 
  $maxLine = 4; //每排人数
  $no = 17;//学生编号
  $line = ceil($no/$maxLine);//17除以4用ceil()向上取整
  $row = $no%$maxLine?$no%$maxLine:$maxLine;//多元运算条件 ? 结果1 : 结果2 ，百分比号%为取模(取余数)
  echo "编号<b>".$no."</b>的座位在第<b>".$line."</b>排第<b>".$row."</b>个位置";

$no%$maxLine ? 1 $no%$maxLine:③$maxLine ①.取余操作，如果整除则为false，
有余数即为 true，所以 当整除时则输出结果为③，有余数则输出为②。

PHP-顺序结构就像一条直线，按着顺序一直往下执行。我们编写的代码默认都是按照顺序结构执行的。


php的条件结构语句，if else 的代码为条件，服务器干的任务a 服务器干的任务b，假设
条件成立，则执行任务a ，条件不成立则执行任务b ，条件返回的值为布尔值

date_default_timezone_set('Asia/ShangHai');
    $today = date('m-d',time());//获取当天日期
	$birthday = "02-23";//生日
	$money = 238;//消费金额
	$discount = 0.8;//八折优惠
	if($today==$birthday){//判断日期和生日是否相等
	    $money =$money*$discount;//相等的话执行任务a
	}else{
	    $money =$money*1;//不等的话执行任务b
	}
	echo $money;//输出


if else if 通过条件一判断，若返回值为布尔值为TRUE，则执行任务A，若返回值为FALSE，
则判断条件二，若返回值为布尔值TRUE，则执行任务B，否则既不执行任务A，也
不执行任务B。服务器会继续往下执行其他任务。

$totalMoney = 0;//总工资
    $basicMoney =  2000;//基本工资
	$sex = "男";
		if($sex == "男"){    //条件1
            	$totalMoney = $basicMoney  + 0;// 任务1男的没奖金
	}else if($sex == "女"){   //条件2
		$totalMoney = $basicMoney  + 300;// 任务2女的有奖金300元
	}
	echo $totalMoney;
   

if  else if   else 通过条件一判断，若返回值为布尔值TRUE，则执行任务A，
若返回值为FALSE，则判断条件二，若返回值为布尔值TRUE，则执行任务B，否则既
不执行任务A，也不执行任务B,执行任务C。

date_default_timezone_set('asia/shanghai');
$week = date("w");//获取当天星期几
$info = "";//提示信息
    if($week == 1){     //条件1
        $info = "上午有课";//任务1
    }else if($week==4){//条件2
	$info = "下午有课";	//任务2
    }else{
    $info = "今天没课";//任务3
}
   echo $info; //输出提示信息



条件结构 switch  case 首先判断条件，若条件的返回值为条件值一，则执行任务一，若条
件返回的值为条件值二，则执行任务二，若条件的返回值既不是条件值一也不是条件
值二，则执行默认任务。break的作用是结束switch，使
用 switch 语句可以避免冗长的 “if..else if..else”代码块。

$num = rand(1,50);//获取1至50的随机数
$info = "";//提示信息
switch($num){
    case 1;  //1为当前的条件值
		$info = "恭喜你！中了一等奖！";//任务1
		break;
	case 2;  //条件2
		$info = "恭喜你！中了二等奖！";//任务3
		break;
 	case 3;  //条件3
		$info = "恭喜你！中了三等奖！";//任务3
		break;
	default;//默认
		$info = "很遗憾！你没有中奖！";//默认任务
    }
 echo $info; //输出是否中奖



break的作用是阻止代码进入下一个case 中继续执行
通过A例子有break和B例子没有break可以很明显地看出它的作用。
//A例子

$num = 2;
$sum  = 10; 
switch($num){  //num=2所以从第二个case 2开始执行
    case 1:
		$sum = $sum  + 1;
		break;
	case 2:
		$sum = $sum  + 2; //所以最后sum的值为10+2=12
		break;
 	case 3:
		$sum = $sum  + 3;
		break;
	default:
		$sum = $sum  + 4;
}
 echo "A例子的值是：".$sum."<br />";
//B例子
$num = 2;
$sum  = 10; 
switch($num){ //num=2所以从第二个case 2开始执行
	case 1:
		$sum = $sum  + 2;
	case 2:
		$sum = $sum  + 2;
	case 3:
		$sum = $sum  + 2;
	default:
		$sum = $sum  + 2;//因为第二个没有用break停止所以执行到最后sum的值为10+2*3=16
}
 echo "B例子的值是：".$sum."<br />";



PHP中循环结构之while循环语句
首先判断某个条件是否符合（条件返回值是否为TRUE），若符合则执行任务，
执行完毕任务，再判断条件是否满足要求，符合则重复执行此任务，否则结束任务。
$sum = 12;//小宠物当前的饥饿程度
echo "我饿啦:-(";
echo "<br />";
while($sum < 100){ //如果，小宠物的饥饿程度到100，表示小宠物吃饱啦,不用继续喂了，没吃饱继续喂食
    $num = rand(1,20);//随机数，模拟喂食小宠物的小面包
	$sum = $sum + $num; //小宠物吃小面包
	echo "我还没吃饱呢！";
	echo "<br />";
}
echo "终于吃饱啦^_^";



 PHP中循环结构之do while循环语句首先执行任务，执行任务完毕，判断某个条件是否符合
 （条件返回值是否为TRUE），若符合则再次执行任务，执行完毕任务，继续判定条件。 
$i =  1 ; //从第1圈开始跑
do{  //
    echo "在跑第".$i."圈。";
	$i++;//以每次+1圈来跑
}while($i<=10);//条件跑10圈



while与do…while循环语句的区别是，while先判断条件是否成立，
后执行循环，do...while先执行一次任务，再判断是否继续执行循环，
也就是说do...while至少会执行一次任务。当条件为FALSE时，while中的任务会一次也不执行，
do...while中的任务会执行1次。
    //A例子
	$num = 2;
	$sum  = 10; 
	while($num>3){  //num>3所以不执行循环，任务也不执行
		$sum = $sum  + 10;
	}
	echo "A例子的结果：".$sum."<br />";  //输出sum=10，以上任务失效
	//B例子
	$num = 2;
	$sum  = 10;			
	do{
		$sum = $sum  + 10;  //首先执行循环任务，sum=20
	}while($num>3); //判断循环值为false，则不继续执行
	echo "B例子的结果：".$sum."<br />"; //输出结果为20

    

    while和do...while可以根据具体情况选用。假设有一种棋类游戏，
    首先掷骰子，若不为6，前进骰子的点数的步长；若为6，前进骰子的点数的步长，并可以再掷一次。

     //while例子
	$sum  = 0; 
	$num = rand(1,6); //获取1至6的随机数，模拟掷骰子
	$sum = $sum  + $num;//前进步长
	while($num==6){
		$num = rand(1,6);//获取1至6的随机数，模拟掷骰子
		$sum = $sum  + $num;//前进步长
	};
	echo "while例子执行完毕，前进：".$sum ."<br />";
	//do...while例子
	$sum  = 0; 
	do{
		$num = rand(1,6);//获取1至6的随机数，模拟掷骰子
		$sum = $sum  + $num;//前进步长
	}while($num==6);
	echo "do...while例子执行完毕，前进：".$sum ."<br />";



 PHP for 循环for 语句中，“初始化”在循环开始前无条件求值一次，
 “循环条件”在每次循环开始前求值。如果值为 TRUE，则继续循环，
 执行循环体语句（执行任务）。如果值为 FALSE，则终止循环。“递增项”在每次循环之
 后被求值（执行）。其常用于循环执行代码块指定的次数。

 我们要计算从1加到100的和。首先初始化一个递增变量为1，及初始化累加和为0，
 接着设置循环条件是变量是否小于等于100，小于100执行任务累加求和，递增项为变量递增1。
 
for($first=1,$next=0;$first<=100;$first++){  //从1开始累加，初始值为0，条件为等或小于100，以1的进制向上加
	$next=$first+$next;
}
    echo $next;

$i =  1 ; // 从1开始累加
$sum = 0; //初始化和为0
while($i<=100){  //判断是否小于100
	$sum = $sum + $i; //	累加求和
	$i++; //递增1
}
echo "while语句的运行结果：".$sum."<br />" ;//输出结果



PHP中foreach循环语句，常用于遍历数组，一般有两种使用方式:不取下标、取下标

$students = array( //定义数组列表
	'1'=>'苹果',
	'2'=>'梨子',
	'3'=>'橘子',
);
foreach($students as $key)  //任务是输出$key =水果
{
	echo $key."<br />";  //输出了$key 完成任务
}



以下例子完成了同时输出编号和水果
$students = array(
    '1'=>'苹果',
	'2'=>'梨子',
	'3'=>'橘子',
);
foreach($students as $key => $v)
{
	echo $key.":".$v."<br/>";
}



php的数组定义，如何索引数组中的关联  是以0开始计数的，如下输出结果为梨子

$first = array("苹果","梨子","句子");
//               0      1      2
print_r($first[1])



索引数组赋值有三种方式:
1.array[0]='苹果';
2.$arr=array('0'=>'苹果');
3.$arr=array('苹果');
如下：
$arr[0]="苹果";
if( isset($arr) ) {print_r($arr);}


范围索引的数组内容如下

$arr = array('苹果','香蕉');
print_r($arr[1]);   //从数组变量$arr中，读取键为1的值
if( isset($arr0) ) {print_r($arr0);}



使用for循环来输出数组的值如下：
$fruit=array('苹果','梨子','橘子');  //定义三个键值
for($index=0; $index<3; $index++){   //从0开始 ，一直循环到3，以1来增递
    echo '<br>数组第'.$index.'值是：'.$fruit[$index];    //以变量[变量]来输出数组值
}



使用了foreach循环语句来遍历了数组，如下
$fruit=array('苹果','香蕉','菠萝');
foreach($fruit as $key=>$v){
    echo '<br>第'.$key.'值是：'.$v;
}


数组类型有两种，一种为关联数组，一种为索引数组，如下为关联数组

$fruit=array(
    'orange'=>'橘子',
    );


关联数组赋值有两种方式:
第一种：用数组变量的名字后面跟一个中括号的方式赋值，当然，关联数组中，中括号内的键一定是字符串。
比如，$arr['apple']='苹果';
第二种：用array()创建一个空数组，使用=>符号来分隔键和值，左侧表示键，右侧表示值。
当然，关联数组中，键一定是字符串。
比如，array('apple'=>'苹果');
*/



/*
php的自定义函数
函数结构和系统函数不同
可以用function_exists来验证自定义函数是否和系统及其当前所定义的所有函数有过重合

function firstname()
 {
    echo "first function";
 }
    echo "this is my ";
    firstname();
    echo '<hr/>';

以上输出了自定义函数firstname
接下来开始用if语句function_exists来验证

if(function_exists('firstname')){
    echo "true.<br/>";
} else {
    echo "false.<br/>";
}
    echo '<hr/>';

以上if语句内判定是否存在该函数，并将结果转换为布尔值
以上是存在的，所以输出的语句是true



PHP的函数可以没有参数，也可以有若干个参数，多个参数称之为参数列表，
采用逗号进行分割，参数类似于一个变量，调用时用来传递数据到函数体中。
通过传递参数可以使函数实现对参数的运算，得到我们想要的结果。
参数的变量名可以自由指定，但最好能够表达相关的意思，常用的设定参数的方法为：

function sum($a, $b) {  //定义参数
    return $a+$b;   //参数运算
}
sum(2,3);//计算后值为5


PHP的内置函数，如下图例，将苹果变为香蕉
$str ="苹果很好吃";
$str =substr_replace('苹果','香蕉',$str);
echo $str;



判断函数是否存在 method_exists  function_exists
类是否定义可以使用class_exists
文件是否存在file_exists  等  语句如下
function frist(){
     echo '存在';
} $name='frist';
if(function_exists('frist'))
{
       $name();
}else{
	echo '不存在';
}                //以上输出结果为存在




PHP的类与面向对象，类是一类东西的结构描述，而对象则是一类东西的一个具体实例，
例如水果这个名词可以理解为水果的总类，但一个苹果则是一个具体的水果对象。
在类中定义的变量称之为属性，通常属性跟数据库中的字段有一定的关联，因此也可以称作“字段”。
属性声明是由关键字 public，protected 或者 private 开头，后面跟一个普通的变量声明来组成。
属性的变量可以设置初始化的默认值，默认值必须是常量。访问控制的关键字代表的意义为：
public：公开的
protected：受保护的
private：私有的
如下
class fruit {     //定义一个类为fruit
	public $apple ='水果';  //定义一个变量=对象
	protected $food='面条';    //定义一个受保护的对象
	private $water ='水'; //定义一个私有的对象
	function getapple(){    
		return $this->apple;
	}
}
$fruit= new fruit(); //实例化水果这个对象
$fruit -> apple = '苹果';   //设置对象的属性值    $fruint-> 变量 = 苹果
echo $fruit->getapple();   //输出这个类的对象



class Car {    //定义一个类为car
    public $speed = 0;    //建立一个公共对象speed
    //增加speedUp方法，使speed加10
    public function speedup(){
        $this -> speed +=10;    //增加speedUp方法，使speed加10
    }
}
$car = new Car();   //
$car->speedUp();
echo $car->speed;  


//使用关键字static修饰的，称之为静态方法，静态方法不需要实例化对象，可以通过类名直接调用，操作符为双冒号::。

class fruit{   //创建一个类为水果
	var $name;
	var $price;
	var $sex11;   //定义三个属性
    function __construct($name,$price,$sex11){   //构造方法参数为名字价格和个数
	$this->name =$name;
	$this->price=$price;
	$this->sex11=$sex11;  //通过构造方法传进来的各个成员属性$this->赋初始值
	}
    function say(){
	echo "水果的名字叫".$this->name."<br />"."水果的价格是".$this->price."<br />".$this->sex11."个<br />";
}    //以上即为成员的方法
    function say2(){
		echo "面条的名字叫".$this->name."<br/>";
	}

} 
$pi1= new fruit("苹果","5毛","一");   
$pi2= new fruit("梨子","五毛","二");
$pi3= new fruit("橘子","五毛","三"); //通过构造方法创建3个对象$pi1,$pi2,$pi3，分别传入三个不同的实参为名字价格和个数
//下面访问对象的三个参数
$pi1->say();
$pi2->say();
$pi3->say();   

$pi4= new fruit("泡面","素面","细面");
$pi4->say2();     //以此类推

//继续尝试，为汽车增加10倍的速度

class Car{
	public  $speed=1;
	public function speedup(){
		$this->speed +=10;
	}
}
$car = new Car();
$car->speedup();
echo $car->speed;


static静态关键词
静态属性与方法可以在不实例化类的情况下调用，直接使用类名::方法名的方式进行调用。
静态属性不允许对象使用->操作符调用

静态方法可以通过变量来进行动态调用
$func = 'getSpeed';
$className = 'Car';
echo $className::$func();  //动态调用静态方法
静态方法中，$this伪变量不允许使用。可以使用self，parent，static在内部调用静态方法与属性。
class Car {
    private static $speed = 10;
    public static function getSpeed() {
        return self::$speed;
    }
    public static function speedUp() {
        return self::$speed+=10;
    }
}
class BigCar extends Car {
    public static function start() {
        parent::speedUp();
    }
}
BigCar::start();
echo BigCar::getSpeed();

实例如下
	
class Car {
    private static $speed = 10;
    
    public function getSpeed() {
        return self::$speed;
    }
    public static function speedUp(){ //定义一个静态方法，实现速度累加10
        return self::$speed+=10;
    }
}
$car = new Car();
Car::speedUp();  //调用静态方法加速
echo $car->getSpeed();  //调用共有方法输出当前的速度值


php的访问控制关键词public，protected和private（公有、受保护、私有之一）
类中的方法可以被定义为公有、私有或受保护。如果没有设置这些关键字，则该方法默认为公有
如果构造函数定义成了私有方法，则不允许直接实例化对象了，这时候一般通过静态方法进行实例化，
在设计模式中会经常使用这样的方法来控制对象的创建，比如单例模式只允许有一个全局唯一的对象。
class Car {
    private function __construct() {
        echo 'object create';
    }

    private static $_object = null;
    public static function getInstance() {
        if (empty(self::$_object)) {
            self::$_object = new Car(); //内部方法可以调用私有方法，因此这里可以创建对象
        }
        return self::$_object;
    }
}
//$car = new Car(); //这里不允许直接实例化对象
$car = Car::getInstance(); //通过静态方法来获得一个实例


PHP的类和对象的对象继承
class Car {    //定义第一个类
    public $speed = 0; //汽车的起始速度是0
    
    public function speedUp() {  //对象的方法是速度+10
        $this->speed += 10;
        return $this->speed;
    }
}
class Truck extends Car{   //定义继承于Car的Truck类
    public function speedUp(){     //覆盖speedUp方法使速度+50
    $this->speed = parent::speedUp()+50;
}
}
$car = new Truck();
$car->speedUp();
echo $car->speed;
//说句实话学到这里我也懵懂懵懂的，先过一遍然后慢慢在继续深入理解下


PHP的字符串
字符串变量用于包含字符串的值。
一个字符串 通过下面的3种方法来定义：
1、单引号
2、双引号
3、heredoc语法结构
	实例	

$str='hello world';
$str2="hello world";
   echo $str."<br />";
   echo $str2;




PHP字符串之单引号和双引号的区别
在PHP中，字符串的定义可以使用英文单引号' '，也可以使用英文双引号" "。
但是必须使用同一种单或双引号来定义字符串，如：'Hello World"和"Hello World'为非法的字符串定义。
单引号和双引号到底有啥区别呢？
PHP允许我们在双引号串中直接包含字串变量。
而单引号串中的内容总被认为是普通字符。
$hello="world";
$str='hello $hello';  //运行结果: hello $hello
$str2="hello $hello"; //运行结果: hello world

PHP中的字符串可以使用.号来进行连接
	$hello ='hello ';	
	$world ='world';		
echo $hello.$world; //输出结果 hello world


PHP字符串以下自带函数去除字符串首尾的空格.
trim去除一个字符串两端空格。
rtrim是去除一个字符串右部空格，其中的r是right的缩写。
ltrim是去除一个字符串左部空格，其中的l是left的缩写。
函数使用方式
echo trim(" 空格 ")."<br>";
echo rtrim(" 空格 ")."<br>";
echo ltrim(" 空格 ")."<br>";
实例
$str="      左侧空格要去掉";
echo ltrim($str); //输出使用函数ltrim去除左边空格


PHP获取字符串的长度函数strlen()
	
strlen函数对于计算英文字符是非常的擅长，但是如果有中文汉字，要计算长度可以使用
mb_strlen()函数获取字符串中中文长度。实例
$str=" 我的长度是  ";
 $strl=mb_strlen($str);	
 echo $strl;	
 
 
 PHP字符串的截取
 英文字符串的截取函数substr()
函数说明：substr(字符串变量,开始截取的位置，截取个数）实例如下

 $str='hello,world';
echo substr($str,6,5);

中文字符串的截取函数mb_substr()
函数说明：mb_substr(字符串变量,开始截取的位置，截取个数, 网页编码）实例如下
$str='我爱你，中国';//截取中国两个字
echo mb_substr($str, 4, 2, 'utf8');//中文编码基本上为utf8


PHP查找字符串,
函数说明：strpos(要处理的字符串, 要定位的字符串, 定位的起始位置[可选])

$str = 'I want to study at imooc';
$pos = strpos($str, 'imooc');//查找imooc
echo $pos;//结果显示19，表示从位置0开始，imooc在第19个位置开始出现

PHP替换字符串
函数说明：str_replace(要查找的字符串, 要替换的字符串, 被搜索的字符串, 替换进行计数[可选])实例如下
$str = 'I Love Chian';
str_replace('Chian','China',$str);//替换掉Chian为China


PHP格式化字符串，函数说明：sprintf(格式, 要转化的字符串)
返回：格式化好的字符串
$str = '100.1';
$result=sprintf('%01.3f',$str); //百分比符号为起始符号， 0，是 "填空字元" ，表示如果位置空着就用0来填满。
//在 0 后面的是1，这个 1 是规定整个所有的字符串占位要有1位以上(小数点也算一个占位)。
//最后的3则表示小数点后面的数字必须占三位，最后以 f "转换字符" 结尾。
echo $result;

php字符串合并和分隔
函数说明：implode(分隔符[可选], 数组)
$arr = array('Hello', 'World!');
$result = implode('', $arr);
print_r($result);//结果显示Hello World!

函数说明：explode(分隔符[可选], 字符串)
$str = 'apple,banana';
$result = explode(',', $str);
print_r($result);//结果显示array('apple','banana')


PHP字符串的转义函数addslashes()
说明：用于对特殊字符加上转义字符，返回一个字符串
$str = "what's your name?";
echo addslashes($str);//输出：what\'s your name?

了解正则表达式





*/


	
	
	
	
	
	
?>
