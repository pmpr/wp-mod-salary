<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62496faaa4e00             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Agreement as DBModel; class Agreement extends Tab { public function __construct() { $this->id = "\x61\147\x72\145\x65\x6d\145\x6e\x74"; $this->title = __("\101\147\162\x65\x65\x6d\x65\156\x74", PR__MDL__SALARY); $this->priority = 0; parent::__construct(); } public function gayqqwwuycceosii() : array { $mkucggyaiaukqoce = ManipulateUser::get(); $oammesyieqmwuwyi = []; $meqocwsecsywiiqs = ''; if (!$mkucggyaiaukqoce) { goto wiysogeqqwgioyka; } $meywaqqsugaoeyys = DBModel::symcgieuakksimmu(); $xssuewsokckmigqk = $meywaqqsugaoeyys->kyqcoyaauiwgieci($mkucggyaiaukqoce, false); if (!$xssuewsokckmigqk) { goto soaccwqimeksgwiw; } $oammesyieqmwuwyi[] = ["\166\x61\x6c\165\145" => ManipulateHTML::ciuuiyckmsygceis(ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\144\x69\x73\160\x6c\x61\171\x5f\x6e\x61\x6d\x65")), "\x6c\141\142\145\154" => __("\116\141\155\145", PR__MDL__SALARY)]; $meqocwsecsywiiqs = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::qescuiwgsyuikume); $qgciuiagkkguykgs = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::kkeogqiyysoyuemk); $eqgoocgaqwqcimie = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::siwsmgcqgcqmaeui); if (!$eqgoocgaqwqcimie) { goto foeeqckqsyockkak; } if ($qgciuiagkkguykgs === $meywaqqsugaoeyys::aqkaquswquuyqkum) { goto soqqemyioggmoakg; } $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy("{$eqgoocgaqwqcimie}\x25"); goto acaqummmoyiemqss; soqqemyioggmoakg: $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); acaqummmoyiemqss: $iakkeikwceeomgyq = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::igecewwoemccgwsq); if ($iakkeikwceeomgyq === $meywaqqsugaoeyys::kmywqwggwoyseaiu) { goto eeqesooyqagwawae; } if ($iakkeikwceeomgyq === $meywaqqsugaoeyys::smeqwqccgqogcsuy) { goto oqugqwcyomiaaoqu; } goto suswcqoyyqkkquuo; eeqesooyqagwawae: $iakkeikwceeomgyq = sprintf(__("\x25\x73\x20\157\146\x20\x65\x61\x63\x68\x20\x6e\x65\x77\x20\x6f\162\x64\x65\x72\40\142\x79\x20\160\x72\157\x6d\157\164\145\x64\x20\160\162\157\x64\165\x63\x74\x73", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($eqgoocgaqwqcimie)); goto suswcqoyyqkkquuo; oqugqwcyomiaaoqu: $iakkeikwceeomgyq = sprintf(__("\x25\163\x20\x6f\146\x20\x65\141\143\x68\x20\156\x65\x77\x20\157\x72\144\145\x72\40\x62\171\40\160\x72\x6f\155\157\164\x65\144\40\160\x72\x6f\x64\x75\x63\x74\x73\x20\x6f\x6e\x20\163\x68\157\162\x74\143\x6f\144\145", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($eqgoocgaqwqcimie)); suswcqoyyqkkquuo: $oammesyieqmwuwyi[] = ["\x76\x61\x6c\165\145" => $iakkeikwceeomgyq, "\154\x61\x62\x65\x6c" => __("\x49\x6e\x63\157\155\151\156\147\40\124\x79\160\145", PR__MDL__SALARY)]; foeeqckqsyockkak: $aiogmaekiyogsyec = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::weumemyqgykuwqok); $uucueigysoecmekm = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::yykcmqogieykgkus); $iagkegakogkmqcsm = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::acyoqckgwoqymkwo); $wikmsuswiigscwgg = $meywaqqsugaoeyys->qogaqkcsogcqiaic($xssuewsokckmigqk, $meywaqqsugaoeyys::seeqqyqyyaiqcowg); if ($wikmsuswiigscwgg === $meywaqqsugaoeyys::aucwwygcuwkokics) { goto qicwaskssogcokgm; } $wamcomkuwysqgwgk = __("\x25\x73\x20\x6e\x75\x6d\x62\145\162\x20\x6f\162\x64\x65\x72", PR__MDL__SALARY); if (!$aiogmaekiyogsyec) { goto kymkucucyeoeikim; } $aiogmaekiyogsyec = $this->msywmyaoqmaegsuy($aiogmaekiyogsyec); kymkucucyeoeikim: if (!$uucueigysoecmekm) { goto usquiuuyiyqaeyiu; } $uucueigysoecmekm = $this->msywmyaoqmaegsuy($uucueigysoecmekm); usquiuuyiyqaeyiu: goto uguigkcmukuouway; qicwaskssogcokgm: $wamcomkuwysqgwgk = __("\x25\163\40\163\141\154\145", PR__MDL__SALARY); if (!$aiogmaekiyogsyec) { goto iekumemscwieugqw; } $aiogmaekiyogsyec = ManipulateWoocommerce::mcgaskyiamgqmqgu($aiogmaekiyogsyec); iekumemscwieugqw: if (!$uucueigysoecmekm) { goto hoeeyiowekaeemko; } $uucueigysoecmekm = ManipulateWoocommerce::mcgaskyiamgqmqgu($uucueigysoecmekm); hoeeyiowekaeemko: uguigkcmukuouway: if ($aiogmaekiyogsyec) { goto gaomwagkcciesyqy; } $aiogmaekiyogsyec = __("\106\x72\157\x6d\40\x66\x69\x72\163\164\x20\157\x72\x64\x65\x72", PR__MDL__SALARY); goto aegysmeecgcgayyw; gaomwagkcciesyqy: if ($iagkegakogkmqcsm) { goto uqqaiagaeqgqgaiy; } $iagkegakogkmqcsm = __("\x45\141\x72\x6e\x65\144\40\x72\x65\166\x65\156\x75\x65\40\151\x73\40\156\157\x74\x20\x72\x65\143\x65\x69\166\141\142\154\145\x20\x62\145\x66\x6f\x72\x65\40\x69\x74\40\162\x65\x61\x63\150\145\163\40\x74\150\x65\40\x73\141\x6c\x65\x73\40\146\x6c\x6f\157\162", PR__MDL__SALARY); goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $iagkegakogkmqcsm = __("\105\141\x72\156\x65\144\x20\x72\145\x76\145\156\x75\x65\x20\x69\x73\40\x72\145\143\145\151\166\141\x62\154\x65\x20\x62\145\146\157\162\145\40\151\164\x20\x72\x65\141\x63\150\145\163\40\x74\150\x65\40\x73\x61\x6c\145\x73\40\x66\154\x6f\157\162", PR__MDL__SALARY); esuiysskoweawsue: $oammesyieqmwuwyi[] = ["\166\141\154\x75\145" => $iagkegakogkmqcsm, "\154\141\x62\x65\154" => __("\x52\145\x63\x6f\x72\144\40\120\x72\x65\x76\151\157\x75\x73\40\x49\x6e\143\157\x6d\x65\163", PR__MDL__SALARY)]; $aiogmaekiyogsyec = sprintf(__("\x61\x66\x74\145\x72\40\x25\163", PR__MDL__SALARY), sprintf($wamcomkuwysqgwgk, ManipulateHTML::ciuuiyckmsygceis($aiogmaekiyogsyec))); aegysmeecgcgayyw: $oammesyieqmwuwyi[] = ["\166\141\154\x75\x65" => $aiogmaekiyogsyec, "\x6c\x61\x62\145\154" => __("\123\x74\x61\162\x74\40\x6f\x66\x20\x52\x65\143\157\162\x64\x20\x49\156\x63\157\155\145\163", PR__MDL__SALARY)]; if (!$uucueigysoecmekm) { goto suqkuqygkkgwyaie; } $oammesyieqmwuwyi[] = ["\166\141\x6c\165\x65" => sprintf(__("\x61\146\x74\145\x72\x20\45\163", PR__MDL__SALARY), sprintf($wamcomkuwysqgwgk, ManipulateHTML::ciuuiyckmsygceis($uucueigysoecmekm))), "\x6c\x61\x62\x65\154" => __("\x45\x6e\x64\x20\x6f\146\x20\122\x65\143\157\x72\x64\40\x49\x6e\x63\157\155\x65\x73", PR__MDL__SALARY)]; suqkuqygkkgwyaie: soaccwqimeksgwiw: wiysogeqqwgioyka: return ["\x65\144\x69\164\137\142\x61\x6e\x6b\x5f\x61\143\x63\157\165\156\164\163\x5f\164\x69\164\154\145" => __("\105\x64\151\x74\x20\x42\x61\x6e\153\x20\x49\x6e\146\157\x72\x6d\141\164\151\x6f\x6e", PR__MDL__SALARY), "\145\x64\x69\x74\x5f\x62\141\x6e\x6b\137\141\x63\x63\x6f\165\156\164\x73\x5f\165\162\x6c" => DecoratorQuery::yqymaqmqiqmmmsoo("\164\141\x62", "\x74\141\142\137\x69\156\143\157\x6d\x65\163\137\141\156\x64\x5f\x70\x61\x79\155\145\x6e\164\x73", ManipulateUser::ekqiayaoseqcygmo($mkucggyaiaukqoce)), "\156\x6f\164\x5f\x66\157\165\156\144\137\x6d\x65\163\163\x61\x67\145" => __("\x59\x6f\165\x20\x64\157\156\x27\164\40\x68\x61\166\145\x20\141\x6e\171\x20\141\147\162\145\x65\x6d\x65\156\x74\x2e", PR__MDL__SALARY), "\x69\164\145\155\163" => $oammesyieqmwuwyi, "\x74\151\x74\x6c\145" => $meqocwsecsywiiqs]; } }
