<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148bd4c51e00             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Package\Salary\Model\Income as IncModel; use Pmpr\Package\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Package\Salary\Profile\Admin\Tab\Income; use Pmpr\Package\Salary\Profile\Admin\Tab\Payment; use Pmpr\Package\Salary\Profile\Admin\Tab\Product; use Pmpr\Package\Salary\User; class Admin extends Page { const MENU_SLUG = "\x6d\171\x5f\x63\x6f\154\x6c\141\x62\x6f\162\141\164\x69\x6f\x6e\137\160\162\157\x66\x69\154\145"; const BANK_INFO = "\x62\141\x6e\x6b\137\x69\x6e\x66\157"; const WITHDRAW_TO = "\167\151\164\x68\144\162\x61\x77\137\x74\x6f"; public function __construct() { if (!(DecoratorUser::scmcyesmmikkucie() || ManipulateUser::askmkgcmgekiqwsg(User::COLLABORATOR_ROLE))) { goto ickcmqoiosquugwe; } $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\141\162\145\x6e\164\137\x73\154\165\147" => $wksoawcgagcgoask, "\x70\141\x67\x65\x5f\x74\x69\164\x6c\x65" => __("\115\171\x20\x43\157\x6c\x6c\141\x62\x6f\162\141\x74\x69\x6f\x6e\40\120\x72\x6f\x66\x69\x6c\145", PR__PKG__SALARY), "\x6d\x65\156\165\137\163\x6c\165\147" => self::MENU_SLUG, "\x70\x6f\163\x69\x74\x69\157\x6e" => 0, "\143\141\160\141\x62\x69\x6c\x69\x74\171" => "\x72\x65\x61\144"]; parent::__construct(); $this->iemaakgqgqosiecm(); ickcmqoiosquugwe: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x6d\x69\156\137\x69\156\x69\x74", [$this, "\x79\145\x79\x69\x67\165\171\x65\147\155\155\171\x75\x73\x65\141"]); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Ajax::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto qmeoaqmsuseueqiy; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x70\162\x6f\x66\x69\154\x65", $eygsasmqycagyayw->get("\160\162\157\146\x69\154\145\56\152\163"))->ayuciigykaswwqeo("\x6a\x71\165\145\162\x79"))->ikqyiskqaaymscgw("\141\152\141\170", Ajax::ACTIONS)->ikqyiskqaaymscgw("\x6d\145\x73\x73\x61\x67\x65\x73", ["\x77\x69\164\150\144\162\x61\x77\x5f\x74\157" => sprintf(__("\111\x74\x27\x73\x20\156\157\164\40\x61\x20\x76\x61\154\151\144\40\45\x73", PR__PKG__SALARY), __("\x44\141\164\x65", PR__PKG__SALARY)), "\145\155\x70\x74\171" => ["\142\x61\x6e\153\x5f\x69\156\x66\x6f" => sprintf(__("\x50\x6c\145\x61\163\x65\x20\x73\x65\154\x65\x63\164\x20\141\x20\45\163", PR__PKG__SALARY), __("\x42\x61\x6e\153\x20\101\143\x63\x6f\x75\156\x74\x20\111\156\x66\x6f\162\155\x61\164\x69\157\156", PR__PKG__SALARY)), "\x77\x69\164\150\x64\x72\141\167\x5f\164\x6f" => sprintf(__("\x50\x6c\x65\x61\163\x65\40\x73\x65\x6c\145\143\164\40\x61\40\x25\163", PR__PKG__SALARY), __("\104\x61\164\145", PR__PKG__SALARY))]]); qmeoaqmsuseueqiy: } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\x69\x6e\x63\157\155\145\x73" => __("\x54\157\164\x61\x6c\40\x49\x6e\x63\157\x6d\145\x73", PR__PKG__SALARY), "\x64\145\144\165\x63\164\x73" => __("\124\157\164\x61\154\x20\104\145\144\165\x63\164\x73", PR__PKG__SALARY), "\160\x61\171\155\x65\156\x74\x73" => __("\124\x6f\164\141\154\40\x50\x61\x79\155\x65\x6e\x74\163", PR__PKG__SALARY)]; $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\x69\x6e\x63\157\155\145\x73": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->cwkywyqksyucoyia([IncModel::OWNER => $miowmmgaiagcuyoo, IncModel::WITHDRAW_STATUS => [self::VALUE => [IncModel::WITHDRAW_STATUS_WITHDRAWN, IncModel::WITHDRAW_STATUS_UNWITHDRAWN], self::CLAUSE => self::CONTAIN]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); goto cgewcsueoyaeikgm; case "\x64\145\144\165\x63\x74\x73": goto cgewcsueoyaeikgm; case "\160\x61\171\155\x65\x6e\x74\163": goto cgewcsueoyaeikgm; } sukskmcwsoysiuqu: cgewcsueoyaeikgm: } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = ["\160\153\171\x79\141\x67\x65\167\x6b\x69\x79\143\x6b\155\167\x79" => $pkyyagewkiyckmwy, "\145\x71\147\x6f\157\x63\147\141\x71\167\x71\143\x69\155\151\145" => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie)]; cuoqqgaygogsmmic: } ygkcacsyyckescqs: echo $this->iuygowkemiiwqmiw("\x73\x74\x61\x74\x73", ["\151\164\145\155\163" => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $mkucggyaiaukqoce = ManipulateUser::get(); $ikgwqyuyckaewsow = ''; if (!$mkucggyaiaukqoce) { goto eyiamcekkgkiawqy; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\x63\141\156\143\145\154"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->wmouogmqeaiuukqe($mkucggyaiaukqoce, self::BANK_INFO); if ($aukoggqmyoweqokc) { goto igymseewwyiocoug; } $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo("\x74\141\x62", "\164\x61\x62\137\151\x6e\143\x6f\x6d\x65\163\x5f\x61\x6e\144\x5f\x70\141\171\155\x65\156\x74\x73", DecoratorUser::ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\162\145\146" => $geecqyososceumsk], __("\x50\x72\157\x66\151\154\x65\40\160\x61\147\145", PR__PKG__SALARY)); $iwamiguusayooguq = sprintf(__("\131\x6f\x75\40\163\x68\157\165\154\144\40\146\151\162\x73\164\x2c\x20\x66\151\x6c\x6c\x20\151\156\40\x79\x6f\x75\x72\x20\x62\x61\156\x6b\40\x61\143\x63\x6f\165\156\x74\x20\151\x6e\146\157\162\155\141\164\151\157\156\40\151\x6e\x73\x69\x64\x65\40\x79\157\165\x72\40\x25\x73\x2c\40\164\x6f\x20\x73\165\x62\155\x69\x74\40\141\40\x77\x69\x74\150\144\162\141\x77\x2e", PR__PKG__SALARY), $uweseoyuyuwyeggc); goto mqccmesakuemceqi; igymseewwyiocoug: $aukoggqmyoweqokc->yoimakcqmoqokkcu(); $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::WITHDRAW_TO, __("\x44\141\x74\x65\40\124\x6f", PR__PKG__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\157\x77\156\x65\x72", $saqgcoqwmimycgim)], ["\x65\x63\150\157" => false, "\160\141\x72\145\x6e\x74" => ["\x63\x6c\141\x73\x73" => "\x63\x6f\x6c\55\61\62\x20\x63\157\154\x2d\x6d\144\x2d\70\x20\x63\x6f\x6c\55\154\147\55\66\x20\155\x79\55\x33\x20\x6d\170\55\141\x75\164\x6f"]]); $ikgwqyuyckaewsow = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\154\141\x73\163" => "\x72\157\167"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\x42\x79\x20\x73\165\x62\x6d\151\x74\x74\x69\156\x67\40\141\x20\156\x65\x77\40\160\141\171\155\145\x6e\x74\40\162\145\x71\x75\x65\x73\x74\x2c\40\171\157\165\40\x77\x69\x6c\154\x20\162\x65\x63\x65\151\166\x65\40\171\157\x75\162\40\151\x6e\143\x6f\x6d\145\x20\151\x6e\40\x74\150\x65\x20\x66\x6f\x72\155\x20\x6f\146\40\x61\40\144\x65\160\157\x73\x69\x74\40\x74\x6f\40\164\150\145\x20\x69\156\164\162\x6f\144\165\x63\x65\x64\x20\x62\x61\x6e\x6b\x20\141\x63\143\x6f\165\156\x74\56", PR__PKG__SALARY); $qyukicweqoisimwg[] = ["\x63\x6c\141\x73\x73" => "\142\164\x6e\x20\142\164\156\x2d\x70\162\151\155\x61\x72\x79\40\x61\144\x64\55\x6e\x65\x77\55\167\151\164\x68\x64\x72\141\x77", "\164\x69\x74\154\x65" => __("\123\165\142\x6d\151\x74", PR__PKG__SALARY)]; mqccmesakuemceqi: $iwamiguusayooguq = ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", [], $iwamiguusayooguq); $uosiuoqysyokseqe = __("\101\144\x64\x20\x4e\x65\167\40\x57\x69\x74\150\x64\x72\x61\x77", PR__PKG__SALARY); $nsmgceoqaqogqmuw = ManipulateHTML::icqkogwskuwscskk(["\x73\151\x7a\145" => "\x6c\x67", "\164\171\x70\145" => "\160\162\x69\155\x61\x72\171", "\164\x69\164\154\145" => $uosiuoqysyokseqe, "\160\162\145\146\x69\x78" => "\x61\144\x64\137\x6e\145\x77\x5f\167\x69\164\150\x64\162\141\167", "\143\157\156\x74\145\x6e\164" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\x62\165\164\164\x6f\156\163" => $qyukicweqoisimwg, "\163\160\x69\x6e\x6e\145\162" => true], ["\x6d\145\161\x6f\143\x77\163\145\x63\163\171\167\x69\x69\161\x73" => $uosiuoqysyokseqe, "\x77\x77\147\x75\143\x73\163\x61\x65\x63\x71\145\x6b\x75\x65\153" => ["\143\x6c\x61\x73\163" => "\142\164\156\x20\x62\164\156\55\160\x72\x69\155\141\x72\171\40\x66\x6c\157\141\164\55\162\x69\x67\150\x74", "\x61\162\151\141\x2d\x6c\141\x62\x65\x6c" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); eyiamcekkgkiawqy: } }
