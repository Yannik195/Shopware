<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXnq4C4N\Shopware_Production_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXnq4C4N/Shopware_Production_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXnq4C4N.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXnq4C4N\Shopware_Production_KernelDevDebugContainer::class, Shopware_Production_KernelDevDebugContainer::class, false);
}

return new \ContainerXnq4C4N\Shopware_Production_KernelDevDebugContainer([
    'container.build_hash' => 'Xnq4C4N',
    'container.build_id' => '52922ac2',
    'container.build_time' => 1630504341,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXnq4C4N');