# Kirby Unhang 0.2.0
Kirby Unhang is a field method for Kirby CMS that allows you to remove hanging connectives from a text.

## Installation

The recommended way is to use [Kirby CLI](https://github.com/getkirby/cli).
Go to your project's root folder, and from there:

```bash
kirby plugin:install mciszczon/kirby-unhang
```

You can clone this repo straight to your `plugins` folder as well.
Once again, from your project's root folder:

```bash
git clone https://mciszczon/kirby-unhang site/plugins/kirby-unhang
```

## Usage

Kirby Unhang is meant to be used inside a chain, and does not replace built-in Kirby methods, such as `text()` or `kirbytext()`.

It can be used in conjuction with any other field method, but it mostly makes sense to use it with longer texts (such as an article content etc.).

**Example usage:**

```php
<?php echo $page->text()->unhang()->kirbytext() ?>
```

By default, plugin will apply replacing rules for your site's language if such are available. Otherwise it'll fallback to `'en'`.
You can also specify a language different from your site language by passing an argument: `unhang('pl')`.


## TODO

Here's a list of planned features:

- [ ] Extend replacing function for Polish
- [x] Allow passing arguments for different languages

## Changelog

See the [releases page](https://github.com/mciszczon/kirby-unhang/releases) for a list of releases along with their changelogs.

---

[mciszczon.pl](https://mciszczon.pl)
