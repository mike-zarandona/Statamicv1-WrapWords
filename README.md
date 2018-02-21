# Statamic-WrapWords
A Statamic v1 modifier to wrap individual words with a specified tag

## What is this?
This is a variable modifier for [Statamic v1](http://v1.statamic.com). Use this modifier to wrap individual words with a specified HTML tag.

## Examples
```
// title = "Hello World"
{{ title|wrapwords:span }}

// results in:
<span>Hello</span> <span>World</span>

...

// helpertext = "Please see further reading"
{{ title|wrapwords:div }}

// results in:
<div>Please</div> <div>see</div> <div>further</div> <div>reading</div>
```

## Installation
- Create a new folder inside of your `_add-ons` folder called `wrapwords`.
- Place `mod.wrapwords.php` inside `_add-ons/wrapwords/`.

## Changelog
1.0.0 - Initial release

## Author
Mike Zarandona | [@mikezarandona](http://twitter.com/mikezarandona)
