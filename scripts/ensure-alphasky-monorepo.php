<?php

declare(strict_types=1);

$repoUrl = 'https://github.com/alphasky-org/alphasky-monorepo.git';
$targetDir = __DIR__ . '/../vendor/alphasky';

if (is_dir($targetDir . '/.git')) {
    fwrite(STDOUT, "alphasky-monorepo is already available in vendor/alphasky.\n");
    exit(0);
}

if (!is_dir(dirname($targetDir)) && !mkdir(dirname($targetDir), 0777, true) && !is_dir(dirname($targetDir))) {
    fwrite(STDERR, "Unable to create vendor directory.\n");
    exit(1);
}

$command = sprintf(
    'git clone --depth=1 %s %s 2>&1',
    escapeshellarg($repoUrl),
    escapeshellarg($targetDir)
);

fwrite(STDOUT, "Cloning alphasky-monorepo into vendor/alphasky...\n");
exec($command, $output, $exitCode);

if (!empty($output)) {
    fwrite(STDOUT, implode(PHP_EOL, $output) . PHP_EOL);
}

if ($exitCode !== 0) {
    fwrite(STDERR, "Failed to clone alphasky-monorepo. Please clone it manually into vendor/alphasky.\n");
    exit($exitCode);
}

fwrite(STDOUT, "alphasky-monorepo cloned successfully.\n");
