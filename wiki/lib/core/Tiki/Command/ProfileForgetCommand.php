<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: ProfileForgetCommand.php 45723 2013-04-26 17:31:12Z changi67 $

namespace Tiki\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ProfileForgetCommand extends Command
{
	protected function configure()
	{
		$this
			->setName('profile:forget')
			->setDescription('Forget a profile installation')
			->addArgument(
				'profile',
				InputArgument::REQUIRED,
				'Profile name'
			)
			->addArgument(
				'repository',
				InputArgument::OPTIONAL,
				'Repository',
				'profiles.tiki.org'
			);
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$profileName = $input->getArgument('profile');
		$repository = $input->getArgument('repository');

		$profile = \Tiki_Profile::fromNames($repository, $profileName);

		if (! $profile) {
			$output->writeln('<error>Profile not found.</error>');
			return;
		}

		$tikilib = \TikiLib::lib('tiki');

		$installer = new \Tiki_Profile_Installer;
		$isInstalled = $installer->isInstalled($profile);

		if ($isInstalled) {
			$transaction = $tikilib->begin();
			$installer->forget($profile);
			$transaction->commit();
			$output->writeln('Profile forgotten.');
		} else {
			$output->writeln('<info>Profile was not installed.</info>');
		}
	}
}
