<?php
/** 
*
* acp_styles.php [Arabic]
*
* @package language
* @version $Id: styles.php,v 1.38 2007/06/11 12:39:50 kellanved Exp $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-18 - phpBBegypt.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'هذه الصفحة تختزل جميع صور الازرار , المنتدى, المجلد, وغيرها. كذالك الصور الصور الخاصة التي تستعمل من طرف النظام ولا تستعمل من الاستايل. هنا تستطيع تعديل, تصدير, حذف صور موجودة واستيراد أو تفعيل صور جديدة.',
	'ACP_STYLES_EXPLAIN'	=> 'هنا تستطيع ادارة جميع الاستايلات المتاحة في منتداك.الاستايل يحتوي على القوالب, والصور. تستطيع تعديل الاستايلات الموجودة , حذفها, تعطيلها, اعادة تفعيلها, استيراد أو انشاء استايلات جديدة. تستطيع ايضا مشاهدة الاستايل كيف يبدو باستعمال خاصية المشاهدة. الاستايل الافتراضي الحالي لمنتداك يتم تعليمه بعلامة <*>. ايضا تمت كتابة عدد الاعضاء الذين يستعملون كل استايل, يرجى ملاحظة ان تجاهل استايلات العضو لن يتم حسابهم.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'تستطيع تعديل قالب موجود , حذفه, استيراده, تصديره ومشاهدته . تستطيع ايضا تعديل اكواد القالب المستعملة لتوليد BBcode.',
	'ACP_THEMES_EXPLAIN'	=> 'من هنا تستطيع انشاء, تركيب, تعديل, حذف, وتصدير الثيمات. الثيم عبارة عن مجموعة من الألوان والصور التي تستعمل في القوالب لاضافة جمالية على شكل المنتدى. يرجى ملاحظة انه عند انشاء ثيم جديدة سيكون لديك اختيار باستعمال ثيم اي ثيم موجود كاساس لبناءه.',
	'ADD_IMAGESET'	=> 'إنشاء صورة',
	'ADD_IMAGESET_EXPLAIN'	=> 'هنا يمكنك انشاء صور جديدة. باعتبار اعدادات السيرفر وصلاحيات الملف قد تكون لديك بعض الخيارات الاضافية هنا. تستطيع مثلا إنشاء هذه الصور على حساب اساس صور موجودة. قد تستطيع ايضا رفع او استيراد ملف ارشيف يحتوي على صور (من مجلد التخزين) . اذا قمت برفع او استيراد ارشيف فاسماء الصور قد تؤخد اختياريا من اسم الارشيف (لعمل هذا يجب عليك ترك اسم الصور فارغا).',
	'ADD_STYLE'	=> 'إنشاء استايل',
	'ADD_STYLE_EXPLAIN'	=> 'هنا يمكنك انشاء استايل جديد. باعتبار اعدادات السيرفر وصلاحيات الملف فقد تظهر لك خيارات اخرى. على سبيل المثال قد تستطيع انشاء الاستايل على حساب اساس استايل اخر موجود. قد تستطيع رفع أو استيراد ملف ارشيف يحتوي على الاستايل (من مجلد التخزين) . اذا قمت برفع او استيراد الارشيف فسوف يتم التعرف على اسم الاستايل مباشرة.',
	'ADD_TEMPLATE'	=> 'إنشاء قالب',
	'ADD_TEMPLATE_EXPLAIN'	=> 'هنا تستطيع اضافة قالب جديد. باعتبار اعدادات السيرفر وصلاحيات الملف قد تظهر لك خيارات اخرى اضافية هنا. على سبيل المثال قد تستطيع انشاء هذا القالب على اساس قالب اخر موجود. قد تستطيع ايضا رفع او استيراد ملف ارشيف يحتوي على القالب (من مجلد التخزين) . اذا قمت برفع او استيراد ارشيف فإسم القالب يمكن ان يؤخد من اسم الارشيف (لعمل هذا يجب عليك ترك اسم القالب فارغا).',
	'ADD_THEME'	=> 'إنشاء ثيم',
	'ADD_THEME_EXPLAIN'	=> 'هنا يمكنك اضافة ثيم جديد. باعتبار اعدادات السيرفر وصلاحيات الملف قد تظهر لديك خيارات اضافية اخرى هنا. على سبيل المثال تستطيع  انشاء  الثيم على اساس ثيم اخر موجود. قد تستطيع ايضا رفع او  استيراد ملف ارشيف يحتوي على الثيم (من مجلد التخزين) . اذا قمت برفع او استيراد الارشيف فاسم الثيم يمكن أخده من اسم الارشيف (لعمل هذا يجب عليك ترك اسم الثيم فارغا).',
	'ARCHIVE_FORMAT'	=> 'نوع ملف الارشيف',
	'AUTOMATIC_EXPLAIN'		=> 'Leave blank to attempt automatic detection.',
	'BACKGROUND'	=> 'الخلفية',
	'BACKGROUND_COLOUR'	=> 'لون الخلفية',
	'BACKGROUND_IMAGE'	=> 'صورة الخلفية',
	'BACKGROUND_REPEAT'	=> 'تكرار الخلفية',
	'BOLD'	=> 'سميك',
	'CACHE'	=> 'الملفات المؤقتة',
	'CACHE_CACHED'	=> 'تاريخ الإنشاء',
	'CACHE_FILENAME'	=> 'ملف القالب',
	'CACHE_FILESIZE'	=> 'حجم الملف',
	'CACHE_MODIFIED'	=> 'معدل',
	'CONFIRM_IMAGESET_REFRESH'	=> 'هل انت متأكد من انك تريد اعادة تنشيط جميع الصور ؟ الاعدادات من ملف اعدادات ملف الصور سوف يتم استبداله وكذالك جميع الاضافات الى الصور التي تم تحريرها من محرر الصور.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'هل أنت متأكد من انك تريد حذف جميع اصدارات الملفات المؤقتة لملفات القالب؟',
	'CONFIRM_TEMPLATE_REFRESH'	=> 'هل انت متأكد من انك تريد اعادة تحديث جميع بيانات القالب من قاعدة البيانات الذي يحتوي على نفس المحتويات بملف القالب في ملفات النضام؟  هذا سوف يستبدل جميع الاضافات التي تم تعديلها بواسطة محرر القالب الذي تم تخزينه في قاعدة البيانات.',
	'CONFIRM_THEME_REFRESH'	=> 'هل انت متأكد من انك تريد تحديث جميع البيانات التي تم حفظها في قاعدة البيانات ? ',
	'COPYRIGHT'	=> 'الحقوق',
	'CREATE_IMAGESET'	=> 'إنشاء صورة جديدة',
	'CREATE_STYLE'	=> 'إنشاء استايل جديد',
	'CREATE_TEMPLATE'	=> 'إنشاء قالب جديد',
	'CREATE_THEME'	=> 'إنشاء ثيم جديد',
	'CURRENT_IMAGE'	=> 'الصورة الحالية',
	'DEACTIVATE_DEFAULT'	=> 'لا يمكنك تعطيل الاستايل الافتراضي.',
	'DELETE_FROM_FS'	=> 'حذف من ملف النظام',
	'DELETE_IMAGESET'	=> 'حذف الصورة',
	'DELETE_IMAGESET_EXPLAIN'	=> 'هنا يمكنك حذف الصور المحددة من قاعدة البيانات. بالاضافة, اذا كانت لديك الصلاحيات تستطيع اختيار حذف الصور من ملفات النضام. يرجى ملاحضة ان هذه العملية لا تقبل الرجوع. اذا تم حذف الصور فلن يكون هناك امكانية لاستعادتها.',
	'DELETE_STYLE'	=> 'حذف الاستايل',
	'DELETE_STYLE_EXPLAIN'	=> 'هنا يمكنك حذف الاستايل المحدد. لا تستطيع حذف جميع عناصر الاستايل من هنا. هذه العناصر يجب ان تحذف من صفحات حذفها. كن حذرا في هذه العملية فلا يوجد هناك خيار فاستعادة الاستايلات المحذوفة.',
	'DELETE_TEMPLATE'	=> 'حذف القالب',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'تستطيع حذف القالب المحدد من قاعدة البيانات. بالاضافة, اذا كانت لديك الصلاحيات المناسبة سيكون بامكانك حذفها من ملفات النضام.يرجى ملاحضة انه اذا ما تم حذف القالب لن تكون هناك طريقة لاستعادتها.',
	'DELETE_THEME'	=> 'حذف الثيم',
	'DELETE_THEME_EXPLAIN'	=> 'هنا يمكنك حذف الثيم المحدد من قاعدة البيانات. بالاضافة, اذا كانت لديك الصلاحيات المناسبة فتستطيع حذفها من ملفات النظام. يرجى ملاحظة انه اذا ما تم حذف الثيم فلن يكون هناك طريقة لاسترجاعه.',
	'DETAILS'	=> 'تفاصيـل',
	'DIMENSIONS_EXPLAIN'	=> 'باختيارك نعم هنا سوف تكون اعدادات الطول/العرض مطلوبة.',
	'EDIT_DETAILS_IMAGESET'	=> 'تعديل تفاصيل الصور',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'	=> 'هنا تستطيع تعديل تفاصيل مجموعة الصور مثل اسمها.',
	'EDIT_DETAILS_STYLE'	=> 'تعديل الاستايل',
	'EDIT_DETAILS_STYLE_EXPLAIN'	=> 'تستطيع تعديل هذا الاستايل باستعمال الشكل بالاسفل. تستطيع تعديل القوالب الثيمات والصور وهذه هي المكونات الاساسية التي يتكون منها الاستايل. تستطيع ايضا انشاء استايل انطلاقا من الافتراضي.',
	'EDIT_DETAILS_TEMPLATE'	=> 'تعديل تفاصيل القالب',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'	=> 'هنا تستطيع تغيير بعض تفاصيل القالب مثل الاسم. قد يكون لديك ايضا خيار تخزين stylesheet من ملفات النظام الى قاعدة البيانات. هذا الخيار يتطلب اعدادات PHP خاصة وكذالك صلاحيات الكتابة على القالب .',
	'EDIT_DETAILS_THEME'	=> 'تعديل تفاصيل الثيم',
	'EDIT_DETAILS_THEME_EXPLAIN'	=> 'هنا يمكنك تعديل بعض تفاصيل الثيم مثل الاسم. قد يكون لديك ايضا يار تخزين stylesheet من ملفات النظام الى قاعدة البيانات . الخيار يتطلب اعدادات PHP وصلاحيات الكتابة على الملف stylesheet .',
	'EDIT_IMAGESET'	=> 'تعديل الصور',
	'EDIT_IMAGESET_EXPLAIN'	=> ' هنا يمكنك تعديل كل الصور التي تم تعريفها. تستطيع ايضا تحديد ابعاد الصورة. الابعاد اختيارية’ تعديلهم قد يؤدي الى بعض الاخطاء مع بعض المتصفحات. بعدم تحديدهم سيخفض قليلا من حجم قاعدة البيانات.',
	'EDIT_TEMPLATE'	=> 'تعديل القالب',
	'EDIT_TEMPLATE_EXPLAIN'	=> 'هنا تستطيع تعديل القالب مباشرة. الرجاء ملاحظة ان هذه التغييرات تكون دائمة ولا يمكن التراجع عنها بمجرت ارسالها. اذا كان php يستطيع الكتابة على ملفات القوالب في مجلد استايلك فاي تغييرات ستكون هنا سيتم تعديلها مباشرة على هذه الملفات. اذا كان php لا يمكنه الكتابة على هذه الملفات فسيتم نسخها الى قاعدة البيانات وجميع التغييرات ستكون في قاعدة البيانات فقط. .',
	'EDIT_TEMPLATE_STORED_DB'	=> 'لا يمكن الكتابة على ملف القالب لذا فقد تم تخزين القالب في قاعدة البيانات مع التغييرات التي قمت بها.',
	'EDIT_THEME'	=> 'تعديل الثيم',
	'EDIT_THEME_EXPLAIN'	=> 'هنا يمكنك تعديل الثيم المحدد, تغيير الالوان, الصور, إلخ.',
	'EDIT_THEME_STORED_DB'				=> 'ملف stylesheet لا يقبل الكتابة لدى فال stylesheet تم تخزينه في قاعدة البيانات بالتعديلات التي اجريتها.',
'EDIT_THEME_STORE_PARSED
'				=> 'ملف stylesheet لا يقبل الكتابة لدى فال stylesheet تم تخزينه في قاعدة البيانات بالتعديلات التي اجريتها.',

	'EXPORT'	=> 'تصدير',
	'FOREGROUND'	=> 'Foreground',
	'FONT_COLOUR'	=> 'لون الخط',
	'FONT_FACE'	=> 'واجهة الخط',
	'FONT_FACE_EXPLAIN'	=> 'تستطيع اضافة خطوط عديدة فقط قم بالفصل بينها بالفواصل. اذا كان العضو لا يملك الخط الاول فسوف يتم اختيار اول خط يعمل معه.',
	'FONT_SIZE'	=> 'حجم الخط',
	'GLOBAL_IMAGES'	=> 'عام',
	'HIDE_CSS'	=> 'إخفاء محرر CSS',
	'IMAGE_WIDTH'	=> 'عرض الصورة',
	'IMAGE_HEIGHT'	=> 'ارتفاع الصورة',
	'IMAGE'	=> 'الصور',
	'IMAGE_NAME'	=> 'اسم الصورة',
	'IMAGE_PARAMETER'	=> 'اعداد',
	'IMAGE_VALUE'	=> 'القيمة',
	'IMAGESET_ADDED'	=> 'تمت اضافة الصور الى ملفات النظام.',
	'IMAGESET_ADDED_DB'	=> 'تمت اضافة الصور الى قاعدة البيانات.',
	'IMAGESET_DELETED'	=> 'تم حذف الصور بنجاح.',
	'IMAGESET_DELETED_FS'	=> 'تم حذف الصور من قاعدة البيانات بنجاح لكن بعض الملفات قد بقيت في ملفات النظام.',
	'IMAGESET_DETAILS_UPDATED'	=> 'تم تحديث تفاصيل الصور بنجاح.',
	'IMAGESET_ERR_ARCHIVE'	=> 'رجاءا قم باختيار طريقة الارشيف.',
	'IMAGESET_ERR_COPY_LONG'	=> 'الحقوق لا يمكن ان تكون اكثر من 60 حرف.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'اسم الصور يجب ان يتكون فقط من ارقام وحروف, -, +, _ والمسافة.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'اسم الصورة موجود مسبقا.',
	'IMAGESET_ERR_NAME_LONG'	=> 'اسم الصورة يجب الا يتعدى 30 حرف.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'الارشيف المحدد لا يحتوي على صور صحيحة.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'يجب عليك اختيار اسم لهذه الصور.',
	'IMAGESET_EXPORT'	=> 'تصدير الصور',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'هنا يمكنك تصدير الصور على شكل ارشيف. هذا الارشيف يحتوي على جميع البيانات اللازمة لتركيب الصور على منتدى اخر. يمكنك اختيار ما ادا كنت تريد تحميل الملف مباشرة او تخزينه في ملفات النظام لتحميله لاحقا عبر ftp.',
	'IMAGESET_EXPORTED'	=> 'تم تصدير الصور بنجاح وتخزينها في %s.',
	'IMAGESET_NAME'	=> 'اسم الصورة',
	'IMAGESET_REFRESHED'	=> 'تم اعادة تنشيط الصور بنجاح.',
	'IMAGESET_UPDATED'	=> 'تم تحديث الصور بنجاح.',
	'ITALIC'	=> 'مائل',
	'IMG_CAT_BUTTONS'	=> 'أزرار ',
	'IMG_CAT_CUSTOM'	=> 'صور خاصة',
	'IMG_CAT_FOLDERS'	=> 'ايقونات المواضيع',
	'IMG_CAT_FORUMS'	=> 'ايقونات المنتدى',
	'IMG_CAT_ICONS'	=> 'الايقونات العامة',
	'IMG_CAT_LOGOS'	=> 'شعارات',
	'IMG_CAT_POLLS'	=> 'صور الاستفتاءات',
	'IMG_CAT_UI'	=> 'عناصر الواجهة العامة للعضو',
	'IMG_CAT_USER'	=> 'صور اضافية',
	'IMG_SITE_LOGO'	=> 'الشعار الرئيسي',
	'IMG_UPLOAD_BAR'	=> 'شريط تقدم الرفع',
	'IMG_POLL_LEFT'	=> 'نهاية يسار الاستفتاء',
	'IMG_POLL_CENTER'	=> 'وسط الاستفتاء',
	'IMG_POLL_RIGHT'	=> 'نهاية يمين الاستفتاء',
	'IMG_ICON_FRIEND'	=> 'اضافة كصديق',
	'IMG_ICON_FOE'	=> 'اضافة كمتجاهل',
	'IMG_FORUM_LINK'	=> 'وصلة منتدى',
	'IMG_FORUM_READ'	=> 'منتدى',
	'IMG_FORUM_READ_LOCKED'	=> 'منتدى مغلق',
	'IMG_FORUM_READ_SUBFORUM'	=> 'منتدى فرعي',
	'IMG_FORUM_UNREAD'	=> 'منتدى يحتوي على مشاركات جديدة',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'منتدى مغلق يحتوي على مشاركات جديدة',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'منتدى فرعي يحتوي على مشاركات جديدة',
	'IMG_SUBFORUM_READ'	=> 'صور المنتديات الفرعية',
	'IMG_SUBFORUM_UNREAD'	=> 'صور المشاركات الجديدة بالمنتديات الفرعية',
	'IMG_TOPIC_MOVED'	=> 'موضوع تم نقله',
	'IMG_TOPIC_READ'	=> 'الموضوع',
	'IMG_TOPIC_READ_MINE'	=> 'موضوع منشأ لـ',
	'IMG_TOPIC_READ_HOT'	=> 'موضوع شعبي',
	'IMG_TOPIC_READ_HOT_MINE'	=> 'موضوع شعبي منشأ لـ',
	'IMG_TOPIC_READ_LOCKED'	=> 'موضوع مغلق',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'موضوع مغلق منشأ لـ',
	'IMG_TOPIC_UNREAD'	=> 'موضوع يحتوي على مشاركات جديدة',
	'IMG_TOPIC_UNREAD_MINE'	=> 'موضوع جديد',
	'IMG_TOPIC_UNREAD_HOT'	=> 'موضوع شعبي يحتوي على مشاركات جديدة',
	'IMG_TOPIC_UNREAD_HOT_MINE'	=> 'موضوع شعبي جديد',
	'IMG_TOPIC_UNREAD_LOCKED'	=> 'موضوع مغلق يحتوي على مشاركات جديدة',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'موضوع مغلق جديد',
	'IMG_STICKY_READ'	=> 'موضوع مثبث',
	'IMG_STICKY_READ_MINE'	=> 'موضوع مثبث منشأ لـ',
	'IMG_STICKY_READ_LOCKED'	=> 'موضوع مثبث مغلق',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'موضوع مثبث مغلق منشأ لـ',
	'IMG_STICKY_UNREAD'	=> 'موضوع مثبث يحتوي على مشاركات جديدة',
	'IMG_STICKY_UNREAD_MINE'	=> 'موضوع مثبث جديد',
	'IMG_STICKY_UNREAD_LOCKED'	=> 'موضوع مغلق مثبث يحتوي على مشاركات جديدة',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'موضوع مثبث مغلق جديد',
	'IMG_ANNOUNCE_READ'	=> 'إعلان',
	'IMG_ANNOUNCE_READ_MINE'	=> 'اعلان منشأ لـ',
	'IMG_ANNOUNCE_READ_LOCKED'	=> 'اعلان مغلق',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'	=> 'اعلان مغلق منشأ لـ',
	'IMG_ANNOUNCE_UNREAD'	=> 'اعلان يحتوي على مشاركات جديدة',
	'IMG_ANNOUNCE_UNREAD_MINE'	=> 'اعلان جديد',
	'IMG_ANNOUNCE_UNREAD_LOCKED'	=> 'اعلان مغلق يحتوي على مشاركات جديدة',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'إعلان مغلق جديد',
	'IMG_GLOBAL_READ'	=> 'اعلان شامل',
	'IMG_GLOBAL_READ_MINE'	=> 'إعلان شامل منشأ لـ',
	'IMG_GLOBAL_READ_LOCKED'	=> 'اعلان شامل مغلق',
	'IMG_GLOBAL_READ_LOCKED_MINE'	=> 'اعلان شامل مغلق لـ',
	'IMG_GLOBAL_UNREAD'	=> 'اعلان شامل يحتوي على مشاركات جديدة',
	'IMG_GLOBAL_UNREAD_MINE'	=> 'إعلان شامل جديد',
	'IMG_GLOBAL_UNREAD_LOCKED'	=> 'اعلان شامل مغلق يحتوي على مشاركات جديدة',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'	=> 'إعلان شامل مغلق جديد',
	'IMG_PM_READ'	=> 'رسالة خاصة مقروءة',
	'IMG_PM_UNREAD'	=> 'رسالة خاصة جديدة',
	'IMG_ICON_BACK_TOP'	=> 'فوق',
	'IMG_ICON_CONTACT_AIM'	=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'ارسال بريد',
	'IMG_ICON_CONTACT_ICQ'	=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'	=> 'MSNM',
	'IMG_ICON_CONTACT_PM'	=> 'ارسال رسالة',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'	=> 'الموقع',
	'IMG_ICON_POST_DELETE'	=> 'حذف مشاركة',
	'IMG_ICON_POST_EDIT'	=> 'تعديل مشاركة',
	'IMG_ICON_POST_INFO'	=> 'عرض تفاصيل المشاركة',
	'IMG_ICON_POST_QUOTE'	=> 'اقتباس مشاركة',
	'IMG_ICON_POST_REPORT'	=> 'تبليغ عن مشاركة',
	'IMG_ICON_POST_TARGET'	=> 'Minipost',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'جديدة minipost',
	'IMG_ICON_TOPIC_ATTACH'	=> 'المرفقات',
	'IMG_ICON_TOPIC_LATEST'	=> 'اخر مشاركة',
	'IMG_ICON_TOPIC_NEWEST'	=> 'اخر مشاركة غير مقروءة',
	'IMG_ICON_TOPIC_REPORTED'	=> 'مشاركة تم التبليغ عنها',
	'IMG_ICON_TOPIC_UNAPPROVED'	=> 'مشاركة غير موافق عليها',
	'IMG_ICON_USER_ONLINE'	=> 'العضو متصل',
	'IMG_ICON_USER_OFFLINE'	=> 'العضو غير متصل',
	'IMG_ICON_USER_PROFILE'	=> 'عرض الملف الشخصي',
	'IMG_ICON_USER_SEARCH'	=> 'بحث عن مشاركات',
	'IMG_ICON_USER_WARN'	=> 'تحذير عضو',
	'IMG_BUTTON_PM_FORWARD'	=> 'الرسالة الخاصة التالية',
	'IMG_BUTTON_PM_NEW'	=> 'رسالة خاصة جديدة',
	'IMG_BUTTON_PM_REPLY'	=> 'الرد على الرسالة الخاصة',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'موضوع مغلق',
	'IMG_BUTTON_TOPIC_NEW'	=> 'موضوع جديد',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'الرد على الموضوع',
	'IMG_USER_ICON1'	=> 'تعريف صورة العضو 1',
	'IMG_USER_ICON2'	=> 'تعريف صورة العضو 2',
	'IMG_USER_ICON3'	=> 'تعريف صورة العضو 3',
	'IMG_USER_ICON4'	=> 'تعريف صورة العضو 4',
	'IMG_USER_ICON5'	=> 'تعريف صورة العضو 5',
	'IMG_USER_ICON6'	=> 'تعريف صورة العضو 6',
	'IMG_USER_ICON7'	=> 'تعريف صورة العضو 7',
	'IMG_USER_ICON8'	=> 'تعريف صورة العضو 8',
	'IMG_USER_ICON9'	=> 'تعريف صورة العضو 9',
	'IMG_USER_ICON10'	=> 'تعريف صورة العضو 10',
	'INCLUDE_DIMENSIONS'	=> 'شامل للابعاد',
	'INCLUDE_IMAGESET'	=> 'شامل للصور',
	'INCLUDE_TEMPLATE'	=> 'شامل للقالب',
	'INCLUDE_THEME'	=> 'شامل للثيم',
	'INSTALL_IMAGESET'	=> 'تركيب الصور',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'هنا يمكنك تركيب الصور التي حددتها. تستطيع تعديل بعض التفاصيل ان اردت او يمكنك تركها افتراضية.',
	'INSTALL_STYLE'	=> 'تركيب الاستايل',
	'INSTALL_STYLE_EXPLAIN'	=> 'هنا يمكنك تركيب استايل جديد واذا اقتضى الامر تركيب العناصر المقابلة. اذا كنت قد ركبت العناصر المقابل للاستايل من قبل فلن يتم استبدالهم. بعض الاستايلات تتطلب تركيب العناصر المقابلة اولا. اذا كنت تحاول تركيب الاستايل وليس لديك العناصر المقابلة فسوف يتم تنبيهك.',
	'INSTALL_TEMPLATE'	=> 'تركيب قالب',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'هنا يمكنك تركيب قالب جديد. اعتمادا على اعدادات السيرفر قد تكون لديك بعض الخيارات هنا.',
	'INSTALL_THEME'	=> 'تركيب ثيم',
	'INSTALL_THEME_EXPLAIN'	=> 'هنا تستطيع تركيب الثيم الذي حددته. تستطيع استبدال بعض التفاصيل ان اردت او يمكنك استعمال التركيب الافتراضي.',
	'INSTALLED_IMAGESET'	=> 'الصور المركبة',
	'INSTALLED_STYLE'	=> 'الاستايلات المركبة',
	'INSTALLED_TEMPLATE'	=> 'القوالب المركبة',
	'INSTALLED_THEME'	=> 'الثيمات المركبة',
	'LINE_SPACING'	=> 'مسافة السطر',
	'LOCALISED_IMAGES'	=> 'محلية',
	'NO_CLASS'	=> 'لا يمكن ايجاد class في stylesheet.',
	'NO_IMAGESET'	=> 'لا يمكن ايجاد الصور في ملف النظام.',
	'NO_IMAGE'	=> 'لا صورة',
	'NO_IMAGE_ERROR'	=> 'لا يمكن ايجاد الصور في ملفات النظام.',
	'NO_STYLE'	=> 'لا يمكن ايجاد الاستايل في ملفات النظام.',
	'NO_TEMPLATE'	=> 'لا يمكن ايجاد القوالب في ملفات النظام.',
	'NO_THEME'	=> 'لا يمكن ايجاد الثيم في ملفات النظام.',
	'NO_UNINSTALLED_IMAGESET'	=> 'لم يتم ايجاد اي صور غير مركبة.',
	'NO_UNINSTALLED_STYLE'	=> 'لم يتم ايجاد اي استايل غير مركب.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'لم يتم ايجاد اي قوالب غير مركبة.',
	'NO_UNINSTALLED_THEME'	=> 'لم يتم ايجاد اي ثيمات غير مركبة.',
	'NO_UNIT'	=> 'لا شيء',
	'ONLY_IMAGESET'	=> 'هذا فقط تدكير خاص بالصور, لا تستطيع حذفها.',
	'ONLY_STYLE'	=> 'هذا فقط تدكير خاص بالاستايل, لا تستطيع حذفه.',
	'ONLY_TEMPLATE'	=> 'هذا فقط تذكير خاص بالقالب, لا تستطيع حذفه.',
	'ONLY_THEME'	=> 'هذا فقط تذكير خاص بالثيم, لا تستطيع حذفه.',
	'OPTIONAL_BASIS'	=> 'خيارات اساسية',
	'REFRESH'	=> 'تحديث',
	'REPEAT_NO'	=> 'لا شيء',
	'REPEAT_X'	=> 'فقط أفقيا',
	'REPEAT_Y'	=> 'فقط عموديا',
	'REPEAT_ALL'	=> 'الاتجاهان',
	'REPLACE_IMAGESET'	=> 'استبدال الصورة بـ',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'هذه الصور سوف تستبدل الصور التي قمت بحذفها في أي استايلات كانت تستعمله.',
	'REPLACE_STYLE'	=> 'استبدال الاستايل بـ',
	'REPLACE_STYLE_EXPLAIN'	=> 'هذا الاستايل سيستبدل الاستايل الذي قمت بحذفه للأعضاء الذين يستعملون.',
	'REPLACE_TEMPLATE'	=> 'استبدال القالب بـ',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'هذا القالب سيتم استبداله بالقالب الذي قمت بحذفه في اي استايل تستعمله.',
	'REPLACE_THEME'	=> 'استبدال الثيم بـ',
	'REPLACE_THEME_EXPLAIN'	=> 'هذا الثيم سيقوم باستبدال الثيم الذي حذفته في استايل تستعمل.',
	'REQUIRES_IMAGESET'	=> 'الاستايل يتطلب تركيب الصور %s .',
	'REQUIRES_TEMPLATE'	=> 'الاستايل يتطلب تركيب القالب %s .',
	'REQUIRES_THEME'	=> 'الاستايل يتطلب تركيب الثيم %s.',
	'SELECT_IMAGE'	=> 'اختر صورة',
	'SELECT_TEMPLATE'	=> 'اختر ملف القالب',
	'SELECT_THEME'	=> 'اختر ملف الثيم',
	'SELECTED_IMAGE'	=> 'الصورة المحددة',
	'SELECTED_IMAGESET'	=> 'الصور المحددة',
	'SELECTED_TEMPLATE'	=> 'القالب المحدد',
	'SELECTED_TEMPLATE_FILE'	=> 'ملف القالب المحدد',
	'SELECTED_THEME'	=> 'الثيم المحدد',
	'SELECTED_THEME_FILE'	=> 'ملف الثيم المحدد',
	'STORE_DATABASE'	=> 'قاعدة البيانات',
	'STORE_FILESYSTEM'	=> 'ملفات النظام',
	'STYLE_ACTIVATE'	=> 'تفعيل',
	'STYLE_ACTIVE'	=> 'فعال',
	'STYLE_ADDED'	=> 'تمت اضافة الاستايل بنجاح.',
	'STYLE_DEACTIVATE'	=> 'تعطيل',
	'STYLE_DEFAULT'	=> 'جعله الاستايل الافتراضي',
	'STYLE_DELETED'	=> 'تم حذف الاستايل بنجاح.',
	'STYLE_DETAILS_UPDATED'	=> 'تم تعديل الاستايل بنجاح.',
	'STYLE_ERR_ARCHIVE'	=> 'رجاءً اختر طريقة الارشيف.',
	'STYLE_ERR_COPY_LONG'	=> 'الحقوق لا يجب ان تكون اكثر من 60 حرف.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'يجب عليك اختيار استايل واحد على الاقل.',
	'STYLE_ERR_NAME_CHARS'	=> 'اسم الاستايل يجب ان يتكون فقط من ارقام وحروف والرموز, -, +, _ و المسافة.',
	'STYLE_ERR_NAME_EXIST'	=> 'هناك استايل موجود بهذا الاسم.',
	'STYLE_ERR_NAME_LONG'	=> 'لا يجب ان يكون اسم الاستايل اكبر من 30 حرفا.',
	'STYLE_ERR_NO_IDS'	=> 'يجب عليك اختيار قالب, ثيم والصور لهذا الاستايل.',
	'STYLE_ERR_NOT_STYLE'	=> 'الملف المرفوع لا يحتوي على أرشيف صحيح للاستايل.',
	'STYLE_ERR_STYLE_NAME'	=> 'يجب عليك عرض اسم هذا الاستايل.',
	'STYLE_EXPORT'	=> 'تصدير الاستايل',
	'STYLE_EXPORT_EXPLAIN'	=> 'هنا تستطيع تصدير الاستايل على شكل ملف مضغوط <ارشيف>. ليس ضروريا ان يحتوي الاستايل على جميع العناصر لكن يجل على الاقل ان يحتوي على واحداً. كمثال اذا كنت قد انشأت ثيماً وصور جديدة للاستعمال الافتراضي لقالبك تستطيع ببساطة تصدير الثيم والصور وتجاهل القالب. تستطيع اختيار ما اذا كنت تريد تحميل الملف مباشرة أو تخزينه في مجلد بالنضافة لتحميله لاحقا عبر ftp.',
	'STYLE_EXPORTED'	=> 'تم تصدير الاستايل بنجاح وقد تم تخزينه في %s.',
	'STYLE_IMAGESET'	=> 'الصور',
	'STYLE_NAME'	=> 'اسم الاستاتيل',
	'STYLE_TEMPLATE'	=> 'القالب',
	'STYLE_THEME'	=> 'الثيم',
	'STYLE_USED_BY'	=> 'مستعمل من طرف (بما فيهم bots)',
	'TEMPLATE_ADDED'	=> 'تم اضافة القالب وتخزينه في ملفات النظام.',
	'TEMPLATE_ADDED_DB'	=> 'تم اضافة القالب وتخزينه في قاعدة البيانات.',
	'TEMPLATE_CACHE'	=> 'ملفات القوالب المؤقتة',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'افتراضية phpBB تقوم بحفظ الاصدار المجمع من قوالبها. قد يخفف هذا بعض الضغط عن السيرفر في كل مرة تشاهد فيها الصفحة وقد يصبح استعراض الصفحة اكثر سرعة. هنا يمكنك مشاهدة حالة الملفات المؤقتة لكل ملف وتستطيع حذف ملفات محددة أو كلها.',
	'TEMPLATE_CACHE_CLEARED'	=> 'تم حذف الملفات المؤقتة بنجاح.',
	'TEMPLATE_CACHE_EMPTY'	=> 'لا يوجد هناك ملفات مؤقتة للقوالب.',
	'TEMPLATE_DELETED'	=> 'تم حذف القالب بنجاح.',
	'TEMPLATE_DELETED_FS'	=> 'تم حذف القالب من قاعدة البيانات بنجاح لكن بعض الملفات لا يمكن حذفها من ملفات النظام.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'تم تحديث تفاصل القالب بنجاح.',
	'TEMPLATE_EDITOR'	=> 'محرر قالب HTML',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'ارتفاع محرر القالب',
	'TEMPLATE_ERR_ARCHIVE'	=> 'الرجاء اختيار طريقة الارشيف.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'لا يمكن فتح مجلد الملفات المؤقتة < cache >.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'لا يجب ان تتعدى حروف الحقوق اكثر من 60 حرف.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'اسم القالب يجب ان يحتوي فقط على الحروف والارقام, -, +, _ والمسافة.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'الاسم الدي ادخلته للقالب موجود مسبقا.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'لا يجب ان يتعدى اسم القالب اكثر من 30 حرف.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'الارشيف الدي قمت بتحديثه لا يحتوي على قالب صحيح.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'يجب عليك اختيار اسم لهذا القالب.',
	'TEMPLATE_EXPORT'	=> 'تصدير القوالب',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'هنا يمكنك تصدير القالب على شكل ارشيف. هذا الارشيف سيحتوي على جميع الملفات الضرورية لتركيب القوالب على منتدى اخر. تستطيع تحميل الملف مباشرة أو تخزينه في مجلد بنظامك حتى يمكنك تحميله لاحقا باستعمال ftp.',
	'TEMPLATE_EXPORTED'	=> 'تم تصدير القوالب بنجاح وتخزينها في %s.',
	'TEMPLATE_FILE'	=> 'ملف القالب',
	'TEMPLATE_FILE_UPDATED'	=> 'تم تحديث ملف القالب بنجاح.',
	'TEMPLATE_LOCATION'	=> 'حفظ القوالب في',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'الصور يتم تخزينها دائماً في ملفات النظام',
	'TEMPLATE_NAME'	=> 'اسم القالب',
	'TEMPLATE_REFRESHED'	=> 'تم تحديث القالب بنجاح.',
	'THEME_ADDED'	=> 'تمت إضافة ثيم جديد إلى ملفات النظام.',
	'THEME_ADDED_DB'	=> 'تمت إضافة ثيم جديد إلى قاعدة البيانات.',
	'THEME_CLASS_ADDED'	=> 'تمت اضافة class خاص بنجاح.',
	'THEME_DELETED'	=> 'تم حذف الثيم بنجاح.',
	'THEME_DELETED_FS'	=> 'ثم حذف الثيم من قاعدة البيانات لكن الملفات لم تحذف من ملفات النظام.',
	'THEME_DETAILS_UPDATED'	=> 'تم تحديث تفاصيل الثيم بنجاح.',
	'THEME_EDITOR'	=> 'محرر الثيم',
	'THEME_EDITOR_HEIGHT'	=> 'ارتفاع محرر الثيم',
	'THEME_ERR_ARCHIVE'	=> 'رجاءً اختر طريقة الأرشيف.',
	'THEME_ERR_CLASS_CHARS'	=> 'فقط الحروف والأرقام بالإضافة لـ ., :, -, _ و # صحيحة في اسم class.',
	'THEME_ERR_COPY_LONG'	=> 'الحقوق لا يجب أن تكون أكثر من 60 حرف.',
	'THEME_ERR_NAME_CHARS'	=> 'اسم الثيم يجب أن يحتوي فقط على الحروف والأرقام بالإضافة إلى, -, +, _ والمسافة.',
	'THEME_ERR_NAME_EXIST'	=> 'يوجد ثيم موجود بنفس الاسم.',
	'THEME_ERR_NAME_LONG'	=> 'لا يجب أن يتعدى اسم الثيم أكثر من 30 حرفاً.',
	'THEME_ERR_NOT_THEME'	=> 'الأرشيف الدي قمت بتحديده لا يحتوي على ثيم صحيح.',
	'THEME_ERR_REFRESH_FS'	=> 'هذا الثيم تم تخزينه في ملفات النظام لذا لن تحتاج إلى إعادة تنشيطه.',
	'THEME_ERR_STYLE_NAME'	=> 'يجب عليك كتابة اسم لهذا الثيم.',
	'THEME_FILE'	=> 'اسم الثيم',
	'THEME_EXPORT'	=> 'تصدير الثيم',
	'THEME_EXPORT_EXPLAIN'	=> 'هنا يمكنك تصدير الثيم على شكل أرشيف. هذا الأرشيف سيحتوي على جميع البيانات الضرورية لتركيب الثيم على منتدى آخر. تستطيع اختيار ما اذا كنت تريد تحميل الاستايل مباشرة أو تخزينه في ملفات النظام لتحميله لاحقاً عبر ftp.',
	'THEME_EXPORTED'	=> 'تم تصدير الثيم بنجاح وتم تخزينه في %s.',
	'THEME_LOCATION'	=> 'تخزين stylesheet في',
	'THEME_LOCATION_EXPLAIN'	=> 'الصور دائماً يتم تخزينها في ملفات النظام.',
	'THEME_NAME'	=> 'اسم الثيم',
	'THEME_REFRESHED'	=> 'تمت إعادة تنشيط الثيم بنجاح.',
	'THEME_UPDATED'	=> 'تم تحديث الثيم بنجاح.',
	'UNDERLINE'	=> 'تحته خط',
	'UNINSTALLED_IMAGESET'	=> 'إزالة الصور',
	'UNINSTALLED_STYLE'	=> 'استايلات تمت إزالتها',
	'UNINSTALLED_TEMPLATE'	=> 'قوالب تمت إزالتها',
	'UNINSTALLED_THEME'	=> 'ثيمات تمت إزالتها',
	'UNSET'	=> 'غير معروف',
));

?>