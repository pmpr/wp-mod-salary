<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d71f37149             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Container extends BaseClass { const wyqmcowecikgawuu = "\151\x62\x61\x6e"; const oogeqgcgkamuoaoe = "\x62\x61\156\x6b"; const wagwccqcqwgsoyoi = "\154\x6f\x63\x6b\145\x64"; const cqkcksqwkcsiykuq = "\145\163\x63\141\x70\145\144"; const kuwsqycgaagiimge = "\x61\143\143\157\165\x6e\x74"; const skyceaacaaaamiii = "\144\145\x62\151\164\137\x63\x61\162\144"; const qagqayweyigciamg = "\163\141\154\141\162\x79\x5f\142\141\156\x6b\x5f\x61\x63\143\157\x75\156\164\x5f\151\156\146\157\162\x6d\141\x74\151\157\156"; const yuqaieqcaccggqck = "\143\x6f\154\154\x61\x62\x6f\x72\x61\x74\157\162"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function ukckwgeyciyygoou() : array { $oammesyieqmwuwyi = $this->weysguygiseoukqw(Setting::gkysgacoiamwmggk, []); $aacykmqwasyaykgu = []; if (!$oammesyieqmwuwyi) { goto qiaaqkymeuuueoqk; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::iccwcygaeqmomooo, Setting::gskosgoeymsumieq, Setting::iyqigkiieoieskgy, Setting::aewsykuggcssqeyo])) { goto asaowisseacciyia; } $sqeykgyoooqysmca = ManipulateArray::get($igqsaukqcqscimok, Setting::iyqigkiieoieskgy, Setting::ogkkygkwcccggasw); $eqgoocgaqwqcimie = ManipulateArray::get($igqsaukqcqscimok, $sqeykgyoooqysmca, 0); if (!$eqgoocgaqwqcimie) { goto acesyuieuuqwgkwm; } $igqsaukqcqscimok[Setting::oyyoccawmkogkcyy] = $eqgoocgaqwqcimie; $aacykmqwasyaykgu[] = $igqsaukqcqscimok; acesyuieuuqwgkwm: asaowisseacciyia: oqwcmgwimeisusoe: } makomwwyomweyamm: qiaaqkymeuuueoqk: return $aacykmqwasyaykgu; } public function mqyckeaqgokeqwuq($qqqskcogoyswqaum, $qqswgiawgeaeoecu) : array { $isweyuoisomqyaag = []; array_filter($qqswgiawgeaeoecu); if (!$qqswgiawgeaeoecu) { goto owgakkqgckqcegoi; } $sqeykgyoooqysmca = ManipulateArray::get($qqqskcogoyswqaum, Setting::iyqigkiieoieskgy); $eqgoocgaqwqcimie = ManipulateArray::get($qqqskcogoyswqaum, Setting::oyyoccawmkogkcyy); if ($sqeykgyoooqysmca == Setting::mikaaiimemmoegcm) { goto ugswokwmkumcmigc; } $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto gwiaimosqoiquwkc; ugswokwmkumcmigc: $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy("{$eqgoocgaqwqcimie}\45"); gwiaimosqoiquwkc: $isweyuoisomqyaag = [self::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, self::ssmskyqgcmeiayco => sprintf(__("\x46\145\x65\x20\157\146\40\145\x61\143\150\40\164\x72\x61\x6e\x73\x61\143\x74\x69\157\x6e\40\x69\x73\40\45\163", PR__MDL__SALARY), $eqgoocgaqwqcimie)]; owgakkqgckqcegoi: return $isweyuoisomqyaag; } public function kgkkgawwksigaqyy($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk) { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $eiwicgsqoiaeawkk = User::symcgieuakksimmu()->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk); $qmomekeesaiaoegu = ManipulateArray::get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = ManipulateArray::get($eiwicgsqoiaeawkk, self::squoamkioomemiyi); $ccamueccusigaaio = null; foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); if (!(in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei))) { goto gcskyqewysqaceeg; } $ccamueccusigaaio = $qqqskcogoyswqaum; goto cigesysuauaiccms; gcskyqewysqaceeg: qumkwsqqocooyuoq: } cigesysuauaiccms: return $ccamueccusigaaio; } protected function imqmyggquiyewkww($uamcoiueqaamsqma, $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\163\x73", "\x6d\x73\147\40\155\171\x2d\x61\165\164\x6f"); return ManipulateHTML::uuccukgasskgimsq("\144\x69\166", $wwgucssaecqekuek, [ManipulateHTML::ciuuiyckmsygceis($uamcoiueqaamsqma, ["\143\x6c\x61\163\x73" => "\155\x79\x2d\141\x75\x74\157"])]); } }
