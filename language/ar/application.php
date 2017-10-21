<?php
/**
*
* application [Arabic]
*
* @package language
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'APPLICATION_SUBJECT'			=> 'إستمارة طلب الإنضمام من %s',
	'APPLICATION_MESSAGE'			=> 'العضو [b]%1$s[/b] قدم المعلومات التالية بواسطة إستمارة طلب الإنضمام.' . "\n" . '[b]الإسم الحقيقي [/b]: %2$s' . "\n" . '[b]رقم الـ IP :[/b] %3$s'. "\n" . '[b]البريد الإلكتروني :[/b] %4$s'. "\n" . '[b]المركز المطلوب [/b]: %5$s' . "\n" . '[b]سبب تقديم الطلب :[/b] %6$s',
	'APPLICATION_SEND'				=> 'لقد تم إرسال طلبك إلى مُدراء هذا المنتدى. سيتم إشعارك بالقرار الذي أتخذونه قريباً إن شاء الله.',
	'APPLICATION_PAGETITLE'			=> 'إستمارة طلب الإنضمام',
	'APPLICATION_WELCOME_MESSAGE'	=> 'مرحباً بك في إستمارة طلب الإنضمام. يوجد لدينا مراكز شاغرة في فريق المنتدى قد ترغب في الحصول عليها. الرجاء تعبئة إستمارة طلب الإنضمام الموجودة بالأسفل. بالتوفيق !<br><br><strong><em>يجب تعبئة البنود التي تنتهي بعلامة النجمة !</em></strong>',
	'APPLICATION_REALNAME'			=> 'الإسم الحقيقي ',
	'APPLICATION_EMAIL'				=> 'البريد الإلكتروني ',
	'APPLICATION_POSITION'			=> 'المركز الذي تريده ',
	'APPLICATION_WHY'				=> 'لماذا نوافق على طلبك ؟',
	'APP_NOT_COMPLETELY_FILLED'		=> 'يجب عليك تعبئة جميع الحقول المطلوبة.',
	'APP_COMPLETE_NAME_WHY'			=> 'يجب عليك كتابة الإسم و سبب الموافقة عل طلبك.',
	'ADD_ATTACHMENT_EXPLAIN'		=> 'أرفق ملف لكي تساعدنا على اتخاذ القرار في طلبك.',
	'ADD_ATTACHMENT_REQ'			=> '<strong>يجب عليك ارفاق ملف لكي يدعم طلب انضمامك</strong>.',
	'APPLICATION_REQUIRES_ATTACHMENT'	=> 'الرجاء إرفاق ملف للمركز الذي تطلبه.',
	'APPLICATION_QUESTIONS'			=> 'الرجاء الإجابة عل الأسئلة التالية',
	'APPLICATION_QUESTIONS_REQUIRED'	=> 'يجب الإجابة على جميع الأسئلة',
	'APPLICATION QUESTION_ERROR'	=> 'لم يتم الإجابة عل جميع الأسئلة',
	'APPLICATION_REQUIRES_WHY'		=> 'يجب عليك إجابة السوأل : لماذا نوافق على طلبك',
	'APPLICATION_ANSWER_TOO_SHORT'	=> 'السوأل <em>%1s</em> يحتوي على حروف قليلة',
));
