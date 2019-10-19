<?php

namespace App\Models;

use LeanCloud\LeanObject;

class Project extends LeanObject
{
    protected static $className = "Project";
}
Project::registerClass();
