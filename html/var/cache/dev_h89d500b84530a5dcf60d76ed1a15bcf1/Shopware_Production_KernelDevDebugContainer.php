<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQfbFqxp\Shopware_Production_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQfbFqxp/Shopware_Production_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQfbFqxp.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQfbFqxp\Shopware_Production_KernelDevDebugContainer::class, Shopware_Production_KernelDevDebugContainer::class, false);
}

return new \ContainerQfbFqxp\Shopware_Production_KernelDevDebugContainer([
    'container.build_hash' => 'QfbFqxp',
    'container.build_id' => 'ddd2977f',
    'container.build_time' => 1626237613,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQfbFqxp');
