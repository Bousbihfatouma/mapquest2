<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

/*
$articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle('La violence verbale');
         $articlesBlog->setArtSlug('la-violence-verbale');
         $articlesBlog->setArtText('La violence verbale peut s’entendre. Si certains hommes
         violents vont, élever le ton, pour intimider leurs compagnes, d’autres, au contraire,
         vont prendre une voix plus suave, la victime reconnaîtra bientôt cette tonalité dangereuse. Un autre gardera son timbre habituel, mais abreuvera d’injures, de menaces, de sarcasmes sa compagne. ');
         $articlesBlog->setArtImage('violence1.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::TYPES_DE_VIOLENCE));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle('Annick, 67 ans');
         $articlesBlog->setArtSlug('Annick-67-ans');
         $articlesBlog->setArtText('Quand il était en colère contre moi en voiture, il se mettait à conduire vite et brusquement.
         Il donnait des coups de volant, des coups d accélérateur... c était terrifiant. J avais toujours peur qu il finisse par perdre le contrôle de la voiture et nous faire avoir un accident. Quand les enfants étaient dans l auto avec nous, c était encore pire pour moi... j en fais encore des cauchemars.');
         $articlesBlog->setArtImage('violence7.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::TEMOIGNAGES));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle('Céline, 40 ans');
         $articlesBlog->setArtSlug('celine-40-ans');
         $articlesBlog->setArtText('J’ai passé huit ans avec quelqu’un que j’aimais, mais pour qui je n’étais rien. A l’extérieur, les gens lui donnent le bon dieu sans confession, mais à la maison, c’est quelqu’un d’insupportable. Il m’a appâtée avec des petites attentions, des poèmes et des belles paroles, qui se sont rapidement transformées en critiques : j’étais mal habillée, pas assez jolie… Au bout de quelques années, il m’a fait couper les ponts avec ma famille et mes amis et arrêter de travailler. "Elle est jalouse de toi", "il est nocif " : il arrivait toujours à me retourner le cerveau. Je ne voyais que par lui et je n’arrivais pas à me dire que c’était quelqu’un de mauvais. Je pensais alors que la meilleure défense était de dire "oui" à tout, pour éviter les problèmes. Quand je voulais le quitter, les enfants devenaient un moyen de pression. Le déclic qui m’a fait partir ? Quand il m’a trompée et que je l’ai entendu s’en vanter. "On va faire un break, c’est temporaire, c’est moi qui te fais souffrir, je ne te mérite pas." C’est ce que je lui ai dit pour qu’il s’en aille. J’ai ensuite demandé le divorce, pas pour faute mais par consentement mutuel : j’ai tout fait pour que les choses ne dégénèrent pas. Il ne pensait pas que j’irai jusqu’au bout, mais il ne faut jamais céder. Aujourd’hui encore, quand je vois son nom sur mon téléphone, j’ai peur. J’appelle la police quand il débarque à l’improviste, et je dépose des mains courantes. J’en suis déjà à dix : c’est la seule manière de me faire entendre.');
         $articlesBlog->setArtImage('violence8.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::TEMOIGNAGES));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle('Octavia, 36 ans');
         $articlesBlog->setArtSlug('Octavia-36-ans');
         $articlesBlog->setArtText("J était allée en maison d'hébergement à peine 5 jours et quand je suis revenue, mon ex avait donné mon petit chien... enfin c est ce qu il m avait dit. J ai appris cette année par mon fils qui est aujourd hui adulte que ce n était pas la vraie histoire. En réalité, Il a obligé mon fils à apporter mon chien en voiture et après avoir roulé un certain temps, il a ordonné à mon fils adolescent à l'époque, d'ouvrir la portière et d'abandonner mon petit chiwawa sans défense sur le bord de la route ? Lorsque mon fils m'a raconté l'histoire il avait les yeux pleins d'eau, il c'est excusé rempli de culpabilité. Évidemment je l'ai rassuré en lui rappelant qu'il n'avait pas d'autre choix que d'obéir à son père et qu'il n'avait pas à vivre de la culpabilité ni de regrets que ce n'était pas de sa faute.?");
         $articlesBlog->setArtImage('violence9.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::TEMOIGNAGES));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle('Josie, 48 ans');
         $articlesBlog->setArtSlug('josie-48-ans');
         $articlesBlog->setArtText("Pendant des années, dès que je parlais de rupture, il me menaçait de se battre pour avoir la garde des enfants. J'avais tellement peur qu'il soit seul avec eux pour de longues périodes (il était violent verbalement et parfois physiquement avec eux aussi) que j'ai choisi de rester tant et aussi longtemps que je sentais mes enfants trop vulnérables... et même là, quand je suis finalement partie (mes enfants avaient alors 15 et 17 ans), il s'est battu pendant des années pour avoir leur garde, et ça m'a coûté une fortune en frais d'avocat et en frais d'expertise. Il me ramenait constamment en cour. Ça a fini par finir parce que mon plus jeune a eu 18 ans. La violence «légale» après la séparation a été aussi difficile à vivre, sinon plus, que la situation de violence elle-même. Ceci dit... je suis heureuse d'avoir choisi ce chemin, pour le message que ça envoie à mes enfants");
         $articlesBlog->setArtImage('violence10.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::TEMOIGNAGES));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle('Annette, 23 ans.');
         $articlesBlog->setArtSlug('annette-23-ans');
         $articlesBlog->setArtText("Je me suis réveillée en pleine nuit et il était en train de... il avait commencé à «faire l'amour»... si on peut appeler ça de l'amour. C'est arrivé plusieurs fois. Il disait que je lui avais demandé «dans mon sommeil»... J'ai appris beaucoup plus tard que ça constitue un viol. On commence à faire l’amour et il me demande de faire quelque chose qu'il sait que je ne souhaite pas faire. Devant mon refus, il se vexe rapidement, il crie, il me traite de chienne, il m'accuse de le tromper..... Plus tard, il met des couvertures par terre pour que j'y dorme... comme une vraie chienne.");
         $articlesBlog->setArtImage('violence11.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::TEMOIGNAGES));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle('Barbara, 32 ans.');
         $articlesBlog->setArtSlug('barbara-32-ans');
         $articlesBlog->setArtText("Pour moi le plus difficile à vivre au quotidien a été la jalousie. Mon mari évaluait chacun de mes mouvements, de mes vêtements, de mes activités, et de mes choix en fonction de mon «potentiel» d'infidélité. Au début de notre relation, il m'avait «prévenu» qu'il était insécure parce que son père l'avait abandonné et je le comprenais alors j'essayais de l'aider en évitant de faire des choses qui le rendraient anxieux... mais c'était impossible. Il disait qu'il me connaissait bien et que j'avais un «potentiel d'infidélité» élevé. Si j'avais le malheur de parler d'un collègue masculin, il me faisait passer un interrogatoire à son sujet et au sujet de notre «relation». Si j'achetais une nouvelle robe, il pensait que c'était pour séduire quelqu'un. Si mon regard avait le malheur d'aller vers un endroit où il y avait un homme, j'étais «en chasse». Au fil des années, mon univers s'est rétréci et rétréci... je me sentais emprisonnée par ses doutes à mon sujet.");
         $articlesBlog->setArtImage('violence12.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::TEMOIGNAGES));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle('Les conséquences silencieuses des violences conjugales');
         $articlesBlog->setArtSlug('les-consequences-silencieuses-des-violences-conjugales');
         $articlesBlog->setArtText("Selon de nombreux experts en psychologie et en santé mentale, les conséquences des violences conjugales vont bien au-delà des blessures physiques. Les victimes de violences conjugales peuvent souffrir de traumatismes psychologiques durables, tels que l'anxiété, la dépression et les troubles de stress post-traumatique. De plus, ces violences peuvent avoir des répercussions sur la vie professionnelle, sociale et familiale des victimes, les isolant souvent de leur entourage. Il est crucial de reconnaître et de soutenir les victimes pour briser ce cycle destructeur.");
         $articlesBlog->setArtImage('violence13.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::AVIS_D_EXPERTS));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle("L'importance de la sensibilisation aux violences conjugales");
         $articlesBlog->setArtSlug('l-importance-de-la-sensibilisation-aux-violences-conjugales');
         $articlesBlog->setArtText("Les professionnels du domaine de la justice et de l'assistance sociale soulignent l'importance de sensibiliser le public aux violences conjugales. L'un des défis majeurs est d'encourager les victimes à parler et à demander de l'aide. Il est crucial que les professionnels, tels que les avocats et les travailleurs sociaux, soient formés pour repérer les signes de violences conjugales et offrir un soutien adapté. Sensibiliser la société dans son ensemble est un pas essentiel vers la prévention et l'élimination de ce fléau.");
         $articlesBlog->setArtImage('violence14.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::AVIS_D_EXPERTS));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle(' Le cycle des violences conjugales et ses phases distinctes');
         $articlesBlog->setArtSlug('le-cycle-des-violences-conjugales-et-ses-phases-distinctes');
         $articlesBlog->setArtText("Les experts en psychologie ont identifié un schéma communément observé dans les relations caractérisées par des violences conjugales : le cycle des violences. Ce cycle comprend généralement trois phases : la tension monte, l'explosion de violence et la lune de miel. Comprendre ce cycle est essentiel pour les victimes, car cela leur permet de reconnaître les signes avant-coureurs et de prendre des mesures pour se protéger. Les professionnels du domaine de la santé recommandent aux victimes de rechercher de l'aide et de développer un plan de sécurité pour échapper à ce cycle destructeur.");
         $articlesBlog->setArtImage('violence15.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::AVIS_D_EXPERTS));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle('Les enfants témoins de violences conjugales : les effets dévastateurs');
         $articlesBlog->setArtSlug('les-enfants-temoins-de-violences-conjugales-les-effets-devastateurs');
         $articlesBlog->setArtText("Les enfants qui grandissent dans un environnement de violences conjugales sont souvent considérés comme des témoins silencieux. Les experts s'accordent à dire que cette exposition à la violence peut avoir des effets dévastateurs sur leur développement émotionnel, social et cognitif. Les enfants témoins de violences conjugales sont plus susceptibles de présenter des troubles du comportement, des difficultés scolaires et des problèmes de santé mentale à long terme. Il est crucial de protéger les enfants et de leur offrir un soutien adapté pour briser le cycle de la violence intergénérationnelle");
         $articlesBlog->setArtImage('violence16.png');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::AVIS_D_EXPERTS));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle('Le rôle crucial des professionnels dans la prévention des violences conjugales');
         $articlesBlog->setArtSlug('le-role-crucial-des-professionnels-dans-la-prevention-des-violences-conjugales');
         $articlesBlog->setArtText('Les professionnels de la santé, tels que les médecins, les infirmières et les psychologues, jouent un rôle essentiel dans la prévention des violences conjugales. Lors des consultations médicales ou psychologiques, ils doivent être attentifs aux signes de violences et poser des questions sensibles pour identifier les victimes. Ils peuvent ainsi offrir un soutien immédiat, les orienter vers des ressources spécialisées et documenter les preuves nécessaires pour une éventuelle poursuite judiciaire. Les professionnels de la santé ont le pouvoir de sauver des vies et de briser le cycle de la violence.');
         $articlesBlog->setArtImage('violence17.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::AVIS_D_EXPERTS));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);

         $articlesBlog = new ArticlesBlog();
         $articlesBlog->setArtTitle("L'importance des politiques et de la législation pour lutter contre les violences conjugales");
         $articlesBlog->setArtSlug('l-importance-des-politiques-et-de-la-legislation-pour-lutter-contre-les-violences-conjugales');
         $articlesBlog->setArtText("Les experts en droit et en politique soulignent l'importance de politiques et de législations solides pour lutter efficacement contre les violences conjugales. Des mesures telles que l'augmentation des ressources pour les centres d'accueil, l'amélioration de l'accès à la justice pour les victimes et l'élaboration de programmes de prévention dans les écoles sont essentielles. Les professionnels du droit et les décideurs politiques doivent travailler ensemble pour mettre en place un cadre juridique solide et fournir les ressources nécessaires pour soutenir les victimes et prévenir les violences conjugales à long terme");
         $articlesBlog->setArtImage('violence18.jpg');
         $articlesBlog->setArtAuthor('');
         $articlesBlog->setACategories($this->getReference(ACategoryFixtures::AVIS_D_EXPERTS));
         $articlesBlog->setAAUserAdmin($this->getReference(AAUserFixtures::USER_ADMIN_NAME));
         $manager->persist($articlesBlog);
         */

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $article = new Article();
        $article->setTitle('Les violences conjugales : définition, causes et conséquences');
        $article->setSlug('les-violences-conjugales-definition-causes-et-consequences');
        $article->setText('Les violences conjugales sont un problème social majeur qui touche des millions de personnes dans le monde. Les experts en psychologie et en droit s\'accordent à dire que les violences conjugales sont un problème complexe qui nécessite une approche multidisciplinaire. Les causes des violences conjugales sont multiples et comprennent des facteurs individuels, relationnels et sociétaux. Les conséquences des violences conjugales sont graves et peuvent avoir des répercussions à long terme sur la santé physique et mentale des victimes. Il est essentiel de comprendre les causes et les conséquences des violences conjugales pour mettre en place des mesures de prévention et de protection efficaces.');
        $article->setImage('violence1.jpg');
        $article->setAuthor('');
        $article->addCategory($this->getReference(CategoryFixtures::CATEGORY_1_REFERENCE));
        $article->setUser($this->getReference(UserFixtures::USER_ADMIN_REFERENCE));
        $manager->persist($article);

        $article = new Article();
        $article->setTitle('Les violences conjugales : définition, causes et conséquences');
        $article->setSlug('les-violences-conjugales-definition-causes-et-consequences');
        $article->setText('Les violences conjugales sont un problème social majeur qui touche des millions de personnes dans le monde. Les experts en psychologie et en droit s\'accordent à dire que les violences conjugales sont un problème complexe qui nécessite une approche multidisciplinaire. Les causes des violences conjugales sont multiples et comprennent des facteurs individuels, relationnels et sociétaux. Les conséquences des violences conjugales sont graves et peuvent avoir des répercussions à long terme sur la santé physique et mentale des victimes. Il est essentiel de comprendre les causes et les conséquences des violences conjugales pour mettre en place des mesures de prévention et de protection efficaces.');
        $article->setImage('violence1.jpg');
        $article->setAuthor('');
        $article->addCategory($this->getReference(CategoryFixtures::CATEGORY_1_REFERENCE));
        $article->setUser($this->getReference(UserFixtures::USER_ADMIN_REFERENCE));
        $manager->persist($article);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
            UserFixtures::class,
        ];
    }
}
