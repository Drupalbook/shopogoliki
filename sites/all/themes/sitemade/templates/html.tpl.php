<?php
/**
 * @file
 * Zen theme's implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation. $language->dir
 *   contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $jump_link_target: The HTML ID of the element that the "Jump to Navigation"
 *   link should jump to. Defaults to "main-menu".
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It should be placed within the <body> tag. When selecting through CSS
 *   it's recommended that you use the body tag, e.g., "body.front". It can be
 *   manipulated through the variable $classes_array from preprocess functions.
 *   The default values can contain one or more of the following:
 *   - front: Page is the home page.
 *   - not-front: Page is not the home page.
 *   - logged-in: The current viewer is logged in.
 *   - not-logged-in: The current viewer is not logged in.
 *   - node-type-[node type]: When viewing a single node, the type of that node.
 *     For example, if the node is a Blog entry, this would be "node-type-blog".
 *     Note that the machine name of the content type will often be in a short
 *     form of the human readable label.
 *   The following only apply with the default sidebar_first and sidebar_second
 *   block regions:
 *     - two-sidebars: When both sidebars have content.
 *     - no-sidebars: When no sidebar content exists.
 *     - one-sidebar and sidebar-first or sidebar-second: A combination of the
 *       two classes when only one of the two sidebars have content.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see zen_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
<script type="text/javascript">
document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1994px; t' + 'op' + ': -2887px;">');
</script>
	
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/index.html">на сайте</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/CHerepovec/index.html">тут</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Tula/index.html">здесь</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Orenburg/index.html">найти номер телефона по фамилии в г омск</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Kirov/index.html">справочник телефонов по городу актау</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Komsomolsk/index.html">справочник адресов николаевской области</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/YAkutsk/index.html">ссылка</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Kopeisk/index.html">здесь</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Votkinsk/index.html">тольятти</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Perm/index.html">телефонная база по фамилии москвы</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Novokuzneck/index.html">справочник телефонов школ в алматы</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Murmansk/index.html">узнать свое</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Armavir/index.html">справочник организаций телефонов москвы</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Kamensk/index.html">поиск</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Korolev/index.html">справочник телефонов г кирсанова</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Kaluga/index.html">адрес по телефону жителя санкт-петербург</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Rybinsk/index.html">база для поиска человека по фамилии</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Tambov/index.html">поиск людей в контакте по фамилии и имени</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Kyzyl/index.html">поиск района</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Novorossiisk/index.html">телефонная база глазов</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Irkutsk/index.html">телефонная база москва поиск</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Orel/index.html">справочник телефонов</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Tyumen/index.html">справочник телефонов города одинцово</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Nefteyugansk/index.html">справочник адресов шахты</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Lipeck/index.html">справочник телефонов</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Bataisk/index.html">поиск телефонного номера в москве по адресу</a>
	<a href="http://lagranhuerta.cl/language/index.html">телефонная база мегафон lite 2013 онлайн</a>
	<a href="http://www.escoot.com/bill1/index.html">адресно телефонная</a>
	<a href="http://zrenie24.ru/includes/index.html">здесь</a>
	<a href="http://elit-dah.if.ua/cache/index.html">как узнать местонахождение по сотовому</a>
	<a href="http://www.cmmg.ma/profiles/index.html">мгтс справочник</a>
	<a href="http://www.fpics.ru/misc/index.html">найти телефон по адресу ялта</a>
	<a href="http://minnesotafoodallergy.org.preview.iphouse.com/themes/index.html">телефонный справочник севастополя 2013</a>
	<a href="http://storebeats.com.ua/sites/index.html">ссылка</a>
	<a href="http://nyelv.mediatop.hu/sites/all/libraries/swinxyzoom/index.html">телефонная база</a>
	<a href="http://hr.fclhosting.com/languages/index.html">найти</a>
	<a href="http://landing.4each.ru/sites/index.html">поиск</a>
	<a href="http://monsterbeats.in.ua/includes/index.html">видеорегистратор радар детектор автомобильный</a>
	<a href="http://www.schkolnick.com/misc/index.html">поиск людей в москве без адреса</a>
	<a href="http://nyugalomcenter.hu/rearc/index.html">найти номер телефона по инн</a>
	<a href="http://hearts.fclhosting.com/wp-includes/index.html">здесь</a>
	<a href="http://koneblog.ru/">Мнение Коня</a>
	
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/sitemap.xml">sitemap</a>
<script type="text/javascript">document.write('</d' + 'iv>');</script>
</body>
</html>
