<?php
// $Id: modinfo.php 1 2007-10-30 11:28:51Z LupusC $
// Module Info

// The name of this moduledefine("_MI_POLLS_NAME","نظرسنجی");

// A brief description of this moduledefine("_MI_POLLS_DESC","برای گذاشتن نظرسنجی در بلاک");

// Names of blocks for this module (Not all module has blocks)define("_MI_POLLS_BNAME1","نظرسنجی");

// Names of admin menu itemsdefine("_MI_POLLS_ADMENU1","فهرست نظرسنجی ها");
define("_MI_POLLS_ADMENU2","اضافه کردن نظرسنجی");

// wellwine
define("_MI_POLLS_LOOKUPHOST","یه جای آدرس IP  نام host را نمایش بده.");
define("_MI_POLLS_LOOKUPHOSTDESC","فهرست نام هاست ها به جای آدرس IP  در نمایش اطلاعات نظرسنجی ها. اگر نام هاست  انتخاب شود زمان بیشتری برای نمایش نام ها طول خواهد کشید.");

// Voting controls
define("_MI_POLLS_CONTROLBYCOOKIE","جلوگیری از رای دهی مجدد با استفاده از کوکی.");
define("_MI_POLLS_CONTROLBYCOOKIEDESC","از مرورگر وب کوکی رای دهنده را دریافت میکند. اگر کوکی موجود بود به کاربر اجازه رای دهی مجدد را نمیدهد. کاربر مجدد قادر به رای دادن است اگر از یک مرورگر دیگر در یک کامپیوتر دیگر استفاده کند, یا کوکی های مرورگر خود را خالی کند.");

define("_MI_POLLS_CONTROLBYIP","جلوگیری از رای دهی مجدد با برسی IP.");
define("_MI_POLLS_CONTROLBYIPDESC","IP کاربران برای جلوگری از رای دهی مجدد کنترل میشود. به یاد داشته باشید اگر دو کاربر مختلف از یک IP یکسان استفاده کنند, یکی از آنها قادر به رای دادن نخواهد بود.");

// hyperpod
define("_MI_POLLS_ELECTION","حالت انتخابات؟");
define("_MI_POLLS_ELECTIONDESC","در حالت انتخابات, فقط کاربران ثبت نام شده میتوانند رای دهند و نتایج نمایش داده نمیشود.");

?>