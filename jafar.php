<?php
ob_start();
error_reporting(0);
define("API_KEY",'6673041032:AAFXcX4eqRMe7qpn7fdgvyewcZEPOOsrT8g');
$botname = bot('getme',['bot'])->result->username;
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/$method";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas); 
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
$admin = 2037862099 ; // ايديك تلي
$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
//\\
mkdir("data/$chat_id");
$log = file_get_contents("data/$chat_id/$chat_id.txt");
$EG = file_get_contents("data/$chat_id/eg".$chat_id.".txt");
$c20 = file_get_contents("data/$chat_id/20".$chat_id.".txt");
//\\
$msg = file_get_contents("msg.php");
$forward = file_get_contents("forward.php");
$midea = file_get_contents("midea.php");
$inlin = file_get_contents("inlin.php");
$photoi = file_get_contents("photoi.php");
$upq = file_get_contents("up.php");
$skor = file_get_contents("skor.php");

mkdir("data");

$channel = file_get_contents("link.php");
$link = file_get_contents("link2.php");
$ch = "$channel"; 
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
»  عليك الاشتراك في قناة تحديثات البوت اولا 📨
»  ليمكنك استخدام البوت  🔊
»  اشترك ثم ارسل { /start }
»  [اضغط هنا للشتراك في القناة]($link)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);return false;}

$uuser = file_get_contents("uuser.php");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$uuser&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
»  عليك الاشتراك في قناة تحديثات البوت اولا 📨
»  ليمكنك استخدام البوت  🔊
»  اشترك ثم ارسل { /start }
»  $uuser",
]);return false;}

$users = explode("\n",file_get_contents("abbas.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("abbas.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$abbas09 = json_decode(file_get_contents("abbas09.json"),true);
$suodo = $abbas09['sudoarr'];
$al = $abbas09['addmessage'];
$ab = $abbas09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$abbas09['messagee'] = $abbas09['messagee']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}
if($message and $from_id == $admin){
$abbas09['addmessage'] = $abbas09['addmessage']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}

$all = count($users)-1;

$adminss = explode("\n",file_get_contents("ad.json"));

$a3bs9 = file_get_contents("data/a3bs9.txt");
$q1 = file_get_contents("data/q1.txt");
$q2 = file_get_contents("q2.txt");
$q3 = file_get_contents("data/q3.txt");
$q4 = file_get_contents("q4.txt");
$q5 = file_get_contents("data/q5.txt");
$aralikan = file_get_contents("q6.txt");

if($message){
if(!in_array($admin,$adminss)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
تم تحديث القائمه /start
",
]);
file_put_contents("ad.json",$admin."\n",FILE_APPEND);
}}

$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$todayuser = count($day);
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($message and !in_array($from_id, $day)){ 
file_put_contents($d.".txt",$from_id. "\n",FILE_APPEND);
}

$from_id = $message->from->id;
$name = $message->from->first_name;
$id = $message->from->id;
$user = $message->from->username;
if($user){
$user = "@$user";
}
elseif(!$uaer){
$user = "بلا معرف";
}
if($text =="/start" and !in_array($from_id,$users)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
٭ تم دخول شخص جديد الى البوت الخاص بك 👾
. — — — — — — — — — — .
• معلومات العضو الجديد .
. — — — — — — — — — — .
• الاسم : $name
• المعرف : $user
• الايدي : $id
. — — — — — — — — — — .
• عدد الاعضاء الكلي : $all
",
]);
}

$bot = file_get_contents("bot.txt");

if($text =="/start" and in_array($from_id,$adminss)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*-•
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------  
*",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- قفل البوت ❌.","callback_data"=>"abcd"],["text"=>"- فتح البوت ✅.","callback_data"=>"abcde"]],
[["text"=>"- اعضاء البوت 👥.","callback_data"=>"userd"]],
[["text"=>"- تفعيل التنبيه 🔔.","callback_data"=>"ont"],["text"=>"- تعطيل التنبيه 🔕.","callback_data"=>"oft"]],
[["text"=>"- قسم الاذاعةه 📢.","callback_data"=>"for"]],
[['text' => "- قائمةه الاشتراك 🗣.", 'callback_data' => "channel"],['text' => "- الاشتراك ($skor) .", "callback_data" => "off"]],
[['text' => "- الاحصائيات 📊.", 'callback_data' => "pannel"],['text' => "- قسم المشرفين 👮‍♂️.", 'callback_data' => "lIllabbas"]],
]])
]); 
}

//
if($data =="lIllabbas"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
 اهلا بك في قسم مشرفين 👮‍♂️
 يمكنك من خلال هذا القسم
 ☆☆☆☆☆☆☆☆☆☆☆☆☆
 رفع مشرف - تنزيل مشرف - حدف جميع المشرفين
*", 
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- رفع مشرف 👮‍♂️.","callback_data"=>"adl"]],
[["text"=>"- اخر المشرفين👮‍♂️.","callback_data"=>"addmin"]],
[["text"=>"- حدف جميع المشرفين👮‍♂️.","callback_data"=>"delateaddmin"]],
]])
]);   
}

if($data == "adl"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال ايدي العضو 🆔️
 ",
]); 
file_put_contents("data/a3bs9.txt","a3bs9");
}
if($text !="/start" and $a3bs9 == "a3bs9" and !in_array($text,$adminss)){
file_put_contents("data/a3bs9.txt","none");
file_put_contents("ad.json",$text."\n",FILE_APPEND);} 

if($text != "/start" and $a3bs9 == "a3bs9" and !in_array($text,$adminss)){
file_put_contents("data/a3bs9.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع العضو ✅", 
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"تم رفعك مشرف في البوت 👮‍♂️", 
]);
}
if($text !="/start" and $a3bs9 == "a3bs9" and in_array($text,$adminss)){
file_put_contents("data/a3bs9.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو مشرف بالفعل👮‍♂️", 
]);
}
if($data =="addmin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اخر خمس مشرفيه 👥👮‍♂️:
 1 - ".$adminss[count($adminss)-2]."
 2 - ️".$adminss[count($adminss)-3]."
 3 - ️".$adminss[count($adminss)-4]."
 4 - ️".$adminss[count($adminss)-5]."
 5 - ️".$adminss[count($adminss)-6]."
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- الصفحه الرئيسيه.","callback_data"=>"bak"]],
]])
]);   
}
if($data =="delateaddmin" and $chat_id2 =="$admin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
هل انت متاكد من الحذف ❓
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'لا ❌' ,'callback_data'=>"bak"]],
[['text'=>'نعم ✅' ,'callback_data'=>"yesaarsslan"]],
]])
]);
}
if($data =="yesaarsslan"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
تم حذف المشرفيه👥✅
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
unlink("ad.json");
}

if($data =="abcde"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم فتح البوت 
- /start",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
file_put_contents("bot.txt","مفتوح");
} 
if($data =="abcd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم قفل البوت
- /start ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]); 
file_put_contents("bot.txt","متوقف");
} 

if($text =="/start" and $bot =="متوقف" and $chat_id != "$admin"){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"تم اغلاق البوت لي اصلاح بعض المشاكل",]);
}

if($data =="userd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 اهلا بك عزيزي المشرف
 عدد الاعضاء : ( $all )
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == 'ont'){
file_put_contents("ont.php", "on");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
 تم تفعيل الاشعارات في البوت🔔
➖➖➖➖➖➖➖➖
",
'show_alert'=>true
]);
}
if($data == 'oft'){
file_put_contents("ont.php", "off");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
⚠ تم تعطيل الاشعارات في البوت
➖➖➖➖➖➖➖➖
",
'show_alert'=>true
]);
}
$ont = file_get_contents("ont.php");
if($ont == "on"){
if($from_id != $admin){
if($message){
bot('ForwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}

if($data == "for"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
حسنا عزيزي
قم باختيار ما يناسبك
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اذاعه صورة 🖼",'callback_data'=>"photoi"]],
[['text' => "اذاعه رسالة ✉", 'callback_data' => "msg"],['text' => "اذاعه توجيه ", 'callback_data' => "forward"]],
[['text' => "اذاعه ميديا ✅", 'callback_data' => "midea"],['text' => "اذاعه انلاين ", 'callback_data' => "inline"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
حسنا عزيزي
تم عمل اذاعه بنجاح 📢
الى ( $all ) مشترك
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("msg.php");
}}
if($data == "forward"){
file_put_contents("forward.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
حسنا عزيزي
قم بأرسال رسالتك لتحويلها لجميع المشتركين على شكل توجيه
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($forward == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('ForwardMessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
حسنا عزيزي
تم عمل اذاعه توجيه بنجاح 📢
الى ( $all ) مشترك
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
unlink("forward.php");
}}
if($data == "midea"){
file_put_contents("midea.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
يمكنك استخدام جميع انوع الميديا ماعدى الصوره
(ملصق - فيديو - بصمه - ملف صوتي - ملف - متحركه - جهة اتصال )
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','audio','video','photo','contact','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types) and $midea == "on"){
for($i=0;$i<count($users); $i++){
bot('send'.$key,[
'chat_id'=>$users[$i],
'caption'=>$message->caption,
$key=>$val['file_id']]);
unlink("midea.php");
}
}
}}
if($data == "photoi"){
file_put_contents("photoi.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
حسنا عزيزي
قم بأرسال الصورة لنشرها لجميع المشتركين
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($photoi == "on"){
if($message->photo){
for($i=0;$i<count($users); $i++){
bot('sendphoto',[
'chat_id'=>$users[$i],
'photo'=>$message->photo[0]->file_id,
'caption'=>$message->caption,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
حسنا عزيزي
تم نشر الصورة بنجاح 📢
الى ( $all ) مشترك
*",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("photoi.php");
}}
if($data == "inline"){
file_put_contents("inlin.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتوجيه نص الانلاين لاقوم بنشره للمشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($inlin == "on"){
if($message->forward_from or $message->forward_from_chat){
for($i=0;$i<count($users); $i++){
bot('forwardmessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الانلاين بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("inlin.php");
}}

if($data == "channel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتحديد الامر لأتمكن من تنفيذه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"قناة خاصة ",'callback_data'=>"link"]],
[['text'=>"قناة عامة ",'callback_data'=>"user"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "link"){
file_put_contents("link.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت مشرف في القناة
 ثم ارسل توجيه من القناة الى هنا",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
$channel_id = $message->forward_from_chat->id;
if($channel == "on"){
if($message->forward_from_chat){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 قم الان بأرسال رابط القناة هنا",
]);
file_put_contents("link.php", $channel_id);
file_put_contents("link2.php", "on");
}}
if($link == "on"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية",'callback_data'=>"bak"]],
]])
]);
file_put_contents("link2.php", $text);
file_put_contents("skor.php", "مفعل ✅");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال الرابط بصورة صحيحه",
]);
}
}

if($data == "user"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت مشرف في القناة
 ثم ارسل يوزر القناة لتفعيل الاشتراك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("uuser.php", "on");
}
if($uuser == "on"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية ⏱",'callback_data'=>"bak"]],
]])
]);
file_put_contents("skor.php", "مفعل ✅");
file_put_contents("uuser.php", $text);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال يوزر بصورة صحيحه",
]);
}
}

if($skor == "معطل ⚠️"){
if($data == 'off'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'
 مرحبا عزيزي
 حالة الاشتراك الاجباري معطل
 قم بختيار - قائمةه الاشتراك .وقم بتفعيله
',
 'show_alert'=>true
 ]); 
}}
if($skor == "مفعل ✅"){
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
 حسنا عزيزي
 حالت الاشتراك الخاص بك مفعل
 هل انت متأكد من رغبتك في تعطيل الاشتراك
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'نعم ', 'callback_data'=>'yesde2'],
['text'=>'لا ','callback_data'=>'bak'],
]
]])
]);
}}

if($data == "yesde2"){
unlink("uuser.php");
unlink("link.php");
file_put_contents("skor.php", "معطل ⚠️");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 تم تعطيل الاشتراك في جميع القنواة
 يمكنك تفعيل الاشتراك لقناتك في مابعد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
}

$bloktime = date('h:i:s A');
if($data == "file"){
$path = realpath("abbas.json");
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile($path),
'caption'=>"
 نسخة لمشتركينك
 وقت الارسال : ( $bloktime )
 عدد المشتركين : ( $all )
",
]);
}

if($data == "up"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال ملف الاعضاء الان
 ارسل الملف بأسم : abbas.json",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("up.php", "on");
}
$rep = $message->document->file_name;
if($upq == "on"){
if($message->document and $message->document->file_name == "abbas.json" ){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->reply_to_message->document->file_id])->result->file_path;
file_put_contents($message->reply_to_message->document->file_name,file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* تم رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
unlink("up.php");
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* لايمكن رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
}

if($data =="pannel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*اهلا بك في قسم - الاحصائيات . 📊
. — — — — — — — — — — .
 عدد اعضاء بوتك : $all
 المتفاعلين اليوم  : $todayuser
 عدد الرسائل المرسله : ".$abbas09['addmessage']."
 عدد الرسائل المستلمه : ".$abbas09['messagee']."
 مجموع الرسائل : $xll
. — — — — — — — — — — .
 اخر خمس مشتركين :
▫️ 1- ".$users[count($users)-2]."
▫️ 2- ️".$users[count($users)-3]."
▫️ 3- ️".$users[count($users)-4]."
▫️ 4- ️".$users[count($users)-5]."
▫️ 5- ️".$users[count($users)-6]."
. — — — — — — — — — — .*",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == "editstart"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال رسالة الاستارت الان
 ",
]); 
file_put_contents("data/q1.txt","q1");
}
if($text != "/start" and $q1 == "q1"){
file_put_contents("data/q1.txt","none");
file_put_contents("q2.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم التعين بنجاح", 
]);
}

if ($data == 'bak'){
$msg = unlink("msg.php");
unlink("forward.php");
unlink("midea.php");
unlink("inlin.php");
unlink("photoi.php");
unlink("up.php");
unlink("up.php");
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*-•
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
*",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- قفل البوت ❌.","callback_data"=>"abcd"],["text"=>"- فتح البوت ✅.","callback_data"=>"abcde"]],
[["text"=>"- اعضاء البوت 👥.","callback_data"=>"userd"]],
[["text"=>"- تفعيل التنبيه 🔔.","callback_data"=>"ont"],["text"=>"- تعطيل التنبيه 🔕.","callback_data"=>"oft"]],
[["text"=>"- قسم الاذاعةه 📢.","callback_data"=>"for"]],
[['text' => "- قائمةه الاشتراك 🗣.", 'callback_data' => "channel"],['text' => "- الاشتراك ($skor) .", "callback_data" => "off"]],
[['text' => "- الاحصائيات 📊.", 'callback_data' => "pannel"],['text' => "- قسم المشرفين 👮‍♂️.", 'callback_data' => "lIllabbas"]],
]])
]);   
}
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$txt = $message->caption;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$new = $message->new_chat_members;
$message_id = $message->message_id;
$type = $message->chat->type;
$name = $message->from->first_name;
$typen = $message->chat->type;
$from_id = $message->from->id;
$forward =$message->forward_from_chat;
$forwardid = $message->forward_from_chat->id;
$text = $message->text;
$id = $message->from->id;
$caption = $update->message->caption;
$message_id = $message->message_id;
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
} 

$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
    $message = $update->message; 
    $chat_id = $message->chat->id;
    $text = $message->text;
    $idchannel = $update->message->forward_from_chat->id;

}
$data = json_decode(file_get_contents("Data/$chat_id/data.json"),true);
$step = $data['step'];

mkdir("Data/$chat_id");

if($update->message->forward_from_chat){
bot('sendmessage', [
'chat_id'=>$chat_id, 
'parse_mode'=>html,
'text'=>"id channel <code>$idchannel</code>",
]);
}
if($update->message->new_chat_members){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>html,
'text'=>"<code>$chat_id</code>",
]);
bot('leaveChat',[
'chat_id'=>$chat_id,
]);
}
if($text == "/start"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"*• مرحبا بك في بوت كشف المعلومات
• اختر ما تريد من الازرار 🇮🇶

• استقبال به افشای اطلاعات ربات
• هر دکمه ای را که می خواهید انتخاب کنید 🇮🇷
 
• Welcome to bot information disclosure
Choose whatever buttons you want 🇺🇸*",
'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"العربية 🇮🇶"],['text'=>"English 🇺🇸"],['text'=>"🇮🇷 فارسى"]],
[['text'=>"استخراج ايبي ↤ ‹ هاش | ايدي ›"]], 
[['text'=>'كشف الإنشاء 📅'],['text'=>"• معلومات المطور •"]]
],
"resize_keyboard"=>true,
])
]);
} 

if($text == "العربية 🇮🇶"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*• أرسل ↤ ⦗ /id ⦘ لإظهار ايديك ومعلوماتك 

• قم بعمل توجيه منشور من قناتك لأظهار إيدي القناة

• أضفني إلى مجموعتك لإظهار
 إيدي المجموعة

• لمعرفة معلومات شخص اخر قم بتوجيه رساله منه الى البوت وسيتم عرض معلوماته

• لمعرفة معلومات ايدي شخص معين 

• اكتب ايدي + رقم الايدي*

```مثال
ايدي 1427981991```",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"• 𝗧𝗢𝗠 •", 'url'=>'t.me/T_0_M0']],
 [['text'=>"• The channel •", 'url'=>'https://t.me/izeoe']],
]])
]);
}

if($text == "English 🇺🇸"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• Send : ⦗ /id ⦘ To show your hands and information 

• Make a directive post from your channel to show the channel's credits 

• Add me to your group to show off the group 

• To know the information of another person, send a message from him to the bot and his information will be displayed 

• To find out information about a specific person's hands 

• Write id  + id number 
```example
id 1427981991```",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"• 𝗧𝗢𝗠 •", 'url'=>'t.me/T_0_M0']],
 [['text'=>"• The channel •", 'url'=>'https://t.me/izeoe']],
]])
]);
}

if($text == "فارسى 🇮🇷"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• ارسال کنید  ↤ ⦗ /id ⦘ برای نشان دادن دست و اطلاعات شما 

• برای نشان دادن اعتبار کانال، یک پست دستورالعمل از کانال خود ایجاد کنید 

• من را به گروه خود اضافه کنید تا گروه را نشان دهم 

• برای اطلاع از اطلاعات شخص دیگری از طرف وی به ربات پیام دهید و اطلاعات وی نمایش داده می شود 

• برای پیدا کردن اطلاعات در مورد دست های یک فرد خاص 

• دست ايدي + دستان شخص 

```مثال
ايدي 1427981991```",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"• 𝗧𝗢𝗠 •", 'url'=>'t.me/T_0_M0']],
 [['text'=>"• The channel •", 'url'=>'https://t.me/izeoe']],
]])
]);
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$username = $update->message->from->username;
$ca = $update->callback_query;
$data = $ca->data;
$messageid = $ca->message->message_id;
$forwardid = $ca->message->forward_from_chat;
$chat_id2 = $ca->message->chat->id;
$fromid = $ca->message->from->id;
$name = $update ->message->from->first_name;
$forward_name = $message->forward_from->first_name;
$forward_from = $message->forward_from;
$forward_id = $forward_from->id;
$forward_text = $forward_from->message;
$forward_username = $forward_from->username;

$tgpage = file_get_contents('https://t.me/'.$username);preg_match('/<div class="tgme_page_description">(.*?)<\/div>/i',$tgpage,$bio);$biography = isset($bio[1]) ? $bio[1]:'Yσυ ∂σ ησт нανє α вισgяαρну‼️';
$tgpage = file_get_contents('https://t.me/'.$forward_username);preg_match('/<div class="tgme_page_description">(.*?)<\/div>/i',$tgpage,$bio);$biograph = isset($bio[1]) ? $bio[1]:'Yσυ ∂σ ησт нανє α вισgяαρну‼️';
#####----------------#####

if($text=="/id"){
$us = file_get_contents("users.txt");$eq = explode("\n",$us);if(!in_array($from_id,$eq)){$myfile2 = fopen("users.txt", "a") or die("Unable to open file!");fwrite($myfile2, "$from_id\n");fclose($myfile2);}
$res = bot("getUserProfilePhotos",["user_id"=>$chat_id,"limit"=>1,"offset"=>0,])->result->photos[0][2]->file_id;
$get = bot('getchat',['chat_id'=>$from_id])->result;
$username = $get->username ;
$biography =  $get->bio; 
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>"$res",
'caption'=>"```information
• Welcome to your information```",
'message_id'=>$message_id,'reply_to_message_id'=>$message_id,'parse_mode'=>'MarkDown','reply_markup'=>json_encode(['inline_keyboard'=>[ 
[['text'=>"• Bio •",'callback_data'=>"bioo"]],
[['text'=>"$biography",'callback_data'=>"bioo"]],
[['text'=>"• your id •",'callback_data'=>"chatid"],['text'=>"$chat_id",'callback_data'=>"chatid"]],
[['text'=>"• your name •",'callback_data'=>"name"],['text'=>"$name",'callback_data'=>"name"]],
[['text'=>"• your user •",'callback_data'=>"0"],['text'=>"@$username",'url'=>"t.me/$username"]],
]])
]);
}
if($data=="chatid"){bot('sendMessage',['chat_id'=>$chatid,'text'=>"$chatid",'message_id'=>$messageid,]);}
if($forward_from){
$get = bot('getchat',['chat_id'=>$forward_id])->result;
$username = $get->username ;
$biograph =  $get->bio; 
$res = bot("getUserProfilePhotos",[
"user_id"=>$forward_id,
"limit"=>1,
"offset"=>0,])->result->photos[0][2]->file_id;$path = bot("getFile",["file_id"=>$res])->result->file_path;file_put_contents("data/$r.jpg",file_get_contents("https://api.telegram.org/file/bot".API_KEY."/".$path));
bot("sendPhoto",['chat_id'=>$chat_id,
"photo"=>"$res",
'caption'=>"• Hello | Welcome to Bot user info",
'message_id'=>$message_id,'reply_to_message_id'=>$message_id,'parse_mode'=>'MarkDown','reply_markup'=>json_encode(['inline_keyboard'=>[ 
[['text'=>"• Bio •",'callback_data'=>"bioo"]],
[['text'=>"$biograph",'callback_data'=>"bioo"]],
[['text'=>"• id •",'callback_data'=>"forward_id"],['text'=>"$forward_id",'callback_data'=>"forward_id#".$forward_id]],
[['text'=>"• name •",'callback_data'=>"0"],['text'=>"$forward_name",'callback_data'=>"0"]],
[['text'=>"• username •",'callback_data'=>"0"],['text'=>"@$forward_username",'url'=>"t.me/$forward_username"]],
]])]);
}

$ex = explode("#",$data);
$data = $ex[0];
$fromid = $ex[1];

if($data=="forward_id"){
bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>"$fromid",
]);
}

$s = str_replace('ايدي ','',$text);
if($text == "ايدي $s"){
if(preg_match("/^[0-9]+$/", $s)){
$ok = bot('getchat',['chat_id'=>$s])->ok;
if($ok == "true"){
$get = bot('getchat',['chat_id'=>$s])->result;
$name = $get->first_name;
$user = $get->username;
$bio = $get->bio;
$photo = bot('getUserProfilePhotos',['user_id'=>$s])->result->photos[0][0]->file_id;
$type = bot('sendChatAction' , ['chat_id' =>$s,'action' => 'typing' ,])->ok;
if($type != 1){
$true = "محظور";
}else{
$true = "غير محظور";
}
if($user == null){
$user = "لا يوجد معرف";
}
if($bio == null){
$bio = "لا يوجد بايو";
}
if($photo == null){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• إسم المستخدم ↤ [$name](tg://user?id=$s)
• ايدي المستخدم ↤ $s
• معرف المستخدم ↤ *$user*
• بايو المستخدم ↤ [$bio]()
• حالة المستخدم ↤ *$true*
",'parse_mode'=>"MarkDown",]);
}else{
bot('sendphoto', [
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"
• إسم المستخدم ↤ [$name](tg://user?id=$s)
• ايدي المستخدم ↤ $s
• معرف المستخدم ↤ *$user*
• بايو المستخدم ↤ [$bio]()
• حالة المستخدم ↤ *$true*
",'parse_mode'=>"MarkDown",]);
}
}else{
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• عذرا لم أجد الشخص الذي تريده 
",'parse_mode'=>"MarkDown",]);
}
}
}
$s = str_replace('id ','',$text);
if($text == "id $s"){
if(preg_match("/^[0-9]+$/", $s)){
$ok = bot('getchat',['chat_id'=>$s])->ok;
if($ok == "true"){
$get = bot('getchat',['chat_id'=>$s])->result;
$name = $get->first_name;
$user = $get->username;
$bio = $get->bio;
$photo = bot('getUserProfilePhotos',['user_id'=>$s])->result->photos[0][0]->file_id;
$type = bot('sendChatAction' , ['chat_id' =>$s,'action' => 'typing' ,])->ok;
if($type != 1){
$true = "Forbidden";
}else{
$true = "Not prohibited";
}
if($user == null){
$user = "No ID";
}
if($bio == null){
$bio = "There is no bio";
}
if($photo == null){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• name : [$name](tg://user?id=$s)
• id : $s
• user : *$user*
• bio : [$bio]()
• User status : *$true*
",'parse_mode'=>"MarkDown",]);
}else{
bot('sendphoto', [
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"
• name : [$name](tg://user?id=$s)
• id : $s
• user : *$user*
• bio : [$bio]()
• User status : *$true*
",'parse_mode'=>"MarkDown",]);
}
}else{
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• Sorry, you did not find the person you wanted
",'parse_mode'=>"MarkDown",]);
}
}
}

function getUserAgent(){
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
	$userAgentArray[] = "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36 OPR/49.0.2725.47";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.15063";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36 OPR/49.0.2725.64";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/62.0.3202.94 Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0;  Trident/5.0)";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/63.0.3239.84 Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0;  Trident/5.0)";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
	$userAgentArray[] = "Mozilla/5.0 (iPad; CPU OS 11_1_2 like Mac OS X) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0 Mobile/15B202 Safari/604.1";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:58.0) Gecko/20100101 Firefox/58.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Safari/604.1.38";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; CrOS x86_64 9901.77.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.97 Safari/537.36";
	$getArrayKey = array_rand($userAgentArray);
	return $userAgentArray[$getArrayKey];
}
function curlj($da=[]){
$getUserAgent = getUserAgent();
$ch = curl_init($da["u"]);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT,$getUserAgent);
curl_setopt($ch, CURLOPT_REFERER, 'https://my.telegram.org/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, "curls/".$da["id"].".txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "curls/".$da["id"].".txt");
$rep = curl_exec($ch);
return $rep;
}
@mkdir("curls");
#--------
$update = file_get_contents("php://input");
$updateData = json_decode($update,true);
$messageData = isset($updateData["callback_query"]) ? $updateData["callback_query"] : $updateData["message"];
$chatId = isset($updateData["callback_query"]) ? $updateData["callback_query"]["message"]["chat"]["id"] : $updateData["message"]["chat"]["id"];
$chatType = isset($updateData["callback_query"]) ? $updateData["callback_query"]["message"]["chat"]["type"] : $updateData["message"]["chat"]["type"];
$messageId = isset($updateData["callback_query"]) ? $updateData["callback_query"]["message"]["message_id"] : $updateData["message"]["message_id"];
$messageText = $messageData["text"];
$data = $updateData["callback_query"]["data"];
$from_id = $messageData["from"]["id"];
$TokenInfo = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getMe"));
$UserBot = $TokenInfo->result->username; 
$NameBot = $TokenInfo->result->first_name; 
$IdBot = $TokenInfo->result->id;
$status = json_decode(file_get_contents("settings.json"),true);
if ($chatType == "private"){
if($text == "استخراج ايبي ↤ ‹ هاش | ايدي ›"){ 
bot("sendmessage",["chat_id"=>$chatId,"text"=>"*• اهلا بك في قسم الاستخراج لحسابك . \n• يمكنك من خلال البوت استخراج كل من Api id و api hash

• للرجوع للقائمه الرئيسيه اضغط  /start*","parse_mode"=>"markdown",'reply_markup'=>json_encode(['resize_keyboard'=>true, 'keyboard'=>[[["text"=>"أرسال جهتي","request_contact"=>true]]]])]);
}
if(strstr($messageText,":") and strstr($messageText,"my.telegram.org") and $status[$from_id]["phone"] and $status[$from_id]["hash"]){
$code = explode(":",$messageText)[1];
$code = explode("\n",$code)[1];
$login = curlj(["u"=>"https://my.telegram.org/auth/login?phone=".$status[$from_id]["phone"]."&random_hash=".$status[$from_id]["hash"]."&password=".$code,"id"=>$from_id]);
if($login == "true"){
$getcurlj = curlj(["u"=>"https://my.telegram.org/apps","id"=>$from_id]);
$api = explode('App api_hash:',$getcurlj)[1];
preg_match('#<input type="hidden" name="hash" value="(.*?)"/>#',$getcurlj,$edit_form);
preg_match('#<span class="form-control input-xlarge uneditable-input" onclick="(.*?)">(.*?)</span>#',$api,$api_hash);
preg_match('#<strong>(.*?)</strong>#',$getcurlj,$api_id);
$app_title = explode('"',explode('<input id="app_title" name="app_title" type="text" class="form-control input-xlarge" value="',$getcurlj)[1])[0];
$app_shortname = explode('"',explode('<input id="app_shortname" name="app_shortname" type="text" class="form-control input-xlarge" value="',$getcurlj)[1])[0];
if($api_id[1] && $api_hash){
bot("sendmessage",["chat_id"=>$from_id,"text"=>"• تم تسجيل دخول بنجاح ..\n• تم اكمال معلومات الاستخراج لحسابك 👇🏻\n\nApi id : ⦗ `".$api_id[1]."` ⦘\n\nApi hash : ⦗ `".$api_hash[2]."` ⦘","parse_mode"=>"markdown"]);
unset($status[$from_id]);
file_put_contents("settings.json", json_encode($status,128|32|256)); 
unlink("curls/".$from_id.".txt");
}else{
bot("sendmessage",["chat_id"=>$from_id,"text"=>"• تم تسجيل دخول بنجاح ..\n• لم تكمل معلومات الاستخراج لحسابك يمكنك الاكمال من خلال الموقع \nhttps://my.telegram.org/apps/create"]);
unlink("curls/".$from_id.".txt");
}
}else{
bot("sendmessage",["chat_id"=>$from_id,"text"=>"• هذا الرمز غير صحيح ."]);
}
}
if($messageData["contact"]){ 
$phone = $messageData["contact"]["phone_number"];
$code = curlj(["u"=>"https://my.telegram.org/auth/send_password?phone=".$phone,"id"=>$from_id]);
if(json_decode($code,1)["random_hash"] != null){
$status[$from_id]["phone"] = $phone;
$status[$from_id]["hash"] = json_decode($code,1)["random_hash"];
file_put_contents("settings.json", json_encode($status,128|32|256));
bot("sendmessage",["chat_id"=>$from_id,"text"=>"• الان قم باعادة توجيه الرساله \n• التي ارسلت لك في الخاص\n• لا تقم بنسخ الكود فقط !."]);
}elseif(strstr($code,"Sorry, too many tries. Please try again later.")){
bot("sendmessage",["chat_id"=>$from_id,"text"=>"• لقد تجاوزت الحد الأقصى من مرات المحاولة، يرجى المحاولة مرة اخرى في وقتٍ لاحق ."]);
}else{
bot("sendmessage",["chat_id"=>$from_id,"text"=>"• حدثت مشكلة ما ."]);
}
}
}

if($text == 'كشف الإنشاء 📅'){
    bot('Sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>'*• يرجى إرسال الايدي الخاص بالحساب او القناة مع ان يكون الايدي الخاص بالقناة او المجموعه بدون ↤ -100 لكشف تاريخ الإنشاء بشكل صحيح*',
        'parse_mode'=>"markdown",
        'disable_web_page_preview'=>true
    ]);
    file_put_contents("requesting_creation_date_$chat_id.txt", "true");
}

if(is_numeric($text) && file_exists("requesting_creation_date_$chat_id.txt")){
    unlink("requesting_creation_date_$chat_id.txt");
    bot('sendvideo',[
        'chat_id'=>$chat_id,
        'reply_to_message_id'=>$message_id, 
        'video'=>"https://t.me/msmswork/270",
        'caption'=>"*• تم التحقق من تاريخ الانشاء .

• تاريخ الانشاء هو ↤* ".cdate($text),
        'parse_mode'=>"markdown",
        'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode(['inline_keyboard'=>[
            [['text'=>"• مطور البوت •",'url'=>"https://t.me/T_0_M0"],['text'=>"• قناة المطور •",'url'=>"https://t.me/izeoe"]],
        ]])
    ]);
}

function cdate($dd) { 
    $h = ['x-api-key: e758fb28-79be-4d1c-af6b-066633ded128',]; 
    $d = ["telegramId" => (int)$dd,]; 
    $ch = curl_init('https://restore-access.indream.app/regdate'); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $h); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($d)); 
    $r = curl_exec($ch); 
    curl_close($ch);
    return json_decode($r)->data->date; 
} 

if($text == "• معلومات المطور •"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*.𖣂. Welcome to developer information .𖣂.

.𖣂. Information .𖣂.

.𖣂. Dev :* [𝗧𝗢𝗠](t.me/T_0_M0)

*.𖣂. Ch :* [ᴘʀᴏɢʀᴀᴍᴍɪɴɢ ᴄᴏᴅᴇs](t.me/izeoe)
", 
'parse_mode'=>"Markdown",
'message_id'=>$message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"• 𝗧𝗢𝗠 •", 'url'=>'t.me/T_0_M0']],
 [['text'=>"• The channel •", 'url'=>'https://t.me/izeoe']],
]])
]);
}