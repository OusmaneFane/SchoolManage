@extends('layouts.login_master')

@section('content')

<div class="page-content">
    <div class="content-wrapper">
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title font-weight-bold text-center">PRIVACY POLICY</h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div style="font-size: 16px;" class="col-md-10 offset-md-1">
                            <p>Dernière Modification: November 21, 2023</p>

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
                                <li>about your internet connection, the equipment you use to access our Website, and usage details.</li>
                            </ul>

                            <p>We collect this information:</p>

                            <ul>
                                <li>Directly from you when you provide it to us.</li>
                                <li>Automatically as you navigate through the site. Information collected automatically may include usage details, IP addresses, and information collected through cookies or other tracking technologies.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Information You Provide to Us. The information we collect on or through our Website may include:</h4>

                            <ul>
                                <li>Information that you provide by filling in forms or surveys on our Website. Personal information submitted will not be transferred to any non-affiliated third parties unless otherwise stated at the time of collection. When you submit personal information, it is used only for the purpose stated at the time of collection.</li>
                                <li>Records and copies of your correspondence (including email addresses), if you contact us.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Information We Collect Through Automatic Data Collection Technologies:</h4>

                            <p>As you navigate through and interact with our Website, we may use automatic data collection technologies to collect certain information about your equipment, browsing actions, and patterns, including:</p>

                            <ul>
                                <li>Details of your visits to our Website, including traffic data, location data, logs, and other communication data and the resources that you access and use on the Website.</li>
                                <li>Information about your computer and internet connection, including your IP address, operating system, and browser type.</li>
                            </ul>

                            <p>The information we collect automatically is statistical data and may include personal information, and we may maintain it or associate it with personal information we collect in other ways or receive from third parties. It helps us to improve our Website and to deliver a better and more personalized service, including by enabling us to:</p>

                            <ul>
                                <li>Estimate our audience size and usage patterns.</li>
                                <li>Speed up your searches.</li>
                                <li>Recognize you when you return to our Website.</li>
                            </ul>

                            <p>The technologies we use for this automatic data collection may include:</p>

                            <ul>
                                <li><strong>Cookies</strong> (or browser cookies). A cookie is a small file placed on the hard drive of your computer. You may refuse to accept browser cookies by activating the appropriate setting on your browser. However, if you select this setting you may be unable to access certain parts of our Website. Unless you have adjusted your browser setting so that it will refuse cookies, our system will issue cookies when you direct your browser to our Website.</li>
                                <li><strong>Flash Cookies.</strong> Certain features of our Website may use local stored objects (or Flash cookies) to collect and store information about your preferences and navigation to, from, and on our Website. Flash cookies are not managed by the same browser settings as are used for browser cookies. For information about managing your privacy and security settings for Flash cookies, see Choices About How We Use and Disclose Your Information.</li>
                                <li><strong>Web Beacons.</strong> Pages of our Website may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit us, for example, to count users who have visited those pages and for other related website statistics (for example, recording the popularity of certain website content and verifying system and server integrity).</li>
                            </ul>

                            <h4 class="font-weight-semibold">How We Use Your Information</h4>

                            <p>We use information that we collect about you or that you provide to us, including any personal information:</p>

                            <ul>
                                <li>To present our Website and its contents to you.</li>
                                <li>To allow you to participate in interactive features on our Website.</li>
                                <li>In any other way we may describe when you provide the information.</li>
                                <li>For any other purpose with your consent.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Disclosure of Your Information</h4>

                            <p>We may disclose aggregated information about our users, and information that does not identify any individual, without restriction.</p>

                            <p>We may disclose personal information that we collect or you provide as described in this privacy policy:</p>

                            <ul>
                                <li>To fulfill the purpose for which you provide it.</li>
                                <li>For any other purpose disclosed by us when you provide the information.</li>
                                <li>With your consent.</li>
                            </ul>

                            <p>We may also disclose your personal information:</p>

                            <ul>
                                <li>To comply with any court order, law, or legal process, including to respond to any government or regulatory request.</li>
                                <li>To enforce or apply our <a target="_blank" href="{{ route('terms_of_use') }}">Terms of Use</a>.</li>
                                <li>If we believe disclosure is necessary or appropriate to protect our rights, property, or safety of our students or others.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Choices About How We Use and Disclose Your Information</h4>
                            <p>We strive to provide you with choices regarding the personal information you provide to us. We have created mechanisms to provide you with the following control over your information:</p>

                            <ul>
                                <li><strong>Tracking Technologies and Advertising</strong>. You can set your browser to refuse all or some browser cookies, or to alert you when cookies are being sent. To learn how you can manage your Flash cookie settings, visit the Flash player settings page on Adobe's website. If you disable or refuse cookies, please note that some parts of this site may then be inaccessible or not function properly.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Data Security</h4>

                            <p>We have implemented measures designed to secure your personal information from accidental loss and from unauthorized access, use, alteration, and disclosure.</p>

                            <h4 class="font-weight-semibold">Changes to Our Privacy Policy</h4>

                           <p>It is our policy to post any changes we make to our privacy policy on this page. If we make material changes to how we treat our users' personal information, we will notify you through a notice on the Website home page. The date the privacy policy was last revised is identified at the top of the page. You are responsible for periodically visiting our Website and this privacy policy to check for any changes.</p>

                            <h4 class="font-weight-semibold">Contact Information</h4>

                            <p>To ask questions or comment about this privacy policy and our privacy practices, please call {{ $contact_phone }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>
</div>
@endsection
