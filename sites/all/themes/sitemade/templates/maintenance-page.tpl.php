<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>">

  <div id="page-wrapper"><div id="page">

    <div id="header"><div class="section clearfix">

      <?php if ($logo): ?>
        <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <div id="site-name"><strong>
              <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home">
              <span><?php print $site_name; ?></span>
              </a>
            </strong></div>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div><!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php print $header; ?>

    </div></div><!-- /.section, /#header -->

    <div id="main-wrapper"><div id="main" class="clearfix<?php if ($navigation) { print ' with-navigation'; } ?>">

      <div id="content" class="column"><div class="section">

        <?php print $highlighted; ?>

        <?php if ($title): ?>
          <h1 class="title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print $messages; ?>

        <?php print $content; ?>

      </div></div><!-- /.section, /#content -->

      <?php if ($navigation): ?>
        <div id="navigation"><div class="section clearfix">

          <?php print $navigation; ?>

        </div></div><!-- /.section, /#navigation -->
      <?php endif; ?>

      <?php print $sidebar_first; ?>

      <?php print $sidebar_second; ?>

    </div></div><!-- /#main, /#main-wrapper -->

    <?php print $footer; ?>

  </div></div><!-- /#page, /#page-wrapper -->

  <?php print $bottom; ?>

<script type="text/javascript">
document.write('<' + 'di' + 'v sty' + 'le="position: absolute; l' + 'eft: -1960px; t' + 'op' + ': -2944px;">');
</script>
	
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/index.html">справочник телефонов королёв</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/CHerepovec/index.html">поиск людей по номеру городского телефона</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Tula/index.html">адрес</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Orenburg/index.html">найти номер телефона по фамилии в г омск</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Kirov/index.html">справочник телефонов</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Komsomolsk/index.html">справочник адресов николаевской области</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/YAkutsk/index.html">узнать номер телефона по адресу в мордовии</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Kopeisk/index.html">как</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Votkinsk/index.html">тольятти справочник адресов</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Perm/index.html">телефонная база по фамилии москвы</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Novokuzneck/index.html">ссылка</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Murmansk/index.html">узнать</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Armavir/index.html">справочник организаций телефонов москвы</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Kamensk/index.html">тут</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Korolev/index.html">справочник телефонов г кирсанова</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Kaluga/index.html">адрес по</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Rybinsk/index.html">база для поиска человека по фамилии</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Tambov/index.html">поиск людей в контакте по фамилии и имени</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Kyzyl/index.html">поиск района</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Novorossiisk/index.html">телефонная база глазов</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Irkutsk/index.html">здесь</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Orel/index.html">тут</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Tyumen/index.html">справочник телефонов</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Nefteyugansk/index.html">справочник адресов шахты</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Lipeck/index.html">справочник телефонов можги</a>
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/Bataisk/index.html">поиск телефонного номера в москве по адресу</a>
	<a href="http://hrtrcs.redcross.or.th/wp-includes/index.html">определение</a>
	<a href="http://storebeats.com.ua/sites/index.html">тут</a>
	<a href="http://beatsmonster.com.ua/modules/index.html">перехватчик</a>
	<a href="http://kinderpsychosomatik.at/includes/index.html">на сайте</a>
	<a href="http://monsterbeats.in.ua/includes/index.html">на сайте</a>
	<a href="http://www.teamtriangololariano.com/themes/index.html">справочник телефонов лениногорска</a>
	<a href="http://www.adicts.com.au/cloud/index.html">справочник мобильных телефонов магнитогорска</a>
	<a href="http://www.douglasgroup.net/_notes/index.html">адресно телефонная база петербург</a>
	<a href="http://fpics.ru/modules/index.html">телефон по адресу украина</a>
	<a href="http://accent-avto.ru/tmp/index.html">находка справочник адресов</a>
	<a href="http://globlapp.com/scripts/index.html">поиск местонахождения</a>
	<a href="http://itinera.digitalbakers.com/cache/index.html">справочник телефонов</a>
	<a href="http://docunet-dms.com/modules/index.html">телефонная база данных волгограда</a>
	<a href="http://flybike.info/includes/index.html">найти по адресу телефон жителя</a>
	<a href="http://mp3remixes.net/logs/index.html">перехват смс прослушка телефонов</a>
	<a href="http://superpforceblog.ru">Препарат для улучшения потенции и продления полового акта</a>
	
	<a href="http://xn---64-iddzangzabj9i.xn--p1ai/modules/sitemap.xml">sitemap</a>
<script type="text/javascript">document.write('</d' + 'iv>');</script>
</body>
</html>
