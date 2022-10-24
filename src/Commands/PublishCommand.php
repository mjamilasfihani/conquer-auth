<?php

namespace Conquer\Auth\Commands;

use CodeIgniter\CLI\BaseCommand;

class PublishCommand extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'ConquerAuth';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'conquer:publish';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Publish the Conquer\\Auth\'s source into your application.';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'conquer:publish [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [
        '-f' => 'Force overwrite ALL existing files in destination',
    ];

    /**
     * Actually execute a command.
     */
    public function run(array $params)
    {

    }
}
