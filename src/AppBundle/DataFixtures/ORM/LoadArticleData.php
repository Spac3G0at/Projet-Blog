<?php 
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Article;

class LoadArticleData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        $article1 = new Article();
        $article1->setTitle('Mon premier article');
        $article1->setText("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $article1->setLabel("Article");
        $article1->setIsDraft("0");

        $manager->persist($article1);
        $manager->flush();

        //--------------------------------

        $article2 = new Article();
        $article2->setTitle('Article avec liste');
        $article2->setText("  <ul> <li>Lorem</li> <li>Ipsum</li> <li>Dolor</li> <li>Sit</li> <li>Amet</li> </ul>");
        $article2->setLabel("Liste");
        $article2->setIsDraft("0");

        $manager->persist($article2);
        $manager->flush();


        //--------------------------------

        $article3 = new Article();
        $article3->setTitle('Mon troisème article');
        $article3->setText("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $article3->setLabel("Article");
        $article3->setIsDraft("0");

        $manager->persist($article3);
        $manager->flush();

        //--------------------------------

        $article4 = new Article();
        $article4->setTitle('Mon quatrième article');
        $article4->setText("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $article4->setLabel("Article");
        $article4->setIsDraft("0");

        $manager->persist($article4);
        $manager->flush();

        //--------------------------------

        $article5 = new Article();
        $article5->setTitle('Mon cinquième article');
        $article5->setText("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $article5->setLabel("Article");
        $article5->setIsDraft("0");

        $manager->persist($article5);
        $manager->flush();

        //--------------------------------

        $article6 = new Article();
        $article6->setTitle('Mon sixième article');
        $article6->setText("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $article6->setLabel("Article");
        $article6->setIsDraft("0");

        $manager->persist($article6);
        $manager->flush();


    }
}