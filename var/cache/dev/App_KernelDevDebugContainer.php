<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWSKRaXM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWSKRaXM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWSKRaXM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWSKRaXM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWSKRaXM\App_KernelDevDebugContainer([
    'container.build_hash' => 'WSKRaXM',
    'container.build_id' => '2f0742f8',
    'container.build_time' => 1583492899,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWSKRaXM');
