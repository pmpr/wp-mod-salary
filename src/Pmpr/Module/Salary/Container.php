<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3f9e904396             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { const wyqmcowecikgawuu = "\x69\x62\x61\156"; const oogeqgcgkamuoaoe = "\x62\141\x6e\153"; const wagwccqcqwgsoyoi = "\154\157\143\x6b\x65\144"; const cqkcksqwkcsiykuq = "\145\163\x63\141\160\145\144"; const kuwsqycgaagiimge = "\x61\x63\143\157\165\156\164"; const skyceaacaaaamiii = "\144\145\142\151\x74\137\x63\x61\162\144"; const qagqayweyigciamg = "\x73\141\154\x61\162\x79\x5f\x62\x61\156\153\x5f\x61\143\143\157\165\156\164\137\x69\x6e\146\x6f\x72\155\141\x74\151\x6f\156"; const yuqaieqcaccggqck = "\x63\x6f\154\154\x61\142\157\x72\x61\x74\x6f\x72"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function ukckwgeyciyygoou() : array { $oammesyieqmwuwyi = $this->weysguygiseoukqw(Setting::gkysgacoiamwmggk, []); $aacykmqwasyaykgu = []; if (!$oammesyieqmwuwyi) { goto uaicwcqwauosmsqm; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [self::iccwcygaeqmomooo, Setting::gskosgoeymsumieq, Setting::iyqigkiieoieskgy, Setting::aewsykuggcssqeyo])) { goto cumeycwmuuqawwyu; } $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Setting::iyqigkiieoieskgy, Setting::ogkkygkwcccggasw); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $sqeykgyoooqysmca, 0); if (!$eqgoocgaqwqcimie) { goto ckwmkquuyyugigom; } $igqsaukqcqscimok[Setting::oyyoccawmkogkcyy] = $eqgoocgaqwqcimie; $aacykmqwasyaykgu[] = $igqsaukqcqscimok; ckwmkquuyyugigom: cumeycwmuuqawwyu: awwaiioyywmokwsm: } wswikooyuaaouqgk: uaicwcqwauosmsqm: return $aacykmqwasyaykgu; } public function mqyckeaqgokeqwuq($qqqskcogoyswqaum, $qqswgiawgeaeoecu) : array { $isweyuoisomqyaag = []; array_filter($qqswgiawgeaeoecu); if (!$qqswgiawgeaeoecu) { goto iaomqomgiwiegoca; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::iyqigkiieoieskgy); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::oyyoccawmkogkcyy); if ($sqeykgyoooqysmca === Setting::mikaaiimemmoegcm) { goto gsqcoqqsioiyoykq; } $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); goto goaowamiyyamueiw; gsqcoqqsioiyoykq: $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy("{$eqgoocgaqwqcimie}\45"); goaowamiyyamueiw: $isweyuoisomqyaag = [self::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, self::ssmskyqgcmeiayco => sprintf(__("\x46\145\145\40\157\x66\40\145\141\x63\150\40\164\x72\141\x6e\x73\141\x63\x74\x69\x6f\156\40\x69\163\40\45\163", PR__MDL__SALARY), $eqgoocgaqwqcimie)]; iaomqomgiwiegoca: return $isweyuoisomqyaag; } public function kgkkgawwksigaqyy($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk) { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $eiwicgsqoiaeawkk = User::symcgieuakksimmu()->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qmomekeesaiaoegu = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::squoamkioomemiyi); $ccamueccusigaaio = null; foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); $aqsekqkimiekimei = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); if (!(in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei, true))) { goto ookcgumoacskyymy; } $ccamueccusigaaio = $qqqskcogoyswqaum; goto ysweqawmawicakeo; ookcgumoacskyymy: owisckseoogsugqq: } ysweqawmawicakeo: return $ccamueccusigaaio; } protected function imqmyggquiyewkww($uamcoiueqaamsqma, array $wwgucssaecqekuek = []) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\163\163", "\x6d\163\x67"); return $swqimwqeweekeusq->iaaacsuskiakkwui($swqimwqeweekeusq->ciuuiyckmsygceis($uamcoiueqaamsqma, []), $wwgucssaecqekuek); } }
