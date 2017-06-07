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
        $article1->setTitle('Djerba');
        $article1->setText('<p style="text-align:justify">Class&eacute;e destination pr&eacute;f&eacute;r&eacute;e des Chinois sur le continent Africain en 2017. La Tunisie est une ancien colonie fran&ccedil;aise qui a su garder toute sa tradition dans un esprit emprunt de tol&eacute;rance et avec un fort attrait au tourisme. De nombreux sites antiques sont &eacute;parpill&eacute;s dans la ville, qui poss&egrave;de une des plus belle collection de mosa&iuml;que romaine au monde. Le tourisme culturel est de prime en Tunisie.</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><img alt="" src="http://www.vieuxportimmo.com/wp-content/uploads/2015/06/plage-djerba.jpg" /></p>

<p style="text-align:center">&nbsp;</p>

<p><strong>Hotel&nbsp;:</strong></p>

<p><strong>Menzel el kateb&nbsp;:</strong></p>

<p>Entre maison d&#39;h&ocirc;tes et h&ocirc;tel de charme. Cet h&ocirc;tel qui recevait des invit&eacute;s de marque pendant plusieurs ann&eacute;es, vient d&#39;ouvrir ses portes laissant d&eacute;couvrir &agrave; ses h&ocirc;tes une superbe propri&eacute;t&eacute; de plus de 8 ha. C&rsquo;est lieu de vill&eacute;giature id&eacute;al pour go&ucirc;ter aux joies de la campagne &agrave; quelques kilom&egrave;tres &agrave; peine de la mer.</p>

<p><strong>Maison Le&iuml;la</strong></p>

<p>Flambant neuf, chic et design, le Radisson est certainement le plus bel h&ocirc;tel de l&#39;&icirc;le. Situ&eacute; en bordure de plage au d&eacute;but de la zone touristique, il vous offre luxe et confort dans ses 20 suites et ses 276 chambres. Elles sont r&eacute;parties en U tout autour de la piscine offrant ainsi une vue sur mer &agrave; la plupart des chambres. Assez exceptionnelle, la grande serre traversant chaque aile donne un c&ocirc;t&eacute; exotique et chaleureux. Pendant que l&#39;&eacute;quipe qualifi&eacute;e prendra en charge vos enfants, vous pourrez vous d&eacute;tendre au somptueux centre de thalasso Ath&eacute;n&eacute;e.</p>

<p>&nbsp;</p>

<p><strong>Transports&nbsp;:</strong></p>

<p>Le meilleur moyen pour moi est le taxi, ils sont tr&egrave;s nombreux et pas on&eacute;reux du tout! surtout si vous &ecirc;tes &agrave; sidi mahrez c&#39;est tout proche de Houmt souk la ville principale. Alors n&#39;h&eacute;siter pas c&#39;est le moyen de transport n&deg;1 m&ecirc;me pour les habitants locaux vous verrez. Je d&eacute;conseille fortement le bus qui est bond&eacute; presque constamment, sans clim la plupart du temps.</p>');
        $article1->setIsDraft("0");
        $article1->setImage("djerba.jpg");
        $manager->persist($article1);
        $manager->flush();

        //--------------------------------

        $article2 = new Article();
        $article2->setTitle('Dakar');
        $article2->setText('<p style="text-align:justify">Le S&eacute;n&eacute;gal est une ancienne colonie Fran&ccedil;aise et donc on parle fran&ccedil;ais. C&rsquo;est un pays o&ugrave; le d&eacute;veloppement urbain est en explosion. Une multitude de nouvelles constructions voient le jour r&eacute;guli&egrave;rement et les loyers s&rsquo;en trouvent augment&eacute;s un peu plus chaque ann&eacute;e. C&rsquo;est un territoire tr&egrave;s sauvages avec une nature intacte et grandiose. L&rsquo;occasion pour vous de pratiquer un safari touristique et aller &agrave; la rencontre des animaux de la savane tels que lions, rhinoc&eacute;ros, girafe, gazelle.</p>

<p style="text-align:justify">Je mes suis &eacute;galement rendu au lac Retba dit le lac rose qui est un des sites les plus visit&eacute;s du S&eacute;n&eacute;gal . Ce lac est fortement charg&eacute; en sel ce qui lui donne l&rsquo;aspect d&rsquo;&ecirc;tre rose au couch&eacute; du soleil.</p>

<p style="text-align:justify">Si vous vous y baign&eacute; vous ne vous enfoncerait que de quelques centim&egrave;tres tant la densit&eacute; du lac est accrue. Parfait pour lire son journal au milieu de l&rsquo;eau.</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><img alt="" src="https://az732764.vo.msecnd.net/mediatheque/Promo%20Large/promo-billet-afrique-dakar-offre-large.jpg" style="height:426px; width:879px" /></p>

<p style="text-align:center">&nbsp;</p>

<p><strong>Pr&eacute;cautions&nbsp;:</strong></p>

<p>La marche pieds nus est &agrave; &eacute;viter car les blessures au pied sont&nbsp;difficiles &agrave; cicatriser en milieu tropical. De m&ecirc;me veiller &agrave; avoir tout vos vaccins &agrave; jour avant votre d&eacute;part.</p>

<p>De mani&egrave;re g&eacute;n&eacute;rale, &eacute;viter de rouler la nuit, de circuler &agrave; proximit&eacute; des fronti&egrave;res avec la Gambie et la Guin&eacute;e Bissao.</p>

<p>&nbsp;</p>

<p><strong>H&ocirc;tels&nbsp;:</strong></p>

<p>Je vous conseil d&rsquo;opter pour une location en villa, toutes les commodit&eacute;s sont &agrave; proximit&eacute;s, repas compris vue sur la mer et acc&egrave;s &agrave; la plage avec animations et visites guid&eacute;es.</p>

<p>&nbsp;</p>

<p><strong>Transports&nbsp;:</strong></p>

<p>Louer une voiture est la meilleur des solutions si vous voulez d&eacute;couvrir le pays en dehors des circuits touristiques.</p>

<p>&nbsp;</p>

<p><strong>Restaurants&nbsp;:</strong></p>

<p>Je n&rsquo;ai pas de restaurants &agrave; vous proposer tant la qualit&eacute; est partout de mise. Vous pouvez manger pour une dizaine d&rsquo;euros &agrave; quatre de la langouste fra&icirc;chement p&ecirc;ch&eacute;e. La p&ecirc;che intensive n&rsquo;a pas sa place dans ce pays qui a su garder toutes ses ressources naturelles.</p>');
        $article2->setIsDraft("0");
        $article2->setImage("dakar.jpg");
        $manager->persist($article2);
        $manager->flush();


        //--------------------------------

        $article3 = new Article();
        $article3->setTitle('Bangkok');
        $article3->setText('<p style="text-align:justify">Bangkok est une cit&eacute; tr&eacute;pidante en comparaison avec d&rsquo;autres villes de Tha&iuml;lande, mais elle est &eacute;galement paradoxale, car elle ne subit pas le rythme effr&eacute;n&eacute; d&rsquo;autres m&eacute;gapoles asiatiques. On se croise sans se presser sur les trottoirs encombr&eacute;s de marchands, les quartiers d&rsquo;affaires succ&egrave;dent aux maisons sur pilotis et aux nombreux petits poumons verts. D&rsquo;innombrables temples vous attendent et ne ratez pas l&rsquo;occasion de d&eacute;ambuler le long des immenses march&eacute;s. On appelle la Tha&iuml;lande le pays du sourire.</p>

<p style="text-align:justify">&nbsp;</p>

<p style="text-align:center"><img alt="" src="http://lesroutardsenthailande.com/wp-content/uploads/2014/12/Grand-Palace-Bangkok.jpg" /></p>

<p style="text-align:center">&nbsp;</p>

<p><strong>Pr&eacute;cautions&nbsp;:</strong></p>

<p>Ne vous &eacute;tonnez pas de voir des hommes habill&eacute;s en femmes, la-bas ils n&rsquo;ont pas la m&ecirc;me notion unilat&eacute;rale du genre sexuel, les dieux qu&rsquo;ils v&eacute;n&egrave;rent sont &agrave; la fois m&acirc;le et femelle.. N&rsquo;insultez jamais un moine car en Tha&iuml;lande le respect est de mise, encore plus concernant un moine Boudhiste. Vous risquez de s&eacute;rieux probl&egrave;mes avec la police si vous ramenez des substances illicites, la juridiction concernant les drogues est tr&egrave;s strict.</p>

<p>&nbsp;</p>

<p><strong>H&ocirc;tels&nbsp;:</strong></p>

<p>L&rsquo;h&ocirc;tel &laquo;&nbsp;<strong>Little Chinese</strong>&nbsp;&raquo; est situ&eacute; dans le quartier chinois de la ville, c&rsquo;est un tr&egrave;s bon compromis pour ceux qui n&rsquo;ont pas un gros budget. A 200 m&egrave;tres se trouve une grande avenue traversant la moiti&eacute; de la ville, elle abrite nombres de commerces, objets touristiques.</p>

<p>&nbsp;</p>

<p><strong>Transport&nbsp;:</strong></p>

<p>Les v&eacute;los-taxi ou pouces-pouces vous abordent le long des rues pour vous amener o&ugrave; vous voulez. L&rsquo;absence de ceinture est normale. Prenez l&rsquo;occasion de monter dedans cela vous offrira une vision de la ville particuli&egrave;re et amusante, vous pouvez monter jusqu&rsquo;&agrave; 5 .</p>

<p>Le bus est tr&egrave;s abordable aussi.</p>

<p>Pour ceux qui veulent louer une voiture je vous conseil vivement de savoir exactement o&ugrave; vous voulez aller, car la grande majorit&eacute; des panneaux est &eacute;crit en Tha&iuml;landais, seul une poign&eacute;e b&eacute;n&eacute;ficient d&rsquo;une traduction anglaise.</p>

<p>&nbsp;</p>

<p><strong>Restaurants</strong>&nbsp;:</p>

<p>Partout dans la ville, la multitude de petits stands sur les trottoirs vous incite &agrave; go&ucirc;ter les saveurs du pays .</p>

<p><strong>Po Kuk Quan</strong>&nbsp;: Un restaurant de luxe avec des produits frais et des sp&eacute;cialit&eacute; locales vous sont servis.Pour nos autres europ&eacute;ens ce genre de restaurant est tr&egrave;s abordables, c&rsquo;est l&rsquo;occasion de go&ucirc;ter de la grande cuisine pour &agrave; peine le prix d&rsquo;un restaurant lambda Fran&ccedil;ais.</p>

<p>Dans les march&eacute;s vous pouvez, si le coeur et l&rsquo;estomac vous en dit, go&ucirc;ter des insectes tels que des criquets, cuites sur barbecue. Pour ma part j&rsquo;ai trouv&eacute; &ccedil;a d&eacute;licieux.</p>');
        $article3->setImage('bangkok.jpg');
        $article3->setIsDraft("0");

        $manager->persist($article3);
        $manager->flush();

        //--------------------------------

        $article4 = new Article();
        $article4->setTitle('Singapour');
        $article4->setText('<p style="text-align:justify">Malgr&eacute; que Singapour soit quelque peu boud&eacute; par les touristes du fait du haut taux de criminalit&eacute;, et des intemp&eacute;ries, c&rsquo;est une ville &agrave; visiter &agrave; out prix. Elle reste n&eacute;anmoins assez ch&egrave;re pour un ville d&rsquo;Asie.Plus connue pour son centre financier et son port de commerce d&#39;importance mondiale, la ville de Singapour est aussi une destination exotique aux multiples facettes sous ses airs de ville ultramoderne. N&eacute;anmoins pour d&eacute;couvrir une Singapour plus authentique il faut visiter sa vieille ville coloniale, ses temples ou son op&eacute;ra .</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><img alt="" src="http://i.f1g.fr/media/ext/1900x800_crop/madame.lefigaro.fr/sites/default/files/img/2016/03/escale-a-singapour-stop-over-voyage.jpg" style="height:379px; width:902px" /></p>

<p>&nbsp;</p>

<p><strong>Les pr&eacute;cautions&nbsp;:</strong></p>

<p>Singapour est beaucoup marqu&eacute; par les intemp&eacute;ries, les orages qui font chaque ann&eacute;e des victimes. Je vous conseil en temps d&rsquo;orage ( 186 jours par an) de fermer vos appareils &eacute;lectriques et &eacute;lectroniques, si vous &ecirc;tes en mer sortez imm&eacute;diatement de l&rsquo;eau, de m&ecirc;me dans une piscine.</p>

<p>Vous devez vous munir d&rsquo;un visa sous peine de se voir refoul&eacute; &agrave; l&rsquo;entr&eacute;e de la ville. L&rsquo;ambassade Fran&ccedil;aise peut vous le fournir en cas d&rsquo;extr&ecirc;me urgence.</p>

<p>Les espaces verts sont &agrave; surveiller du fait des varans et nombreux serpents pr&eacute;sents.</p>

<p>Ambulance, pompier 995:</p>

<p>Police&nbsp;: 999</p>

<p>&nbsp;</p>

<p><strong>Hotels&nbsp;:</strong></p>

<p>L&rsquo;h&ocirc;tel &laquo;&nbsp;<strong>Robertson</strong>&nbsp;&raquo; situ&eacute; &agrave; proximit&eacute; de Clark Quay est une bonne option. Vous &ecirc;tes a deux station de m&eacute;tro de Little India , a trois du quartier chinois , ainsi que Orchad Road. Vous avez la possibilit&eacute; de prendre un taxi-boat pour aller du c&ocirc;t&eacute; de ce fameux h&ocirc;tel en forme de bateau, avec le mus&eacute;e des sciences &agrave; proximit&eacute;.Au soir Clark Quay est un quartier tr&egrave;s conviviale avec ses petits restaurants , bars o&ugrave; il r&egrave;gne une ambiance festive.</p>

<p>Comptez 60 euros la nuit.</p>

<p>&nbsp;</p>

<p><strong>Mandarin H&ocirc;tel </strong>est un h&ocirc;tel de luxe se trouvant face au centre artistique Esplanade. Il se situe &eacute;galement &agrave; 12&nbsp;minutes &agrave; pied du centre commercial. &Eacute;quip&eacute; d&rsquo;une piscine, il est particuli&egrave;rement destin&eacute; aux familles.</p>

<p>Comptez 30euros la nuit.</p>

<p>&nbsp;</p>

<p><strong>Transport&nbsp;:</strong></p>

<p>je vous conseille d utiliser le m&eacute;tro pour vous d&eacute;placer, tr&egrave;s rapide, facile, et pas cher du tout. Mais attention au pic-pocket.</p>

<p>Attraction incontournable de la ville&nbsp;: les pouces-pouces qui se trouvent &agrave; chaque coin de rue.</p>

<p>&nbsp;</p>

<p><strong>Restaurants&nbsp;:</strong></p>

<p>&laquo;&nbsp;<strong>Lo Pa Sat&nbsp;</strong>&raquo; est un restaurant servant des plats indiens, chinois, si vous voulez une cuisine traditionnelle je vous le conseil fortement, les prix y sont abordables et l&rsquo;ambiance chaleureuse.</p>

<p>&laquo;&nbsp;<strong>Andr&eacute;</strong>&nbsp;&raquo; est un restaurant fran&ccedil;ais pour ceux qui ont le mal du pays, la cuisine y est excellente.</p>');
        $article4->setImage("slide3.jpg");
        $article4->setIsDraft("0");

        $manager->persist($article4);
        $manager->flush();

  //-------------------------------------

        $article5 = new Article();
        $article5->setTitle('Djerba 2');
        $article5->setText('<p style="text-align:justify">Class&eacute;e destination pr&eacute;f&eacute;r&eacute;e des Chinois sur le continent Africain en 2017. La Tunisie est une ancien colonie fran&ccedil;aise qui a su garder toute sa tradition dans un esprit emprunt de tol&eacute;rance et avec un fort attrait au tourisme. De nombreux sites antiques sont &eacute;parpill&eacute;s dans la ville, qui poss&egrave;de une des plus belle collection de mosa&iuml;que romaine au monde. Le tourisme culturel est de prime en Tunisie.</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><img alt="" src="http://www.vieuxportimmo.com/wp-content/uploads/2015/06/plage-djerba.jpg" /></p>

<p style="text-align:center">&nbsp;</p>

<p><strong>Hotel&nbsp;:</strong></p>

<p><strong>Menzel el kateb&nbsp;:</strong></p>

<p>Entre maison d&#39;h&ocirc;tes et h&ocirc;tel de charme. Cet h&ocirc;tel qui recevait des invit&eacute;s de marque pendant plusieurs ann&eacute;es, vient d&#39;ouvrir ses portes laissant d&eacute;couvrir &agrave; ses h&ocirc;tes une superbe propri&eacute;t&eacute; de plus de 8 ha. C&rsquo;est lieu de vill&eacute;giature id&eacute;al pour go&ucirc;ter aux joies de la campagne &agrave; quelques kilom&egrave;tres &agrave; peine de la mer.</p>

<p><strong>Maison Le&iuml;la</strong></p>

<p>Flambant neuf, chic et design, le Radisson est certainement le plus bel h&ocirc;tel de l&#39;&icirc;le. Situ&eacute; en bordure de plage au d&eacute;but de la zone touristique, il vous offre luxe et confort dans ses 20 suites et ses 276 chambres. Elles sont r&eacute;parties en U tout autour de la piscine offrant ainsi une vue sur mer &agrave; la plupart des chambres. Assez exceptionnelle, la grande serre traversant chaque aile donne un c&ocirc;t&eacute; exotique et chaleureux. Pendant que l&#39;&eacute;quipe qualifi&eacute;e prendra en charge vos enfants, vous pourrez vous d&eacute;tendre au somptueux centre de thalasso Ath&eacute;n&eacute;e.</p>

<p>&nbsp;</p>

<p><strong>Transports&nbsp;:</strong></p>

<p>Le meilleur moyen pour moi est le taxi, ils sont tr&egrave;s nombreux et pas on&eacute;reux du tout! surtout si vous &ecirc;tes &agrave; sidi mahrez c&#39;est tout proche de Houmt souk la ville principale. Alors n&#39;h&eacute;siter pas c&#39;est le moyen de transport n&deg;1 m&ecirc;me pour les habitants locaux vous verrez. Je d&eacute;conseille fortement le bus qui est bond&eacute; presque constamment, sans clim la plupart du temps.</p>');
        $article5->setIsDraft("0");
        $article5->setImage("djerba.jpg");
        $manager->persist($article5);
        $manager->flush();

        //--------------------------------

        $article6 = new Article();
        $article6->setTitle('Dakar 2');
        $article6->setText('<p style="text-align:justify">Le S&eacute;n&eacute;gal est une ancienne colonie Fran&ccedil;aise et donc on parle fran&ccedil;ais. C&rsquo;est un pays o&ugrave; le d&eacute;veloppement urbain est en explosion. Une multitude de nouvelles constructions voient le jour r&eacute;guli&egrave;rement et les loyers s&rsquo;en trouvent augment&eacute;s un peu plus chaque ann&eacute;e. C&rsquo;est un territoire tr&egrave;s sauvages avec une nature intacte et grandiose. L&rsquo;occasion pour vous de pratiquer un safari touristique et aller &agrave; la rencontre des animaux de la savane tels que lions, rhinoc&eacute;ros, girafe, gazelle.</p>

<p style="text-align:justify">Je mes suis &eacute;galement rendu au lac Retba dit le lac rose qui est un des sites les plus visit&eacute;s du S&eacute;n&eacute;gal . Ce lac est fortement charg&eacute; en sel ce qui lui donne l&rsquo;aspect d&rsquo;&ecirc;tre rose au couch&eacute; du soleil.</p>

<p style="text-align:justify">Si vous vous y baign&eacute; vous ne vous enfoncerait que de quelques centim&egrave;tres tant la densit&eacute; du lac est accrue. Parfait pour lire son journal au milieu de l&rsquo;eau.</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><img alt="" src="https://az732764.vo.msecnd.net/mediatheque/Promo%20Large/promo-billet-afrique-dakar-offre-large.jpg" style="height:426px; width:879px" /></p>

<p style="text-align:center">&nbsp;</p>

<p><strong>Pr&eacute;cautions&nbsp;:</strong></p>

<p>La marche pieds nus est &agrave; &eacute;viter car les blessures au pied sont&nbsp;difficiles &agrave; cicatriser en milieu tropical. De m&ecirc;me veiller &agrave; avoir tout vos vaccins &agrave; jour avant votre d&eacute;part.</p>

<p>De mani&egrave;re g&eacute;n&eacute;rale, &eacute;viter de rouler la nuit, de circuler &agrave; proximit&eacute; des fronti&egrave;res avec la Gambie et la Guin&eacute;e Bissao.</p>

<p>&nbsp;</p>

<p><strong>H&ocirc;tels&nbsp;:</strong></p>

<p>Je vous conseil d&rsquo;opter pour une location en villa, toutes les commodit&eacute;s sont &agrave; proximit&eacute;s, repas compris vue sur la mer et acc&egrave;s &agrave; la plage avec animations et visites guid&eacute;es.</p>

<p>&nbsp;</p>

<p><strong>Transports&nbsp;:</strong></p>

<p>Louer une voiture est la meilleur des solutions si vous voulez d&eacute;couvrir le pays en dehors des circuits touristiques.</p>

<p>&nbsp;</p>

<p><strong>Restaurants&nbsp;:</strong></p>

<p>Je n&rsquo;ai pas de restaurants &agrave; vous proposer tant la qualit&eacute; est partout de mise. Vous pouvez manger pour une dizaine d&rsquo;euros &agrave; quatre de la langouste fra&icirc;chement p&ecirc;ch&eacute;e. La p&ecirc;che intensive n&rsquo;a pas sa place dans ce pays qui a su garder toutes ses ressources naturelles.</p>');
        $article6->setIsDraft("0");
        $article6->setImage("dakar.jpg");
        $manager->persist($article6);
        $manager->flush();


        //--------------------------------

        $article7 = new Article();
        $article7->setTitle('Bangkok 2');
        $article7->setText('<p style="text-align:justify">Bangkok est une cit&eacute; tr&eacute;pidante en comparaison avec d&rsquo;autres villes de Tha&iuml;lande, mais elle est &eacute;galement paradoxale, car elle ne subit pas le rythme effr&eacute;n&eacute; d&rsquo;autres m&eacute;gapoles asiatiques. On se croise sans se presser sur les trottoirs encombr&eacute;s de marchands, les quartiers d&rsquo;affaires succ&egrave;dent aux maisons sur pilotis et aux nombreux petits poumons verts. D&rsquo;innombrables temples vous attendent et ne ratez pas l&rsquo;occasion de d&eacute;ambuler le long des immenses march&eacute;s. On appelle la Tha&iuml;lande le pays du sourire.</p>

<p style="text-align:justify">&nbsp;</p>

<p style="text-align:center"><img alt="" src="http://lesroutardsenthailande.com/wp-content/uploads/2014/12/Grand-Palace-Bangkok.jpg" /></p>

<p style="text-align:center">&nbsp;</p>

<p><strong>Pr&eacute;cautions&nbsp;:</strong></p>

<p>Ne vous &eacute;tonnez pas de voir des hommes habill&eacute;s en femmes, la-bas ils n&rsquo;ont pas la m&ecirc;me notion unilat&eacute;rale du genre sexuel, les dieux qu&rsquo;ils v&eacute;n&egrave;rent sont &agrave; la fois m&acirc;le et femelle.. N&rsquo;insultez jamais un moine car en Tha&iuml;lande le respect est de mise, encore plus concernant un moine Boudhiste. Vous risquez de s&eacute;rieux probl&egrave;mes avec la police si vous ramenez des substances illicites, la juridiction concernant les drogues est tr&egrave;s strict.</p>

<p>&nbsp;</p>

<p><strong>H&ocirc;tels&nbsp;:</strong></p>

<p>L&rsquo;h&ocirc;tel &laquo;&nbsp;<strong>Little Chinese</strong>&nbsp;&raquo; est situ&eacute; dans le quartier chinois de la ville, c&rsquo;est un tr&egrave;s bon compromis pour ceux qui n&rsquo;ont pas un gros budget. A 200 m&egrave;tres se trouve une grande avenue traversant la moiti&eacute; de la ville, elle abrite nombres de commerces, objets touristiques.</p>

<p>&nbsp;</p>

<p><strong>Transport&nbsp;:</strong></p>

<p>Les v&eacute;los-taxi ou pouces-pouces vous abordent le long des rues pour vous amener o&ugrave; vous voulez. L&rsquo;absence de ceinture est normale. Prenez l&rsquo;occasion de monter dedans cela vous offrira une vision de la ville particuli&egrave;re et amusante, vous pouvez monter jusqu&rsquo;&agrave; 5 .</p>

<p>Le bus est tr&egrave;s abordable aussi.</p>

<p>Pour ceux qui veulent louer une voiture je vous conseil vivement de savoir exactement o&ugrave; vous voulez aller, car la grande majorit&eacute; des panneaux est &eacute;crit en Tha&iuml;landais, seul une poign&eacute;e b&eacute;n&eacute;ficient d&rsquo;une traduction anglaise.</p>

<p>&nbsp;</p>

<p><strong>Restaurants</strong>&nbsp;:</p>

<p>Partout dans la ville, la multitude de petits stands sur les trottoirs vous incite &agrave; go&ucirc;ter les saveurs du pays .</p>

<p><strong>Po Kuk Quan</strong>&nbsp;: Un restaurant de luxe avec des produits frais et des sp&eacute;cialit&eacute; locales vous sont servis.Pour nos autres europ&eacute;ens ce genre de restaurant est tr&egrave;s abordables, c&rsquo;est l&rsquo;occasion de go&ucirc;ter de la grande cuisine pour &agrave; peine le prix d&rsquo;un restaurant lambda Fran&ccedil;ais.</p>

<p>Dans les march&eacute;s vous pouvez, si le coeur et l&rsquo;estomac vous en dit, go&ucirc;ter des insectes tels que des criquets, cuites sur barbecue. Pour ma part j&rsquo;ai trouv&eacute; &ccedil;a d&eacute;licieux.</p>');
        $article7->setImage('bangkok.jpg');
        $article7->setIsDraft("0");

        $manager->persist($article7);
        $manager->flush();

        //--------------------------------

        $article8 = new Article();
        $article8->setTitle('Singapour 2');
        $article8->setText('<p style="text-align:justify">Malgr&eacute; que Singapour soit quelque peu boud&eacute; par les touristes du fait du haut taux de criminalit&eacute;, et des intemp&eacute;ries, c&rsquo;est une ville &agrave; visiter &agrave; out prix. Elle reste n&eacute;anmoins assez ch&egrave;re pour un ville d&rsquo;Asie.Plus connue pour son centre financier et son port de commerce d&#39;importance mondiale, la ville de Singapour est aussi une destination exotique aux multiples facettes sous ses airs de ville ultramoderne. N&eacute;anmoins pour d&eacute;couvrir une Singapour plus authentique il faut visiter sa vieille ville coloniale, ses temples ou son op&eacute;ra .</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><img alt="" src="http://i.f1g.fr/media/ext/1900x800_crop/madame.lefigaro.fr/sites/default/files/img/2016/03/escale-a-singapour-stop-over-voyage.jpg" style="height:379px; width:902px" /></p>

<p>&nbsp;</p>

<p><strong>Les pr&eacute;cautions&nbsp;:</strong></p>

<p>Singapour est beaucoup marqu&eacute; par les intemp&eacute;ries, les orages qui font chaque ann&eacute;e des victimes. Je vous conseil en temps d&rsquo;orage ( 186 jours par an) de fermer vos appareils &eacute;lectriques et &eacute;lectroniques, si vous &ecirc;tes en mer sortez imm&eacute;diatement de l&rsquo;eau, de m&ecirc;me dans une piscine.</p>

<p>Vous devez vous munir d&rsquo;un visa sous peine de se voir refoul&eacute; &agrave; l&rsquo;entr&eacute;e de la ville. L&rsquo;ambassade Fran&ccedil;aise peut vous le fournir en cas d&rsquo;extr&ecirc;me urgence.</p>

<p>Les espaces verts sont &agrave; surveiller du fait des varans et nombreux serpents pr&eacute;sents.</p>

<p>Ambulance, pompier 995:</p>

<p>Police&nbsp;: 999</p>

<p>&nbsp;</p>

<p><strong>Hotels&nbsp;:</strong></p>

<p>L&rsquo;h&ocirc;tel &laquo;&nbsp;<strong>Robertson</strong>&nbsp;&raquo; situ&eacute; &agrave; proximit&eacute; de Clark Quay est une bonne option. Vous &ecirc;tes a deux station de m&eacute;tro de Little India , a trois du quartier chinois , ainsi que Orchad Road. Vous avez la possibilit&eacute; de prendre un taxi-boat pour aller du c&ocirc;t&eacute; de ce fameux h&ocirc;tel en forme de bateau, avec le mus&eacute;e des sciences &agrave; proximit&eacute;.Au soir Clark Quay est un quartier tr&egrave;s conviviale avec ses petits restaurants , bars o&ugrave; il r&egrave;gne une ambiance festive.</p>

<p>Comptez 60 euros la nuit.</p>

<p>&nbsp;</p>

<p><strong>Mandarin H&ocirc;tel </strong>est un h&ocirc;tel de luxe se trouvant face au centre artistique Esplanade. Il se situe &eacute;galement &agrave; 12&nbsp;minutes &agrave; pied du centre commercial. &Eacute;quip&eacute; d&rsquo;une piscine, il est particuli&egrave;rement destin&eacute; aux familles.</p>

<p>Comptez 30euros la nuit.</p>

<p>&nbsp;</p>

<p><strong>Transport&nbsp;:</strong></p>

<p>je vous conseille d utiliser le m&eacute;tro pour vous d&eacute;placer, tr&egrave;s rapide, facile, et pas cher du tout. Mais attention au pic-pocket.</p>

<p>Attraction incontournable de la ville&nbsp;: les pouces-pouces qui se trouvent &agrave; chaque coin de rue.</p>

<p>&nbsp;</p>

<p><strong>Restaurants&nbsp;:</strong></p>

<p>&laquo;&nbsp;<strong>Lo Pa Sat&nbsp;</strong>&raquo; est un restaurant servant des plats indiens, chinois, si vous voulez une cuisine traditionnelle je vous le conseil fortement, les prix y sont abordables et l&rsquo;ambiance chaleureuse.</p>

<p>&laquo;&nbsp;<strong>Andr&eacute;</strong>&nbsp;&raquo; est un restaurant fran&ccedil;ais pour ceux qui ont le mal du pays, la cuisine y est excellente.</p>');
        $article8->setImage("slide3.jpg");
        $article8->setIsDraft("0");

        $manager->persist($article8);
        $manager->flush();

  //-------------------------------------

              $article9 = new Article();
        $article9->setTitle('Djerba 3');
        $article9->setText('<p style="text-align:justify">Class&eacute;e destination pr&eacute;f&eacute;r&eacute;e des Chinois sur le continent Africain en 2017. La Tunisie est une ancien colonie fran&ccedil;aise qui a su garder toute sa tradition dans un esprit emprunt de tol&eacute;rance et avec un fort attrait au tourisme. De nombreux sites antiques sont &eacute;parpill&eacute;s dans la ville, qui poss&egrave;de une des plus belle collection de mosa&iuml;que romaine au monde. Le tourisme culturel est de prime en Tunisie.</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><img alt="" src="http://www.vieuxportimmo.com/wp-content/uploads/2015/06/plage-djerba.jpg" /></p>

<p style="text-align:center">&nbsp;</p>

<p><strong>Hotel&nbsp;:</strong></p>

<p><strong>Menzel el kateb&nbsp;:</strong></p>

<p>Entre maison d&#39;h&ocirc;tes et h&ocirc;tel de charme. Cet h&ocirc;tel qui recevait des invit&eacute;s de marque pendant plusieurs ann&eacute;es, vient d&#39;ouvrir ses portes laissant d&eacute;couvrir &agrave; ses h&ocirc;tes une superbe propri&eacute;t&eacute; de plus de 8 ha. C&rsquo;est lieu de vill&eacute;giature id&eacute;al pour go&ucirc;ter aux joies de la campagne &agrave; quelques kilom&egrave;tres &agrave; peine de la mer.</p>

<p><strong>Maison Le&iuml;la</strong></p>

<p>Flambant neuf, chic et design, le Radisson est certainement le plus bel h&ocirc;tel de l&#39;&icirc;le. Situ&eacute; en bordure de plage au d&eacute;but de la zone touristique, il vous offre luxe et confort dans ses 20 suites et ses 276 chambres. Elles sont r&eacute;parties en U tout autour de la piscine offrant ainsi une vue sur mer &agrave; la plupart des chambres. Assez exceptionnelle, la grande serre traversant chaque aile donne un c&ocirc;t&eacute; exotique et chaleureux. Pendant que l&#39;&eacute;quipe qualifi&eacute;e prendra en charge vos enfants, vous pourrez vous d&eacute;tendre au somptueux centre de thalasso Ath&eacute;n&eacute;e.</p>

<p>&nbsp;</p>

<p><strong>Transports&nbsp;:</strong></p>

<p>Le meilleur moyen pour moi est le taxi, ils sont tr&egrave;s nombreux et pas on&eacute;reux du tout! surtout si vous &ecirc;tes &agrave; sidi mahrez c&#39;est tout proche de Houmt souk la ville principale. Alors n&#39;h&eacute;siter pas c&#39;est le moyen de transport n&deg;1 m&ecirc;me pour les habitants locaux vous verrez. Je d&eacute;conseille fortement le bus qui est bond&eacute; presque constamment, sans clim la plupart du temps.</p>');
        $article9->setIsDraft("0");
        $article9->setImage("djerba.jpg");
        $manager->persist($article9);
        $manager->flush();

        //--------------------------------

        $article10 = new Article();
        $article10->setTitle('Dakar 3');
        $article10->setText('<p style="text-align:justify">Le S&eacute;n&eacute;gal est une ancienne colonie Fran&ccedil;aise et donc on parle fran&ccedil;ais. C&rsquo;est un pays o&ugrave; le d&eacute;veloppement urbain est en explosion. Une multitude de nouvelles constructions voient le jour r&eacute;guli&egrave;rement et les loyers s&rsquo;en trouvent augment&eacute;s un peu plus chaque ann&eacute;e. C&rsquo;est un territoire tr&egrave;s sauvages avec une nature intacte et grandiose. L&rsquo;occasion pour vous de pratiquer un safari touristique et aller &agrave; la rencontre des animaux de la savane tels que lions, rhinoc&eacute;ros, girafe, gazelle.</p>

<p style="text-align:justify">Je mes suis &eacute;galement rendu au lac Retba dit le lac rose qui est un des sites les plus visit&eacute;s du S&eacute;n&eacute;gal . Ce lac est fortement charg&eacute; en sel ce qui lui donne l&rsquo;aspect d&rsquo;&ecirc;tre rose au couch&eacute; du soleil.</p>

<p style="text-align:justify">Si vous vous y baign&eacute; vous ne vous enfoncerait que de quelques centim&egrave;tres tant la densit&eacute; du lac est accrue. Parfait pour lire son journal au milieu de l&rsquo;eau.</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><img alt="" src="https://az732764.vo.msecnd.net/mediatheque/Promo%20Large/promo-billet-afrique-dakar-offre-large.jpg" style="height:426px; width:879px" /></p>

<p style="text-align:center">&nbsp;</p>

<p><strong>Pr&eacute;cautions&nbsp;:</strong></p>

<p>La marche pieds nus est &agrave; &eacute;viter car les blessures au pied sont&nbsp;difficiles &agrave; cicatriser en milieu tropical. De m&ecirc;me veiller &agrave; avoir tout vos vaccins &agrave; jour avant votre d&eacute;part.</p>

<p>De mani&egrave;re g&eacute;n&eacute;rale, &eacute;viter de rouler la nuit, de circuler &agrave; proximit&eacute; des fronti&egrave;res avec la Gambie et la Guin&eacute;e Bissao.</p>

<p>&nbsp;</p>

<p><strong>H&ocirc;tels&nbsp;:</strong></p>

<p>Je vous conseil d&rsquo;opter pour une location en villa, toutes les commodit&eacute;s sont &agrave; proximit&eacute;s, repas compris vue sur la mer et acc&egrave;s &agrave; la plage avec animations et visites guid&eacute;es.</p>

<p>&nbsp;</p>

<p><strong>Transports&nbsp;:</strong></p>

<p>Louer une voiture est la meilleur des solutions si vous voulez d&eacute;couvrir le pays en dehors des circuits touristiques.</p>

<p>&nbsp;</p>

<p><strong>Restaurants&nbsp;:</strong></p>

<p>Je n&rsquo;ai pas de restaurants &agrave; vous proposer tant la qualit&eacute; est partout de mise. Vous pouvez manger pour une dizaine d&rsquo;euros &agrave; quatre de la langouste fra&icirc;chement p&ecirc;ch&eacute;e. La p&ecirc;che intensive n&rsquo;a pas sa place dans ce pays qui a su garder toutes ses ressources naturelles.</p>');
        $article10->setIsDraft("0");
        $article10->setImage("dakar.jpg");
        $manager->persist($article10);
        $manager->flush();


        //--------------------------------

        $article11 = new Article();
        $article11->setTitle('Bangkok 3');
        $article11->setText('<p style="text-align:justify">Bangkok est une cit&eacute; tr&eacute;pidante en comparaison avec d&rsquo;autres villes de Tha&iuml;lande, mais elle est &eacute;galement paradoxale, car elle ne subit pas le rythme effr&eacute;n&eacute; d&rsquo;autres m&eacute;gapoles asiatiques. On se croise sans se presser sur les trottoirs encombr&eacute;s de marchands, les quartiers d&rsquo;affaires succ&egrave;dent aux maisons sur pilotis et aux nombreux petits poumons verts. D&rsquo;innombrables temples vous attendent et ne ratez pas l&rsquo;occasion de d&eacute;ambuler le long des immenses march&eacute;s. On appelle la Tha&iuml;lande le pays du sourire.</p>

<p style="text-align:justify">&nbsp;</p>

<p style="text-align:center"><img alt="" src="http://lesroutardsenthailande.com/wp-content/uploads/2014/12/Grand-Palace-Bangkok.jpg" /></p>

<p style="text-align:center">&nbsp;</p>

<p><strong>Pr&eacute;cautions&nbsp;:</strong></p>

<p>Ne vous &eacute;tonnez pas de voir des hommes habill&eacute;s en femmes, la-bas ils n&rsquo;ont pas la m&ecirc;me notion unilat&eacute;rale du genre sexuel, les dieux qu&rsquo;ils v&eacute;n&egrave;rent sont &agrave; la fois m&acirc;le et femelle.. N&rsquo;insultez jamais un moine car en Tha&iuml;lande le respect est de mise, encore plus concernant un moine Boudhiste. Vous risquez de s&eacute;rieux probl&egrave;mes avec la police si vous ramenez des substances illicites, la juridiction concernant les drogues est tr&egrave;s strict.</p>

<p>&nbsp;</p>

<p><strong>H&ocirc;tels&nbsp;:</strong></p>

<p>L&rsquo;h&ocirc;tel &laquo;&nbsp;<strong>Little Chinese</strong>&nbsp;&raquo; est situ&eacute; dans le quartier chinois de la ville, c&rsquo;est un tr&egrave;s bon compromis pour ceux qui n&rsquo;ont pas un gros budget. A 200 m&egrave;tres se trouve une grande avenue traversant la moiti&eacute; de la ville, elle abrite nombres de commerces, objets touristiques.</p>

<p>&nbsp;</p>

<p><strong>Transport&nbsp;:</strong></p>

<p>Les v&eacute;los-taxi ou pouces-pouces vous abordent le long des rues pour vous amener o&ugrave; vous voulez. L&rsquo;absence de ceinture est normale. Prenez l&rsquo;occasion de monter dedans cela vous offrira une vision de la ville particuli&egrave;re et amusante, vous pouvez monter jusqu&rsquo;&agrave; 5 .</p>

<p>Le bus est tr&egrave;s abordable aussi.</p>

<p>Pour ceux qui veulent louer une voiture je vous conseil vivement de savoir exactement o&ugrave; vous voulez aller, car la grande majorit&eacute; des panneaux est &eacute;crit en Tha&iuml;landais, seul une poign&eacute;e b&eacute;n&eacute;ficient d&rsquo;une traduction anglaise.</p>

<p>&nbsp;</p>

<p><strong>Restaurants</strong>&nbsp;:</p>

<p>Partout dans la ville, la multitude de petits stands sur les trottoirs vous incite &agrave; go&ucirc;ter les saveurs du pays .</p>

<p><strong>Po Kuk Quan</strong>&nbsp;: Un restaurant de luxe avec des produits frais et des sp&eacute;cialit&eacute; locales vous sont servis.Pour nos autres europ&eacute;ens ce genre de restaurant est tr&egrave;s abordables, c&rsquo;est l&rsquo;occasion de go&ucirc;ter de la grande cuisine pour &agrave; peine le prix d&rsquo;un restaurant lambda Fran&ccedil;ais.</p>

<p>Dans les march&eacute;s vous pouvez, si le coeur et l&rsquo;estomac vous en dit, go&ucirc;ter des insectes tels que des criquets, cuites sur barbecue. Pour ma part j&rsquo;ai trouv&eacute; &ccedil;a d&eacute;licieux.</p>');
        $article11->setImage('bangkok.jpg');
        $article11->setIsDraft("1");

        $manager->persist($article11);
        $manager->flush();

        //--------------------------------

        $article12 = new Article();
        $article12->setTitle('Singapour 3');
        $article12->setText('<p style="text-align:justify">Malgr&eacute; que Singapour soit quelque peu boud&eacute; par les touristes du fait du haut taux de criminalit&eacute;, et des intemp&eacute;ries, c&rsquo;est une ville &agrave; visiter &agrave; out prix. Elle reste n&eacute;anmoins assez ch&egrave;re pour un ville d&rsquo;Asie.Plus connue pour son centre financier et son port de commerce d&#39;importance mondiale, la ville de Singapour est aussi une destination exotique aux multiples facettes sous ses airs de ville ultramoderne. N&eacute;anmoins pour d&eacute;couvrir une Singapour plus authentique il faut visiter sa vieille ville coloniale, ses temples ou son op&eacute;ra .</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><img alt="" src="http://i.f1g.fr/media/ext/1900x800_crop/madame.lefigaro.fr/sites/default/files/img/2016/03/escale-a-singapour-stop-over-voyage.jpg" style="height:379px; width:902px" /></p>

<p>&nbsp;</p>

<p><strong>Les pr&eacute;cautions&nbsp;:</strong></p>

<p>Singapour est beaucoup marqu&eacute; par les intemp&eacute;ries, les orages qui font chaque ann&eacute;e des victimes. Je vous conseil en temps d&rsquo;orage ( 186 jours par an) de fermer vos appareils &eacute;lectriques et &eacute;lectroniques, si vous &ecirc;tes en mer sortez imm&eacute;diatement de l&rsquo;eau, de m&ecirc;me dans une piscine.</p>

<p>Vous devez vous munir d&rsquo;un visa sous peine de se voir refoul&eacute; &agrave; l&rsquo;entr&eacute;e de la ville. L&rsquo;ambassade Fran&ccedil;aise peut vous le fournir en cas d&rsquo;extr&ecirc;me urgence.</p>

<p>Les espaces verts sont &agrave; surveiller du fait des varans et nombreux serpents pr&eacute;sents.</p>

<p>Ambulance, pompier 995:</p>

<p>Police&nbsp;: 999</p>

<p>&nbsp;</p>

<p><strong>Hotels&nbsp;:</strong></p>

<p>L&rsquo;h&ocirc;tel &laquo;&nbsp;<strong>Robertson</strong>&nbsp;&raquo; situ&eacute; &agrave; proximit&eacute; de Clark Quay est une bonne option. Vous &ecirc;tes a deux station de m&eacute;tro de Little India , a trois du quartier chinois , ainsi que Orchad Road. Vous avez la possibilit&eacute; de prendre un taxi-boat pour aller du c&ocirc;t&eacute; de ce fameux h&ocirc;tel en forme de bateau, avec le mus&eacute;e des sciences &agrave; proximit&eacute;.Au soir Clark Quay est un quartier tr&egrave;s conviviale avec ses petits restaurants , bars o&ugrave; il r&egrave;gne une ambiance festive.</p>

<p>Comptez 60 euros la nuit.</p>

<p>&nbsp;</p>

<p><strong>Mandarin H&ocirc;tel </strong>est un h&ocirc;tel de luxe se trouvant face au centre artistique Esplanade. Il se situe &eacute;galement &agrave; 12&nbsp;minutes &agrave; pied du centre commercial. &Eacute;quip&eacute; d&rsquo;une piscine, il est particuli&egrave;rement destin&eacute; aux familles.</p>

<p>Comptez 30euros la nuit.</p>

<p>&nbsp;</p>

<p><strong>Transport&nbsp;:</strong></p>

<p>je vous conseille d utiliser le m&eacute;tro pour vous d&eacute;placer, tr&egrave;s rapide, facile, et pas cher du tout. Mais attention au pic-pocket.</p>

<p>Attraction incontournable de la ville&nbsp;: les pouces-pouces qui se trouvent &agrave; chaque coin de rue.</p>

<p>&nbsp;</p>

<p><strong>Restaurants&nbsp;:</strong></p>

<p>&laquo;&nbsp;<strong>Lo Pa Sat&nbsp;</strong>&raquo; est un restaurant servant des plats indiens, chinois, si vous voulez une cuisine traditionnelle je vous le conseil fortement, les prix y sont abordables et l&rsquo;ambiance chaleureuse.</p>

<p>&laquo;&nbsp;<strong>Andr&eacute;</strong>&nbsp;&raquo; est un restaurant fran&ccedil;ais pour ceux qui ont le mal du pays, la cuisine y est excellente.</p>');
        $article12->setImage("slide3.jpg");
        $article12->setIsDraft("1");

        $manager->persist($article12);
        $manager->flush();

  //-------------------------------------

    }
}
