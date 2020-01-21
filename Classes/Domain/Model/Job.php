<?php
namespace Pixelink\PxJobs\Domain\Model;

/***
 *
 * This file is part of the "Jobs" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Benjamin Riezler <b.riezler@pixel-ink.de>, Pixel Ink
 *
 ***/

/**
 * Job
 */
class Job extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * subtitle
     *
     * @var string
     */
    protected $subtitle = '';

    /**
     * location
     *
     * @var string
     */
    protected $location = '';

    /**
     * jobStart
     *
     * @var string
     */
    protected $jobStart = '';

    /**
     * jobStartAdditional
     *
     * @var string
     */
    protected $jobStartAdditional = '';

    /**
     * workTime
     *
     * @var string
     */
    protected $workTime = '';

    /**
     * tasks
     *
     * @var string
     */
    protected $tasks = '';

    /**
     * perspective
     *
     * @var string
     */
    protected $perspective = '';

    /**
     * profile
     *
     * @var string
     */
    protected $profile = '';

    /**
     * lookingFor
     *
     * @var string
     */
    protected $lookingFor = '';

    /**
     * weOffer
     *
     * @var string
     */
    protected $weOffer = '';

    /**
     * aboutLocation
     *
     * @var string
     */
    protected $aboutLocation = '';

    /**
     * contactPerson
     *
     * @var string
     */
    protected $contactPerson = '';

    /**
     * workTimeAdditional
     *
     * @var string
     */
    protected $workTimeAdditional = '';

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the subtitle
     *
     * @return string $subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets the subtitle
     *
     * @param string $subtitle
     * @return void
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * Returns the location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Returns the jobStart
     *
     * @return string $jobStart
     */
    public function getJobStart()
    {
        return $this->jobStart;
    }

    /**
     * Sets the jobStart
     *
     * @param string $jobStart
     * @return void
     */
    public function setJobStart($jobStart)
    {
        $this->jobStart = $jobStart;
    }

    /**
     * Returns the tasks
     *
     * @return string $tasks
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Sets the tasks
     *
     * @param string $tasks
     * @return void
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;
    }

    /**
     * Returns the profile
     *
     * @return string $profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets the profile
     *
     * @param string $profile
     * @return void
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }

    /**
     * Returns the perspective
     *
     * @return string $perspective
     */
    public function getPerspective()
    {
        return $this->perspective;
    }

    /**
     * Sets the perspective
     *
     * @param string $perspective
     * @return void
     */
    public function setPerspective($perspective)
    {
        $this->perspective = $perspective;
    }

    /**
     * Returns the lookingFor
     *
     * @return string $lookingFor
     */
    public function getLookingFor()
    {
        return $this->lookingFor;
    }

    /**
     * Sets the lookingFor
     *
     * @param string $lookingFor
     * @return void
     */
    public function setLookingFor($lookingFor)
    {
        $this->lookingFor = $lookingFor;
    }

    /**
     * Returns the weOffer
     *
     * @return string $weOffer
     */
    public function getWeOffer()
    {
        return $this->weOffer;
    }

    /**
     * Sets the weOffer
     *
     * @param string $weOffer
     * @return void
     */
    public function setWeOffer($weOffer)
    {
        $this->weOffer = $weOffer;
    }

    /**
     * Returns the contactPerson
     *
     * @return string $contactPerson
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Sets the contactPerson
     *
     * @param string $contactPerson
     * @return void
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }

    /**
     * Returns the workTime
     *
     * @return string workTime
     */
    public function getWorkTime()
    {
        return $this->workTime;
    }

    /**
     * Sets the workTime
     *
     * @param string $workTime
     * @return void
     */
    public function setWorkTime($workTime)
    {
        $this->workTime = $workTime;
    }

    /**
     * Returns the jobStartAdditional
     *
     * @return string $jobStartAdditional
     */
    public function getJobStartAdditional()
    {
        return $this->jobStartAdditional;
    }

    /**
     * Sets the jobStartAdditional
     *
     * @param string $jobStartAdditional
     * @return void
     */
    public function setJobStartAdditional($jobStartAdditional)
    {
        $this->jobStartAdditional = $jobStartAdditional;
    }

    /**
     * Returns the aboutLocation
     *
     * @return string $aboutLocation
     */
    public function getAboutLocation()
    {
        return $this->aboutLocation;
    }

    /**
     * Sets the aboutLocation
     *
     * @param string $aboutLocation
     * @return void
     */
    public function setAboutLocation($aboutLocation)
    {
        $this->aboutLocation = $aboutLocation;
    }

    /**
     * Returns the workTimeAdditional
     *
     * @return string $workTimeAdditional
     */
    public function getWorkTimeAdditional()
    {
        return $this->workTimeAdditional;
    }

    /**
     * Sets the workTimeAdditional
     *
     * @param string $workTimeAdditional
     * @return void
     */
    public function setWorkTimeAdditional($workTimeAdditional)
    {
        $this->workTimeAdditional = $workTimeAdditional;
    }
}
