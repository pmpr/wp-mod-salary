<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148bd4c51e00             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Container extends BaseClass { const IBAN = "\151\x62\141\x6e"; const BANK = "\142\141\156\153"; const LOCKED = "\x6c\x6f\x63\x6b\x65\144"; const ESCAPED = "\145\163\143\x61\160\145\144"; const ACCOUNT = "\141\x63\143\x6f\x75\x6e\x74"; const DEBIT_CARD = "\x64\x65\142\x69\x74\137\143\141\162\x64"; const BANK_INFO = "\x73\141\154\141\162\171\137\x62\141\156\153\137\x61\143\x63\x6f\x75\x6e\x74\x5f\151\x6e\x66\x6f\162\x6d\141\164\151\157\x6e"; const COLLABORATOR_ROLE = "\x63\x6f\154\154\x61\x62\157\162\141\x74\157\162"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function ukckwgeyciyygoou() : array { $oammesyieqmwuwyi = $this->weysguygiseoukqw(Setting::FEE_POLICIES, []); $aacykmqwasyaykgu = []; if (!$oammesyieqmwuwyi) { goto mswsoaimesegiiic; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::ENABLE, Setting::BANK_NAME, Setting::POLICY_TYPE, Setting::ACCOUNT_TYPE])) { goto usqgaogkqgemuima; } $sqeykgyoooqysmca = ManipulateArray::get($igqsaukqcqscimok, Setting::POLICY_TYPE, Setting::CONSTANT_POLICY); $eqgoocgaqwqcimie = ManipulateArray::get($igqsaukqcqscimok, $sqeykgyoooqysmca, 0); if (!$eqgoocgaqwqcimie) { goto wcesymwqykqoyuqk; } $igqsaukqcqscimok[Setting::POLICY_VALUE] = $eqgoocgaqwqcimie; $aacykmqwasyaykgu[] = $igqsaukqcqscimok; wcesymwqykqoyuqk: usqgaogkqgemuima: meawswgwagoqgkye: } goacqqsgaaigyuaw: mswsoaimesegiiic: return $aacykmqwasyaykgu; } public function mqyckeaqgokeqwuq($qqqskcogoyswqaum, $qqswgiawgeaeoecu) { $isweyuoisomqyaag = []; array_filter($qqswgiawgeaeoecu); if (!$qqswgiawgeaeoecu) { goto qgegkeomwscwwiuw; } $sqeykgyoooqysmca = ManipulateArray::get($qqqskcogoyswqaum, Setting::POLICY_TYPE); $eqgoocgaqwqcimie = ManipulateArray::get($qqqskcogoyswqaum, Setting::POLICY_VALUE); if ($sqeykgyoooqysmca == Setting::VARIABLE_POLICY) { goto egasokooagakisiy; } $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto kecwuwwcwokuksyq; egasokooagakisiy: $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy("{$eqgoocgaqwqcimie}\45"); kecwuwwcwokuksyq: $isweyuoisomqyaag = ["\x71\161\x73\167\147\x69\x61\x77\x67\x65\x61\x65\x6f\x65\143\x75" => $qqswgiawgeaeoecu, "\145\x77\147\167\161\x61\x6d\x6b\x79\x67\151\161\141\x61\x77\143" => sprintf(__("\x46\x65\145\40\157\x66\40\145\x61\x63\150\x20\x74\162\141\x6e\163\x61\x63\x74\151\157\156\x20\151\163\x20\45\163", PR__PKG__SALARY), $eqgoocgaqwqcimie)]; qgegkeomwscwwiuw: return $isweyuoisomqyaag; } public function muyyieageswcgqqw($miowmmgaiagcuyoo, $wayieuwuoeasekks) { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $wayieuwuoeasekks = User::symcgieuakksimmu()->soiekwmcuuaowsgo($miowmmgaiagcuyoo, $wayieuwuoeasekks); $qmomekeesaiaoegu = ManipulateArray::get($wayieuwuoeasekks, self::BANK); $sqeykgyoooqysmca = ManipulateArray::get($wayieuwuoeasekks, self::TYPE); $ccamueccusigaaio = null; foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::ACCOUNT_TYPE); $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::BANK_NAME); if (!(in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei))) { goto eiawsoasmscmqswa; } $ccamueccusigaaio = $qqqskcogoyswqaum; goto qmiwsequckckoaei; eiawsoasmscmqswa: goeoymmqqqeeoime: } qmiwsequckckoaei: return $ccamueccusigaaio; } protected function imqmyggquiyewkww($uamcoiueqaamsqma, $wwgucssaecqekuek = []) { $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\x73\163", "\x6d\163\147\40\x6d\x79\55\141\165\x74\157"); return ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", $wwgucssaecqekuek, [ManipulateHTML::ciuuiyckmsygceis($uamcoiueqaamsqma, ["\x63\x6c\x61\163\x73" => "\x6d\171\55\x61\165\x74\157"])]); } }
