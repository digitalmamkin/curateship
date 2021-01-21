<?php

namespace App\Shortcodes;
use Modules\Tag\Entities\Tag;

class TagTitleShortcode {

  public function register($shortcode, $content, $compiler, $name, $viewData)
  {
    // parse current url: url path should be LOCALE/POST_SLUG in this case
    $url = parse_url(url()->current());
    $paths = explode("/", trim($url['path'], "/"));
    $tag_name = $paths[count($paths) - 1];
    $path2 = $paths[count($paths) - 2];
    $path1 = $paths[count($paths) - 3];

    // validate $locale
    if (count($paths) == 3 && $path1 == 'pages' && $path2 == 'tag-archive') {
      // get tag by name
      $tag = Tag::firstWhere('name', $tag_name);

      if (!$tag) {
        return '';
      }

      return $tag->name;
    }

    return '';
  }
}