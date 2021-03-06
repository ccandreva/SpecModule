[![StyleCI](https://styleci.io/repos/37886930/shield)](https://styleci.io/repos/37886930)
ZikulaSpecModule
============

### Warning

Installing this module **and** the ZikulaSpecTheme creates a conflict in the container due to their similar names.
Themes are always "installed" so you must remove the theme in order for this module to function properly.

### Beta (for discussion)

This is a module depicting the Core-2.0.0 Extension specification.

For theme spec, please see https://github.com/zikula/SpecTheme

The module is installable, though it has no function. The module is documented throughout and is useful mainly
in solidifying and documenting the specification.

### Extension File Structure
Reference: http://symfony.com/doc/current/cookbook/bundles/best_practices.html

```
SpecBundle/
    Block/
        FooBlock.php
    Controller/
        FooController.php
        BarController.php
    DependencyInjection/
        ZikulaSpecExtension.php (required if services are used)
    Entity/
        FooEntity.php
    Form/
        Type/
            FooType.php
    Helper/
        FooHelper.php
    Listener/
        FooListener.php
    Resources/
        config/
            routing.yml (required if controllers used)
            services.xml (required if services are used)
        docs/
            index.rst
        meta/
            LICENSE
        public/
            css/
            images/
            js/
        translations/
            messages.en.pot
            zikulaspecmodule.pot
        views/
            Bar/
                index.html.twig
            Bar/
                index.html.twig
            Block/
                fooBlockDisplay.html.twig
                fooBlockModify.html.twig
    Tests/
        Controller/
           FooControllerTest.php
    vendor/
    SpecModuleInstaller.php (required)
    ZikulaSpecModule.php (required)
    CHANGELOG.md
    README.md
    composer.json (required)
    phpunit.xml.dist
```

note: Api is not a required structural item and can be best replaced by services. Other optional items are allowed
see various examples (in Zikula and Symfony ecosystems) for ideas on best practice for structural design.

note: There is no longer a `FooModuleVersion.php` file. All this data is moved to the `composer.json` file and hook
registration is moved to a Helper class.
