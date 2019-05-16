<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class GrtBuildAssetsCommand extends Command
{
    private $params;

    protected static $defaultName = 'grt:build-assets';

    public function __construct(ParameterBagInterface $bag)
    {
        $this->params = $bag;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Builds the assets required by the app');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $params = $this->params;
        $io = new SymfonyStyle($input, $output);
        $errors = false;

        $kernelDir = $params->get('kernel.project_dir');
        $vendorDir = $kernelDir . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR;

        //Validate each given repositories and copy them inside the
        //public folder as their own repositories
        $folders = $params->get('grt-build-assets-folders');

        if (!is_array($folders)) {
            $io->caution('No folders to build.');
            return;
        }

        foreach ($folders as $folder) {
            if (is_dir($folder)) {

            } else {
                $io->caution(sprintf('Given directory %s does not exist.', $folder));
                $errors = true;
            }
        }

        $successMsg = 'Assets were built';
        $withErrMsg = ' with errors';
        $msg = $successMsg . ($errors ?? $withErrMsg);

        $io->success($msg . '.');
    }
}
