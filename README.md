# EmilioMg Frontpage Bundle

This Symfony-Bundle provides an easy to use generic Frontpage.

## Installation

1) Add the bundle in your `composer.json`:  

``` 
"require": {
    "emiliomg/frontpage-bundle": "~1.0"
}
```

2) Register the bundle in `app/AppKernel.php`:

```
// app/AppKernel.php
public function registerBundles()
{
    return array(
        // ...
        new EmilioMg\FrontpageBundle\EmilioMgFrontpageBundle(),
    );
}
```

3) Import the routing definition in `app/config/routing.yml`:

```
# app/config/routing.yml
emiliomg_frontpage:
    resource: "@EmilioMgFrontpageBundle/Resources/config/routing.yml"
    prefix:   /
```

4) Install the assets

```
	$ bin/console assets:install
```

5) (Optional) Enable the bundles configuration in `app/config/config.yml`:

```
# app/config/config.yml
emilio_mg_frontpage: ~	
```


## Configuration

The default text is rather generic. If you want to use your own text (which is recommended), override the bundle's config in `app/config/config.yml`:

```
emilio_mg_frontpage:
    text: "The text I want to display. Text in #hashtags# will be emphasised."
    title: "The Title of the page. If not set, the title will equal the text."
```