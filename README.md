
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
## Case transform

> For changing case sensitive

```
Setup:
new Mustache_Engine([
    ...
    'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
    'helpers' => [
        'case' => new MustacheFilterCaseTransform().
    ]
    ...
]);

Usage:
<h1>{{ text | case.upper }}</h1>
```
## Date transform

> For changing date format

```
Setup:
new Mustache_Engine([
    ...
    'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
    'helpers' => [
        'date' => new MustacheFilterDateTransform().
    ]
    ...
]);

Usage:
<meta itemprop="datePublished" content="{{ post.created_at | date.iso8601 }}">
```
