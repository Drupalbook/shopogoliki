(function ($) {
  $(document).ready(function () {
    $(".inline-colorbox").colorbox({inline: true});

    $('.node-tovar #comments .pager a').each(function () {
      $(this).attr('href', $(this).attr('href') + "#tabs-1");
    });

    var $tabs = $("#tabs").tabs();
    console.log(document.location.hash);
    if (document.location.hash == '#tabs-1') {
      $tabs.tabs('select', 0);
    } else {
      if (document.location.hash.substr(0, 8) == '#comment') {
        $tabs.tabs('select', 0);
      } else {
        $tabs.tabs('select', 1);
      }
    }

    if (document.location.hash.substr(0, 13) == '#comment-form') {
      $('#block-views-all-photos-block').hide();
    }

    $('#block-views-all-photos-block').appendTo('#tabs #tabs-2');


    $(".fancybox-thumb").each(function () {
      $(this).attr("title", "<a href='" + $(this).attr('alt') + "'>" + $(this).attr('title') + "</a>");
    });

    $(".fancybox-thumb").fancybox({
      prevEffect: 'none',
      nextEffect: 'none',
      // title : '<a href="' + $(".fancybox-thumb").attr("alt") + '">' +  $(".fancybox-thumb").attr("title") + ' - Перейти на страницу товара</a>',
      helpers: {
        title: {
          type: 'outside'
        },
        overlay: {
          opacity: 0.8,
          css: {
            'background-color': '#000'
          }
        },
        thumbs: {
          width: 50,
          height: 50
        }
      },
      'afterLoad': function () {

      },
    });


    $('.comment-form .form-actions input:disabled').removeAttr('disabled');

  });
})(jQuery);