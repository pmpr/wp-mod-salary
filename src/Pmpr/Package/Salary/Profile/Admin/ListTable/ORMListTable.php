<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b65aff1cc6             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Builder; use Pmpr\Common\Foundation\ORM\View\ListTable; class ORMListTable extends ListTable { public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder { goto ugswokwmkumcmigc; cigesysuauaiccms: return parent::before_pagination($siykeiywomwwuoiw); goto qumkwsqqocooyuoq; ugswokwmkumcmigc: if (!$siykeiywomwwuoiw) { goto qiaaqkymeuuueoqk; } goto gwiaimosqoiquwkc; gwiaimosqoiquwkc: $siykeiywomwwuoiw = $this->mgogaykgkoogasim()->wkmkqaiwuqouweye([self::OWNER => ManipulateUser::mwikyscisascoeea()], $siykeiywomwwuoiw); goto owgakkqgckqcegoi; owgakkqgckqcegoi: qiaaqkymeuuueoqk: goto cigesysuauaiccms; qumkwsqqocooyuoq: } public function get_bulk_actions() : array { return []; } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { return ''; } protected function kgewmaycsoykyaso($ccowyogiqwikkkie) { ManipulateArray::unset($ccowyogiqwikkkie, "\144\x65\x6c\x65\164\x65"); return $ccowyogiqwikkkie; } public function ewgmueueeycoikso($oammesyieqmwuwyi) : array { goto asqqqqakiagymemk; jkgouewqysmscmqs: $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); goto sgiuwkisugmewmcs; yeemsgmumygmumqw: return $wkkweuacukumqmya; goto wkaoyycsoeoyqcae; eacysqsegwcqawsa: $wkkweuacukumqmya[$meywaqqsugaoeyys::CREATED_AT] = __("\x43\x72\145\141\164\145\x64\40\141\x74", PR__PKG__SALARY); goto yimeskeioamqmuwg; asqqqqakiagymemk: $wkkweuacukumqmya = []; goto jkgouewqysmscmqs; kceeuicccqscwgsu: foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $swaaugcasqkysckc) { goto wmaeicoyyciuaiuy; ayamomygygmgwgkg: $wkkweuacukumqmya[$momcykaoccoymeig] = $meqocwsecsywiiqs; goto gygqgauaceiuawkq; ooysmgyeqoiesgqm: if (is_numeric($momcykaoccoymeig)) { goto wsemeeocquawyauo; } goto kwoyiysciqumswcy; qqmmycmsoqegcqqw: wsemeeocquawyauo: goto isqwwmikecauwyuc; oiiqqgyqmggyiums: $aiowsaccomcoikus = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($swaaugcasqkysckc); goto magymcqykamwqigw; magymcqykamwqigw: if (!$aiowsaccomcoikus) { goto wwswmaewcaisauei; } goto ukogwqiuuuakkawy; gygqgauaceiuawkq: kkewoqqowugagwoy: goto ucksaiwquekagyqe; gicmaqmuscawegie: wwswmaewcaisauei: goto oymyqcoekqyuiguq; ukogwqiuuuakkawy: $meqocwsecsywiiqs = $aiowsaccomcoikus->qcgakseyaikigqco(); goto gicmaqmuscawegie; oymyqcoekqyuiguq: ocgkwqqmgasuoies: goto ayamomygygmgwgkg; aaogeemgkogagkai: goto ocgkwqqmgasuoies; goto qqmmycmsoqegcqqw; wmaeicoyyciuaiuy: $meqocwsecsywiiqs = ''; goto ooysmgyeqoiesgqm; isqwwmikecauwyuc: $momcykaoccoymeig = $swaaugcasqkysckc; goto oiiqqgyqmggyiums; kwoyiysciqumswcy: $meqocwsecsywiiqs = $swaaugcasqkysckc; goto aaogeemgkogagkai; ucksaiwquekagyqe: } goto iquecygaakmiomeg; yimeskeioamqmuwg: iyeswoaqkaeggiiy: goto yeemsgmumygmumqw; sgiuwkisugmewmcs: if (!$meywaqqsugaoeyys) { goto iyeswoaqkaeggiiy; } goto kceeuicccqscwgsu; iquecygaakmiomeg: gcskyqewysqaceeg: goto eacysqsegwcqawsa; wkaoyycsoeoyqcae: } }
