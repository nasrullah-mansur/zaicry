<?php

use App\TermsPage;
use Illuminate\Database\Seeder;

class TermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TermsPage::create([
            'terms_page_main_heading' => 'Terms Service',
            'terms_page_title' => 'Terms Of Service',
            'terms_page_heading_description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.',
            'terms_page_description' => '<div>Below are our Terms of Service, which outline a lot of legal goodies, but the bottom line is it’s our aim to always take care of both you, as a customer, or as a seller on our platform.<br><br></div><ul><li><strong>Licensing Terms</strong></li></ul><div><br></div><ul><li>The Standard License grants you a non-exclusive right to make use of Theme you have purchased.</li></ul><div>&nbsp;</div><ul><li>You are licensed to use the Item to create one End Product for yourself or for one client (a “single application”), and the End Product can be distributed for Free.</li></ul><div>&nbsp;</div><ul><li>If a Theme contains code, images, or content sourced from elsewhere under a different license, that item retains its original license. The license for the code, images, or content will be noted by the Theme author. You are responsible for adhering to the original license or clearing it with the author of the code, image, or content.</li></ul><div>&nbsp;</div><ul><li>This license can be terminated if you breach it and you lose the right to distribute the End Product until the Theme has been fully removed from the End Product.</li></ul><div>&nbsp;</div><ul><li>The author of the Theme retains ownership of the Theme, but grants you the license on these terms. This license is between the author of the Theme and you. Be Colossal LLC (Bootstrap Themes) are not a party to this license or the one granting you the license.</li></ul><div>&nbsp;</div><ul><li>You are licensed to use the Item to create one End Product for yourself or for one client (a “single application”), and the End Product maybe sold or distributed for free.</li></ul><div>If you opt for an Extended License:<br><br></div><div><strong>Additional Terms<br></strong><br></div><div>By visiting and/or taking any action on Bootstrap Themes, you confirm that you are in agreement with and bound by the terms outlined below. These terms apply to the website, emails, or any other communication.<br><br></div><ul><li>All payments are processed securely through PayPal or Stripe. Bootstrap Themes does not directly process payments through the website.</li></ul><div>&nbsp;</div><ul><li>You have 14 days to evaluate your purchase. If your purchase fails to meet expectations set by the seller, or is critically flawed in some way, contact Bootstrap Themes and we will issue a full refund pending a review.</li></ul><div>&nbsp;</div><ul><li>Membership is a benefit for those who follow our terms and policies. We may at any time suspend or terminate your account.</li></ul>'
        ]);
    }
}
