<?php

/**
*
*
* @package - Application Form language
* @copyright 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACP_APPLICATIONFORM_SETTINGS'		=> 'إعدادات إستمارة طلب الإنضمام',
	'APPLICATIONFORM_FORUM'				=> 'المنتدى ',
	'APPLICATIONFORM_FORUM_EXPLAIN'		=> 'سيتم نشر إستمارة طلب الإنضمام في المنتدى الذي تحدده هنا.',
	'APPFORM_FORUM_NO_ATTACH'			=> 'المنتدى الذي حددته لا يسمح بالمُرفقات.',
	'APPLICATIONFORM_POSITIONS'			=> 'المراكز المتوفرة ',
	'APPLICATIONFORM_POSITIONS_EXPLAIN'	=> 'اكتب أسماء المراكز التي يستطيع الأعضاء التقديم لها. كل مركز بسطر مُستقل.',
	'APPFORM_SETTINGS_SUCCESS'			=> 'تم حفظ الإعدادات بنجاح.',
	'APPFORM_MUST_HAVE_POSITIONS'		=> 'يجب كتابة مركز واحد على الأقل.',
	'APPFORM_GUEST'						=> 'السماح بالزائرين ',
	'APPFORM_GUEST_EXPLAIN'				=> 'اختيارك "نعم" يعني السماح للزائرين باستخدام إستمارة طلب الإنضمام.',
	'APPLICATIONFORM_NRU'				=> 'السماح لمجموعة آخر الأعضاء المُسجلين ',
	'APPLICATIONFORM_NRU_EXPLAIN'		=> 'اختيارك "نعم" يعني السماح للأعضاء المُسجلين الجُدد باستخدام إستمارة طلب الإنضمام.',
	'APPLICATIONFORM_ALLOW_ATTACHMENT'	=> 'السماح بالمُرفقات ',
	'APPLICATIONFORM_ALLOW_ATTACHMENT_EXPLAIN' => 'اختيارك "نعم" يعني السماح برفع الملفات النصية التي بإمتداد doc و pdf  و txt.',
	'APPLICATIONFORM_ATTACHMENT_REQ'	=> 'المُرفقات مطلوبة ',
	'APPLICATIONFORM_ATTACHMENT_REQ_EXPLAIN' => 'اختيارك "نعم" يعني أن المُرفقات ستكون مطلوبة لإرسال إستمارة طلب الإنضمام.',
	'APPLICATIONFORM_QUESTIONS'			=> 'الأسئلة ',
	'APPLICATIONFORM_QUESTIONS_EXPLAIN'	=> 'تستطيع إضافة أي اسئلة إضافية تريد أن تسألها للمُتقدمين بواسطة إستمارة طلب الإنضمام. كل سوأل في سطر جديد.',
));
