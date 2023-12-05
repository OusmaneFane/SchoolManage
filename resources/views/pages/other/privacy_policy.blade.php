@extends('layouts.login_master')

@section('content')

<div class="page-content">
    <div class="content-wrapper">
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title font-weight-bold text-center">POLITIQUE DE CONFIDENTIALITÉ</h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div style="font-size: 16px;" class="col-md-10 offset-md-1">
                            <p>Dernière Modification: 21, November  2023</p>

                            <h4 class="font-weight-semibold">Introduction</h4>

                            <p>{{ $app_name }} (« Nous ») respectons votre vie privée et s'engage à la protéger en nous conformant à cette politique.</p>

                            <p>Cette politique décrit les types d'informations que nous pouvons collecter auprès de vous ou que vous pouvez fournir lorsque vous visitez le site Web.
                                <a target="_blank" href="{{ $app_url }}">{{ $app_url }}</a> (notre « Site Web ») et nos pratiques en matière de collecte, d'utilisation, de conservation, de protection et de divulgation de ces informations.</p>

                            <p>Cette politique s'applique aux informations que nous collectons:</p>

                            <ul>
                                <li>Sur ce site Web.</li>
                                <li>Dans les e-mails, SMS et autres messages électroniques entre vous et ce site Web.</li>
                            </ul>

                           <p> Veuillez lire attentivement cette politique pour comprendre nos politiques et pratiques concernant vos informations et la manière dont nous les traiterons. Si vous n'êtes pas d'accord avec nos politiques et pratiques, votre choix est de ne pas utiliser notre site Web. En accédant ou en utilisant ce site Web, vous acceptez cette politique de confidentialité. Cette politique peut changer de temps à autre (voir Modifications de notre politique de confidentialité). Votre utilisation continue de ce site Web après que nous ayons apporté des modifications est considérée comme une acceptation de ces modifications, veuillez donc vérifier périodiquement la politique pour les mises à jour.</p>

                            <h4 class="font-weight-semibold">Enfants de moins de 13 ans</h4>

                           <p>Nous ne collectons pas sciemment d'informations personnelles auprès d'enfants de moins de 13 ans. Si vous avez moins de 13 ans, ne fournissez aucune information sur ce site Web ou sur ou via l'une de ses fonctionnalités sans obtenir au préalable le consentement parental. Si nous apprenons que nous avons collecté ou reçu des informations personnelles d'un enfant de moins de 13 ans sans vérification du consentement parental, nous supprimerons ces informations. Si vous pensez que nous pourrions détenir des informations concernant un enfant de moins de 13 ans, veuillez appeler le {{ $contact_phone }}</p>

                            <h4 class="font-weight-semibold">Informations que nous collectons à votre sujet et comment nous les collectons</h4>

                            <p>Nous collectons plusieurs types d'informations auprès des utilisateurs de notre site Web, notamment des informations:</p>

                            <ul>
                                <li>par lesquels vous pouvez être personnellement identifié (« informations personnelles » );</li>
                                <li>il s'agit de vous mais ne vous identifie pas individuellement ; et/ou</li>
                                <li>sur votre connexion Internet, l'équipement que vous utilisez pour accéder à notre site Web et les détails d'utilisation.</li>
                            </ul>

                            <p>Nous collectons ces informations :</p>

                            <ul>
                                <li>Directly from you when you provide it to us.</li>
                                <li>Automatiquement lorsque vous naviguez sur le site. Les informations collectées automatiquement peuvent inclure des détails d'utilisation, des adresses IP et des informations collectées via des cookies ou d'autres technologies de suivi.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Informations que vous nous fournissez. Les informations que nous collectons sur ou via notre site Web peuvent inclure :</h4>

                            <ul>
                                <li>Informations que vous fournissez en remplissant des formulaires ou des enquêtes sur notre site Web. Les informations personnelles soumises ne seront pas transférées à des tiers non affiliés, sauf indication contraire au moment de la collecte. Lorsque vous soumettez des informations personnelles, celles-ci sont utilisées uniquement aux fins indiquées au moment de la collecte.</li>
                                <li>Enregistrements et copies de votre correspondance (y compris vos adresses e-mail), si vous nous contactez.</li>                            </ul>

                           <h4 class="font-weight-semibold">Informations que nous collectons grâce aux technologies de collecte automatique de données :</h4>

                            <p>Lorsque vous naviguez et interagissez avec notre site Web, nous pouvons utiliser des technologies de collecte automatique de données pour collecter certaines informations sur votre équipement, vos actions de navigation et vos habitudes, notamment :</p>

                           <ul>
                                <li>Détails de vos visites sur notre site Web, y compris les données de trafic, les données de localisation, les journaux et autres données de communication ainsi que les ressources auxquelles vous accédez et utilisez sur le site Web.</li>
                                <li>Informations sur votre ordinateur et votre connexion Internet, y compris votre adresse IP, votre système d'exploitation et votre type de navigateur.</li>
                            </ul>

                            <p>Les informations que nous collectons automatiquement sont des données statistiques et peuvent inclure des informations personnelles, et nous pouvons les conserver ou les associer à des informations personnelles que nous collectons par d'autres moyens ou que nous recevons de tiers. Il nous aide à améliorer notre site Web et à fournir un service meilleur et plus personnalisé, notamment en nous permettant de :</p>

                            <ul>
                                <li>Estimer la taille de notre audience et nos modèles d'utilisation.</li>
                                <li>Accélérez vos recherches.</li>
                                <li>Vous reconnaître lorsque vous revenez sur notre site Web.</li>
                            </ul>

                           <p>Les technologies que nous utilisons pour cette collecte automatique de données peuvent inclure :</p>

                            <ul>
                                <li><strong>Cookies</strong> (ou cookies de navigateur). Un cookie est un petit fichier déposé sur le disque dur de votre ordinateur. Vous pouvez refuser d'accepter les cookies du navigateur en activant le paramètre approprié sur votre navigateur. Cependant, si vous sélectionnez ce paramètre, vous ne pourrez peut-être pas accéder à certaines parties de notre site Web. À moins que vous n'ayez ajusté les paramètres de votre navigateur afin qu'il refuse les cookies, notre système émettra des cookies lorsque vous dirigerez votre navigateur vers notre site Web.</li>
                                <li><strong>Cookies Flash.</strong> Certaines fonctionnalités de notre site Web peuvent utiliser des objets stockés localement (ou cookies Flash) pour collecter et stocker des informations sur vos préférences et votre navigation vers, depuis et sur notre site Web. Les cookies Flash ne sont pas gérés par les mêmes paramètres de navigateur que ceux utilisés pour les cookies du navigateur. Pour plus d'informations sur la gestion de vos paramètres de confidentialité et de sécurité pour les cookies Flash, consultez Choix concernant la manière dont nous utilisons et divulguons vos informations.</li>
                                <li><strong>Balises Web.</strong> Les pages de notre site Web peuvent contenir de petits fichiers électroniques appelés balises Web (également appelées gifs clairs, balises pixel et gifs à pixel unique) qui nous permettent, par exemple : pour compter les utilisateurs qui ont visité ces pages et pour d'autres statistiques de sites Web associées (par exemple, enregistrer la popularité de certains contenus de sites Web et vérifier l'intégrité du système et du serveur).</li>
                            </ul>

                            <h4 class="font-weight-semibold">Comment nous utilisons vos informations</h4>

                           <p>Nous utilisons les informations que nous collectons sur vous ou que vous nous fournissez, y compris les informations personnelles :</p>

                            <ul>
                                <li>Pour vous présenter notre site Web et son contenu.</li>
                                <li>Pour vous permettre de participer aux fonctionnalités interactives de notre site Web.</li>
                                <li>De toute autre manière que nous pouvons décrire lorsque vous fournissez les informations.</li>
                                <li>À toute autre fin avec votre consentement.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Divulgation de vos informations</h4>

                            <p>Nous pouvons divulguer des informations agrégées sur nos utilisateurs et des informations qui n'identifient aucun individu, sans restriction.</p>

                            <p>Nous pouvons divulguer les informations personnelles que nous collectons ou que vous fournissez comme décrit dans cette politique de confidentialité :</p>

                            <ul>
                                <li>Pour remplir l'objectif pour lequel vous le fournissez.</li>
                                <li>À toute autre fin divulguée par nous lorsque vous fournissez les informations.</li>
                                <li>Avec votre consentement.</li>
                            </ul>

                            <p>Nous pouvons également divulguer vos informations personnelles :</p>

                            <ul>
                                <li>Pour se conformer à toute ordonnance du tribunal, loi ou procédure judiciaire, y compris pour répondre à toute demande gouvernementale ou réglementaire.</li>
                                <li>Pour faire respecter ou  Pour faire appliquer nos <a target="_blank" href="{{ route('terms_of_use') }}">Conditions d'utilisation</a>.</li>
                                <li>Si nous pensons que la divulgation est nécessaire ou appropriée pour protéger nos droits, notre propriété ou la sécurité de nos étudiants ou d'autres personnes.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Choix concernant la manière dont nous utilisons et divulguons vos informations</h4>
                            <p>Nous nous efforçons de vous offrir des choix concernant les informations personnelles que vous nous fournissez. Nous avons créé des mécanismes pour vous offrir le contrôle suivant sur vos informations :</p>

                            <ul>
                                <li><strong>Technologies de suivi et publicité</strong>. Vous pouvez configurer votre navigateur pour refuser tout ou partie des cookies du navigateur, ou pour vous alerter lorsque des cookies sont envoyés. Pour savoir comment gérer vos paramètres de cookies Flash, visitez la page des paramètres de Flash Player sur le site Web d'Adobe. Si vous désactivez ou refusez les cookies, veuillez noter que certaines parties de ce site peuvent alors être inaccessibles ou ne pas fonctionner correctement.</li>
                            </ul>

                          <h4 class="font-weight-semibold">Sécurité des données</h4>

                            <p>Nous avons mis en œuvre des mesures conçues pour protéger vos informations personnelles contre toute perte accidentelle et contre tout accès, utilisation, modification et divulgation non autorisés.</p>

                            <h4 class="font-weight-semibold">Modifications de notre politique de confidentialité</h4>

                           <p>Notre politique est de publier toute modification que nous apportons à notre politique de confidentialité sur cette page. Si nous apportons des modifications importantes à la manière dont nous traitons les informations personnelles de nos utilisateurs, nous vous en informerons via un avis sur la page d'accueil du site Web. La date à laquelle la politique de confidentialité a été révisée pour la dernière fois est identifiée en haut de la page. Vous êtes responsable de visiter périodiquement notre site Web et cette politique de confidentialité pour vérifier tout changement.</p>

                            <h4 class="font-weight-semibold">Coordonnées</h4>

                            <p>Pour poser des questions ou des commentaires sur cette politique de confidentialité et nos pratiques de confidentialité, veuillez appeler le {{ $contact_phone }}></p> </div>
                    </div>
                </div>

            </div>
        </div>
</div>
</div>
@endsection
