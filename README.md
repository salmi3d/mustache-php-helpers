# Some useful helpers for mustache.php

## Image resize

> For dynamically resizing images in templates

```
Setup:
new Mustache_Engine([
    ...
    'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
    'helpers' => [
        'resize' => new MustacheFilterImageThumbUrl().
    ]
    ...
]);

Usage:
<img src="{{ original_image.jpg | resize.100x100 }}" alt="" />
```
