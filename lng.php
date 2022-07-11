<?php

session_start();
switch($_REQUEST['lan'])
{
case "en":
$_session['home']="home";
$_session['contact us']="Contact us";	
$_session['aboutus']="About us";
$_session['login']="Login";
$_session['UOG']="UOG E-LEARNING MANAGMENT SYSTEM	";
$_session['Amharic']="Amharic";
$_session['English']="English";
$_session['e-learning tips']="e-learning tips";
$_session['a']="E-LEARNING MANAGMENT SYSTEM";
$_session['b']="E-Learning is a term that means something different to almost everyone who uses it. Some use the term to refer to packaged content pieces and others to technical infrastructures. Some think only of web-based self-study while others realize eLearning can encompass real-time learning and collaboration. Almost all agree that eLearning is of strategic importance. Almost all also agree that eLearning is an effective method that should be blended into a corporation’s current learning mix";
$_session['c']="E-learning management system provides an instructor with a way to create and deliver content, monitor student participation, and assess student performance. University of Gondar uses manual learning management system. In this system the instructors give any learning materials manually. This kind of system has its own negative impact on the students and the instructors as a whole.";
         

break;

case "am":
$_session['home']="መነሻ";
$_session['contact us']="ያግኙን";	
$_session['aboutus']="ስለኛ";
$_session['login']="ግባ";
$_session['UOG']="ጎንደር ዩኒቨርሲቲ የድህረ-ገጻዊ ትምህርት አስተዳደር ስርዐት	";
$_session['Amharic']="አማርኛ";
$_session['English']="እንግሊዘኛ";
$_session['e-learning tips']="ጉረሻ";
$_session['a']="የድህረ-ገጻዊ ትምህርት አስተዳደር ስርዐት";
$_session['b']="የድህረ-ገዊ ትምህርት ቃሉ በሚጠቀሙት የተለያዩ ሰዎች የተለያየ ትርጉም ይሰጡታል. አንዳነዶቹ ሁሉንም ነገር አቅፎ የያዘ ነው ሲሉ የተቀሩት ደግሞ ሙያዊ መሰረተ ልማት ነው ብለው ያምናሉ፡፡
አንዳንዶቹ የሚያስቡት በራስ ማጥኛ ድህረ-ገጽ እንደሆነ ሲሆን ቀሪዎቹ ደግሞ አሁን ላይ ያለውን የትምህርት አሰጣጥ የሚያስትባብር ነው ይላሉ፡፡በአጠቃላይ ይህ ስርአት አዋጭ መንገድ እንደሆነ ይስማሙበታል
";
$_session['c']="የድህረ-ገጻዊ ትምህርት አስተዳደር ስርዐት አስተማሪዎችን እንዴት የተማሪዎችን ተሳተፎ መቆጣጠር አእንደሚችሉና  እንዴት የተማሪዎችን ውጤት መክታተል እንደሚችሉ ያሣያል፡፡
ጎንደር ዩኒቨርሲቲ አሁን ይሚከተለው የመማር የማሰተማር ሂደት በሰው ሃይል ብቻ የተደገፈ ስርአት ነው፡፡";

	
break;
default:
$_session['home']="home";
$_session['contact us']="Contact us";	
$_session['aboutus']="About us";
$_session['login']="Login";
$_session['UOG']="UOG E-LEARNING MANAGMENT SYSTEM	";
$_session['Amharic']="Amharic";
$_session['English']="English";
$_session['e-learning tips']="e-learning tips";
$_session['a']="E-LEARNING MANAGMENT SYSTEM";
$_session['b']="E-Learning is a term that means something different to almost everyone who uses it. Some use the term to refer to packaged content pieces and others to technical infrastructures. Some think only of web-based self-study while others realize eLearning can encompass real-time learning and collaboration. Almost all agree that eLearning is of strategic importance. Almost all also agree that eLearning is an effective method that should be blended into a corporation’s current learning mix";
$_session['c']="E-learning management system provides an instructor with a way to create and deliver content, monitor student participation, and assess student performance. University of Gondar uses manual learning management system. In this system the instructors give any learning materials manually. This kind of system has its own negative impact on the students and the instructors as a whole. ";
         

}

?>
