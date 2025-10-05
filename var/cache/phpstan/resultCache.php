<?php

declare(strict_types=1);

return [
    'lastFullAnalysisTime' => 1759675124,
    'meta' => [
        'cacheVersion' => 'v12-linesToIgnore',
        'phpstanVersion' => '2.1.29',
        'metaExtensions' => [
        ],
        'phpVersion' => 80401,
        'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, paths: [/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app], level: 6, tmpDir: /home/user/PhpstormProjects/expense-management/expense_management/var/cache/phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}]}',
        'analysedPaths' => [
            0 => '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app',
        ],
        'scannedFiles' => [
        ],
        'composerLocks' => [
            '/home/user/PhpstormProjects/expense-management/expense_management/composer.lock' => 'f4ea21cac05906ed50056d8e7e64d944ce835428',
        ],
        'composerInstalled' => [
            '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/installed.php' => [
                'versions' => [
                    'brick/math' => [
                        'pretty_version' => '0.14.0',
                        'version' => '0.14.0.0',
                        'reference' => '113a8ee2656b882d4c3164fa31aa6e12cbb7aaa2',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../brick/math',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'carbonphp/carbon-doctrine-types' => [
                        'pretty_version' => '3.2.0',
                        'version' => '3.2.0.0',
                        'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../carbonphp/carbon-doctrine-types',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'cordoval/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'davedevelopment/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'dflydev/dot-access-data' => [
                        'pretty_version' => 'v3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../dflydev/dot-access-data',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/inflector' => [
                        'pretty_version' => '2.1.0',
                        'version' => '2.1.0.0',
                        'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../doctrine/inflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/lexer' => [
                        'pretty_version' => '3.0.1',
                        'version' => '3.0.1.0',
                        'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../doctrine/lexer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'dragonmantank/cron-expression' => [
                        'pretty_version' => 'v3.4.0',
                        'version' => '3.4.0.0',
                        'reference' => '8c784d071debd117328803d86b2097615b457500',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../dragonmantank/cron-expression',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'egulias/email-validator' => [
                        'pretty_version' => '4.0.4',
                        'version' => '4.0.4.0',
                        'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../egulias/email-validator',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'fakerphp/faker' => [
                        'pretty_version' => 'v1.24.1',
                        'version' => '1.24.1.0',
                        'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../fakerphp/faker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'filp/whoops' => [
                        'pretty_version' => '2.18.4',
                        'version' => '2.18.4.0',
                        'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../filp/whoops',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'fruitcake/php-cors' => [
                        'pretty_version' => 'v1.3.0',
                        'version' => '1.3.0.0',
                        'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../fruitcake/php-cors',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'graham-campbell/result-type' => [
                        'pretty_version' => 'v1.1.3',
                        'version' => '1.1.3.0',
                        'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../graham-campbell/result-type',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/guzzle' => [
                        'pretty_version' => '7.10.0',
                        'version' => '7.10.0.0',
                        'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../guzzlehttp/guzzle',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/promises' => [
                        'pretty_version' => '2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../guzzlehttp/promises',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/psr7' => [
                        'pretty_version' => '2.8.0',
                        'version' => '2.8.0.0',
                        'reference' => '21dc724a0583619cd1652f673303492272778051',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../guzzlehttp/psr7',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/uri-template' => [
                        'pretty_version' => 'v1.0.5',
                        'version' => '1.0.5.0',
                        'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../guzzlehttp/uri-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'hamcrest/hamcrest-php' => [
                        'pretty_version' => 'v2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../hamcrest/hamcrest-php',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'iamcal/sql-parser' => [
                        'pretty_version' => 'v0.6',
                        'version' => '0.6.0.0',
                        'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../iamcal/sql-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'illuminate/auth' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/broadcasting' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/bus' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/cache' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/collections' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/concurrency' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/conditionable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/config' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/console' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/container' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/contracts' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/cookie' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/database' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/encryption' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/events' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/filesystem' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/hashing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/http' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/json-schema' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/log' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/macroable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/mail' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/notifications' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/pagination' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/pipeline' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/process' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/queue' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/redis' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/routing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/session' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/support' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/testing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/translation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/validation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'illuminate/view' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.31.1',
                        ],
                    ],
                    'kodova/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'larastan/larastan' => [
                        'pretty_version' => 'v3.7.2',
                        'version' => '3.7.2.0',
                        'reference' => 'a761859a7487bd7d0cb8b662a7538a234d5bb5ae',
                        'type' => 'phpstan-extension',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../larastan/larastan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/framework' => [
                        'pretty_version' => 'v12.31.1',
                        'version' => '12.31.1.0',
                        'reference' => '281b711710c245dd8275d73132e92635be3094df',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../laravel/framework',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/pail' => [
                        'pretty_version' => 'v1.2.3',
                        'version' => '1.2.3.0',
                        'reference' => '8cc3d575c1f0e57eeb923f366a37528c50d2385a',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../laravel/pail',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/pint' => [
                        'pretty_version' => 'v1.25.1',
                        'version' => '1.25.1.0',
                        'reference' => '5016e263f95d97670d71b9a987bd8996ade6d8d9',
                        'type' => 'project',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../laravel/pint',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/prompts' => [
                        'pretty_version' => 'v0.3.7',
                        'version' => '0.3.7.0',
                        'reference' => 'a1891d362714bc40c8d23b0b1d7090f022ea27cc',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../laravel/prompts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/sail' => [
                        'pretty_version' => 'v1.46.0',
                        'version' => '1.46.0.0',
                        'reference' => 'eb90c4f113c4a9637b8fdd16e24cfc64f2b0ae6e',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../laravel/sail',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/serializable-closure' => [
                        'pretty_version' => 'v2.0.5',
                        'version' => '2.0.5.0',
                        'reference' => '3832547db6e0e2f8bb03d4093857b378c66eceed',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../laravel/serializable-closure',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/tinker' => [
                        'pretty_version' => 'v2.10.1',
                        'version' => '2.10.1.0',
                        'reference' => '22177cc71807d38f2810c6204d8f7183d88a57d3',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../laravel/tinker',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/commonmark' => [
                        'pretty_version' => '2.7.1',
                        'version' => '2.7.1.0',
                        'reference' => '10732241927d3971d28e7ea7b5712721fa2296ca',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../league/commonmark',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/config' => [
                        'pretty_version' => 'v1.2.0',
                        'version' => '1.2.0.0',
                        'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../league/config',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem' => [
                        'pretty_version' => '3.30.0',
                        'version' => '3.30.0.0',
                        'reference' => '2203e3151755d874bb2943649dae1eb8533ac93e',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../league/flysystem',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem-local' => [
                        'pretty_version' => '3.30.0',
                        'version' => '3.30.0.0',
                        'reference' => '6691915f77c7fb69adfb87dcd550052dc184ee10',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../league/flysystem-local',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/mime-type-detection' => [
                        'pretty_version' => '1.16.0',
                        'version' => '1.16.0.0',
                        'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../league/mime-type-detection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/uri' => [
                        'pretty_version' => '7.5.1',
                        'version' => '7.5.1.0',
                        'reference' => '81fb5145d2644324614cc532b28efd0215bda430',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../league/uri',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/uri-interfaces' => [
                        'pretty_version' => '7.5.0',
                        'version' => '7.5.0.0',
                        'reference' => '08cfc6c4f3d811584fb09c37e2849e6a7f9b0742',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../league/uri-interfaces',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'lorisleiva/laravel-actions' => [
                        'pretty_version' => 'v2.9.1',
                        'version' => '2.9.1.0',
                        'reference' => '11c2531366ca8bd5efcd0afc9e8047e7999926ff',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../lorisleiva/laravel-actions',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'lorisleiva/lody' => [
                        'pretty_version' => 'v0.6.0',
                        'version' => '0.6.0.0',
                        'reference' => '6bada710ebc75f06fdf62db26327be1592c4f014',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../lorisleiva/lody',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mockery/mockery' => [
                        'pretty_version' => '1.6.12',
                        'version' => '1.6.12.0',
                        'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../mockery/mockery',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'monolog/monolog' => [
                        'pretty_version' => '3.9.0',
                        'version' => '3.9.0.0',
                        'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../monolog/monolog',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mtdowling/cron-expression' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '^1.0',
                        ],
                    ],
                    'myclabs/deep-copy' => [
                        'pretty_version' => '1.13.4',
                        'version' => '1.13.4.0',
                        'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../myclabs/deep-copy',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nesbot/carbon' => [
                        'pretty_version' => '3.10.3',
                        'version' => '3.10.3.0',
                        'reference' => '8e3643dcd149ae0fe1d2ff4f2c8e4bbfad7c165f',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../nesbot/carbon',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/schema' => [
                        'pretty_version' => 'v1.3.2',
                        'version' => '1.3.2.0',
                        'reference' => 'da801d52f0354f70a638673c4a0f04e16529431d',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../nette/schema',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/utils' => [
                        'pretty_version' => 'v4.0.8',
                        'version' => '4.0.8.0',
                        'reference' => 'c930ca4e3cf4f17dcfb03037703679d2396d2ede',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../nette/utils',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nikic/php-parser' => [
                        'pretty_version' => 'v5.6.1',
                        'version' => '5.6.1.0',
                        'reference' => 'f103601b29efebd7ff4a1ca7b3eeea9e3336a2a2',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../nikic/php-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nunomaduro/collision' => [
                        'pretty_version' => 'v8.8.2',
                        'version' => '8.8.2.0',
                        'reference' => '60207965f9b7b7a4ce15a0f75d57f9dadb105bdb',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../nunomaduro/collision',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nunomaduro/termwind' => [
                        'pretty_version' => 'v2.3.1',
                        'version' => '2.3.1.0',
                        'reference' => 'dfa08f390e509967a15c22493dc0bac5733d9123',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../nunomaduro/termwind',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nwidart/laravel-modules' => [
                        'pretty_version' => 'v12.0.4',
                        'version' => '12.0.4.0',
                        'reference' => '6e1f50de63366206b06ec53bbc823282977ddd06',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../nwidart/laravel-modules',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phar-io/manifest' => [
                        'pretty_version' => '2.0.4',
                        'version' => '2.0.4.0',
                        'reference' => '54750ef60c58e43759730615a392c31c80e23176',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../phar-io/manifest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phar-io/version' => [
                        'pretty_version' => '3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../phar-io/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phiki/phiki' => [
                        'pretty_version' => 'v2.0.4',
                        'version' => '2.0.4.0',
                        'reference' => '160785c50c01077780ab217e5808f00ab8f05a13',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../phiki/phiki',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpoption/phpoption' => [
                        'pretty_version' => '1.9.4',
                        'version' => '1.9.4.0',
                        'reference' => '638a154f8d4ee6a5cfa96d6a34dfbe0cffa9566d',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../phpoption/phpoption',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpstan/phpstan' => [
                        'pretty_version' => '2.1.29',
                        'version' => '2.1.29.0',
                        'reference' => 'd618573eed4a1b6b75e37b2e0b65ac65c885d88e',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../phpstan/phpstan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-code-coverage' => [
                        'pretty_version' => '11.0.11',
                        'version' => '11.0.11.0',
                        'reference' => '4f7722aa9a7b76aa775e2d9d4e95d1ea16eeeef4',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../phpunit/php-code-coverage',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-file-iterator' => [
                        'pretty_version' => '5.1.0',
                        'version' => '5.1.0.0',
                        'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../phpunit/php-file-iterator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-invoker' => [
                        'pretty_version' => '5.0.1',
                        'version' => '5.0.1.0',
                        'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../phpunit/php-invoker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-text-template' => [
                        'pretty_version' => '4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../phpunit/php-text-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-timer' => [
                        'pretty_version' => '7.0.1',
                        'version' => '7.0.1.0',
                        'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../phpunit/php-timer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/phpunit' => [
                        'pretty_version' => '11.5.41',
                        'version' => '11.5.41.0',
                        'reference' => 'b42782bcb947d2c197aea42ce9714ee2d974b283',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../phpunit/phpunit',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'psr/clock' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../psr/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/clock-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/container' => [
                        'pretty_version' => '2.0.2',
                        'version' => '2.0.2.0',
                        'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../psr/container',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/container-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.1|2.0',
                        ],
                    ],
                    'psr/event-dispatcher' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../psr/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-client' => [
                        'pretty_version' => '1.0.3',
                        'version' => '1.0.3.0',
                        'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../psr/http-client',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-client-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-factory' => [
                        'pretty_version' => '1.1.0',
                        'version' => '1.1.0.0',
                        'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../psr/http-factory',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-factory-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-message' => [
                        'pretty_version' => '2.0',
                        'version' => '2.0.0.0',
                        'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../psr/http-message',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-message-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/log' => [
                        'pretty_version' => '3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../psr/log',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/log-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0|2.0|3.0',
                            1 => '3.0.0',
                        ],
                    ],
                    'psr/simple-cache' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../psr/simple-cache',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/simple-cache-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0|2.0|3.0',
                        ],
                    ],
                    'psy/psysh' => [
                        'pretty_version' => 'v0.12.12',
                        'version' => '0.12.12.0',
                        'reference' => 'cd23863404a40ccfaf733e3af4db2b459837f7e7',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../psy/psysh',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ralouphie/getallheaders' => [
                        'pretty_version' => '3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => '120b605dfeb996808c31b6477290a714d356e822',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../ralouphie/getallheaders',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/collection' => [
                        'pretty_version' => '2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../ramsey/collection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/uuid' => [
                        'pretty_version' => '4.9.1',
                        'version' => '4.9.1.0',
                        'reference' => '81f941f6f729b1e3ceea61d9d014f8b6c6800440',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../ramsey/uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'rhumsaa/uuid' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '4.9.1',
                        ],
                    ],
                    'sebastian/cli-parser' => [
                        'pretty_version' => '3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/cli-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/code-unit' => [
                        'pretty_version' => '3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/code-unit',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/code-unit-reverse-lookup' => [
                        'pretty_version' => '4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/code-unit-reverse-lookup',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/comparator' => [
                        'pretty_version' => '6.3.2',
                        'version' => '6.3.2.0',
                        'reference' => '85c77556683e6eee4323e4c5468641ca0237e2e8',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/comparator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/complexity' => [
                        'pretty_version' => '4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/complexity',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/diff' => [
                        'pretty_version' => '6.0.2',
                        'version' => '6.0.2.0',
                        'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/diff',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/environment' => [
                        'pretty_version' => '7.2.1',
                        'version' => '7.2.1.0',
                        'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/environment',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/exporter' => [
                        'pretty_version' => '6.3.2',
                        'version' => '6.3.2.0',
                        'reference' => '70a298763b40b213ec087c51c739efcaa90bcd74',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/exporter',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/global-state' => [
                        'pretty_version' => '7.0.2',
                        'version' => '7.0.2.0',
                        'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/global-state',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/lines-of-code' => [
                        'pretty_version' => '3.0.1',
                        'version' => '3.0.1.0',
                        'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/lines-of-code',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-enumerator' => [
                        'pretty_version' => '6.0.1',
                        'version' => '6.0.1.0',
                        'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/object-enumerator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-reflector' => [
                        'pretty_version' => '4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/object-reflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/recursion-context' => [
                        'pretty_version' => '6.0.3',
                        'version' => '6.0.3.0',
                        'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/recursion-context',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/type' => [
                        'pretty_version' => '5.1.3',
                        'version' => '5.1.3.0',
                        'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/type',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/version' => [
                        'pretty_version' => '5.0.2',
                        'version' => '5.0.2.0',
                        'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../sebastian/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/laravel-permission' => [
                        'pretty_version' => '6.21.0',
                        'version' => '6.21.0.0',
                        'reference' => '6a118e8855dfffcd90403aab77bbf35a03db51b3',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../spatie/laravel-permission',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/once' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'staabm/side-effects-detector' => [
                        'pretty_version' => '1.0.5',
                        'version' => '1.0.5.0',
                        'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../staabm/side-effects-detector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'symfony/clock' => [
                        'pretty_version' => 'v7.3.0',
                        'version' => '7.3.0.0',
                        'reference' => 'b81435fbd6648ea425d1ee96a2d8e68f4ceacd24',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/console' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => 'cb0102a1c5ac3807cf3fdf8bea96007df7fdbea7',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/console',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/css-selector' => [
                        'pretty_version' => 'v7.3.0',
                        'version' => '7.3.0.0',
                        'reference' => '601a5ce9aaad7bf10797e3663faefce9e26c24e2',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/css-selector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/deprecation-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/deprecation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/error-handler' => [
                        'pretty_version' => 'v7.3.2',
                        'version' => '7.3.2.0',
                        'reference' => '0b31a944fcd8759ae294da4d2808cbc53aebd0c3',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/error-handler',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => 'b7dc69e71de420ac04bc9ab830cf3ffebba48191',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/event-dispatcher-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.0|3.0',
                        ],
                    ],
                    'symfony/finder' => [
                        'pretty_version' => 'v7.3.2',
                        'version' => '7.3.2.0',
                        'reference' => '2a6614966ba1074fa93dae0bc804227422df4dfe',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/finder',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-foundation' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => '7475561ec27020196c49bb7c4f178d33d7d3dc00',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/http-foundation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-kernel' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => '72c304de37e1a1cec6d5d12b81187ebd4850a17b',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/http-kernel',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mailer' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => 'a32f3f45f1990db8c4341d5122a7d3a381c7e575',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/mailer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mime' => [
                        'pretty_version' => 'v7.3.2',
                        'version' => '7.3.2.0',
                        'reference' => 'e0a0f859148daf1edf6c60b398eb40bfc96697d1',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/mime',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-ctype' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/polyfill-ctype',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-grapheme' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/polyfill-intl-grapheme',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-idn' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/polyfill-intl-idn',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-normalizer' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/polyfill-intl-normalizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-mbstring' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/polyfill-mbstring',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php80' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/polyfill-php80',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php83' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/polyfill-php83',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php84' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/polyfill-php84',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php85' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/polyfill-php85',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-uuid' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/polyfill-uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/process' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => '32241012d521e2e8a9d713adb0812bb773b907f1',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/process',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/routing' => [
                        'pretty_version' => 'v7.3.2',
                        'version' => '7.3.2.0',
                        'reference' => '7614b8ca5fa89b9cd233e21b627bfc5774f586e4',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/routing',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/service-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => 'f021b05a130d35510bd6b25fe9053c2a8a15d5d4',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/service-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/string' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => '17a426cce5fd1f0901fefa9b2a490d0038fd3c9c',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/string',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => 'e0837b4cbcef63c754d89a4806575cada743a38d',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/translation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => 'df210c7a2573f1913b2d17cc95f90f53a73d8f7d',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/translation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.3|3.0',
                        ],
                    ],
                    'symfony/uid' => [
                        'pretty_version' => 'v7.3.1',
                        'version' => '7.3.1.0',
                        'reference' => 'a69f69f3159b852651a6bf45a9fdd149520525bb',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/uid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/var-dumper' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => '34d8d4c4b9597347306d1ec8eb4e1319b1e6986f',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/var-dumper',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/yaml' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => 'd4f4a66866fe2451f61296924767280ab5732d9d',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../symfony/yaml',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'theseer/tokenizer' => [
                        'pretty_version' => '1.2.3',
                        'version' => '1.2.3.0',
                        'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../theseer/tokenizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'tijsverkoyen/css-to-inline-styles' => [
                        'pretty_version' => 'v2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../tijsverkoyen/css-to-inline-styles',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'vlucas/phpdotenv' => [
                        'pretty_version' => 'v5.6.2',
                        'version' => '5.6.2.0',
                        'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../vlucas/phpdotenv',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'voku/portable-ascii' => [
                        'pretty_version' => '2.0.3',
                        'version' => '2.0.3.0',
                        'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../voku/portable-ascii',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'webmozart/assert' => [
                        'pretty_version' => '1.11.0',
                        'version' => '1.11.0.0',
                        'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
                        'type' => 'library',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../webmozart/assert',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'wikimedia/composer-merge-plugin' => [
                        'pretty_version' => 'v2.1.0',
                        'version' => '2.1.0.0',
                        'reference' => 'a03d426c8e9fb2c9c569d9deeb31a083292788bc',
                        'type' => 'composer-plugin',
                        'install_path' => '/home/user/PhpstormProjects/expense-management/expense_management/vendor/composer/../wikimedia/composer-merge-plugin',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                ],
            ],
        ],
        'executedFilesHashes' => [
            '/home/user/PhpstormProjects/expense-management/expense_management/vendor/larastan/larastan/bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
            'phar:///home/user/PhpstormProjects/expense-management/expense_management/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
            'phar:///home/user/PhpstormProjects/expense-management/expense_management/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
            'phar:///home/user/PhpstormProjects/expense-management/expense_management/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
            'phar:///home/user/PhpstormProjects/expense-management/expense_management/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
        ],
        'phpExtensions' => [
            0 => 'Core',
            1 => 'FFI',
            2 => 'PDO',
            3 => 'Phar',
            4 => 'Reflection',
            5 => 'SPL',
            6 => 'SimpleXML',
            7 => 'bcmath',
            8 => 'bz2',
            9 => 'calendar',
            10 => 'ctype',
            11 => 'curl',
            12 => 'date',
            13 => 'dba',
            14 => 'dom',
            15 => 'exif',
            16 => 'fileinfo',
            17 => 'filter',
            18 => 'ftp',
            19 => 'gd',
            20 => 'gettext',
            21 => 'gmp',
            22 => 'hash',
            23 => 'iconv',
            24 => 'igbinary',
            25 => 'imagick',
            26 => 'imap',
            27 => 'intl',
            28 => 'json',
            29 => 'ldap',
            30 => 'libxml',
            31 => 'mbstring',
            32 => 'mongodb',
            33 => 'mysqli',
            34 => 'mysqlnd',
            35 => 'openssl',
            36 => 'pcntl',
            37 => 'pcre',
            38 => 'pdo_mysql',
            39 => 'pdo_pgsql',
            40 => 'pdo_sqlite',
            41 => 'pgsql',
            42 => 'posix',
            43 => 'random',
            44 => 'readline',
            45 => 'redis',
            46 => 'session',
            47 => 'shmop',
            48 => 'soap',
            49 => 'sockets',
            50 => 'sodium',
            51 => 'sqlite3',
            52 => 'standard',
            53 => 'sysvmsg',
            54 => 'sysvsem',
            55 => 'sysvshm',
            56 => 'tokenizer',
            57 => 'xml',
            58 => 'xmlreader',
            59 => 'xmlwriter',
            60 => 'xsl',
            61 => 'zip',
            62 => 'zlib',
            63 => 'zstd',
        ],
        'stubFiles' => [
        ],
        'level' => '6',
    ],
    'projectExtensionFiles' => [
    ],
    'errorsCallback' => static function (): array {
        return [
        ];
    },
    'locallyIgnoredErrorsCallback' => static function (): array {
        return [
        ];
    },
    'linesToIgnore' => [
    ],
    'unmatchedLineIgnores' => [
    ],
    'collectedDataCallback' => static function (): array {
        return [
            '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Models/User/User.php' => [
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'Spatie\\Permission\\Traits\\HasRoles',
                    ],
                ],
            ],
            '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Providers/AdminServiceProvider.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'config',
                        1 => 91,
                    ],
                ],
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'Nwidart\\Modules\\Traits\\PathNamespace',
                    ],
                ],
            ],
        ];
    },
    'dependencies' => [
        '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Models/Role/Role.php' => [
            'fileHash' => 'f7b9c2dec8c465e72565e91689ff7e5595206e4d',
            'dependentFiles' => [
            ],
        ],
        '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Models/User/User.php' => [
            'fileHash' => 'db0af743364bf98b128294cc4a8a803bb076fd7e',
            'dependentFiles' => [
            ],
        ],
        '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Providers/AdminServiceProvider.php' => [
            'fileHash' => '1acdfd5d3a010901af44b2f5a564b94fb363814f',
            'dependentFiles' => [
            ],
        ],
        '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Providers/EventServiceProvider.php' => [
            'fileHash' => 'a5451a8dbcff41e6d48f0f013655ca156f9939bf',
            'dependentFiles' => [
                0 => '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Providers/AdminServiceProvider.php',
            ],
        ],
        '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Providers/RouteServiceProvider.php' => [
            'fileHash' => '92086307e2fc59cdda72256beeb38ae62cf01802',
            'dependentFiles' => [
                0 => '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Providers/AdminServiceProvider.php',
            ],
        ],
    ],
    'exportedNodesCallback' => static function (): array {
        return [
            '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Models/Role/Role.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\Admin\\Models\\Role\\Role',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * @property int $id
 * @property string $name
 */',
                        'namespace' => 'Modules\\Admin\\Models\\Role',
                        'uses' => [
                            'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
                            'permission' => 'Spatie\\Permission\\Models\\Permission',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Spatie\\Permission\\Models\\Role',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getRolePermissions',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/** @return Collection<int, Permission> */',
                                'namespace' => 'Modules\\Admin\\Models\\Role',
                                'uses' => [
                                    'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
                                    'permission' => 'Spatie\\Permission\\Models\\Permission',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Database\\Eloquent\\Collection',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Models/User/User.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\Admin\\Models\\User\\User',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Eloquent\\Model',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Spatie\\Permission\\Traits\\HasRoles',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'guard_name',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Providers/AdminServiceProvider.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\Admin\\Providers\\AdminServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Support\\ServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Nwidart\\Modules\\Traits\\PathNamespace',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'moduleName',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'moduleNameLower',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boot',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'register',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register the service provider.
     */',
                                'namespace' => 'Modules\\Admin\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                    'pathnamespace' => 'Nwidart\\Modules\\Traits\\PathNamespace',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'registerTranslations',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register translations.
     */',
                                'namespace' => 'Modules\\Admin\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                    'pathnamespace' => 'Nwidart\\Modules\\Traits\\PathNamespace',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'registerCommands',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register commands in the format of Command::class
     */',
                                'namespace' => 'Modules\\Admin\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                    'pathnamespace' => 'Nwidart\\Modules\\Traits\\PathNamespace',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'registerCommandSchedules',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register command Schedules.
     */',
                                'namespace' => 'Modules\\Admin\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                    'pathnamespace' => 'Nwidart\\Modules\\Traits\\PathNamespace',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'registerConfig',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register config.
     */',
                                'namespace' => 'Modules\\Admin\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                    'pathnamespace' => 'Nwidart\\Modules\\Traits\\PathNamespace',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'merge_config_from',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Merge config from the given path recursively.
     */',
                                'namespace' => 'Modules\\Admin\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                    'pathnamespace' => 'Nwidart\\Modules\\Traits\\PathNamespace',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'path',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'key',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Providers/EventServiceProvider.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\Admin\\Providers\\EventServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'listen',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */',
                                'namespace' => 'Modules\\Admin\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'shouldDiscoverEvents',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Indicates if events should be discovered.
     *
     * @var bool
     */',
                                'namespace' => 'Modules\\Admin\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => true,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'configureEmailVerification',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Configure the proper event listeners for email verification.
     */',
                                'namespace' => 'Modules\\Admin\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/home/user/PhpstormProjects/expense-management/expense_management/Modules/Admin/app/Providers/RouteServiceProvider.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Modules\\Admin\\Providers\\RouteServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'name',
                            ],
                            'phpDoc' => null,
                            'type' => 'string',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boot',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'map',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mapApiRoutes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
        ];
    },
];
