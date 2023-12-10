@extends('layouts.login_master')

@section('content')

    <div class="page-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title font-weight-bold text-center">CONDITIONS D'UTILISATION</h1>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div style="font-size: 16px;" class="col-md-10 offset-md-1">
                              <p>Dernière modification :  Novembre 2023</p>

                                <h4 class="font-weight-semibold">Acceptation des conditions d'utilisation</h4>

                                <p>Ces conditions d'utilisation sont conclues par et entre vous et {{ $app_name }} ("nous" ou "notre"). Les conditions générales suivantes et tous les documents incorporés par référence (collectivement, les « Conditions d'utilisation ») régissent votre accès et votre utilisation de <a target="_blank" href="{{ $app_url }}">{{ $app_url }}</a>, y compris tout contenu, fonctionnalité et service offert sur ou via <a target="_blank" href="{{ $app_url }}">{{ $app_url }}</a> (le "Site Web ").</p>

                                <p>Veuillez lire attentivement les conditions d'utilisation avant de commencer à utiliser le site Web. En utilisant le site Web, vous acceptez d'être lié et de respecter les présentes conditions d'utilisation et notre politique de confidentialité, disponibles à l'adresse <a target="_blank" href="{{ route('privacy_policy') }}">{{ route('privacy_policy') }}</a>, incorporé ici par référence. Si vous ne souhaitez pas accepter ces conditions d'utilisation ou la politique de confidentialité, vous ne devez pas accéder ni utiliser le site Web.</p>

                                <h4 class="font-weight-semibold">Modifications des conditions d'utilisation</h4>

                                <p>Nous pouvons réviser et mettre à jour ces conditions d'utilisation de temps à autre, à notre seule discrétion. Toutes les modifications entrent en vigueur immédiatement lorsque nous les publions. Cependant, toute modification apportée aux dispositions de résolution des litiges énoncées dans la loi applicable et la juridiction ne s'appliquera pas aux litiges pour lesquels les parties ont été effectivement informées avant la date à laquelle la modification est publiée sur le site Web.</p>

                                <p>Votre utilisation continue du site Web après la publication des conditions d'utilisation révisées signifie que vous acceptez les modifications. Vous êtes censé consulter cette page de temps en temps afin d'être au courant de tout changement, car ils vous engagent.</p>

                                <h4 class="font-weight-semibold">Accès au site Web et sécurité du compte</h4>
                               <p>Nous nous réservons le droit de retirer ou de modifier ce site Web, ainsi que tout service ou matériel que nous fournissons sur le site Web, à notre seule discrétion et sans préavis. Nous ne serons pas responsables si, pour quelque raison que ce soit, tout ou partie du site Web n'est pas disponible à tout moment ou pour n'importe quelle période. De temps en temps, nous pouvons restreindre l'accès à certaines parties du site Web, ou à l'ensemble du site Web, aux utilisateurs.</p>

                                <h3>Article I</h3>
                                <p>Vous êtes responsable de :</p>

                                <ul>
                                    <li>Prendre toutes les dispositions nécessaires pour que vous ayez accès au site Web.</li>
                                    <li>Assurer que toutes les personnes qui accèdent au site Web via votre connexion Internet connaissent les présentes conditions d'utilisation et les respectent.</li>
                                </ul>

                                <p>Pour accéder au site Web ou à certaines des ressources qu'il propose, il peut vous être demandé de fournir certains détails d'inscription ou d'autres informations. Votre utilisation du site Web est conditionnée à ce que toutes les informations que vous fournissez sur le site Web soient correctes, à jour et complètes. Vous acceptez que toutes les informations que vous fournissez pour vous inscrire sur ce site Web ou autrement, y compris, mais sans s'y limiter, via l'utilisation de fonctionnalités interactives sur le site Web, sont régies par notre politique de confidentialité, et vous consentez à toutes les mesures que nous prenons à l'égard de votre informations conformes à notre politique de confidentialité.</p>

                                <p>Si vous choisissez, ou recevez un nom d'utilisateur, un mot de passe ou toute autre information dans le cadre de nos procédures de sécurité, vous devez traiter ces informations comme confidentielles et vous ne devez les divulguer à aucune autre personne ou entité. . Vous reconnaissez également que votre compte vous est personnel et acceptez de ne permettre à aucune autre personne d'accéder à ce site Web ou à des parties de celui-ci en utilisant votre nom d'utilisateur, votre mot de passe ou d'autres informations de sécurité. Vous acceptez de nous informer immédiatement de tout accès ou utilisation non autorisé de votre nom d'utilisateur ou de votre mot de passe ou de toute autre violation de la sécurité. Vous vous engagez également à veiller à quitter votre compte à la fin de chaque session. Vous devez faire preuve d'une prudence particulière lorsque vous accédez à votre compte à partir d'un ordinateur public ou partagé afin que d'autres personnes ne puissent pas voir ou enregistrer votre mot de passe ou d'autres informations personnelles.</p>
                                <p>Nous avons le droit de désactiver tout nom d'utilisateur, mot de passe ou autre identifiant, qu'il soit choisi par vous ou fourni par nous, à tout moment, à notre seule discrétion, pour quelque raison que ce soit, y compris si, à notre avis, vous avez a violé une disposition de ces conditions d'utilisation.</p>

                                <h4 class="font-weight-semibold">Droits de propriété intellectuelle</h4>

                               <p>Le site Web et l'ensemble de son contenu, caractéristiques et fonctionnalités (y compris, mais sans s'y limiter, toutes les informations, logiciels, textes, affichages, images, vidéo et audio, ainsi que leur conception, leur sélection et leur disposition), sont la propriété de nous, notre concédants de licence ou autres fournisseurs de ce matériel et sont protégés par les lois américaines et internationales sur le droit d'auteur, les marques, les brevets, les secrets commerciaux et autres lois sur la propriété intellectuelle ou les droits de propriété.</p>

                                <p>Ces conditions d'utilisation vous permettent d'utiliser le site Web pour votre usage personnel et non commercial uniquement. Vous ne devez pas reproduire, distribuer, modifier, créer des œuvres dérivées, afficher publiquement, exécuter publiquement, republier, télécharger, stocker ou transmettre tout élément de notre site Web en violation de toute loi.</p>

                                <p>Vous ne devez pas accéder ou utiliser à des fins commerciales toute partie du site Web ou tout service ou matériel disponible via le site Web.</p>

                                <h4 class="font-weight-semibold">Marques déposées</h4>

                               <p>Le nom {{ $app_name }} et tous les noms, logos, slogans, devises et designs associés sont des marques commerciales nous appartenant ou celles de nos sociétés affiliées ou concédants de licence. Vous ne devez pas utiliser ces marques sans notre autorisation écrite préalable. Tous les autres noms, logos, noms de produits et services, designs et slogans figurant sur ce site Web sont les marques déposées de leurs propriétaires respectifs.</p>

                                <h4 class="font-weight-semibold">Utilisations interdites</h4>

                                <ul>
                                    <li>Vous ne pouvez utiliser le site Web qu'à des fins licites et conformément aux présentes conditions d'utilisation. Vous acceptez de ne pas utiliser le site Web :</li>
                                    <li>De quelque manière que ce soit qui enfreint toute loi ou réglementation fédérale, étatique, locale ou internationale applicable (y compris, sans s'y limiter, toute loi concernant l'exportation de données ou de logiciels vers et depuis les États-Unis ou d'autres pays).</li>
                                    <li>Dans le but d'exploiter, de nuire ou de tenter d'exploiter ou de nuire à des mineurs de quelque manière que ce soit en les exposant à un contenu inapproprié, en leur demandant des informations personnellement identifiables ou autrement.</li>
                                    <li>Envoyer, recevoir, télécharger, utiliser ou réutiliser sciemment tout matériel non conforme aux normes de contenu énoncées dans les présentes conditions d'utilisation.</li>
                                    <li>Transmettre ou faire envoyer tout matériel publicitaire ou promotionnel sans notre consentement écrit préalable, y compris tout "courrier indésirable", "chaîne de lettres" ou "spam" ou toute autre sollicitation similaire.</li>
                                    <li>Usurer ou tenter d'usurper notre identité, celle d'un de nos employés, d'un autre utilisateur ou de toute autre personne ou entité (y compris, sans s'y limiter, en utilisant des adresses e-mail ou des noms d'écran associés à l'un des éléments ci-dessus.)</li >
                                    <li>S'engager dans toute autre conduite qui restreint ou inhibe l'utilisation ou la jouissance du site Web par quiconque, ou qui, selon notre détermination, peut nous nuire ou nuire aux utilisateurs du site Web ou les exposer à une responsabilité.</li>
                                </ul>

                                <h4 class="font-weight-semibold">De plus, vous acceptez de ne pas :</h4>
                               <ul>
                                    <li>Utiliser le site Web d'une manière qui pourrait désactiver, surcharger, endommager ou détériorer le site ou interférer avec l'utilisation du site Web par toute autre partie, y compris sa capacité à s'engager dans des activités en temps réel via le site Web.</li>
                                    <li>Utiliser tout robot, araignée ou autre dispositif, processus ou moyen automatique pour accéder au site Web à quelque fin que ce soit, y compris la surveillance ou la copie de tout élément du site Web.</li>
                                    <li>Utiliser tout processus manuel pour surveiller ou copier tout élément du site Web ou à toute autre fin non autorisée sans notre consentement écrit préalable.</li>
                                    <li>Utiliser tout appareil, logiciel ou routine qui interfère avec le bon fonctionnement du site Web.</li>
                                    <li>Introduire des virus, chevaux de Troie, vers, bombes logiques ou tout autre matériel malveillant ou technologiquement nuisible.</li>
                                    <li>Tenter d'accéder sans autorisation, d'interférer, d'endommager ou de perturber toute partie du site Web, le serveur sur lequel le site Web est stocké, ou tout serveur, ordinateur ou base de données connecté au site Web.</li>
                                    <li>Attaquer le site Web via une attaque par déni de service ou une attaque par déni de service distribué.</li>
                                    <li>Utilisez le site Web d'une manière qui enfreint toute politique, règle ou procédure applicable de {{ $app_name }}.</li>
                                    <li>Utilisez le site Web d'une manière qui contrevient à la tradition, à la foi et à la morale de Catholic Mercy ou à l'héritage de l'éducation de Catholic Mercy.</li>
                                    <li>Tenter de toute autre manière d'interférer avec le bon fonctionnement du site Web.</li>
                                </ul>

                                <h4 class="font-weight-semibold">Contributions des utilisateurs</h4>

                               <p>Le site Web peut contenir des forums de discussion, des salons de discussion, des pages ou profils Web personnels, des forums, des tableaux d'affichage et d'autres fonctionnalités interactives (collectivement, les « services interactifs ») qui permettent aux utilisateurs de publier, de soumettre, de publier, d'afficher ou de transmettre à d'autres utilisateurs ou d'autres personnes (ci-après, « publier ») du contenu ou des éléments (collectivement, les « contributions des utilisateurs ») sur ou via le site Web.</p>

                                <p>Toutes les contributions des utilisateurs doivent être conformes aux normes de contenu énoncées dans les présentes conditions d'utilisation.</p>

                                <p>Toute contribution utilisateur que vous publiez sur le site sera considérée comme non confidentielle et non exclusive. En fournissant une contribution utilisateur sur le site Web, vous nous accordez, ainsi qu'à nos titulaires de licence, successeurs et ayants droit, le droit d'utiliser, de reproduire, de modifier, d'exécuter, d'afficher, de distribuer et de divulguer de toute autre manière à des tiers ce matériel.</p>

                                <p>Vous déclarez et garantissez que :</p>

                                <ul>
                                    <li>Vous possédez ou contrôlez tous les droits relatifs aux contributions utilisateur et avez le droit d'accorder la licence accordée ci-dessus à nous ainsi qu'à nos titulaires de licence, successeurs et ayants droit.</li>
                                    <li> Toutes vos contributions d'utilisateur sont et seront conformes aux présentes conditions d'utilisation.</li>
                                </ul>

                               <p>Vous comprenez et reconnaissez que vous êtes responsable de toutes les contributions d'utilisateur que vous soumettez ou contribuez, et que vous, et non nous, assumez l'entière responsabilité de ce contenu, y compris sa légalité, sa fiabilité, son exactitude et son caractère approprié.</p>

                                <p>Nous ne sommes pas responsables, ni envers aucun tiers, du contenu ou de l'exactitude des contributions utilisateur publiées par vous ou par tout autre utilisateur du site Web.</p>

                                <h4 class="font-weight-semibold">Surveillance et application ; Résiliation</h4>
                                <p>Nous avons le droit de :</p>

                                <ul>
                                    <li>Supprimer ou refuser de publier toute contribution d'utilisateur pour quelque raison que ce soit, à notre seule discrétion.</li>
                                    <li>Prendre toute mesure concernant toute contribution d'utilisateur que nous jugeons nécessaire ou appropriée, à notre seule discrétion, y compris si nous pensons qu'une telle contribution d'utilisateur viole les conditions d'utilisation, y compris les normes de contenu, enfreint tout droit de propriété intellectuelle ou autre droit. de toute personne ou entité, menace la sécurité personnelle des utilisateurs du site Web ou du public ou pourrait engager notre responsabilité.</li>
                                    <li>Divulguez votre identité ou d'autres informations vous concernant à tout tiers qui prétend que le contenu que vous avez publié viole ses droits, y compris ses droits de propriété intellectuelle ou son droit à la vie privée.</li>
                                    <li>Engager les mesures juridiques appropriées, y compris, sans s'y limiter, le recours aux forces de l'ordre, pour toute utilisation illégale ou non autorisée du site Web.</li>
                                    <li> Résilier ou suspendre votre accès à tout ou partie du site Web pour quelque raison que ce soit, y compris, sans limitation, toute violation des présentes conditions d'utilisation.</li>
                                </ul>

                              <p> Sans limiter ce qui précède, nous avons le droit de coopérer pleinement avec toute autorité chargée de l'application de la loi ou toute ordonnance d'un tribunal nous demandant ou nous ordonnant de divulguer l'identité ou d'autres informations de toute personne publiant du matériel sur ou via le site Web.</p>

                                <p>VOUS RENONCEZ ET TENEZ INdemne {{ strtoupper($app_name) }} DE TOUTE RÉCLAMATION RÉSULTANT DE TOUTES MESURES PRISES PAR {{ strtoupper($app_name) }} PENDANT OU À LA SUITE DE SES ENQUÊTES ET DE TOUTES MESURES PRISES EN TANT QUE CONSÉQUENCE DES ENQUÊTES PAR {{ strtoupper($app_name) }} OU LES AUTORITÉS D'APPLICATION DE LA LOI.</p>

                                <p>Cependant, nous ne nous engageons pas à examiner tout le matériel avant sa publication sur le site Web et ne pouvons garantir la suppression rapide du matériel répréhensible après sa publication. En conséquence, nous n'assumons aucune responsabilité pour toute action ou inaction concernant les transmissions, communications ou contenus fournis par un utilisateur ou un tiers. Nous n'assumons aucune responsabilité envers quiconque pour l'exécution ou la non-exécution des activités décrites dans cette section.</p>

                                <h4 class="font-weight-semibold">Normes de contenu</h4>

                                <p>Ces normes de contenu s'appliquent à toutes les contributions des utilisateurs et à l'utilisation des services interactifs. Les contributions des utilisateurs doivent dans leur intégralité être conformes à toutes les lois et réglementations fédérales, étatiques, locales et internationales applicables. Sans limiter ce qui précède, les contributions des utilisateurs ne doivent pas :</p>
                               <ul>
                                    <li> Contenir tout contenu diffamatoire, obscène, indécent, abusif, offensant, harcelant, violent, haineux, incendiaire ou autrement répréhensible.</li>
                                    <li> Promouvoir du matériel sexuellement explicite ou pornographique, de la violence ou de la discrimination fondée sur la race, le sexe, la religion, la nationalité, le handicap, l'orientation sexuelle ou l'âge.</li>
                                    <li> Enfreindre un brevet, une marque, un secret commercial, un droit d'auteur ou toute autre propriété intellectuelle ou tout autre droit de toute autre personne.</li>
                                    <li>Violer les droits légaux (y compris les droits de publicité et de confidentialité) d'autrui ou contenir tout élément susceptible de donner lieu à une responsabilité civile ou pénale en vertu des lois ou réglementations applicables ou qui pourrait autrement être en conflit avec les présentes conditions d'utilisation et notre <a target="_blank" href="{{ route('privacy_policy') }}">Politique de confidentialité</a>.</li>
                                    <li>Être susceptible de tromper quiconque.</li>
                                    <li>Promouvoir toute activité illégale, ou préconiser, promouvoir ou assister tout acte illégal.</li>
                                    <li>Provoquer de la gêne, des désagréments ou une anxiété inutile ou être susceptible de contrarier, d'embarrasser, d'alarmer ou d'ennuyer toute autre personne.</li>
                                    <li>Usurper l'identité d'une personne ou déformer votre identité ou votre affiliation à une personne ou une organisation.</li>
                                    <li>Impliquer des activités ou des ventes commerciales, telles que des concours, des tirages au sort et d'autres promotions des ventes, du troc ou de la publicité.</li>
                                    <li>Donner l'impression qu'ils émanent ou sont approuvés par nous ou par toute autre personne ou entité, si ce n'est pas le cas.</li>
                                </ul>

                                <h4 class="font-weight-semibold">Violation des droits d'auteur</h4>
                               <p>Si vous pensez qu'une contribution d'utilisateur viole vos droits d'auteur, veuillez nous contacter</p>

                                <h5 class="font-weight-semibold">Confiance à l'égard des informations publiées</h5>

                                <p>Les informations présentées sur ou via le site Web sont mises à disposition uniquement à des fins d'information générale. Nous ne garantissons pas l'exactitude, l'exhaustivité ou l'utilité de ces informations. Toute confiance que vous accordez à ces informations est strictement à vos propres risques. Nous déclinons toute responsabilité découlant de la confiance accordée à ces documents par vous ou tout autre visiteur du site Web, ou par toute personne susceptible d'être informée de l'un de ses contenus.</p>

                                <p>Ce site Web peut inclure du contenu fourni par des tiers, y compris des éléments fournis par d'autres utilisateurs, des blogueurs et des concédants de licence, syndicateurs, agrégateurs et/ou services de reporting tiers. Toutes les déclarations et/ou opinions exprimées dans ces documents, ainsi que tous les articles et réponses aux questions et autres contenus, autres que le contenu fourni par nous, sont uniquement les opinions et la responsabilité de la personne ou de l'entité fournissant ces documents. Ces documents ne reflètent pas nécessairement notre opinion. Nous ne sommes pas responsables, ni envers vous ou tout tiers, du contenu ou de l'exactitude de tout matériel fourni par des tiers.</p>

                                <h4 class="font-weight-semibold">Modifications apportées au site Web</h4>
                                <p>Nous pouvons mettre à jour le contenu de ce site Web de temps à autre, mais son contenu n'est pas nécessairement complet ou à jour. Tout élément du site Web peut être obsolète à tout moment, et nous ne sommes aucunement tenus de mettre à jour ce contenu.</p>

                                <p>Informations sur vous et vos visites sur le site Web</p>

                                <p>Toutes les informations que nous collectons sur ce site Web sont soumises à notre politique de confidentialité. En utilisant le site Web, vous consentez à toutes les mesures prises par nous concernant vos informations conformément à la <a target="_blank" href="{{ route('privacy_policy') }}">Politique de confidentialité</a> .</p>

                                <h3>Article II</h3>

                                <h4 class="font-weight-semibold">Liens vers les fonctionnalités du site Web et des réseaux sociaux</h4>

                                <p>vVous pouvez créer un lien vers notre page d'accueil, à condition que vous le fassiez d'une manière juste et légale et que cela ne nuise pas à notre réputation ou n'en profite pas, mais vous ne devez pas établir de lien de manière à suggérer une quelconque forme. d'association, d'approbation ou d'approbation de notre part sans notre consentement écrit exprès.</p>

                                <p>Vous acceptez de coopérer avec nous pour supprimer tout lien que nous vous demandons. Nous nous réservons le droit de retirer l'autorisation de création de liens sans préavis.</p>

                                <p>Nous pouvons désactiver tout ou partie des fonctionnalités des réseaux sociaux et tous les liens à tout moment et sans préavis, à notre discrétion.</p>

                                <h4 class="font-weight-semibold">Liens depuis le site Web</h4>

                                <p>Si le site Web contient des liens vers d'autres sites et ressources fournis par des tiers, ces liens sont fournis pour votre commodité uniquement. Cela inclut les liens contenus dans les publicités, y compris les bannières publicitaires et les liens sponsorisés. Nous n'avons aucun contrôle sur le contenu de ces sites ou ressources et déclinons toute responsabilité à leur égard ou pour toute perte ou dommage pouvant découler de votre utilisation de ceux-ci. Si vous décidez d'accéder à l'un des sites Web tiers liés à ce site Web, vous le faites entièrement à vos propres risques et sous réserve des termes et conditions d'utilisation de ces sites Web.</p>

                                <h4 class="font-weight-semibold">Exclusion de garantie</h4>

                               <p>Vous comprenez que nous ne pouvons pas et ne garantissons pas que les fichiers disponibles au téléchargement sur Internet ou sur le site Web seront exempts de virus ou d'autres codes destructeurs. Vous êtes responsable de la mise en œuvre de procédures et de points de contrôle suffisants pour satisfaire vos exigences particulières en matière de protection antivirus et d'exactitude des entrées et sorties de données, et de maintenir un moyen externe à notre site pour toute reconstruction de toute donnée perdue. NOUS NE SERONS PAS RESPONSABLES DE TOUTE PERTE OU DOMMAGE CAUSÉ PAR UNE ATTAQUE DE DÉNI DE SERVICE DISTRIBUÉ, DES VIRUS OU AUTRE MATÉRIEL TECHNOLOGIQUEMENT NUISIBLE QUI POURRAIT INFECTER VOTRE ÉQUIPEMENT INFORMATIQUE, vos PROGRAMMES INFORMATIQUES, DONNÉES OU AUTRE MATÉRIEL PROPRIÉTAIRE EN RAISON DE VOTRE UTILISATION DU SITE WEB OU TOUS LES SERVICES OU ARTICLES OBTENUS VIA LE SITE WEB OU PAR VOTRE TÉLÉCHARGEMENT DE TOUT MATÉRIEL PUBLIÉ SUR CELUI-CI OU SUR TOUT SITE WEB LIÉ À CELUI-CI.</p>

                                <p>VOTRE UTILISATION DU SITE WEB, DE SON CONTENU ET DE TOUT SERVICE OU ÉLÉMENT OBTENU PAR L'INTERMÉDIAIRE DU SITE WEB EST À VOS PROPRES RISQUES. LE SITE WEB, SON CONTENU ET TOUS LES SERVICES OU ÉLÉMENTS OBTENUS PAR L'INTERMÉDIAIRE DU SITE WEB SONT FOURNIS « TELS QUELS » ET « SELON LA DISPONIBILITÉ », SANS AUCUNE GARANTIE D'AUCUNE SORTE, EXPRESSE OU IMPLICITE. NI {{ strtoupper($app_name) }} NI AUCUNE PERSONNE ASSOCIÉE À {{ strtoupper($app_name) }} NE FAIT AUCUNE GARANTIE OU DÉCLARATION CONCERNANT L'EXHAUSTIVITÉ, LA SÉCURITÉ, LA FIABILITÉ, LA QUALITÉ, L'EXACTITUDE OU LA DISPONIBILITÉ DU SITE WEB. SANS LIMITER CE QUI PRÉCÈDE, NI {{ strtoupper($app_name) }} NI TOUTE PERSONNE ASSOCIÉE À {{ strtoupper($app_name) }} NE DÉCLARE NI NE GARANTIT QUE LE SITE WEB, SON CONTENU OU TOUT SERVICE OU ÉLÉMENT OBTENU PAR L'INTERMÉDIAIRE DU SITE WEB SERONT EXACTS, FIABLE, SANS ERREUR OU ININTERROMPUE, QUE LES DÉFAUTS SERONT CORRIGÉS, QUE NOTRE SITE OU LE SERVEUR QUI LE REND DISPONIBLE SONT EXEMPT DE VIRUS OU AUTRES COMPOSANTS NUISIBLES OU QUE LE SITE WEB OU TOUT SERVICE OU ÉLÉMENT OBTENU PAR LE SITE WEB RÉPONDRA AUTREMENT À VOS BESOINS OU ATTENTES.</p>

                                <p>{{ strtoupper($app_name) }} DÉCLINE PAR LA PRÉSENTE TOUTE GARANTIE DE TOUTE SORTE, EXPRESSE OU IMPLICITE, LÉGALE OU AUTRE, Y COMPRIS MAIS SANS LIMITATION TOUTE GARANTIE DE NON-VIOLATION.</p>

                                <p> CE QUI PRÉCÈDE N'AFFECTE AUCUNE GARANTIE QUI NE PEUT ÊTRE EXCLUE OU LIMITÉE EN VERTU DE LA LOI APPLICABLE. </p>

                                <h4 class="font-weight-semibold">Limitation de responsabilité</h4>

                                <p>EN AUCUN CAS {{ strtoupper($app_name) }}, SES FILIALES OU LEURS CONCÉDANTS DE LICENCES, FOURNISSEURS DE SERVICES, EMPLOYÉS, AGENTS, DIRIGEANTS OU ADMINISTRATEURS NE SERONT RESPONSABLES DES DOMMAGES DE QUELQUE NATURE QUE CE SOIT, EN VERTU DE TOUTE THÉORIE JURIDIQUE, DÉCOULANT DE OU EN RELATION AVEC VOTRE UTILISATION, OU VOTRE INCAPACITÉ D'UTILISER, LE SITE WEB, TOUT SITE WEB LIÉ À CELUI-CI, TOUT CONTENU DU SITE WEB OU DE TELS AUTRES SITES WEB OU TOUT SERVICE OU ÉLÉMENT OBTENU PAR LE SITE WEB OU DE TELS AUTRES SITES WEB, Y COMPRIS TOUT SERVICE DIRECT, INDIRECT, SPÉCIAL , DOMMAGES ACCESSOIRES, CONSÉCUTIFS OU PUNITIFS, Y COMPRIS, MAIS SANS S'Y LIMITER, LES BLESSURES CORPORELLES, LES DOULEURS ET SOUFFRANCES, LA DÉTRESSE ÉMOTIONNELLE, LA PERTE DE REVENUS, LA PERTE DE PROFITS, LA PERTE D'AFFAIRES OU D'ÉCONOMIES ANTICIPÉES, LA PERTE D'UTILISATION, LA PERTE DE GOODWILL, LA PERTE DE DONNÉES , ET QUE CE SOIT CAUSÉ PAR UN DÉLIT (Y COMPRIS LA NÉGLIGENCE), UNE RUPTURE DE CONTRAT OU AUTRE, MÊME SI PRÉVISIBLE.</p>

                                <p> CE QUI PRÉCÈDE N'AFFECTE AUCUNE RESPONSABILITÉ QUI NE PEUT ÊTRE EXCLUE OU LIMITÉE EN VERTU DE LA LOI APPLICABLE. </p>

                                <h4 class="font-weight-semibold">Indemnisation</h4>

                                <p>Vous acceptez de défendre, d'indemniser et de dégager de toute responsabilité {{ $app_name }}, ses sociétés affiliées, concédants de licence et prestataires de services, ainsi que ses dirigeants, administrateurs, employés, sous-traitants, agents, concédants de licence, fournisseurs, successeurs et ayants droit respectifs de et contre toute réclamation, responsabilité, dommage, jugement, récompense, perte, coût, dépense ou honoraire (y compris les honoraires d'avocat raisonnables) découlant de ou liés à votre violation des présentes conditions d'utilisation ou à votre utilisation du site Web, y compris, mais sans s'y limiter, vos contributions d'utilisateur, toute utilisation du contenu, des services et des produits du site Web autre que celle expressément autorisée dans les présentes conditions d'utilisation ou votre utilisation de toute information obtenue à partir du site Web.</p>

                                <h4 class="font-weight-semibold">Loi applicable et juridiction</h4>
                                <p>Toutes les questions relatives au site Web et aux présentes conditions d'utilisation et tout litige ou réclamation en découlant ou y étant lié (dans chaque cas, y compris les litiges ou réclamations non contractuels), seront régis et interprétés conformément aux lois de Nigéria sans donner effet à aucune disposition ou règle de choix ou de conflit de lois.</p>

                                <p>Toute poursuite, action ou procédure judiciaire découlant de ou liée à ces conditions d'utilisation ou au site Web sera intentée exclusivement devant les tribunaux fédéraux du Nigéria, bien que nous nous réservions le droit d'intenter toute poursuite, action ou procédure contre vous pour violation des présentes conditions d'utilisation dans votre pays de résidence ou dans tout autre pays concerné. Vous renoncez à toute objection à l'exercice de la juridiction sur vous par ces tribunaux et au lieu devant ces tribunaux.</p>

                                <h4 class="font-weight-semibold">Arbitrage</h4>

                                <p>À la seule discrétion de {{ $app_name }}, il peut vous être demandé de soumettre tout litige découlant de l'utilisation des présentes conditions d'utilisation ou du site Web, y compris les litiges découlant de ou concernant leur interprétation, leur violation, leur invalidité, leur non-application. -exécution ou résiliation d'un arbitrage final et exécutoire en vertu de la loi sur l'arbitrage et la conciliation du Nigeria</p>

                                <h4 class="font-weight-semibold">Limitation du délai de dépôt des réclamations</h4>

                                <p> TOUTE CAUSE D'ACTION OU DE RÉCLAMATION QUE VOUS POUVEZ AVOIR DÉCOULANT DE OU LIÉE À CES CONDITIONS D'UTILISATION OU AU SITE WEB DOIT ÊTRE COMMENCÉE DANS UN DÉLAI D'UN (1) AN APRÈS L'EXPÉDITION DE LA CAUSE D'ACTION, SINON, CETTE CAUSE D'ACTION OU DE RÉCLAMATION EST PERMANENTEMENT BARRÉ.</p>

                                <h4 class="font-weight-semibold">Renonciation et divisibilité</h4>

                                <p>Aucune renonciation par {{ $app_name }} à tout terme ou condition énoncée dans les présentes conditions d'utilisation ne sera considérée comme une renonciation supplémentaire ou continue à ce terme ou condition ou une renonciation à tout autre terme ou condition, et tout Le fait que {{ $app_name }} ne fasse pas valoir un droit ou une disposition en vertu des présentes conditions d'utilisation ne constitue pas une renonciation à ce droit ou à cette disposition.</p>

                                <p>Si une disposition des présentes conditions d'utilisation est jugée invalide, illégale ou inapplicable par un tribunal ou un autre tribunal compétent pour quelque raison que ce soit, cette disposition sera supprimée ou limitée dans la mesure minimale telle que les dispositions restantes de les conditions d'utilisation resteront pleinement en vigueur.</p>

                                <h4 class="font-weight-semibold">Contrat intégral</h4>

                                <p>Ces conditions d'utilisation et notre <a target="_blank" href="{{ route('privacy_policy') }}">Politique de confidentialité</a> constituent l'accord unique et intégral entre vous et {{ $app_name }} en ce qui concerne le site Web et remplace tous les accords, accords, représentations et garanties antérieurs et contemporains, tant écrits qu'oraux, concernant le site Web.</p>

                                <h5 class="font-weight-semibold">Vos commentaires et préoccupations</h5>
                                <p>Si vous avez des commentaires ou des préoccupations concernant, sans toutefois s'y limiter, ces conditions d'utilisation. Veuillez nous contacter.</p>

                                <p>Ce site Web est exploité par {{ $app_name }}.</p>

                                <p>Tous les autres retours, commentaires, demandes d'assistance technique et autres communications relatives au site Web doivent être adressés à l'administrateur de l'école. Veuillez appeler {{ $contact_phone }}</p>
                             </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
