<?php
namespace Pixelink\PxJobs\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Benjamin Riezler <b.riezler@pixel-ink.de>
 */
class JobTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pixelink\PxJobs\Domain\Model\Job
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Pixelink\PxJobs\Domain\Model\Job();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSubtitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubtitle()
        );
    }

    /**
     * @test
     */
    public function setSubtitleForStringSetsSubtitle()
    {
        $this->subject->setSubtitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subtitle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLocationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocation()
        );
    }

    /**
     * @test
     */
    public function setLocationForStringSetsLocation()
    {
        $this->subject->setLocation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'location',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getJobStartReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getJobStart()
        );
    }

    /**
     * @test
     */
    public function setJobStartForStringSetsJobStart()
    {
        $this->subject->setJobStart('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'jobStart',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWorkTimeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWorkTime()
        );
    }

    /**
     * @test
     */
    public function setWorkTimeForStringSetsWorkTime()
    {
        $this->subject->setWorkTime('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'workTime',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTasksReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTasks()
        );
    }

    /**
     * @test
     */
    public function setTasksForStringSetsTasks()
    {
        $this->subject->setTasks('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tasks',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getProfileReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProfile()
        );
    }

    /**
     * @test
     */
    public function setProfileForStringSetsProfile()
    {
        $this->subject->setProfile('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'profile',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPerspectiveReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPerspective()
        );
    }

    /**
     * @test
     */
    public function setPerspectiveForStringSetsPerspective()
    {
        $this->subject->setPerspective('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'perspective',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLookingForReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLookingFor()
        );
    }

    /**
     * @test
     */
    public function setLookingForForStringSetsLookingFor()
    {
        $this->subject->setLookingFor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lookingFor',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWeOfferReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWeOffer()
        );
    }

    /**
     * @test
     */
    public function setWeOfferForStringSetsWeOffer()
    {
        $this->subject->setWeOffer('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'weOffer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContactPersonReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContactPerson()
        );
    }

    /**
     * @test
     */
    public function setContactPersonForStringSetsContactPerson()
    {
        $this->subject->setContactPerson('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'contactPerson',
            $this->subject
        );
    }
}
