<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerImxRzZh\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerImxRzZh/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerImxRzZh.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerImxRzZh\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerImxRzZh\App_KernelTestDebugContainer([
    'container.build_hash' => 'ImxRzZh',
    'container.build_id' => '304e4fe7',
    'container.build_time' => 1613809609,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerImxRzZh');